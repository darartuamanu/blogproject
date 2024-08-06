<?php

namespace App\Providers;

use App\Models\Order;
use App\Policies\OrderPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Gate::policy(Order::class, OrderPolicy::class);
    }

    // Other methods, if any
}
