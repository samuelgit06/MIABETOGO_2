@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8 ">
        <div class="card">
            <center><div class="card-header"><h2>Listes des Utilisateurs</h2></div><br><center>
                <div class="card-body">

                <table style="border: 2px solid black;" class="container">
                <thead>
                <tr style="height:50px;">
                    <th scope="col">id</th>
                    <th scope="col">Nom</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Roles</th>
                    <th scope="col">Opérations</th>

                </tr>
                </thead>

                    @foreach ($users as $users )

                    <tbody>
                        <tr>
                            <th scope="row">{{ $users->id}}</th>
                            <td style="border: 1px solid black; "> {{$users->name}}</td>
                            <td style="border: 1px solid black;"> {{$users->email}}</td>
                            <td style="border: 1px solid black;"> {{implode(',', $users->roles()->get()->pluck('name')->toArray())}}</td>

                            @can('edit-users')
                                
                           
                               <td style="border: 1px solid black;"> <div>
                                    <a href="{{ (route('admin.user.edit',$users->id))}}">
                                        <button style="background-color: green; color:aliceblue; height:35px; width: 100px; border-radius:5px;"><i class="fa fa-pencil"></i><span> Modifier</span></button>
                                    </a>
                                </div></td>
                            @endcan
                                @can('delete-users')
                                    
                                
                   <td> <form action="{{ (route('admin.user.destroy',$users->id))}}" method="POST" class="d-inline">
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