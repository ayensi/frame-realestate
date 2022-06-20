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

    public function create($data)
    {
        return $this->propertyRepository->create($data);
    }

    public function findAllWithLanguageId($lId)
    {
        return $this->propertyRepository->findAllWithLanguageId($lId);
    }

    public function findAllWithLanguageIdAndCityId($lId, $city_id)
    {
        return $this->propertyRepository->findAllWithLanguageIdAndCityId($lId,$city_id);
    }

    public function update($dataTr,$dataEn)
    {
        return $this->propertyRepository->update($dataTr,$dataEn);
    }
}
