<?php
namespace App\Models;

 trait childService
{

    public static function boot()
    {
        parent::boot();

        static::creating(function($model){
            $model->forceFill(['typeservice'=> static::class]);
        });
    }
    public static function booted()
    {
        static :: addGlobalScope( static::class, function($builder){
            $builder->where('typeservice',self::class);
        });
    }
}
