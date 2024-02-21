@extends('layouts.app')
@section('content')

<h1>SHOW</h1>

    <h2>{{$project -> name}}</h2>
    <br>
    <p>{{$project -> description}}</p>
    <br>
    <h3>{{$project -> author}}</h3>

@endsection