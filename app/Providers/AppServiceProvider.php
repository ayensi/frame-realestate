<?php

namespace App\Providers;

use App\Http\Contracts\ICategoryService;
use App\Http\Contracts\IContentService;
use App\Http\Contracts\ICrudService;
use App\Http\Contracts\IDistrictService;
use App\Http\Contracts\ILanguageService;
use App\Http\Contracts\IMenuContract;
use App\Http\Contracts\IMenuService;
use App\Http\Contracts\IPropertyImageService;
use App\Http\Contracts\IPropertyService;
use App\Http\Contracts\IUrlService;
use App\Http\Contracts\IUserService;
use App\Http\Services\CategoryService;
use App\Http\Services\ContentService;
use App\Http\Services\CrudService;
use App\Http\Services\DistrictService;
use App\Http\Services\LanguageService;
use App\Http\Services\MenuService;
use App\Http\Services\PropertyImageService;
use App\Http\Services\PropertyService;
use App\Http\Services\UrlService;
use App\Http\Services\UserService;
use App\Models\Category;
use App\Models\Language;
use App\Models\Menu;
use App\Models\Url;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\Factory;
use JeroenNoten\LaravelAdminLte\Http\ViewComposers\AdminLteComposer;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
        if(Session::has('locale')){
            LaravelLocalization::setLocale(Session::get('locale'));
        }
        $language_id = Language::where('slug',LaravelLocalization::getCurrentLocale())->first()->id;
        $menus = Menu::whereRelation('url','language_id',$language_id)->orderBy('order','ASC')->get();
        $view->share('menus',$menus);
        $view->share('language_id',$language_id);
        $view->composer('vendor.adminlte.*', AdminLteComposer::class);
        $this->app->bind(IUserService::class, UserService::class);
        $this->app->bind(ICrudService::class, CrudService::class);
        $this->app->bind(IMenuService::class, MenuService::class);
        $this->app->bind(IContentService::class, ContentService::class);
        $this->app->bind(ILanguageService::class, LanguageService::class);
        $this->app->bind(IUrlService::class, UrlService::class);
        $this->app->bind(IPropertyService::class, PropertyService::class);
        $this->app->bind(IDistrictService::class, DistrictService::class);
        $this->app->bind(IPropertyImageService::class, PropertyImageService::class);
        $this->app->register(LocalizationServiceProvider::class);
    }
}
