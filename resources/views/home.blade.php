@extends('layouts.app')
@section('title', 'Home')

@section('content')
<div class="cards">
    @foreach ($movies as $movie)
    <div class="card">
        <h2>Titolo: {{$movie['title']}}</h2>
        <h3>Data: {{$movie['date']}}</h3>
        <h4>Voto: {{$movie['vote']}}</h4>
    </div>


    @endforeach

</div>


@endsection

