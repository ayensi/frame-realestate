<?php

namespace App\Http\Contracts;

interface IPropertyService
{
    public function create($data,$request);
    public function findAllWithLanguageId($lId);
    public function findAllWithLanguageIdAndCityId($lId,$city_id);
}
