<?php

namespace App\Http\Repositories;

use App\Models\City;
use App\Models\District;
use App\Models\Language;
use App\Models\Menu;
use App\Models\Url;

class DistrictRepository
{
    private CrudRepository $crudRepository;

    public function __construct(CrudRepository $crudRepository)
    {
        $this->crudRepository = $crudRepository;
    }

    public function create($request){
        $district = District::create([
            'name' => $request->name,
            'city_id' => $request->city_id,
        ]);
        $city = $this->crudRepository->findOne(City::class,$request->city_id);
        $district->city()->associate($city);
        $district->save();
    }
}
