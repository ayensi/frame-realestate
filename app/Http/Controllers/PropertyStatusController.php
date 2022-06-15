<?php

namespace App\Http\Controllers;

use App\Http\Contracts\ICrudService;
use App\Models\PropertyStatus;
use Illuminate\Http\Request;

class PropertyStatusController extends Controller
{
    private ICrudService $crudService;
    public function __construct(ICrudService $crudService)
    {
        $this->crudService = $crudService;
    }

    public function index(){
        $property_statuses = $this->crudService->findAll(PropertyStatus::class);
        return view('admin.property_statuses.property_status',with(compact('property_statuses')));
    }
    public function store(Request $request){
        $request->validate([
            'property_status' => 'required',
        ]);

        $data = $request->only('property_status');

        $this->crudService->create(PropertyStatus::class,$data);

        return redirect(route('property_statuses.index'));
    }

    public function destroy(Request $request){
        $this->crudService->delete(PropertyStatus::class,$request->id);
        return redirect(route('property_statuses.index'));
    }

    public function destroyMany(Request $request){
        $ids = $request->ids;
        if(count($request->ids)>1){
            $this->crudService->deleteMany(PropertyStatus::class,$request->ids);
        }
        return redirect(route('property_statuses.index'));
    }

    public function update(Request $request){
        $data = array_filter($request->except(['_token']));
        $this->crudService->update(PropertyStatus::class,$request->id,$data);
        return redirect(route('property_statuses.index'));

    }
}
