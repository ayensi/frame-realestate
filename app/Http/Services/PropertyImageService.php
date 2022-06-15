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

    public function saveImages($request,$property)
    {
        $this->imageRepository->saveImages($request,$property);
    }
}
