<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', function () {
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
});

Route::get('/pizzas/{id}', function ($id) {
    return view('details', ['id' => $id]);
});