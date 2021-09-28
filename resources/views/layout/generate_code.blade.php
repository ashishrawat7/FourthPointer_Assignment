@extends('layout.layout')
@section('content')
<div class="jumbotron">
  <h1 class="display-4">{{$title}}</h1>

  <hr class="my-4">
  <a href="/post" class="btn btn-primary">Go back</a>
  <hr class="bg-danger border-2 border-top border-success">

    <form action="http://127.0.0.1:8000/generate_code" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Generated URL Code</label>
            <input type="text" class="form-control" id="exampleInputEmail1" value="{{$data['data']}}">
        </div>
        <button type="submit" class="btn btn-primary">Generate</button>
</form>
</div>

@endsection
