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
        <form action="/pizzas/delete/{{ $pizza->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">
                Complete order
            </button>
        </form>

    </div>

    <a href="/pizzas" class="back">Go Back</a>
@endsection
