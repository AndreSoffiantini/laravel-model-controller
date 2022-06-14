@extends('layouts.app')

@section('content')

<h1>Movies</h1>

@forelse($movies as $movie)

<div class="card">
    <div class="card-body">
        <h3>{{$movie->title}}</h3>
        <h4>{{$movie->original_title}}</h4>
        <p>Nationality: {{$movie->nationality}}</p>
        <p>{{$movie->date}}</p>
        <p>Vote: {{$movie->vote}}</p>
    </div>
</div>

@empty

<p>No Movies</p>

@endforelse

@endsection