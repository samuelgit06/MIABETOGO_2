<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable=[
        'nom_serv',
        'type_serv',
        'note_serv',
        'image_serv',
    
    ];

     //public function  scopeServiceDeLocation($builder){
       //  return $builder->where('type_service','ServiceLocation');
    // }
     //public function  scopeServiceDeTourisme($builder){
        //return $builder->where('type_service','ServiceTourimse');
    //}
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
        new $attributes['typeservice']($attributes);

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
            'typeservice'=>$attributes['typeservice'?? null]
        ], true);

        $model->setRawAttributes( Arr::except ($attributes , 'typeservice') , true);

        $model->setConnection($connection ?: $this->getConnectionName());

        $model->fireModelEvent('retrieved', false);

        return $model;
    }
}
