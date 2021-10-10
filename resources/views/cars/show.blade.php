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

        <table class="table-auto">
            <tr>
                <th class="w-1/2">Model</th>
                <th class="w-1/2">Engine</th>
                <th class="w-1/2">Date</th>
            </tr>

            @forelse ($car->carmodels as $model)
                <tr>
                    <td class="border-4">{{ $model->model_name }}</td>
                    <td class="border-4">
                        @foreach ($car->engines as $engine)
                            @if($model->id == $engine->model_id)
                                {{ $engine->engine_name }}
                            @endif
                        @endforeach
                    </td>

                    <td>
                        {{ date('d-m-Y', strtotime($car->productionDate->create_at)) }}
                    </td>
                </tr>
            @empty
                <p>not found</p>
            @endforelse
        </table>

        <p>
            Product types:
            @forelse ($car->products as $product)
                {{ $product->name }}
            @empty
                <p>No car product description</p>
            @endforelse
        </p>
    </div>
@endsection