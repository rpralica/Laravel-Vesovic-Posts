@extends('layout')
@section('header-title','Create')
@section('body-title','Create')
@section('content')


<form action="{{route('post.store')}}" method="POST">
@csrf
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <input type="text" class="form-control" name="title" placeholder="Upišite Naslov"
                    value="{{old('title')}}"> <br>
                @error('title')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <input type="text" class="form-control" name="body" placeholder="Upišite Sadržaj"
                    value="{{old('body')}}"> <br>
                @error('body')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <input type="text" class="form-control" name="author" placeholder="Upišite Autora"
                    value="{{old('author')}}"><br>
                @error('author')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror<br>

                <button class="btn btn-info offset-4">Create</button>
            </div>
        </div>
    </div>

</form>


@endsection
