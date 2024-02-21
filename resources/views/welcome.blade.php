@extends('layouts.app')
@section('content')
    <h1>PROGETTI</h1>
    <div>
        @foreach ($projects as $project)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"> {{ $project->name }}</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary"> {{ $project->author }}</h6>
                    {{-- <a href="#" class="card-link">link pagina show </a> --}}
                    {{-- <a href="#" class="card-link">link create</a> --}}
                </div>
            </div>
        @endforeach
        {{-- aggiunta bottone create --}}
        {{-- aggiunta bottone edit --}}
        {{-- bottone delete --}}
    </div>
@endsection
