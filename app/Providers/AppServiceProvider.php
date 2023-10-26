<?php

namespace App\Providers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Seller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Laravel\Sanctum\Sanctum;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Sanctum::ignoreMigrations();
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::preventLazyLoading(!$this->app->isProduction());
        Paginator::useBootstrapFive();

        View::composer('app.nav', function ($view) {
            $categories = Category::withCount('products')
                ->orderBy('name')
                ->get();


            $brands = Brand::withCount('products')
                ->orderBy('name')
                ->get();

            $sellers = Seller::withCount('products')
                ->orderBy('name')
                ->get();


            $view->with([
                'categories' => $categories,
                'brands' => $brands,
                'sellers' => $sellers,
            ]);
        });
    }
}
