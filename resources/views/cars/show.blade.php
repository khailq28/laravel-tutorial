@extends('layouts.app2')

@section('content')
    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                {{ $car->name }}
            </h1>
            
            <span class="uppercase text-blue-500 font-bold text-xs italic">
            Founded: {{ $car->founded }}
            </span>

            <p class="text-lg text-gray-700 py-6">
                {{ $car->description }}
            </p>
        </div>

        <ul>
            <p>Model</p>

            @foreach ($car->carmodels as $model)
                <li>{{ $model['model_name'] }}</li>
            @endforeach
        </ul>
    </div>
@endsection