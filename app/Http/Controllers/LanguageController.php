<?php

namespace App\Http\Controllers;

use App\Http\Contracts\ICrudService;
use App\Models\Language;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    private ICrudService $crudService;
    public function __construct(ICrudService $crudService)
    {
        $this->crudService = $crudService;
    }

    public function index(){
        $languages = $this->crudService->findAll(Language::class);
        return view('admin.languages.language',with(compact('languages')));
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:languages',
        ]);

        $data = $request->only('name','slug');

        $this->crudService->create(Language::class,$data);

        return redirect(route('languages.index'));
    }

    public function destroy(Request $request,$ids){
        if(count($ids)>1){
            $this->crudService->deleteMany(Language::class,$ids);
        }
        else{
            $this->crudService->delete(Language::class,$request->id);
        }
        return redirect(route('languages.index'));

    }
}
