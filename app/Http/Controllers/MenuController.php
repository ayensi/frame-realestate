<?php

namespace App\Http\Controllers;

use App\Http\Contracts\ICrudService;
use App\Http\Contracts\IMenuService;
use App\Models\Language;
use App\Models\Menu;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Integer;

class MenuController extends Controller
{
    private ICrudService $crudService;
    private IMenuService $menuService;
    public function __construct(ICrudService $crudService,IMenuService $menuService)
    {
        $this->crudService = $crudService;
        $this->menuService = $menuService;
    }
    public function index(){
        $menus = $this->crudService->findAll(Menu::class);
        return view('admin.menus.menu',with(compact('menus')));
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:menus',
        ]);
        $data = [

        ];
        if($request->isSubMenu){
            $data = [
                'name' => $request->name,
                'slug' => $request->slug,
                'isSubMenu' => 1,
                'parentId' => $request->parentId
            ];
        }
        else
            $data = [
                'name' => $request->name,
                'slug' => $request->slug,
                'isSubMenu' => 0,
            ];

        $this->crudService->create(Menu::class,$data);
        return redirect(route('menus.index'));
    }

    public function update(Request $request){
        $data = array_filter($request->except(['_token']));
        $this->crudService->update(Menu::class,$request->id,$data);
        return redirect(route('menus.index'));
    }

    public function orderUpdate(Request $request){
        $this->menuService->orderUpdate($request->idToUpdate,$request->orderToUpdate);
        return redirect(route('menus.index'));
    }

    public function destroy(Request $request){
        $this->crudService->delete(Menu::class,$request->id);
        return redirect(route('menus.index'));

    }

    public function destroyMany(Request $request){
        $ids = $request->ids;
        if(count($request->ids)>1){
            $this->crudService->deleteMany(Menu::class,$request->ids);
        }
        return redirect(route('menus.index'));
    }
}
