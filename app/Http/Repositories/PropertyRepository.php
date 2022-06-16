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

    public function create($data,$request){
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

        $images = $this->propertyImageRepository->saveImages($request,$property);
        $property->images()->saveMany($images);
    }

    public function findAllWithLanguageId($lId){
        return Property::where('language_id',$lId)->get();
    }

    public function findAllWithLanguageIdAndCityId($lId,$city_id){
        return Property::where('language_id',$lId)->where('city_id',$city_id)->get();
    }
}
