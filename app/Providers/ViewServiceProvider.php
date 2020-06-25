<?php

namespace App\Providers;
use App\Repository\CategoryRepository;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('layouts.portada.header',function ($view){

            $ListCategory=CategoryRepository::CategoriesActives();

            $view->with('ListCategory',$ListCategory);
        });
    }
}
