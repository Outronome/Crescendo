<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use Laravel\Fortify\Contracts\LoginViewResponse;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Laravel\Fortify\Fortify;
use Laravel\Fortify\Contracts\RegisterResponse;
use Laravel\Fortify\Contracts\LoginResponse;
use Laravel\Fortify\Contracts\ResetPasswordViewResponse;


class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        Fortify::registerView(function(){
            return view('auth.register');
        });
    }

    public function login()
    {
        Fortify::loginView(function(){
            return view('auth.login');
        });
    }

    

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);
        
        Fortify::requestPasswordResetLinkView(function () {
            return view('auth.forgot-password');
        });
        RateLimiter::for('login', function (Request $request) {
            $throttleKey = Str::transliterate(Str::lower($request->input(Fortify::username())).'|'.$request->ip());

            return Limit::perMinute(5)->by($throttleKey);
        });

        

        RateLimiter::for('two-factor', function (Request $request) {
            return Limit::perMinute(5)->by($request->session()->get('login.id'));
        });
        
        app()->singleton(LoginViewResponse::class, function () {
            return new class implements LoginViewResponse {
                public function toResponse($request)
                {
                    return view('auth.login'); // Ensure this Blade file exists
                }
            };
        });

        app()->singleton(LoginResponse::class, function () {
            return new class implements LoginResponse {
                public function toResponse($request)
                {
                    // Redirect user to the 'dashboard' after logging in
                    return redirect()->route('inicio'); // Change 'dashboard' to your desired route
                }
            };
        });

        app()->singleton(ResetPasswordViewResponse::class, function () {
            return new class implements ResetPasswordViewResponse {
                public function toResponse($request)
                {
                    // Customize the behavior of the response
                    // Redirect to a custom route or return the reset view directly
                    return view('auth.reset-password'); // Ensure you have a view for the reset password page
                }
            };
        });

        app()->singleton(RegisterResponse::class, function () {
            return new class implements RegisterResponse {
                public function toResponse($request)
                {
                    return redirect()->route('inicio'); // Change 'dashboard' to your desired route
                }
            };
        });
    }

    
}
