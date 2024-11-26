<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (config('app.env') == 'local') {
            // Periksa apakah aplikasi berjalan di ngrok
            if (strpos(request()->getHost(), 'ngrok') !== false) {
                // Jika menggunakan ngrok, paksa menggunakan https
                URL::forceScheme('https');
            } else {
                // Untuk localhost, biarkan tetap http (atau paksa https jika Anda menginginkannya)
                URL::forceScheme('http');
            }
        }
    }
}
