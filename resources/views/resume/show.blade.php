@extends('layouts.navbarmain')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up">
                <div class="member-img">
                    <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                </div>
                <div class="member-info">
                    <h4>{{$resume->name}} {{$resume->surname}}</h4>
                    <span>Guide</span>
                </div>
            </div>
        </div>

        <div class="social">
            <a href=""><i class="bi bi-twitter"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
        </div>
    </div>
    <div class="card">
        <div class="card-body pt-4 p-3">

                <div class="row-3">
                    <div class="col ">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"  disabled required  value="{{$resume->name}}">
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="text" class="form-control" name="surname" id="surname" placeholder="Your Surname" disabled required value="{{$resume->surname}}">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="date" name="birthdate" class="form-control" id="name" placeholder="Your Birthdate" disabled required value="{{$resume->birthdate}}">
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" disabled required value="{{$resume->email}}">
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="experience" rows="5"  placeholder="Message" disabled required>{{$resume->experience}}</textarea>
                        </div>

                    </div>
                </div>


        </div>
    </div>
</div>
@endsection
