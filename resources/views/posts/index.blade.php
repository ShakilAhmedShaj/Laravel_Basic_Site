@extends('layouts.app')

@section('content')
    <h1>All Posts</h1>


@if (count($posts)>0)
    @foreach ($posts as $post)
    
        <div class="card">
            <div class="card-body">
            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
            <small>Written On {{$post->created_at}}</small>
            </div>
          </div>
    @endforeach
    {{$posts->links()}}
@else
    <p>No Post Found</p>
@endif


@endsection