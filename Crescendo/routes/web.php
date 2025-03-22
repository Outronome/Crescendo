<?php

use Illuminate\Support\Facades\Route;

Route::get('/', App\Livewire\Pagina\Inicio\Index::class)->name('inicio');
Route::get('/market-place', App\Livewire\Pagina\Inicio\Index::class)->name('market');
#Route::get('/perfil', App\Livewire\Pagina\Inicio\Index::class)->name('perfil'); para o NEUL NEUL
