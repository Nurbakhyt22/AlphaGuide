@extends('layouts.navbarmain')
@section('content')
    <div class="row">
        <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
        </div>
        <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
        </div>
    </div>
    <div class="form-group mt-3">
        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
    </div>
    <div class="form-group mt-3">
        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
    </div>
    <div class="mb-3">
        <label for="ImgInput" class="form-label">Image</label>
        <input type="file" class="form-control @error('img') is-invalid @enderror" name="img">
        @error('img')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>
@endsection
