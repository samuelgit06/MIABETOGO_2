<?php

namespace App\Http\Controllers;

use Etablissement;
use Illuminate\Http\Request;
use InvalidArgumentException;
use App\Models\EtablissementTemp;
use Illuminate\Support\Facades\DB;
use App\Models\EtablissementVerifier;

class RequeteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('verifier'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $temps= EtablissementTemp::create([
            'Nom'=>$request->Nom,
            'local_eta'=>$request->local_eta,
            'prix_max'=>$request->prix_max,
            'prix_min'=>$request->prix_min, 
            'type_eta'=>$request->type_eta,
            
           ]);
           //dd($temps);
           $EtablissementTemp=array();
           

       /* $etablissement=DB::table('etablissement_verifiers')
        ->select('*')
        ->where('etablissement_verifiers.type_eta=EtablissementTemps.type_eta' and 'etablissement_verifiers.prix_max=etablissement_temps.prix_max'and 'etablissement_verifiers.prix_min=etablissement_temps.prix_min'and 'etablissement_verifiers.local_eta','=','etablissement_temps.local_eta')
        ->get();*/

       // $etablissement=EtablissementVerifier::all()
       $etablissement=DB::table('etablissement_verifiers')->select('*')
       ->Where('local_eta','=',$request->local_eta)
        ->where('type_eta','=',$request->type_eta)
       ->orwhere('Nom','=',$request->Nom)
        
      //->where('prix_min','<=',$request->prix_min)
     //->where('prix_max','>=',$request->prix_max)
     /*{
        if(empty($eta)){

        }
     }*/
        ->get();
           $etas=$etablissement;
           $eta=$etas;
       //dd($eta);
        return view('verifier' ,compact('eta'));   
        
       // $Etablissementverifier=array();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( )
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function set($model, $key, $eta, $attributes)
{
    if (! $eta instanceof EtablissementTemp) {
        throw new InvalidArgumentException('oups pas de correspondance un email sera ');
    }
}

   
}
