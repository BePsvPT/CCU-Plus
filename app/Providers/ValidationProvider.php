<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Validator;

class ValidationProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('ccu_sign_in', 'App\Ccu\Validator\SignUpValidator@validate', '學號驗證失敗');
        Validator::extend('phone', 'App\Ccu\Validator\PhoneValidator@validate', '手機格式不正確');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
