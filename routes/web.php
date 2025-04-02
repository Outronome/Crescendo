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
Route::get('/market-place', App\Livewire\Pagina\MarketPlace\Index::class)->name('market')->middleware('verified');
Route::get('/whishlist', App\Livewire\Pagina\Whishlist\Index::class)->name('whishlist')->middleware('verified');
Route::get('/tema', App\Livewire\Pagina\Tema\Index::class)->name('tema')->middleware('verified');
Route::get('/perfil', App\Livewire\Pagina\Perfil\Index::class)->name('perfil')->middleware('verified');

Route::get('/admin/register', function () {
    return view('admin.register');
})->name('admin.register');

Route::get('/admin/index', function () {
    return view('admin.index');
})->name('admin.index');

Route::post('email/verification-notification', function () {
    
    $user = Auth::user();
    $user->sendEmailVerificationNotification();
    return redirect()->route('verification.notice'); 
})->name('verification.resend');


Route::middleware('auth')->group(function () {
    Route::get('/admin-dashboard', function () {
        if (Gate::allows('is-admin')) {
            // Certifique-se de usar o caminho correto para a view
            return view('auth.admin.dashboard'); // Caminho para a view admin dentro de auth
        } else {
            return redirect('/');
        }
    });
});
Route::post('/register-artist', [ArtistController::class, 'registerArtist']);
Route::get('/register-artist', function () {
    return view('auth.register-artist'); // Return the form view
})->name('register-artist');

#NOVA AUTENTICACAO
Route::get('/autenticar',App\Livewire\Pagina\Auth\Autenticar::class)->name('login');
Route::get('/registar',App\Livewire\Pagina\Auth\RegistarUser::class)->name('registar');
Route::get('/esqueci-me',App\Livewire\Pagina\Auth\Esqueci::class)->name('esqueci');
Route::get('/reset-password/{token}',App\Livewire\Pagina\Auth\Redefinir::class)->name('password.reset');
Route::get('/email/verify/{id}/{hash}', App\Livewire\Pagina\Auth\VerificarEmail::class)->name('verification.verify');


