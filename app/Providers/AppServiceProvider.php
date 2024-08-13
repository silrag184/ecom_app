<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Wishlist;
use Illuminate\Support\ServiceProvider;
use View;
use Cart;
use Session;
use function Nette\Utils\first;

class AppServiceProvider extends ServiceProvider
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
//        View::share('name', 'BITM');
        View::composer('*', function($view){
            $view->with('cartsProduct', Cart::content());
            if (Session::get('customer_id')){
                $view->with('customerWishlistProducts',Wishlist::where('customer_id',Session::get('customer_id'))->get());
            }
        });
        View::composer('*', function($view){
            $view->with('categories', Category::where('status',1)->get());
        });

    }
}
