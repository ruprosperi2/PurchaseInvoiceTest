<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class PurchaseInvoiceServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'Src\Domain\Contracts\PurchaseInvoiceRepository',
            'Src\Infrastructure\Repositories\EloquentPurchaseInvoiceRepository'
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

