@extends('layouts.layout')

@section('content')
    <h2>Pizzas</h2>
    @foreach ($pizzas as $pizza)
        <div> {{ $loop->index }} {{ $pizza['type'] }} - {{ $pizza['base'] }} - {{ $pizza['price'] }}</div>
        @if ($loop->first)
            <span> - first in the loop</span>
        @endif
    @endforeach

    <img src="/images/pizza-house.jpg" alt="">
@endsection
