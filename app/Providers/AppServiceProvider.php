<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
//use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Blade;


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
        View::share('siteTitle', 'hoc.tv');
       // Blade::withoutDoubleEncoding(); // off double encoding 

       Blade::directive('datetime', function ($expression) {
        return "<?php echo ($expression)->format('d-m-y h:i'); ?>";
       });

      // tạo if riêng 
       Blade::if('disk', function ($value) {
        return config('filesystems.default') === $value;
       });

       
    }
}
