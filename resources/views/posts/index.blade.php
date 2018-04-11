@extends('layouts.app')

@section('content')
    <h1 style="font-family:Courier, monospace;color:#fff">Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="well" style="font-family:Courier, monospace;color:#fff">
                <div class="row">
                    <div class="col-md-2 col-sm-2">
                        <img style="width:50%" src="/storage/cover_images/{{$post->cover_image}}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                            <h3 ><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                            <small>Written on {{$post->created_at}} by {{$post->user['name']}}</small>
                    </div>
                </div> 
            </div>
            <br>
        @endforeach
        {{$posts->links()}}
    @else 
        <p>No posts found</p>
    @endif
@endsection