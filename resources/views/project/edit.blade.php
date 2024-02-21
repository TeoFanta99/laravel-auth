@extends('layouts.app')
@section('content')

<h1>EDIT</h1>

<form action="{{route('project.update', $project -> id)}}" method="POST">

    @csrf
    @method('PUT')

    <label for="name">Nome: </label>
    <input type="text" name="name" id="name" value="{{$project -> name}}">
    <br>
    <label for="description">Descrizione: </label>
    <input type="text" name="description" id="description" value="{{$project -> description}}">
    <br>
    <label for="author">Autore: </label>
    <input type="text" name="author" id="author" value="{{$project -> author}}">
    <br>
    <input type="submit" value="UPDATE">
</form>

@endsection