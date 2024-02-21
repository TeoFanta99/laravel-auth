@extends('layouts.app')
@section('content')

<h1>PROGETTI</h1>
<br>
<button>
    <a href="{{route('project.create')}}">ADD NEW</a>
</button>
<br>
<ul>
    @foreach ($projects as $project)
    <li>
        <a href="{{route('project.show', $project -> id)}}">
            {{$project -> name}}
        </a>
        @auth
        <a href="{{route('project.edit', $project -> id)}}" class="mx-3">EDIT</a>
        <form action="{{route('project.delete', $project -> id)}}" method="POST" class="d-inline-block">

            @csrf
            @method('DELETE')

            <input type="submit" value="DELETE">
        </form>
        @endauth
        
    </li>
    @endforeach
   
</ul>

@endsection