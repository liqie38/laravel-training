<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Inventory;
use App\Policies\InventoryPolicy;

class AppServiceProvider extends ServiceProvider
{
    protected $policies = [
        Inventory::class => InventoryPolicy::class,
    ];
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
        //
    }
}
