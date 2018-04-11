@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header" style="font-family:Courier, monospace;font-size:30px">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    <a href="/posts/create" class="btn btn-primary" style="font-family:Courier, monospace">Create Posts</a>
                    </br>
                    
                    <h1 style="font-family:Courier, monospace;font-size:30px">Your Blog Posts</h1>
                
                    @if(count($posts) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th style="font-family:Courier, monospace">Title</th>
                                <th></th> 
                                <th></th>
                            </tr>
                            @foreach($posts as $post)
                            <tr>
                                <td style="font-family:Courier, monospace">{{$post->title}}</td>
                                <td style="font-family:Courier, monospace"><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a></td>
                                <td style="font-family:Courier, monospace">
                                    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                    {!!Form::close()!!}
                                </td>
                            </tr>
                            @endforeach
                        </table>
                        @else 
                            <p style="font-family:Courier, monospace">You have no posts</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
