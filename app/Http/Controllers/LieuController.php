<?php

namespace App\Http\Controllers;

use App\Models\Lieux;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LieuController extends Controller
{
    public function regionMa(){
        $lieuxMa = DB::table('lieuxes')->select('*')
        ->Where('region','=','region maritime')
        ->get();
        dd($lieuxMa);
     return view('lieux')->with(['lieuxMa' => $lieuxMa]); 
    }

    /*public function test() {
        $test = Lieux::All();

        return view('lieux', [
            'test' => $test,
        ]);
    }*/

    public function regionpla(){
        $lieuxpla=DB::table('lieuxes')->select('*')
        ->Where('region','=','region des plateaux')
        ->get();
     return view('lieux' ,compact('lieuxpla')); 
    }

    public function regionCent(){
        $lieuxCent=DB::table('lieuxes')->select('*')
        ->Where('region','=','region centrale')
        ->get();
     return view('lieux' ,compact('lieuxCent')); 
    }

    public function regionKar(){
        $lieuxKar=DB::table('lieuxes')->select('*')
        ->Where('region','=','region de la Kara')
        ->get();
     return view('lieux' ,compact('lieuxKar')); 
    }

    public function regionSav(){
        $lieuxSav=DB::table('lieuxes')->select('*')
        ->Where('region','=','region des savanes')
        ->get();
     return view('lieux' ,compact('lieuxSav')); 
    }
}
