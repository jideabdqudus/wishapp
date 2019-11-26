@extends('layouts.app')

@section('content')
<div class='container'>
<h1>Posts</h1> <hr> <br>
    @if (count($posts) >0)
        @foreach ($posts as $post)
            <div class ="jumbotron">
                <h3>{{$post->wish}}</h3>
                <h5>{{$post->name}}</h5> 
                <small>{{$post->created_at}}</small>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
            <p>No post found</p>
    @endif
</div>
@endsection