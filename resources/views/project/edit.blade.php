@extends('layouts.app')

@section('content')
    <div class="container-form">
        <form action="{{ route('project.update', $project->id) }}" method="POST" class="card-form">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $project->name }}">
            </div>

            <div class="form-group">
                <label for="description">Descrizione:</label>
                <input type="text" name="description" id="description" class="form-control"
                    value="{{ $project->description }}">
            </div>

            <div class="form-group">
                <label for="author">Autore:</label>
                <input type="text" name="author" id="author" class="form-control" value="{{ $project->author }}">
            </div>

            <div class="text-center">
                <input type="submit" value="UPDATE" class="btn btn-primary">
            </div>
        </form>
    </div>
@endsection
