@extends('layouts.app2')

@section('content')
    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Cars
            </h1>
        </div>

        <div class="pt-10">
            <a href="/cars/create">Add new car</a>
        </div>
        <hr>

        <div class="w-5/6 py-10">
            @foreach ($cars as $car)
            <div class="m-auto">
                <div><a href="/cars/{{ $car->id }}/edit">edit car</a></div>
                <span class="uppercase text-blue-500 font-bold text-xs italic">
                    Founded: {{ $car->founded }}
                </span>

                <h2 class="text-gray-700 text-5xl">
                    <a href="/cars/{{ $car->id }}">{{ $car->name }}</a>
                </h2>

                <p class="text-lg text-gray-700 py-6">
                    {{ $car->description }}
                </p>

                <form action="/cars/{{ $car->id }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit">Delete</button>
                </form>

                <hr class="mt-4 mb-8">
            </div>
            @endforeach
        </div>
    </div>
@endsection