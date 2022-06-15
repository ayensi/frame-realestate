<?php

namespace App\Http\Controllers;

use App\Http\Contracts\ICrudService;
use App\Models\EstateType;
use Illuminate\Http\Request;

class EstateTypeController extends Controller
{
    private ICrudService $crudService;
    public function __construct(ICrudService $crudService)
    {
        $this->crudService = $crudService;
    }

    public function index(){
        $estate_types = $this->crudService->findAll(EstateType::class);
        return view('admin.estate_types.estate_type',with(compact('estate_types')));
    }
    public function store(Request $request){
        $request->validate([
            'estate_type' => 'required',
        ]);

        $data = $request->only('estate_type');

        $this->crudService->create(EstateType::class,$data);

        return redirect(route('estate_types.index'));
    }

    public function destroy(Request $request){
        $this->crudService->delete(EstateType::class,$request->id);
        return redirect(route('estate_types.index'));
    }

    public function destroyMany(Request $request){
        $ids = $request->ids;
        if(count($request->ids)>1){
            $this->crudService->deleteMany(EstateType::class,$request->ids);
        }
        return redirect(route('estate_types.index'));
    }

    public function update(Request $request){
        $data = array_filter($request->except(['_token']));
        $this->crudService->update(EstateType::class,$request->id,$data);
        return redirect(route('estate_types.index'));

    }
}
