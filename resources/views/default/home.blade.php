@extends('layouts.master')

@section('content')
    @if (Auth::user()->admin === 1)
        <h1>Hello, admin.</h1>
    @else
        <h1>Hello, user.</h1>
    @endif
@endsection

