<?php

namespace App\Http\Controllers;

use App\Http\Contracts\ICrudService;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    private ICrudService $crudService;
    public function __construct(ICrudService $crudService)
    {
        $this->crudService = $crudService;
    }

    public function index(){
        $cities = $this->crudService->findAll(City::class);
        return view('admin.cities.city',with(compact('cities')));
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
        ]);

        $data = $request->only('name');

        $this->crudService->create(City::class,$data);

        return redirect(route('cities.index'));
    }

    public function destroy(Request $request){
        $this->crudService->delete(City::class,$request->id);
        return redirect(route('cities.index'));
    }

    public function destroyMany(Request $request){
        $ids = $request->ids;
        if(count($request->ids)>1){
            $this->crudService->deleteMany(City::class,$request->ids);
        }
        return redirect(route('cities.index'));
    }

    public function update(Request $request){
        $data = array_filter($request->except(['_token']));
        $this->crudService->update(City::class,$request->id,$data);
        return redirect(route('cities.index'));

    }
}
