<?php

namespace App\Http\Controllers;

use App\Http\Contracts\IContentService;
use App\Http\Contracts\ICrudService;
use App\Http\Contracts\IMenuService;
use App\Models\Content;
use App\Models\Language;
use App\Models\Menu;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    private ICrudService $crudService;
    private IContentService $contentService;

    public function __construct(ICrudService $crudService,IContentService $contentService)
    {
        $this->crudService = $crudService;
        $this->contentService = $contentService;
    }

    public function index(){
        $contents = $this->crudService->findAll(Content::class);
        $menus = $this->crudService->findAll(Menu::class);
        $languages = $this->crudService->findAll(Language::class);
        return view('admin.contents.content',with(compact('contents','menus','languages')));
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'languageId' => 'required',
            'menuId' => 'required',
            'editortext' => 'required',
            'headline' => 'required',
            'subtext' => 'required',
        ]);

        $this->contentService->create($request);
        return redirect(route('contents.index'));
    }
}
