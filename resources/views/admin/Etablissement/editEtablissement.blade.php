@extends('layouts.admin')
@section('content')
<section class="container " style="align-middle max-resolution: left 2em;">
<div >
    <div>
    <div>
        <div class="col-md-8">
            <div class="card-header ">Modifier
                <table>
                    <tr>
                        <td style="border: 1px solid black; ">{{ $etablissement->Nom}}</td>
                     <td style="border: 1px solid black; "> {{$etablissement->mail_eta}}</td>
                     <td style="border: 1px solid black; "> {{$etablissement->Desc_eta}}</td>
                     <td style="border: 1px solid black; "> {{$etablissement->num_etablissment}}</td>
                     <td style="border: 1px solid black; "> {{$etablissement->local_eta}}</td>
                     <td style="border: 1px solid black; "> {{$etablissement->lien_web_eta}}</td>
                     <td style="border: 1px solid black; "> {{$etablissement->prix_max}}</td>
                     <td style="border: 1px solid black; "> {{$etablissement->prix_min}}</td>
                     <td style="border: 1px solid black; "> {{$etablissement->images }}</td>
                </div><br>
                <div class="card-body">
                  <tr>  <form action="{{ route('EtablissementController.update',$etablissement)}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        
                        
                            <div class="form-group row">
                                <x-label for="Nom" :value="__('Name')"  class="col-md-6 col-form-label"/>
                
                                <x-input class="block mt-1 w-full" type="text" name="Nom" :value="old('Nom') ?? $etablissement->Nom" required autofocus />
                            </div >
                            <br>

                            <div class="form-group row">
                            <x-label for="mail_eta" :value="__('mail_eta')" />
            
                            <x-input  class="block mt-1 w-full" type="email" name="mail_eta" :value="old('maill_eta') ?? $etablissement->mail_eta" required autofocus />
                                <br>

                                <div class="form-group row">
                                <x-label for="Desc_eta" :value="__('Desc_eta')" />
                
                                <x-input  class="block mt-1 w-full" type="text" name="Desc_eta" :value="old('Desc_eta') ?? $etablissement->Desc_eta" required autofocus />
                                    <br>

                                    <div class="form-group row">
                                    <x-label for="num_etablissment" :value="__('num_etablissment')" />
                    
                                    <x-input  class="block mt-1 w-full" type="text" name="num_etablissment" :value="old('email') ?? $etablissement->num_etablissment" required autofocus />
                                        <br>

                                        <div class="form-group row">
                                        <x-label for="local_eta" :value="__('local_eta')" />
                        
                                        <x-input id="local_eta" class="block mt-1 w-full" type="text" name="local_eta" :value="old('local_eta') ?? $etablissement->local_eta" required autofocus />
                                        <br>

                                        <div class="form-group row">
                                        <x-label for="lien_web_eta" :value="__('lien_web_eta')" />
                        
                                        <x-input  class="block mt-1 w-full" type="lien_web_eta" name="lien_web_eta" :value="old('email') ?? $etablissement->lien_web_eta" required autofocus />
                                            <br>

                                            <div class="form-group row">
                                            <x-label for="prix_max" :value="__('prix_max')" />
                            
                                            <x-input class="block mt-1 w-full" type="prix_max" name="prix_max" :value="old('email') ?? $etablissement->prix_max" required autofocus />
                                                <br>

                                                <div class="form-group row">
                                                <x-label for="prix_min" :value="__('prix_min')" />
                                
                                                <x-input  class="block mt-1 w-full" type="prix_max" name="prix_min" :value="old('prix_min') ?? $etablissement->prix_min" required autofocus />
                                                    <br>

                                                    <div class="form-group row">
                                                    <x-label for="prix_min" :value="__('Email')" />
                                    
                                                    <x-input class="block mt-1 w-full" type="text" name="images" :value="old('images') ?? $etablissement->images" required autofocus />
                                
                        </div>
                        
                        <br>
                        
                    <tr>
                  <td>  <button  type="submit"style="background-color: red; color:aliceblue; height:45px; width: 150px; border-radius:5px;"><i class="fa fa-trash-o"></i><span> Modifier les informations</span></button></td></tr>
                    </form></tr>
                        
                </div>
                <tr>
            </table>
        </div>
    </div>
    </div>
</div>
</section>
@endsection