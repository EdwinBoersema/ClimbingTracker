@extends('layouts.master')

@section('content')
<h1>Area Index Page</h1>

<div>
    Area's:
    @foreach ($area as $area)
    <div class="card">
        <a href="{{ route('route.index', ['name' => $area->name]) }}">
            <h2>{{ $area->name }}</h2>
            <div>Location: {{ $area->location }}</div>
            <div>{{ $area->description }}</div>
        </a>
    </div>
    @endforeach
</div>

@auth
@if (Auth::user()->admin === 1)
<div>
    <button>
        <a href="{{ route('area.create') }}">Add New Area</a>
    </button>
</div>
@endif
@endauth

@endsection