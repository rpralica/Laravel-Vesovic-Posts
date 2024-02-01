@extends('create')
@section('header-title','Edit')
@section('body-title','Edit')
@section('content')


<form action="{{route('post.update',['post'=>$post])}}" method="POST">
    @csrf
    @method('PUT')
        <div class="container">
            <div class="row">
                <div class="col-6 offset-3">
                    <input type="text" class="form-control" name="title" placeholder="Upišite Naslov"
                        value="{{$post->title}}"> <br>
                    @error('title')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <input type="text" class="form-control" name="body" placeholder="Upišite Sadržaj"
                    value="{{$post->body}}"> <br>
                    @error('body')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <input type="text" class="form-control" name="author" placeholder="Upišite Autora"
                    value="{{$post->author}}"><br>
                    @error('author')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror<br>

                    <button class="btn btn-info offset-4">Edit</button>
                </div>
            </div>
        </div>

    </form>
@endsection
