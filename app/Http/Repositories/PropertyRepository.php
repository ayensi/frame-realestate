<?php

namespace App\Http\Repositories;

use App\Models\Category;
use App\Models\City;
use App\Models\Content;
use App\Models\District;
use App\Models\EstateType;
use App\Models\Language;
use App\Models\Property;
use App\Models\PropertyStatus;
use App\Models\Team;

class PropertyRepository
{
    private CrudRepository $crudRepository;
    private PropertyImageRepository $propertyImageRepository;
    public function __construct(CrudRepository $crudRepository,PropertyImageRepository $propertyImageRepository)
    {
        $this->crudRepository = $crudRepository;
        $this->propertyImageRepository = $propertyImageRepository;
    }

    public function create($data){
        //$property = Property::create($data);
        $property = Property::create($data);

        $language = $this->crudRepository->findOne(Language::class,$data['language_id']);
        $team = $this->crudRepository->findOne(Team::class,$data['team_id']);
        $category = $this->crudRepository->findOne(Category::class,$data['category_id']);
        $property_status = $this->crudRepository->findOne(PropertyStatus::class,$data['property_status']);
        $estate_type = $this->crudRepository->findOne(EstateType::class,$data['estate_type']);
        $district = $this->crudRepository->findOne(District::class,$data['district_id']);
        $city = $this->crudRepository->findOne(City::class,$data['city_id']);


        $property->language()->associate($language);
        $property->team()->associate($team);
        $property->category()->associate($category);
        $property->propertyStatus()->associate($property_status);
        $property->estateType()->associate($estate_type);
        $property->district()->associate($district);
        $property->city()->associate($city);
        return $property;
    }

    public function update($dataTr,$dataEn){

        if($dataTr)
            Property::updateOrCreate(['ad_number' => $dataTr['ad_number'],'language_id' => 2],$dataTr);
        if($dataEn)
            Property::updateOrCreate(['ad_number' => $dataTr['ad_number'],'language_id' => 4],$dataEn);

        $propertyTr = Property::where('ad_number',$dataTr['ad_number'])->where('language_id',2)->get();
        $propertyEn = Property::where('ad_number',$dataTr['ad_number'])->where('language_id',4)->get();



        if($dataTr['team_id'])
            $team = $this->crudRepository->findOne(Team::class,$dataTr['team_id']);
        if($dataTr['category_id'])
            $category = $this->crudRepository->findOne(Category::class,$dataTr['category_id']);
        if($dataTr['property_status'])
            $property_status = $this->crudRepository->findOne(PropertyStatus::class,$dataTr['property_status']);
        if($dataTr['estate_type'])
            $estate_type = $this->crudRepository->findOne(EstateType::class,$dataTr['estate_type']);
        if($dataTr['district_id'])
            $district = $this->crudRepository->findOne(District::class,$dataTr['district_id']);
        if($dataTr['city_id'])
            $city = $this->crudRepository->findOne(City::class,$dataTr['city_id']);

        if(count($propertyTr)>0){
            if($team)
                $propertyTr[0]->team()->associate($team);
            if($category)
                $propertyTr[0]->category()->associate($category);
            if($property_status)
                $propertyTr[0]->propertyStatus()->associate($property_status);
            if($estate_type)
                $propertyTr[0]->estateType()->associate($estate_type);
            if($district)
                $propertyTr[0]->district()->associate($district);
            if($city)
                $propertyTr[0]->city()->associate($city);
        }
        if(count($propertyEn)>0){
            if($team)
                $propertyEn[0]->team()->associate($team);
            if($category)
                $propertyEn[0]->category()->associate($category);
            if($property_status)
                $propertyEn[0]->propertyStatus()->associate($property_status);
            if($estate_type)
                $propertyEn[0]->estateType()->associate($estate_type);
            if($district)
                $propertyEn[0]->district()->associate($district);
            if($city)
                $propertyEn[0]->city()->associate($city);
        }

        return $propertyTr;
    }

    public function findAllWithLanguageId($lId){
        return Property::where('language_id',$lId)->get();
    }

    public function findAllWithLanguageIdAndCityId($lId,$city_id){
        return Property::where('language_id',$lId)->where('city_id',$city_id)->get();
    }

}
