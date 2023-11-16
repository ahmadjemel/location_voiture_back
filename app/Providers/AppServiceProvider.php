<?php

namespace App\Providers;

use App\Models\Marque;
use App\Models\Voiture;
use Illuminate\Pagination\Paginator;
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
        Schema::defaultStringLength(100);
        Paginator::useBootstrapFive();
        $marques= Marque::all();
        view()->share(["marques"=>$marques]);
        $voitures= Voiture::all();
        view()->share(["voitures"=>$voitures]);
    }
}
