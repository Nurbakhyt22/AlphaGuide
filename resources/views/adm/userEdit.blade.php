@extends('layouts.adm')
@section('title' , 'admin')

@section('content')
    <div class="container">
        <form action="{{route('adm.users.update' , $user->id)}}" method="post">
            @csrf
            @method('PUT')
                    <div class="mb-3">
                        <input disabled name="name" type="text" class="form-control" rows="3" value="{{$user->name}}">
                    </div>
                    <div class="mb-3">
                        <input disabled name="email" type="text" class="form-control" rows="3" value="{{$user->email}}">
                    </div>
                    <div class="mb-3">
                        <select name="role_id" class="form-select" aria-label="Default select example">
                            @foreach($roles as $r)
                                <option @if($r->id == $user->role_id)selected @endif value="{{$r->id}}">{{$r->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-success" type="submit">UPDATE </button>
                    </div>
        </form>
    </div>
@endsection
