@extends('layouts.layout')

@section('content')
    <div class="wrapper pizza-detail">
        <h2>Order For {{ $pizza->name }}</h2>
        <p class="type">Type - {{ $pizza->type }}</p>
        <p class="base">Base - {{ $pizza->base }}</p>
        <p class="toppings">
            Extra Toppings:
        <ul>
            @foreach ($pizza->toppings as $topping)
                <li>{{ $topping }}</li>
            @endforeach
        </ul>
        </p>
    </div>

    <a href="/pizzas" class="back">Go Back</a>
@endsection
