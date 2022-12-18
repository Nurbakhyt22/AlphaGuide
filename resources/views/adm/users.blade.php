@extends('layouts.adm')
@section('title' , 'admin')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Users table</h6>
                        <form action="{{route('adm.users.search')}}" method="GET">
                            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                                <div class="input-group">
                                    <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                                    <input type="text" name="search" class="form-control" placeholder="Search">
                                </div>
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </div>
                        </form>
                    </div>

                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table table-borderless">
                                <thead>
                                <tr>
                                    <th scope="col">№</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Status</th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                    @for($i = 0 ; $i<count($users) ; $i++)
                                        <tr>
                                            <td>{{$i+1}}</td>
                                            <td>{{$users[$i]->name}}</td>
                                            <td>{{$users[$i]->email}}</td>
                                            <td>{{$users[$i]->role->name}}</td>
                                            <td>
                                                <form action="
                                                    @if($users[$i]->is_active)
                                                        {{route('adm.users.ban' , $users[$i]->id)}}
                                                    @else
                                                        {{route('adm.users.unban' , $users[$i]->id)}}
                                                    @endif
                                                " method="post">
                                                    @csrf
                                                    @method('PUT')
                                                    <button class="btn {{$users[$i]->is_active ? 'btn-danger' : 'btn-success'}}" style="width: 90px;" type="submit">
                                                        @if($users[$i]->is_active)
                                                            Ban
                                                        @else
                                                            Unban
                                                        @endif
                                                    </button>
                                                </form>
                                            </td>
                                            <td><a href="{{route('adm.users.edit' , $users[$i]->id)}}">Edit</a></td>
                                        </tr>
                                    @endfor
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection

