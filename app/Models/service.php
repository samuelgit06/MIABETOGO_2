<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    use HasFactory;
    protected $fillable=[
      'nom_serv',
    'note_serv',
    'image_serv',
    //'type_service'
    ];

     //public function  scopeServiceDeLocation($builder){
       //  return $builder->where('type_service','ServiceLocation');
    // }
     //public function  scopeServiceDeTourisme($builder){
        //return $builder->where('type_service','ServiceTourimse');
    //}
    protected $table ='services';
}
