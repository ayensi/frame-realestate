<?php

namespace App\Http\Controllers;

use App\Http\Contracts\IContentService;
use App\Http\Contracts\ICrudService;
use App\Http\Contracts\ILanguageService;
use App\Http\Contracts\IMenuService;
use App\Http\Contracts\IPropertyService;
use App\Http\Contracts\IUrlService;
use App\Models\Content;
use App\Models\HomepageImage;
use App\Models\Menu;
use App\Models\Property;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Team;
use Hamcrest\FeatureMatcherTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class HomeController extends Controller
{
    private ICrudService $crudService;
    private IContentService $contentService;
    private ILanguageService $languageService;
    private IMenuService $menuService;
    private IUrlService $urlService;
    private IPropertyService $propertyService;
    public function __construct(IContentService $contentService,ILanguageService $languageService,ICrudService $crudService,IMenuService $menuService,IUrlService $urlService,IPropertyService $propertyService)
    {
        $this->contentService = $contentService;
        $this->languageService = $languageService;
        $this->crudService = $crudService;
        $this->menuService = $menuService;
        $this->urlService = $urlService;
        $this->propertyService = $propertyService;

    }
    public function setLocale($language){
        LaravelLocalization::setLocale($language);
        Session::put('locale',$language);
        return redirect()->back();
    }
public function home(){
        $homepageimages = $this->crudService->findAll(HomepageImage::class);
    $language = App::getLocale();
    $lId = $this->languageService->findWithLanguageCode($language)->toArray()['id'];
    $sliders=$this->crudService->findAll(Slider::class);
    $contents = $this->crudService->findWithMenuId(Content::class,6,$lId);
    $menu = $this->crudService->findOne(Menu::class,6);

    return view('home',with(compact('contents','menu','sliders','homepageimages')));
}
    public function page($url){
        $language = App::getLocale();
        $lId = $this->languageService->findWithLanguageCode($language)->toArray()['id'];
        $page = $this->urlService->findMenuWithUrl($url);
        $content = $this->contentService->findWithMenuAndLanguage($page->menu->id,$lId);
        $contents = [];
        $menu = $this->crudService->findOne(Menu::class,$page->menu->id);
        if($page->menu->slug=="team"){
            $teams = $this->crudService->findAll(Team::class);
            return view($page->menu->slug,with(compact('content','menu','teams')));
        }
        if($page->menu->slug=="services"){
            $services = $this->crudService->findAll(Service::class);
            return view($page->menu->slug,with(compact('content','menu','services')));
        }
        if($page->menu->slug=="home"){
            $homepageimages = $this->crudService->findAll(HomepageImage::class);
            $language = App::getLocale();
            $lId = $this->languageService->findWithLanguageCode($language)->toArray()['id'];
            $sliders=$this->crudService->findAll(Slider::class);
            $contents = $this->crudService->findWithMenuId(Content::class,6,$lId);
            $menu = $this->crudService->findOne(Menu::class,6);
            return view('home',with(compact('contents','menu','sliders','homepageimages')));
        }
        if($url == "properties" || $url == "portfoylerimiz"){
            $language = App::getLocale();
            $lId = $this->languageService->findWithLanguageCode($language)->toArray()['id'];
            $properties = $this->propertyService->findAllWithLanguageId($lId);
            if(count($properties)==0){
                $properties = $this->crudService->findAll(Property::class);
            }
            //$properties = $this->propertyService->getWithLanguageIdOrAll($lId);
            return view('properties',with(compact('properties')));
        }
        if($url == "frame-bodrum"){
            $language = App::getLocale();
            $lId = $this->languageService->findWithLanguageCode($language)->toArray()['id'];
            $properties = $this->propertyService->findAllWithLanguageIdAndCityId($lId,2);
            if(count($properties)==0){
                $properties = $this->crudService->withCityId(Property::class,2);
            }
            return view('properties',with(compact('properties')));
        }
        if($url == "frame-istanbul"){
            $language = App::getLocale();
            $lId = $this->languageService->findWithLanguageCode($language)->toArray()['id'];
            $properties = $this->propertyService->findAllWithLanguageIdAndCityId($lId,1);
            if(count($properties)==0){
                $properties = $this->crudService->withCityId(Property::class,1);
            }
            return view('properties',with(compact('properties')));
        }
        return view($page->menu->slug,with(compact('content','menu')));

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
