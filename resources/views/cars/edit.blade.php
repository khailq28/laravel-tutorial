@extends('layouts.app2')

@section('content')
    <h1>Update car</h1>

    <form action="/cars/{{ $car->id }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <input type="text" placeholder="Brand name..." name="name" value="{{ $car->name }}">
            <input type="text" placeholder="Founded" name="founded" value="{{ $car->founded }}">
            <input type="text" placeholder="Description" name="description" value="{{ $car->description }}">

            <button type="submit">Submit</button>
        </div>
    </form>
@endsection