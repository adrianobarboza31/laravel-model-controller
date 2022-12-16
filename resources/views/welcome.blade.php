@extends('layouts.app')
@section('content')
<h2>Film</h2>
<div ">
    @foreach ($movies as $key=>$movie)
    <div>
        
        <p>
            <span>{{$key}}</span>
            {{$movie['title']}}</p>
    </div>
         
    @endforeach
   
</div>
@endsection