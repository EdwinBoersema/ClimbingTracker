@extends('layouts.master')

@section('content')
<h1>Area Index Page</h1>

<div>
    Area's:
    @foreach ($area as $area)
    <div>{{ $area->name }}</div>
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