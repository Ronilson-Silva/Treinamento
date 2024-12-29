<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;

use Illuminate\Support\Facades\Route;

//Rota que carrega minha index DaschBoard
Route::get('/', function(){
    return view('welcome');
}); 

//Rotas da minha classe Eventos
Route::get('/events/list', [EventController::class, 'index']); 
Route::get('/events/create', [EventController::class, 'create']); 
Route::post('/events', [EventController::class, 'store']); 

//Rotas da minha classe Contato
Route::get('/contacts/list', [ContactController::class, 'index']); 
Route::get('/contacts/create', [ContactController::class, 'create']); 
Route::post('/contacts', [ContactController::class, 'store']); 

//Rotas da minha classe Produtos
Route::get('/products/list', [ProductController::class, 'index']);
Route::get('/products/create', [ProductController::class, 'create']);
Route::post('/products', [ProductController::class, 'store']);






