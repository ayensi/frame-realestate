<?php

namespace App\Http\Controllers;

use App\Http\Contracts\ICrudService;
use App\Http\Contracts\IDistrictService;
use App\Models\City;
use App\Models\District;
use App\Models\Language;
use Illuminate\Http\Request;

class DistrictController extends Controller
{

    private IDistrictService $districtService;
    private ICrudService $crudService;

    public function __construct(IDistrictService $districtService,ICrudService $crudService)
    {
        $this->districtService = $districtService;
        $this->crudService = $crudService;
    }

    public function index(){
        $cities = $this->crudService->findAll(City::class);
        $districts = $this->crudService->findAll(District::class);
        return view('admin.districts.districts',with(compact('districts','cities')));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'city_id' => 'required'
        ]);

        $this->districtService->create($request);

        return redirect(route('districts.index'));
    }
}
