<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LieuController extends Controller
{
    public function regionMa(){
        $lieux=DB::table('lieuxes')->select('*')
        ->Where('region','=','region maritime')
        ->get();
        dd($lieux);
     //return view('lieux' ,compact('lieux')); 
    }

    public function regionpla(){
        $lieux=DB::table('lieuxes')->select('*')
        ->Where('region','=','region des plateaux')
        ->get();
     return view('lieux' ,compact('lieux')); 
    }

    public function regionCent(){
        $lieux=DB::table('lieuxes')->select('*')
        ->Where('region','=','region centrale')
        ->get();
     return view('lieux' ,compact('lieux')); 
    }

    public function regionKar(){
        $lieux=DB::table('lieuxes')->select('*')
        ->Where('region','=','region de la Kara')
        ->get();
     return view('lieux' ,compact('lieux')); 
    }

    public function regionSav(){
        $lieux=DB::table('lieuxes')->select('*')
        ->Where('region','=','region des savanes')
        ->get();
     return view('lieux' ,compact('lieux')); 
    }
}
