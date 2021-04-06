@extends('layouts.layout')

@section('content')
    <div class="wrapper pizza-detail">
        <h2>Order For {{ $pizza->name }}</h2>
        <p class="type">Type - {{ $pizza->type }}</p>
        <p class="base">Base - {{ $pizza->base }}</p>
    </div>

    <a href="/pizzas" class="back">Go Back</a>
@endsection
