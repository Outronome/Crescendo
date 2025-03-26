<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', App\Livewire\Pagina\Inicio\Index::class)->name('inicio');
Route::get('/artista', App\Livewire\Pagina\Artista\Index::class)->name('artista');
Route::get('/carrinho', App\Livewire\Pagina\Carrinho\Index::class)->name('carrinho');
Route::get('/checkout', App\Livewire\Pagina\Checkout\Index::class)->name('checkout');
Route::get('/gestao-user', App\Livewire\Pagina\GestaoUser\Index::class)->name('gestao-user');
Route::get('/market-place', App\Livewire\Pagina\MarketPlace\Index::class)->name('market');
Route::get('/whishlist', App\Livewire\Pagina\Whishlist\Index::class)->name('whishlist');
Route::get('/tema', App\Livewire\Pagina\Tema\Index::class)->name('tema');
#Route::get('/perfil', App\Livewire\Pagina\Inicio\Index::class)->name('perfil'); para o NEUL NEUL


