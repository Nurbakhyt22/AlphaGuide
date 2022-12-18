@extends('layouts.adm')
@section('title' , 'admin')

@section('content')
    <div class="container">
        <div class="row-cols-auto">
            <form action="{{route('adm.roles.store')}}" method="post">
                @csrf
                <div class="mb-3">
                    <textarea placeholder="Roles name"  name="name" class="form-control @error('title') is-invalid @enderror" rows="3"></textarea>
                </div>
                <button style="border: 2px solid ; width: 75px " type="submit" class="btn btn-success">SAVE</button><br>
            </form>
        </div>
    </div>
@endsection
