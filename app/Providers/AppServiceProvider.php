<?php

namespace App\Providers;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

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
        Schema::defaultStringLength(191);
        $this->registerCarbonMacros();
    }

    public function registerCarbonMacros(): void
    {
        Carbon::macro('greet', function () {
            $hour = now()->format('H');

            if ($hour < 12) return 'Morning';

            if ($hour < 17) return 'Afternoon';

            return 'Evening';
        });
    }
}
