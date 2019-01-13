@extends('layouts.app')

@section('content')
{{-- <a href="/posts" class="btn btn-default">Back</a>
<button href="/posts" type="button" class="btn btn-primary">Back</button> --}}
<a href="/posts" class="btn btn-primary" role="button">Back</a>
<div class="card">
    <div class="card-body">
      <h4 class="card-title">{{$post->title}}</h4>
      <p class="card-text">
        {!!$post->body!!}
      </p>
      <hr>
      <h6 class="card-subtitle mb-2 text-muted">Written On {{$post->created_at}}</h6>
    </div>
  </div>
  <hr>
  <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>

  {!!Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
  {!!Form::close()!!}
  

@endsection