<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\ImageGallery;
use App\hotelGallery;

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
    public function boot()
    {
        $images = ImageGallery::get();
        view()->share('someKey', $images);

        $hotel = hotelGallery::get();
        view()->share('hotel', $hotel);
    }
}
