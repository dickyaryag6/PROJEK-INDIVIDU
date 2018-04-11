@extends('layouts.app')

@section('content')
    <br>
    <a href="/posts" class="btn btn-primary" style="font-family:Courier, monospace;color:#fff">Go Back</a>
    <br>
    <h1 style="font-family:Courier, monospace;color:#fff">{{$post->title}}</h1>
    <img style="max-width: 50%;display:block;height: auto;" src="/storage/cover_images/{{$post->cover_image}}">
    <br><br>
    <div style="font-family:Courier, monospace;color:#fff">
        {!!$post->body!!}
    </div>
    <hr>
    <small style="font-family:Courier, monospace;color:#fff">Written on {{$post->created_at}} by {{$post->user['name']}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
                <div><a href="/posts/{{$post->id}}/edit" class="btn btn-primary" style="font-family:Courier, monospace">Edit</a></div>
            
                <div style="font-family:Courier, monospace">
                {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}
                </div>
        @endif
    @endif
@endsection