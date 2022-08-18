<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use phpDocumentor\Reflection\Types\This;

class Etablissement extends Model
{
 
    
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
       'type_eta',
       'user_id'  ,         
    ];
 


  
   

   
}
