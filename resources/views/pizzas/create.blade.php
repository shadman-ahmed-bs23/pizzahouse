@extends('layouts.layout')

@section('content')
    <div class="wrapper">
        <h2>Create a New pizza</h2>
        <form action="/pizzas" method="POST">
            @csrf
            <label for="name">Your Name: </label>
            <input type="text" id="name" name="name">
            <label for="type">Choose pizza type: </label>
            <select name="type" id="type">
                <option value="Italian">Italian</option>
                <option value="Hawaiian">Hawaiian</option>
                <option value="veg supreme">Veg Supreme</option>
            </select>
            <label for="base">Choose pizza type: </label>
            <select name="base" id="base">
                <option value="chessy crust">Chessy Crust</option>
                <option value="garlic crust">Garlic Crust</option>
                <option value="thin and crispy">Thin and Crispy</option>
                <option value="thick">Thick</option>
            </select>

            <input type="submit" value="Order pizza">
        </form>
    </div>
@endsection
