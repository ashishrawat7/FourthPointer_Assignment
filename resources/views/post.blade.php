@extends('layout.layout')
@section('content')
<div class="jumbotron">
  <h1 class="display-4">{{$title}}</h1>

  <hr class="my-4">
  <a href="/post" class="btn btn-primary">Go back</a>
  <hr class="bg-danger border-2 border-top border-success">
  <div class="card" style="width: 100%;">
    <!-- <img src="..." class="card-img-top" alt="..."> -->
    <div class="card-body">
        <h2 class="card-title">{{$post->title}}</h2>
        <p class="card-text">{{$post->body}}</p>
        <p>{{$post->created_at}}</p>
    </div>
    </div>


</div>

@endsection
