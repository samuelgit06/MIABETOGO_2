<?php
namespace App\Models;

 trait childetablisssment
{

    public static function boot()
    {
        parent::boot();

        static::creating(function($model){
            $model->forceFill(['typeetablissement'=> static::class]);
        });
    }
    public static function booted()
    {
        static :: addGlobalScope( static::class, function($builder){
            $builder->where('typeetablissement',self::class);
        });
    }
}