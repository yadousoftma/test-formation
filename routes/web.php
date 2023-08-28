<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/





Route::resource('clients',\App\Http\Controllers\ClientController::class);
Route::resource('produits',\App\Http\Controllers\ProduitController::class);
Route::resource('devis',\App\Http\Controllers\DevisController::class);
Route::resource("validator", \App\Http\Controllers\validationController::class);