@extends('layouts.adm')
@section('title' , 'categories')

@section('content')
    <div class="card">
        <div class="card-header pb-0 px-3">
            <a href="{{route('adm.cat.create')}}"><button class="btn btn-outline-success" type="submit">New Categories</button></a>
            <h6 class="mb-0">Categories Table</h6>
        </div>
        <div class="card-body pt-4 p-3">
            <table class="table table-borderless">
                <thead>
                <tr>
                    <th scope="col">№</th>
                    <th scope="col">Role name</th>
                    <th scope="col">Code</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @for($i = 0 ; $i<count($categories) ; $i++)
                    <tr>
                        <th>{{$i+1}}</th>
                        <td>{{$categories[$i]->name}}</td>
                        <td>{{$categories[$i]->code}}</td>
                        <td>
                            <form action="{{route('adm.cat.destroy' , $categories[$i]->id )}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button style="width: 90px;border: 1px solid" type="submit" CLASS="btn btn-outline-danger">DELETE</button>
                            </form>
                        </td>
                    </tr>
                @endfor
                </tbody>
            </table>
        </div>
    </div>
    <br><br>
    <div class="card">
        <div class="card-header pb-0 px-3">
            <a href="{{route('adm.roles.create')}}"><button class="btn btn-outline-success" type="submit">New Role</button></a>
            <h6 class="mb-0">Roles Table</h6>
        </div>
        <div class="card-body pt-4 p-3">
            <table class="table table-borderless">
                <thead>
                <tr>
                    <th scope="col">№</th>
                    <th scope="col">Role name</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @for($i = 0 ; $i<count($roles) ; $i++)
                    <tr>
                        <th>{{$i+1}}</th>
                        <td>{{$roles[$i]->name}}</td>
                        <td><a href="">Edit</a></td>
                    </tr>
                @endfor
                </tbody>
            </table>
        </div>
    </div>
@endsection
