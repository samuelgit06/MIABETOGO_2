<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Requetetourisme  extends Controller
{
public function store(Request $request)
    {
       /* $temps= EtablissementTemp::create([
            'Nom'=>$request->Nom,
            'local_eta'=>$request->local_eta,
            'prix_max'=>$request->prix_max,
            'prix_min'=>$request->prix_min, 
            'type_eta'=>$request->type_eta,
            
           ]);
           //dd($temps);
           $EtablissementTemp=array();*/
           

       /* $etablissement=DB::table('etablissement_verifiers')
        ->select('*')
        ->where('etablissement_verifiers.type_eta=EtablissementTemps.type_eta' and 'etablissement_verifiers.prix_max=etablissement_temps.prix_max'and 'etablissement_verifiers.prix_min=etablissement_temps.prix_min'and 'etablissement_verifiers.local_eta','=','etablissement_temps.local_eta')
        ->get();*/

       // $etablissement=EtablissementVerifier::all()
       $etablissement=DB::table('etablissement_verifiers')->select('*')
       
        ->where('type_eta','=','service_tourisme')
     /*{
        if(empty($eta)){

        }
     }*/
        ->get();
           $etas=$etablissement;
           $eta=$etas;
       //dd($eta);
        return view('index_tourisme' ,compact('eta'));   
        
       // $Etablissementverifier=array();

    }
}