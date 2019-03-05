<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Projectors\AccountBalanceProjector;
use Spatie\EventProjector\Projectionist;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Projectionist $projectionist)
    {
        $projectionist->addProjector(AccountBalanceProjector::class);
    }
}
