<?php

namespace App\Http\ViewComposers;

use App\Http\Repositories\LanguageRepository;
use App\Models\Language;
use App\Models\Menu;
use App\Models\Url;
use Illuminate\Support\Facades\App;
use Illuminate\View\View;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class LocalizationComposer
{
    public function compose(View $view)
    {
        $language_id = Language::where('slug',App::getLocale())->first()->toArray();
            $menus = Menu::with(['url' => function ($query) use ($language_id) {
                $query->where('language_id', '=', $language_id['id']);
            }])->orderBy('order','ASC')->get();
        $view->with('currentLocale', $language_id['id']);
        $view->with('menus', $menus);
        $view->with('language_id', $language_id);
        $view->with('altLocale', config('app.fallback_locale'));
    }
}
