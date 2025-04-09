<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Gate;




Route::get('/', App\Livewire\Pagina\Inicio\Index::class)->name('inicio');


Route::get('/artista', App\Livewire\Pagina\Artista\Index::class)->name('artista')->middleware('verified');
Route::get('/carrinho', App\Livewire\Pagina\Carrinho\Index::class)->name('carrinho')->middleware('verified');
Route::get('/checkout', App\Livewire\Pagina\Checkout\Index::class)->name('checkout')->middleware('verified');
Route::get('/gestao-user', App\Livewire\Pagina\GestaoUser\Index::class)->name('gestao-user')->middleware('verified');
Route::get('/gestao-musica', App\Livewire\Pagina\GestaoMusica\Index::class)->name('gestao-musica')->middleware('verified');
Route::get('/market-place', App\Livewire\Pagina\MarketPlace\Index::class)->name('market');
Route::get('/wishlist', App\Livewire\Pagina\Wishlist\Index::class)->name('wishlist')->middleware('verified');
Route::get('/tema', App\Livewire\Pagina\Tema\Index::class)->name('tema')->middleware('verified');
Route::get('/perfil', App\Livewire\Pagina\Perfil\Index::class)->name('perfil')->middleware('verified');
Route::get('/admin/perfil',App\Livewire\Pagina\PerfilAdmin\Index::class )->name('perfil.admin');
Route::get('/admin/register', function () {
    return view('admin.register');
})->name('admin.register');

Route::get('/admin/index', function () {
    return view('admin.index');
})->name('admin.index');

#NOVA AUTENTICACAO
Route::get('/autenticar',App\Livewire\Pagina\Auth\Autenticar::class)->name('login');
Route::get('/registar',App\Livewire\Pagina\Auth\RegistarUser::class)->name('registar');
Route::get('/registar-artista',App\Livewire\Pagina\Auth\RegistarArtista::class)->name('registar-artista');
Route::get('/registar-admin',App\Livewire\Pagina\Auth\RegistarAdmin::class)->name('registar-admin');
Route::get('/esqueci-me',App\Livewire\Pagina\Auth\Esqueci::class)->name('esqueci');
Route::get('/reset-password/{token}',App\Livewire\Pagina\Auth\Redefinir::class)->name('password.reset');
Route::get('/email/verify/{id}/{hash}', App\Livewire\Pagina\Auth\VerificarEmail::class)->name('verification.verify');


/*EXEMPLO DE ROTAS Com Permissões
Route::middleware(['can:view_dashboard', 'can:edit_post'])->group(function () {
    Route::get('/dashboard', Dashboard::class);
    Route::get('/posts', Posts::class);
}); 
Route::get('/dashboard', Dashboard::class)
    ->middleware('can:view_dashboard');
*/
