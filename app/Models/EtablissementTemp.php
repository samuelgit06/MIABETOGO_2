<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EtablissementTemp extends Model
{
    
    protected $fillable=[
       'Nom',
         'local_eta' ,
         'prix_max',
         'prix_min',
         'type_eta',
             
      ];
   
}
