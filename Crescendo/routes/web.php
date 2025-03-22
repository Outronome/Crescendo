<?php

use Illuminate\Support\Facades\Route;

Route::get('/', App\Livewire\Pagina\Inicio\Index::class)->name('inicio');
Route::get('/artista', App\Livewire\Pagina\Inicio\Index::class)->name('artista');
Route::get('/carrinho', App\Livewire\Pagina\Inicio\Index::class)->name('carrinho');
Route::get('/checkout', App\Livewire\Pagina\Inicio\Index::class)->name('checkout');
Route::get('/gestao-user', App\Livewire\Pagina\Inicio\Index::class)->name('gestao-user');
Route::get('/market-place', App\Livewire\Pagina\Inicio\Index::class)->name('market');
Route::get('/whishlist', App\Livewire\Pagina\Inicio\Index::class)->name('whishlist');
#Route::get('/perfil', App\Livewire\Pagina\Inicio\Index::class)->name('perfil'); para o NEUL NEUL
