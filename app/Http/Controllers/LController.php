<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LController extends Controller
{
    public function regionMa(){
        $lieuxMa = DB::table('lieuxes')->select('*')
        ->Where('region','=','region maritime')
        ->get();
       // dd($lieuxMa);
     return view('lieux' ,compact('lieuxMa')); 
    }
}
