<?php

namespace App\Http\Controllers;

class PizzaController extends Controller
{
    public function index()
    {
        $pizzas = [
            ['type' => 'Hawaiian', 'base' => 'garlic crust', 'price' => 100],
            ['type' => 'Italian', 'base' => 'Cheesy crust', 'price' => 250],
            ['type' => 'Italian', 'base' => 'garlic crust', 'price' => 200],
        ];

        $name = request('name');
        return view('pizzas', [
            'pizzas' => $pizzas,
            'name' => $name,
        ]);
    }

    public function show($id)
    {
        return view('details', ['id' => $id]);
    }
}