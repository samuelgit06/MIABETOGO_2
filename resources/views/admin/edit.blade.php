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
                    <td style="border: 1px solid black; ">{{ $user->id}}</td>
                 <strong> <td style="border: 1px solid black; "> {{$user->name}}</td></strong>
            </div><br>
                <div class="card-body">
                  <tr>  <form action="{{ route('admin.user.update',$user)}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        
                        
                            <div class="form-group row">
                                <x-label for="name" :value="__('name')"  class="col-md-6 col-form-label"/>
                
                                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name') ?? $user->name" required autofocus />
                            </div >
                            <br>
                            <div class="form-group row">
                            <x-label for="email" :value="__('Email')" />
            
                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email') ?? $user->email" required autofocus />
                        </div>
                        
                        <br>
                        @foreach ($role_user as $role )
                        <div class="form-group form-check">
                       <tr>   <td> <input type="checkbox" class="form-check-input" name="roles[]" value="{{$role->id}}" 
                        id="{{$role->id}}" @if ($user->roles->pluck('id')->contains($role->id))checked
                        @endif</td></tr>
                         <tr> <td><label for="{{$role->id}}" class="form-check-label">{{$role->name}}</label></td><tr>
                        </div>
                    @endforeach
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