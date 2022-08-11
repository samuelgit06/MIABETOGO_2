<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceDeTourisme extends service
{
    
   // public static function boot()
   // {
     //   parent::boot();

        //static::creating(function($ServiceDeTourisme){
          //  $ServiceDeTourisme->forceFill(['type_service'=>self::class]);
        //});
    //}
    //public static function booted()
    //{
      //  static :: addGlobalScope( 'ServiceDeTourisme', function($builder){
        //    $builder->where('type_service',self::class);
        //});
    //}
     use child;
}
