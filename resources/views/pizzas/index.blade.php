@extends('layouts.layout')

@section('content')
    <h2>Pizzas List</h2>
    @foreach ($pizzas as $pizza)
        <div>
            <a href="/pizzas/{{ $pizza->id }}">
                {{ $pizza->name }} - {{ $pizza->type }} - {{ $pizza->base }}
            </a>
        </div>
    @endforeach
@endsection
