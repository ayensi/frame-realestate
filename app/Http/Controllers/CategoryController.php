<?php

namespace App\Http\Controllers;

use App\Http\Contracts\ICrudService;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private ICrudService $crudService;
    public function __construct(ICrudService $crudService)
    {
        $this->crudService = $crudService;
    }

    public function index(){
        $categories = $this->crudService->findAll(Category::class);
        return view('admin.categories.category',with(compact('categories')));
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
        ]);

        $data = $request->only('name');

        $this->crudService->create(Category::class,$data);

        return redirect(route('categories.index'));
    }

    public function destroy(Request $request){
        $this->crudService->delete(Category::class,$request->id);
        return redirect(route('categories.index'));
    }

    public function destroyMany(Request $request){
        $ids = $request->ids;
        if(count($request->ids)>1){
            $this->crudService->deleteMany(Category::class,$request->ids);
        }
        return redirect(route('categories.index'));
    }

    public function update(Request $request){
        $data = array_filter($request->except(['_token']));
        $this->crudService->update(Category::class,$request->id,$data);
        return redirect(route('categories.index'));

    }
}
