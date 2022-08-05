@extends('layouts.apps')
@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8 ">
        <div class="card">
            <div class="card-header">Listes de Utilisateurs</div><br>
                <div class="card-body">

                <table style="border: 2px solid black;" class="container">
                <thead>
                <tr style="height:50px;">
                    <th>Nom</th>
                    <th>E-mail</th>
                    <th>Opérations</th>

                </tr>
                </thead>

                    @foreach ($users as $users )

                    <tbody>
                        <tr>
                            <td style="border: 1px solid black;"> {{$users->name}}</td>
                            <td style="border: 1px solid black;"> {{$users->email}}</td>

                            <td style="border: 1px solid black;">
                                <div>
                                    <a href="{{ ('#')}}">
                                        <button style="background-color: green; color:aliceblue; height:35px; width: 100px; border-radius:5px;"><i class="fa fa-pencil"></i><span> Modifier</span></button>
                                    </a>
                                </div>
                                <div>
                                    <a href="{{ ('#')}}">
                                        <button style="background-color: red; color:aliceblue; height:35px; width: 100px; border-radius:5px;"><i class="fa fa-trash-o"></i><span> Supprimer</span></button>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                        
                    @endforeach

                </div>
            
        </div>
    </div>
    </div>
</div>
@endsection