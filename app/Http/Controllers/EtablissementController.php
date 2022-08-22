<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etablissement;
use App\Models\EtablissementVerifie;
use App\Models\User;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EtablissementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etablissements=Etablissement::all();
        return view('admin.Etablissement.etablissement') -> with('etablissements',$etablissements);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('enregistrement');     
                        //ainsi de suite 
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->Nom,
        //$request->Desc_eta,
       //$request->local_eta,
       //$request->mail_eta,
      //////$request->lien_web_eta,
      // $request->images,
      ////  $request->num_etablissment,
       //$request->prix_max,
    //$request->prix_min);
       
  // $request->validate([
    //    'type etablissement'=>'required',
    //]);
 
       $id = Auth::user()->id;

       $file=$request->file('file');
       $imagename=time().'_'.$file->getClientOriginalName();
       $file->move(\public_path("images/"),$imagename);
       //dd($request->file);

       $temps= Etablissement::create([
        'Nom'=>$request->Nom,
        'Desc_eta'=>$request->Desc_eta,
        'local_eta'=>$request->local_eta,
        'mail_eta'=>$request->mail_eta,
        'lien_web_eta'=>$request->lien_web_eta,
        'num_etablissment'=>$request->num_etablissment,
        'images'=>$imagename,
        'prix_max'=>$request->prix_max,
        'prix_min'=>$request->prix_min,
        'user_id'=>$id, 
        'type_eta'=>$request->type_eta,
        
       ]);
       //dd($temps);
       $Etablissement=array();
      // $etablissement = $request->post();
        //if($etablissement['prix_min'] >= $etablissement['prix_max'])
        //return back()->withInputs()->with(['message' => 'la valeur minimum doit être inférieure à la valeur maximum']);
       
       return view('enregistrement');     
    }
     // dd($etablissement);
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
       
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Etablissement $etablissement)
    {
       
        $etablissement->Nom=$request->Nom;
        $etablissement->mail_eta=$request->mail_eta;
        $etablissement->num_etablissment=$request->num_etablissmen;
        $etablissement->lien_web_eta=$request->lien_web_eta;
        $etablissement->local_eta=$request->local_eta;
        $etablissement->images=$request->image;
        $etablissement->prix_max=$request->prix_max;
        $etablissement->prix_min=$request->prix_min;
        $etablissement->Desc_eta=$request->Desc_eta;
        $etas=$etablissement;
        $eta=$etas;
        $eta->save();
        return redirect()->route('admin.Etablissement.etablissement'); 
        
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
$id=Etablissement::where('id',$id)->delete();
return redirect()->route('EtablissementController.index');

    }
    
}
