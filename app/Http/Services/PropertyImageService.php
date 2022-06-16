<?php

namespace App\Http\Services;

use App\Http\Contracts\IPropertyImageService;
use App\Http\Repositories\PropertyImageRepository;

class PropertyImageService implements IPropertyImageService
{
    private PropertyImageRepository $imageRepository;
    public function __construct(PropertyImageRepository $imageRepository)
    {
        $this->imageRepository = $imageRepository;
    }

    public function saveImages($request,$propertyTr,$propertyEn)
    {
        return $this->imageRepository->saveImages($request,$propertyTr,$propertyEn);
    }
}
