@extends('layouts.adm')
@section('title' , 'admin')

@section('content')
    <div class="container-fluid py-4">
        <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row-3">
                <div class="col ">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="title" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="date" name="date" class="form-control" id="name" placeholder="date" required>
                        </div>
                        <div class="mb-3">
                            <select name="category_id" class="form-select" aria-label="Default select example">
                                @foreach($categories as $cat)
                                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <br>
                    <div class="row">

                        <div class="form-group mt-3">
                            <textarea class="form-control" name="experience" rows="5"  placeholder="Message" required></textarea>
                        </div>
                        <label for="ImgInput" class="form-label">Image</label>
                        <input type="file" class="form-control @error('img') is-invalid @enderror" name="img">
                        @error('img')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror

                    </div>

                </div>
            </div>
            <br>
            <button type="submit"   class="btn btn-outline-success">
                Jiberu'
            </button>

        </form>
    </div>



@endsection

