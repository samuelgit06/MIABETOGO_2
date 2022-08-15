<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Etablissement extends Model
{
    use HasFactory;
    protected $table = 'etablissements';
    protected $primaryKey ='id';
    public function User(){
    return $this->belongsTo(User::class);}
    
    protected $fillable=[
             'Nom',
           'Desc_eta',
            'local_eta' ,
            'mail_eta',
            'lien_web_eta',
            'num_etablissment',
            'images',
            'prix_max',
            'prix_min',
            'typeetablissement', 
    ];

           /**
     * Create a new instance of the given model.
     *
     * @param  array  $attributes
     * @param  bool  $exists
     * @return static
     */
    public function newInstance($attributes = [], $exists = false)
    {
        
        $model=is_null($attributes['typeetablissement'])?
        new static($attributes):
        new $attributes['typeetablissement']($attributes);

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
            'typeetablissement'=>$attributes['typeetablissement'?? null]
        ], true);

        $model->setRawAttributes( Arr::except ($attributes , 'typeetablissement') , true);

        $model->setConnection($connection ?: $this->getConnectionName());

        $model->fireModelEvent('retrieved', false);

        return $model;
    }
}
