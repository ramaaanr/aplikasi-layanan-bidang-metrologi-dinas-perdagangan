<?php

namespace App\Providers;

use App\Services\Impl\UttpServiceImpl;
use App\Services\UttpService;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class UttpServiceProvider extends ServiceProvider implements DeferrableProvider
{
    public array $singletons = [
        UttpService::class => UttpServiceImpl::class
    ];

    public function provides(): array
    {
        return [UttpService::class];
    }
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
