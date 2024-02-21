@extends('layouts.app')
@section('content')

<h1>CREATE</h1>

<form action="{{route('project.store')}}" method="POST">

    @csrf
    @method('POST')

    <label for="name">Nome: </label>
    <input type="text" name="name" id="name">
    <br>
    <label for="description">Descrizione: </label>
    <input type="text" name="description" id="description">
    <br>
    <label for="author">Autore: </label>
    <input type="text" name="author" id="author">
    <br>
    <input type="submit" value="CREATE">
</form>

@endsection