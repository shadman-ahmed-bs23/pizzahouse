@extends('layouts.layout')

@section('content')
    <h2>Pizzas List</h2>
    @foreach ($pizzas as $pizza)
        <div>
            {{ $pizza->name }} - {{ $pizza->type }} - {{ $pizza->base }}
        </div>
    @endforeach
@endsection
