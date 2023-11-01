<?php

namespace App\Providers;

use App\Actions\Jetstream\DeleteUser;
use Illuminate\Support\ServiceProvider;
use Laravel\Cashier\CashierServiceProvider;
use Laravel\Fortify\Features;
use Laravel\Jetstream\Jetstream;



class JetstreamServiceProvider extends ServiceProvider
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
        $this->configurePermissions();

        Jetstream::deleteUsersUsing(DeleteUser::class);
        CashierServiceProvider::class;

    }

    /**
     * Configure the permissions that are available within the application.
     */
    protected function configurePermissions(): void
    {
        Jetstream::defaultApiTokenPermissions(['read']);

        Jetstream::permissions([
            'create',
            'read',
            'update',
            'delete',
        ]);
    }
    public static function additionalFeatures()
    {
       

        // Add TwoFactorAuthentication feature conditionally
        if (config('app.enable_2fa')) {
            $additionalFeatures[] = Features::twoFactorAuthentication();
        }

        return $additionalFeatures;
    }

}
