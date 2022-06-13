<?php

namespace App\Http\Controllers;

use App\Http\Contracts\ICrudService;
use App\Http\Contracts\IUrlService;
use App\Models\Language;
use App\Models\Menu;
use App\Models\Url;
use Illuminate\Http\Request;

class UrlController extends Controller
{
    private ICrudService $crudService;
    private IUrlService $urlService;
    public function __construct(ICrudService $crudService,IUrlService $urlService)
    {
        $this->crudService = $crudService;
        $this->urlService = $urlService;
    }

    public function index(){
        $urls = $this->crudService->findAll(Url::class);
        $languages = $this->crudService->findAll(Language::class);
        $menus = $this->crudService->findAll(Menu::class);
        return view('admin.urls.urls',with(compact('urls','languages','menus')));
    }
    public function store(Request $request){
        $request->validate([
            'url' => 'required',
            'menuId' => 'required',
            'languageId' => 'required',
        ]);


        $this->urlService->create($request);

        return redirect(route('urls.index'));
    }

    public function destroy(Request $request){
        $this->crudService->delete(Url::class,$request->id);
        return redirect(route('urls.index'));

    }

    public function destroyMany(Request $request){
        $ids = $request->ids;
        if(count($request->ids)>1){
            $this->crudService->deleteMany(Url::class,$request->ids);
        }
        return redirect(route('urls.index'));
    }

    public function update(Request $request){
        $data = array_filter($request->except(['_token']));
        $this->crudService->update(Url::class,$request->id,$data);
        return redirect(route('urls.index'));

    }
}
