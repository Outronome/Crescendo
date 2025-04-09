<?php

use Illuminate\Support\Facades\Route;

#TODOS USERS
Route::get('/', App\Livewire\Pagina\Inicio\Index::class)->name('inicio');
Route::get('/market-place', App\Livewire\Pagina\MarketPlace\Index::class)->name('market');

#AUTENTICADO
Route::get('/artista', App\Livewire\Pagina\Artista\Index::class)->name('artista')->middleware('verified');
Route::get('/carrinho', App\Livewire\Pagina\Carrinho\Index::class)->name('carrinho')->middleware('verified');
Route::get('/checkout', App\Livewire\Pagina\Checkout\Index::class)->name('checkout')->middleware('verified');
Route::get('/wishlist', App\Livewire\Pagina\Wishlist\Index::class)->name('wishlist')->middleware('verified');
Route::get('/perfil', App\Livewire\Pagina\Perfil\Index::class)->name('perfil')->middleware('verified');

#PERMISSOES ADMINISTRATIVAS
Route::get('/gestao-user', App\Livewire\Pagina\GestaoUser\Index::class)->name('gestao-user')->middleware('verified', 'can:moderar utilizador','can:criar administrador');
Route::middleware(['verified','can:moderar musica'])->group(function () {
    Route::get('/gestao-musica', App\Livewire\Pagina\GestaoMusica\Index::class)->name('gestao-musica');
    Route::get('/tema', App\Livewire\Pagina\Tema\Index::class)->name('tema');
}); 
##EXTERMINAR ESTA ROTA E JUNTAR TUDO NA ROTA DE PERFIL
Route::get('/admin/perfil',App\Livewire\Pagina\PerfilAdmin\Index::class )->name('perfil.admin');

#NOVA AUTENTICACAO
Route::get('/autenticar',App\Livewire\Pagina\Auth\Autenticar::class)->name('login');
Route::get('/registar',App\Livewire\Pagina\Auth\RegistarUser::class)->name('registar');
Route::get('/registar-artista',App\Livewire\Pagina\Auth\RegistarArtista::class)->name('registar-artista');
Route::get('/registar-admin',App\Livewire\Pagina\Auth\RegistarAdmin::class)->name('registar-admin');
Route::get('/esqueci-me',App\Livewire\Pagina\Auth\Esqueci::class)->name('esqueci');
Route::get('/reset-password/{token}',App\Livewire\Pagina\Auth\Redefinir::class)->name('password.reset');
Route::get('/email/verify/{id}/{hash}', App\Livewire\Pagina\Auth\VerificarEmail::class)->name('verification.verify');
#FIM AUTENTICACAO


/*EXEMPLO DE ROTAS Com Permissões
Route::middleware(['can:view_dashboard', 'can:edit_post'])->group(function () {
    Route::get('/dashboard', Dashboard::class);
    Route::get('/posts', Posts::class);
}); 
Route::get('/dashboard', Dashboard::class)
    ->middleware('can:view_dashboard');
*/