<?php

namespace App\Http\Controllers;

use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index()
    {
        //$pizzas = Pizza::all();
        //$pizzas = Pizza::orderBy('name')->get();
        //$pizzas = Pizza::where('name', 'Juventus Pizza')->get();
        $pizzas = Pizza::latest()->get();

        return view('pizzas.index', ['pizzas' => $pizzas]);
    }

    public function store()
    {
        $pizza = new Pizza();
        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');

        $pizza->save();

        return redirect('/pizzas')->with('message', 'Thanks for your order');
    }

    public function show($id)
    {
        $pizza = Pizza::findOrFail($id);

        return view('pizzas.show', ['pizza' => $pizza]);
    }

    public function create()
    {
        return view('pizzas.create');
    }
}