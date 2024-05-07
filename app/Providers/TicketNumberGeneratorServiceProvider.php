<?php

namespace App\Providers;

use App\Services\TicketNumberGeneratorService;
use Illuminate\Support\ServiceProvider;

class TicketNumberGeneratorServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(TicketNumberGeneratorService::class, function ($app) {
            return new TicketNumberGeneratorService();
        });
    }
}
