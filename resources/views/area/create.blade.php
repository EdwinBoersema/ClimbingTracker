@extends('layouts.master')

@section('content')
    Add a new Climbing area:

    <form action="{{ route('area.store') }}" method="post">
        @csrf
        <div>
            <input class="input-field" type="text" name="name" placeholder="Name">
        </div>

        <div>
            <input class="input-field" type="text" name="location" placeholder="Location">
        </div>

        <textarea name="description" id="" cols="30" rows="10">Write a description about the area</textarea>
        
        {{-- <div>
            <input class="input-field" type="image" name="image" placeholder="Image">
        </div> --}}

        <button type="submit">Add Area</button>
    </form>
@endsection