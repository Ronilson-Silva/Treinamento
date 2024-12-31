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
Route::get('/events/{id}', [EventController::class, 'show']); 
Route::post('/events', [EventController::class, 'store']); 
Route::delete('/events/{id}',[EventController::class,'destroy']);
Route::get('/events/edit/{id}',[EventController::class,'edit']);
Route::put('/events/update/{id}',[EventController::class,'update']);

//Rotas da minha classe Contato
Route::get('/contacts/list', [ContactController::class, 'index']); 
Route::get('/contacts/create', [ContactController::class, 'create']); 
Route::post('/contacts', [ContactController::class, 'store']); 

//Rotas da minha classe Produtos
Route::get('/products/list', [ProductController::class, 'index']);
Route::get('/products/create', [ProductController::class, 'create']);
Route::post('/products', [ProductController::class, 'store']);







Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
