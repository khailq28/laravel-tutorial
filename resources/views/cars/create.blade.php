@extends('layouts.app2')

@section('content')
    <h1>Create new car</h1>

    <form action="/cars" method="POST">
        @csrf
        <div>
            <input type="text" placeholder="Brand name..." name="name">
            <input type="text" placeholder="Founded" name="founded">
            <input type="text" placeholder="Description" name="description">

            <button type="submit">Submit</button>
        </div>
    </form>

    @if ($errors->any())
        <div>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    @endif
@endsection