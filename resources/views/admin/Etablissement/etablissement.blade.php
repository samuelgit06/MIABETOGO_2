@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8 ">
        <div class="card">
            <center><div class="card-header"><h2>Listes des enregistrements </h2></div><br><center>
                <div class="card-body">

                <table style="border: 2px solid black;" class="container">
                <thead>
                <tr style="height:50px;">
                    <th scope="col">id</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Description</th>
                    <th scope="col">localisation</th>
                    <th scope="col">mail</th>
                    <th scope="col">addresse web</th>
                    <th scope="col">numero </th>
                    <th scope="col">images</th>
                    <th scope="col">prix min</th>
                    <th scope="col">prix max</th>
                    <th scope="col">type</th>
                    <th scope="col">id utilisateur</th>

                </tr>
                </thead>

  

                   <tbody>
                    @foreach ($etablissements as $etablissement )
                        <tr>
                         
                            <td style="border: 1px solid black; ">{{ $etablissement->id}}</td>
                            <td style="border: 1px solid black; ">{{$etablissement->Nom}}</td>
                            <td style="border: 1px solid black;">{{$etablissement->Desc_eta}}</td>
                            <td style="border: 1px solid black;">{{$etablissement->local_eta}}</td>
                            <td style="border: 1px solid black;">{{$etablissement->mail_eta}}</td>
                            <td style="border: 1px solid black;">{{$etablissement->lien_web_eta}}</td>
                            <td style="border: 1px solid black;">{{$etablissement->num_etablissment}}</td>
                            <td style="border: 1px solid black;">{{$etablissement->images}}</td>
                            <td style="border: 1px solid black;">{{$etablissement->prix_min}}</td>
                            <td style="border: 1px solid black;">{{$etablissement->prix_max}}</td>
                            <td style="border: 1px solid black;">{{$etablissement->type_eta}}</td>
                            <td style="border: 1px solid black;">{{$etablissement->user_id}}</td>
                            
                   
                            @can('edit-users')
                                
                           
                               <td style="border: 1px solid black;"> <div>
                                    <a href="{{ (route('EVController.edit',$etablissement->id))}}">
                                        <button style="background-color: green; color:aliceblue; height:35px; width: 100px; border-radius:5px;"><i class="fa fa-pencil"></i><span>verifier </span></button>
                                    </a>
                                </div></td>
                            @endcan
                            @can('edit-users')
                                
                           
                            <td style="border: 1px solid black;"> <div>
                                 <a href="{{ URL:: to ('/editEtablissement')}}">
                                     <button style="background-color: green; color:aliceblue; height:35px; width: 100px; border-radius:5px;"><i class="fa fa-pencil"></i><span>modifier </span></button>
                                 </a>
                             </div></td>
                         @endcan
                                @can('delete-users')
                                    
                                
                                <td> <form action="{{ (route('EtablissementController.destroy',$etablissement->id))}}" method="POST" class="d-inline">
                             @csrf
                          @method('DELETE')

                            <button style="background-color: red; color:aliceblue; height:35px; width: 100px; border-radius:5px;"><i class="fa fa-trash-o btn-warnimg"></i><span> Supprimer</span></button>
                        </form></td>
                    @endcan
               
                </tr>
            </tbody>
                            
            @endforeach

        </div>
             
    </div>
</div>
</div>
</div>
@endsection