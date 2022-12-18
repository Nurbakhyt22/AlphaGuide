@extends('layouts.adm')
@section('title' , 'admin')

@section('content')
    <div class="card">
        <div class="card-body pt-4 p-3">
            @foreach($resumes as $res)
                <div class="row-3">
                    <div class="col ">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required  value="{{$res->name}}">
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="text" class="form-control" name="surname" id="surname" placeholder="Your Surname" required value="{{$res->surname}}">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required  value="{{$res->user->role->name}}">
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="text" class="form-control" name="active" id="surname" placeholder="Your status" required
                                value="
                                    @if($res->active == false)
                                        not approved yet
                                    @else
                                        application accepted
                                    @endif">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="date" name="birthdate" class="form-control" id="name" placeholder="Your Birthdate" required value="{{$res->birthdate}}">
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required value="{{$res->email}}">
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="experience" rows="5"  placeholder="Message" required>{{$res->experience}}</textarea>
                        </div>
                        <form action="
                            @if($res->active)
                                {{route('resume.unban',$res->id)}}
                            @else
                                {{route('resume.ban',$res->id)}}
                            @endif" method="post">
                            @csrf
                            @method('PUT')
                            <button class="btn {{$res->active ? 'btn-danger' : 'btn-success'}}" style="width: 120px;" type="submit">
                                @if($res->active)
                                    Bas tartu
                                @else
                                    Qabyldau
                                @endif
                            </button>
                        </form>

                    </div>
                </div>

            @endforeach
        </div>
    </div>
@endsection
