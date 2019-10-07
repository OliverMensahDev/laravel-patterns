<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Services\IEmployeeRepository',
            'App\Services\EmployeeRepository'
        );

        $this->app->bind(
            'App\Domains\Notification\EmployeeNotifier',
            'App\Domains\Notification\EmailSender'
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
