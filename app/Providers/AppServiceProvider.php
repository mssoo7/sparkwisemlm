<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\globalSettings\Globalsettings;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Globalsettings $data)
    {
  view()->share('global_currency',$data->global_settings['global_currency']);
  view()->share('company_name',$data->global_settings['company_name']);
  view()->share('company_email',$data->global_settings['company_email']);
  view()->share('company_phone',$data->global_settings['company_phone']);
  view()->share('company_address',$data->global_settings['company_address']);
  view()->share('userCode',$data->global_settings['user_code']);
  view()->share('news_ticker',$data->global_settings['news_ticker']);
  
     
    }
}
