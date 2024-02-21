@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="intestazione">
            <h1 class="text-center">PROGETTI</h1>
            <div class="text-center mb-3">
                <a href="{{ route('project.create') }}" class="btn btn-primary">ADD NEW</a>
            </div>
        </div>

        <div class="card-deck">
            @foreach ($projects as $project)
                <a href="{{ route('project.show', $project->id) }}" class="show-link">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ $project->name }}

                            </h5>
                            <img src="{{ $project->img }}" alt="" class="welcome-img">
                            @auth
                                <div class="button-container">
                                    <a href="{{ route('project.edit', $project->id) }}" class="btn edit-button">EDIT</a>
                                    <form action="{{ route('project.delete', $project->id) }}" method="POST" class="delete">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="DELETE" class="btn delete-button ">
                                    </form>
                                </div>
                            @endauth
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

    </div>
@endsection
