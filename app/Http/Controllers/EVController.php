<?php

namespace App\Http\Controllers;

use Etablissement;
use Illuminate\Http\Request;
use App\Models\etablissement_verifie;
use App\Models\EtablissementVerifier;
use App\Models\Etablissement_verifier;
use App\Models\Etablissement as ModelsEtablissement;

class EVController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($key)
    {
   // $etablissement = ModelsEtablissement::get()->where('id=$key');
   //$etablissement = new  ModelsEtablissement ();
   $etablissement = ModelsEtablissement::all()->find($key);


       /*foreach($etablissement as $key => $value){
            EtablissementVerifier::create([
                'Nom' => $value->Nom,
                'Desc_eta'=>$value->Desc_eta,
                 'local_eta'=>$value->local_eta ,
                 'mail_eta'=>$value->mail_eta,
                 'lien_web_eta'=>$value->lien_web_eta,
                 'num_etablissment'=>$value->num_etablissment,
                 'images'=>$value->images,
                 'prix_max'=>$value->prix_max,
                 'prix_min'=>$value->prix_min,
                 'type_eta'=>$value->type_eta,
                 'user_id' =>$value->user_id,  
            ]);
                return'verifié avec succes';
            
        }*/

       $eta= EtablissementVerifier::create([
            'Nom' => $etablissement->Nom,
            'Desc_eta'=>$etablissement->Desc_eta,
             'local_eta'=>$etablissement->local_eta ,
             'mail_eta'=>$etablissement->mail_eta,
             'lien_web_eta'=>$etablissement->lien_web_eta,
             'num_etablissment'=>$etablissement->num_etablissment,
             'images'=>$etablissement->images,
             'prix_max'=>$etablissement->prix_max,
             'prix_min'=>$etablissement->prix_min,
             'type_eta'=>$etablissement->type_eta,
             'user_id' =>$etablissement->user_id,  
        ]);

        return'verifié avec succes';


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
}
