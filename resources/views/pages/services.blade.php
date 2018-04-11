@extends('layouts.app')

@section('content')
        <h1 style="font-family:Courier, monospace;color:#fff">{{$title}}</h1>
       @if(count($services)>0)
            <ul class="list-group" style="font-family:Courier, monospace">
            @foreach($services as $service)
                 <li class="list-group-item">{{$service}}</li>
            @endforeach
            <ul>
       @endif  
@endsection
  