<?php

namespace Hesami\Sms;


use Hesami\Sms\Sms;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class SmsServiceProvider extends ServiceProvider
{

    public function register()
    {
        App::bind('Sms' , Sms::class);
    }


    public function boot()
    {

    }
}
