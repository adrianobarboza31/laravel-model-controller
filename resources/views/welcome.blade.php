@extends('layouts.app')
@section('content')
<h2>Film</h2>
<div ">
    @foreach ($movies as $movie)
    <div>
        <p>{{$movie['title']}}</p>
    </div>
         
    @endforeach
   
</div>
@endsection