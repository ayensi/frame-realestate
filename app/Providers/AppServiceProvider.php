<?php

namespace App\Providers;

use App\Http\Contracts\IContentService;
use App\Http\Contracts\ICrudService;
use App\Http\Contracts\ILanguageService;
use App\Http\Contracts\IMenuContract;
use App\Http\Contracts\IMenuService;
use App\Http\Contracts\IUserService;
use App\Http\Services\ContentService;
use App\Http\Services\CrudService;
use App\Http\Services\LanguageService;
use App\Http\Services\MenuService;
use App\Http\Services\UserService;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\Factory;
use JeroenNoten\LaravelAdminLte\Http\ViewComposers\AdminLteComposer;

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
    public function boot(Factory $view)
    {
        $view->composer('vendor.adminlte.*', AdminLteComposer::class);
        $this->app->bind(IUserService::class, UserService::class);
        $this->app->bind(ICrudService::class, CrudService::class);
        $this->app->bind(IMenuService::class, MenuService::class);
        $this->app->bind(IContentService::class, ContentService::class);
        $this->app->bind(ILanguageService::class, LanguageService::class);
    }
}
