<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lieux extends Model
{
    use HasFactory;
protected $fillable =[
    'Nom',
    'Desc_Lieux',
    'local_eta' ,
     'images',
     'region', 
     'prix', 
     'user_id'  ,    
];
}
