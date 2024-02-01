@extends('layout')
@section('header-title','Single Post')
@section('body-title','Single Post')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
<div  style="background: #407785" class="card  text-light">
    <div class="card-body">
      <h5 class="card-title text-center">{{$post->title}}</h5>
      <p class="card-text">{{$post->body}}</p>
    <h5>{{$post->author}}</h5>
    </div>
  </div>

        </div>
    </div>
</div>



@endsection
