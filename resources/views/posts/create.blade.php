@extends('layouts.app')

@section('content')
    <h1 style="font-family:Courier, monospace;font-size:30px;color:#fff">Create Your New Post :)</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group" style="font-family:Courier, monospace;font-size:20px;color:#fff">
            {{Form::label('title', 'Title')}}
            {{Form::text('title','',['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div> 
        <div class="form-group" style="font-family:Courier, monospace;font-size:20px;color:#fff">
                {{Form::label('body', 'Body')}}
                {{Form::textarea('body','',['id' => 'article-ckeditor','class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div> 
        <div class="form-group" style="font-family:Courier, monospace;font-size:10px">
            {{Form::file('cover_image')}}
        </div>
        <br>
        <div style="font-family:Courier, monospace;font-size:30px">
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
        </div>
        {!! Form::close() !!}
@endsection