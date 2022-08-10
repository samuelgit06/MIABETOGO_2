<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class etablissement extends Model
{
    use HasFactory;
    protected $table = 'etablissements';
    protected $primaryKey ='id';
    public function User(){
        return $this->belongsTo(User::class);}
}
