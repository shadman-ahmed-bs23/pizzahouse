@extends('layouts.layout')

@section('content')
    <h2>Pizzas</h2>
    <!-- For Loop -->
    @for ($i = 0; $i < 5; $i++)
        <p>The Value of i is {{ $i }} </p>
    @endfor

    @foreach ($pizzas as $pizza)
        <div> {{ $loop->index }} {{ $pizza['type'] }} - {{ $pizza['base'] }} - {{ $pizza['price'] }}</div>
        @if ($loop->first)
            <span> - first in the loop</span>
        @endif
    @endforeach
@endsection
