@extends('layouts.layout')

@section('content')
    <h2>Pizzas List</h2>
    @foreach ($pizzas as $pizza)
        <div>
            <a href="/pizzas/{{ $pizza->id }}">
                {{ $pizza->name }} - {{ $pizza->type }} - {{ $pizza->base }}
            </a>
        </div>
        <br>
    @endforeach

    <p class="message">{{ session('message') }}</p>
    <hr>
    <a href="/pizzas/create">Create Pizza</a>
@endsection
