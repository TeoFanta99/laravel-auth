@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center">ECCO IL PROGETTO:</h1>

        <div class="card p-4 show-card">
            <h2>{{ $project->name }}</h2>
            <hr>
            <img src="{{ $project->img }}" alt="" class="show-img">
            <div class="mb-4">
                <strong>Descrizione:</strong>
                <p>{{ $project->description }}</p>
            </div>

            <div>
                <strong>Autore:</strong>
                <h3>{{ $project->author }}</h3>
            </div>
        </div>

    </div>
@endsection
