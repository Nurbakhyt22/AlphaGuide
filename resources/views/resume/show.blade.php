@extends('layouts.navbarmain')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-body pt-4 p-3">
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up">
                    <div class="member-img">
                        <img src="https://i.stack.imgur.com/l60Hf.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <br>
            <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
            <br>
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
    <br>
    <div class="row gx-4 gx-lg-5">
        @for($i = 1; $i <=6 ; $i++)
            <div class="card" style="width: 18rem;">
                <img src="https://ticketon.kz/media/upload/30896u54364_abay-togzhan-11-28.jpg" class="card-img-top mt-3 " alt="..." style="width: 210px; height: 300px">
                <div class="card-body">
                    <h5 class="card-title"><b>Kolsay</b></h5>
                    <p class="card-text">Kuni : 20 mamyr</p>
                    <p class="card-text">Jinalu uaqyty : 8:00</p>
                    <p class="card-text">Bagasy : <b>8000</b> tenge</p>
                    <p class=" btn btn-outline-danger">Tolygyraq bilu ushin +77715619064</p>
                </div>
            </div>
        @endfor
    </div>
</div>
@endsection
