@extends('layout')
@section('header-title','Posts')
@section('body-title','Posts')
@section('content')
<div class="container">
    <div class="row ">

@foreach ($posts as $post )
<div class="col-4 mb-2">
    <a style="text-decoration: none;color: white" href="{{ route('post.singlepost',['post'=> $post]) }}">
    <div class="card bg-success text-light">

        <div class="card-body">
                  <h5 class="card-title text-center">{{$post->title}}</h5>
                  <p class="card-text">{{$post->body}}</p>
                <h5>{{$post->author}}</h5><br>
            </a>

                @csrf
                <a href="{{route('post.edit',['post'=>$post])}}"  class="btn btn-warning">Edit</a>
<form action="{{route('post.index',['post'=>$post])}}" method="post">
    @csrf
                <button class="btn btn-danger">Delete</button>
            </form>
                </div>
              </div>
        </div>
@endforeach

    </div>

</div>
@endsection
