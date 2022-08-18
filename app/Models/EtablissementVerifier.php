<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EtablissementVerifier extends Model
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
       'user_id'         
];
}
