<?php

namespace App\Http\Repositories;

use App\Http\Contracts\ICrudService;
use App\Models\Content;
use App\Models\Language;
use App\Models\Menu;
use Illuminate\Http\Request;

class ContentRepository
{
    private CrudRepository $crudRepository;
    public function __construct(CrudRepository $crudRepository)
    {
        $this->crudRepository = $crudRepository;
    }

    public function findWithMenuAndLanguage($mId,$lId){
        return Content::where('language_id',$lId)->where('menu_id',$mId)->first();
    }

    public function create(Request $request){
        $content = Content::create([
            'name' => $request->name,
            'language_id' => $request->languageId,
            'menu_id' => $request->menuId,
            'content' => $request->editortext,
            'headline' => $request->headline,
            'subtext' => $request->subtext,
        ]);

        $language = $this->crudRepository->findOne(Language::class,$request->languageId);
        $menu = $this->crudRepository->findOne(Menu::class,$request->menuId);
        $content->language()->associate($language);
        $content->menu()->associate($menu);
        $content->save();
    }
}
