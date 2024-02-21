@extends('layouts.app')
@section('content')

<h1>PROGETTI</h1>
<ul>
    @foreach ($projects as $project)
    <li>
        {{$project -> name}} -
        {{$project -> description}} -
        {{$project -> author}}
    </li>
    @endforeach
   
</ul>

@endsection