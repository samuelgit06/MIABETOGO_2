<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'isadmin',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    protected $table = 'users';
    protected $primaryKey ='id';
    public function etablissements(){
        return $this->hasMany(etablissement::class);
    }

    public function isAdmin(){
       return $this->roles()->where('name','admin')->first();
    }

    public function hasAnyRole(array $roles){
     return $this->roles()->whereIn('name',$roles)->first();   
    }
    /**
     * Create a new instance of the given model.
     *
     * @param  array  $attributes
     * @param  bool  $exists
     * @return static
     */
    public function newInstance($attributes = [], $exists = false)
    {
        
        // This method just provides a convenient way for us to generate fresh model
        // instances of this current model. It is particularly useful during the
        // hydration of new objects via the Eloquent query builder instances.
        $model=is_null($attributes['type'])?
        new static($attributes):
        new $attributes['type_service']($attributes);

        $model = new static((array) $attributes);

        $model->exists = $exists;

        $model->setConnection(
            $this->getConnectionName()
        );

        $model->setTable($this->getTable());

        $model->mergeCasts($this->casts);

        return $model;
    }

        /**
     * Create a new model instance that is existing.
     *
     * @param  array  $attributes
     * @param  string|null  $connection
     * @return static
     */
    public function newFromBuilder($attributes = [], $connection = null)
    {
        $attributes = (array)$attributes;
    
        $model = $this->newInstance([
            'typeService'=>$attributes['typeService'?? null]
        ], true);

        $model->setRawAttributes( Arr::except ($attributes , 'type_service') , true);

        $model->setConnection($connection ?: $this->getConnectionName());

        $model->fireModelEvent('retrieved', false);

        return $model;
    }
}
