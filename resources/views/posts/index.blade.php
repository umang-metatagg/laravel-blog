@extends('layouts.app')
@section('content')
    <h1> Posts</h1>
    <p>This is blog posts page</p>
    <hr>
    @if(count($posts) > 0)
    @foreach ($posts as $post)
    <div class="card mt-1">
    <div class="card-body">
    <div class="row">
    <div class="col-md-4 col-sm-4">
    <img src="/storage/cover_images/{{$post->cover_image}}" style="width:100%;">
    </div>
    <div class="col-md-8 col-sm-8">
        <h5 class="card-title"><a href="/posts/{{$post->id}}">{{ $post->title }}</a></h5>
        <p class="card-text"><small> Written on {{ $post->created_at->diffForHumans() }} by {{$post->user->name}} </small></p>
    </div>
    </div>
    </div>
    </div>
    @endforeach
        {!! $posts->links() !!}
    @else
    <p> No Posts Found </p>
    @endif
@endsection