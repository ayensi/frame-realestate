<?php

namespace App\Http\Services;

use App\Http\Contracts\IPropertyService;
use App\Http\Repositories\PropertyRepository;

class PropertyService implements IPropertyService
{
    private PropertyRepository $propertyRepository;
    public function __construct(PropertyRepository $propertyRepository)
    {
        $this->propertyRepository = $propertyRepository;
    }

    public function create($data,$request)
    {
        return $this->propertyRepository->create($data,$request);
    }

    public function findAllWithLanguageId($lId)
    {
        return $this->propertyRepository->findAllWithLanguageId($lId);
    }

    public function findAllWithLanguageIdAndCityId($lId, $city_id)
    {
        return $this->propertyRepository->findAllWithLanguageIdAndCityId($lId,$city_id);
    }
}
