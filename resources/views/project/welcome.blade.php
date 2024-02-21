@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center">PROGETTI</h1>
        <div class="text-center mb-3">
            <a href="{{ route('project.create') }}" class="btn btn-primary">ADD NEW</a>
        </div>

        <div class="card-deck">
            @foreach ($projects as $project)
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="{{ route('project.show', $project->id) }}">
                                {{ $project->name }}
                            </a>
                        </h5>
                        @auth
                            <a href="{{ route('project.edit', $project->id) }}" class="btn btn-info">EDIT</a>
                            <form action="{{ route('project.delete', $project->id) }}" method="POST" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="DELETE" class="btn btn-danger">
                            </form>
                        @endauth
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
