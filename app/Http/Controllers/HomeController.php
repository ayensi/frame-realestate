<?php

namespace App\Http\Controllers;

use App\Http\Contracts\IContentService;
use App\Http\Contracts\ICrudService;
use App\Http\Contracts\ILanguageService;
use App\Models\Menu;
use Hamcrest\FeatureMatcherTest;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private ICrudService $crudService;
    private IContentService $contentService;
    private ILanguageService $languageService;
    public function __construct(IContentService $contentService,ILanguageService $languageService,ICrudService $crudService)
    {
        $this->contentService = $contentService;
        $this->languageService = $languageService;
        $this->crudService = $crudService;
    }

    public function index(Request $request){
        $sliders=[];
        $homepages = new Request();
        $homepages->whyframe_text = "sa";
        return view('home',compact('sliders','homepages'));
    }
    public function welcome(Request $request){
        return view('welcome');
    }
    public function aboutUs(){
        $code = app()->getLocale();
        $id = $this->languageService->findWithLanguageCode($code);
        $abouts = $this->contentService->findWithMenuAndLanguage(7,$id);
        $menu = $this->crudService->findOne(Menu::class,7);
        return view('about',with(compact('abouts','menu')));
    }
}
