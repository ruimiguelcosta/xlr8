<?php

namespace App\Providers;

use App\Repositories\Interfaces\PropertyRepositoryInterface;
use App\Repositories\PropertyRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
    }

    public function boot(): void
    {
        $this->app->bind(PropertyRepositoryInterface::class, PropertyRepository::class);
    }
}
