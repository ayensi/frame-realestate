<?php

namespace App\Http\Repositories;

use App\Models\url;
use App\Models\Language;
use App\Models\Menu;

class UrlRepository
{
    private CrudRepository $crudRepository;
    public function __construct(CrudRepository $crudRepository)
    {
        $this->crudRepository = $crudRepository;
    }

    public function create($request){
        $url = Url::create([
            'url' => $request->url,
            'language_id' => $request->languageId,
            'menu_id' => $request->menuId,
        ]);
        $language = $this->crudRepository->findOne(Language::class,$request->languageId);
        $menu = $this->crudRepository->findOne(Menu::class,$request->menuId);
        $url->language()->associate($language);
        $url->menu()->associate($menu);
        $url->save();
    }
    public function findMenuWithUrl($url){
        return Url::where('url',$url)->first();
    }
}
