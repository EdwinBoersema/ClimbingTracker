@extends('layouts.master')

@section('content')
    <h1>Area Index Page</h1>

    <div>
        Area's:
        @foreach ($area as $area)
            <div>{{ $area->name }}</div>
        @endforeach
    </div>
   

@endsection