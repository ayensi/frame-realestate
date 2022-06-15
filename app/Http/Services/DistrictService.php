<?php

namespace App\Http\Services;

use App\Http\Contracts\IDistrictService;
use App\Http\Repositories\DistrictRepository;

class DistrictService implements IDistrictService
{
    private DistrictRepository $districtRepository;
    public function __construct(DistrictRepository $districtRepository)
    {
        $this->districtRepository = $districtRepository;
    }

    public function create($request)
    {
        $this->districtRepository->create($request);
    }
}
