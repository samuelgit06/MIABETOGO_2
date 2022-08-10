@extends('layouts.apps')
@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8 ">
        <div class="card">
            <div class="card-header">Modifier
                <table>
                <tr>
                    <td style="border: 1px solid black; ">{{ $user->id}}</td>
                 <strong> <td style="border: 1px solid black; "> {{$user->name}}</td></strong>
                <tr>
                </table>
            </div><br>
                <div class="card-body">
                    
                    <form action="{{ route('admin.user.update',$user)}}" method="POST">
                        @csrf
                        @method('PATCH')
                        @foreach ($role_user as $role )
                        <div class="form-group form-check">
                           <input type="checkbox" class="form-check-input" name="roles[]" value="{{$role->id}}" id="{{$role->id}}" @foreach ( $user->roles as $userRole ) @if ($userRole ->id == $role->id)
                            checked
                            @endif 
                            @endforeach>
                            <label for="{{$role->id}}" class="form-check-label">{{$role->name}}</label>
                        </div>
                    @endforeach
                            <button type="submit"class="fa fa-envelope-o">modifier les roles</button>
                    </form>
                        </tr>
                    </tbody>
                </div>
            
        </div>
    </div>
    </div>
</div>
@endsection