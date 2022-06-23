@extends('layouts.main')

@section('content')

    @foreach ($comics as $comic)

    <div>
        <div>
            <img src="{{$comic->image}}" alt="img">
        </div>
        <div>
            <h1>{{$comic->title}}</h1>
            <h2>{{$comic->type}}</h2>
        </div>
    </div>

    @endforeach

@endsection
