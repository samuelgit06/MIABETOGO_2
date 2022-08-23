<?php

namespace App\Http\Controllers;

use App\Models\Lieux;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class LieuxController extends Controller
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
        return view('enregistrement_lieux');  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = Auth::user()->id;

        $file=$request->file('file');
        $imagename=time().'_'.$file->getClientOriginalName();
        $file->move(\public_path("images/"),$imagename);
        //dd($request->file);
 
        $temps= Lieux::create([
         'Nom'=>$request->Nom,
         'Desc_Lieux'=>$request->Desc_Lieux,
         'local_eta'=>$request->local_eta,
         'region'=>$request->region,
         'prix'=>$request->prix,
         'images'=>$imagename,
         'user_id'=>$id, 
         
        ]);
        //dd($temps);
        $Etablissement=array();
       // $etablissement = $request->post();
         //if($etablissement['prix_min'] >= $etablissement['prix_max'])
         //return back()->withInputs()->with(['message' => 'la valeur minimum doit être inférieure à la valeur maximum']);
        
        return view('enregistrement_lieux');  
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
        
    }

    public function regionMa(){
        $lieux=DB::table('lieuxes')->select('*')
        ->Where('region','=','region maritime')
        ->get();
     return view('lieux' ,compact('lieux')); 
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
