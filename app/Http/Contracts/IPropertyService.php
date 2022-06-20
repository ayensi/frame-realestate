<?php

namespace App\Http\Contracts;

interface IPropertyService
{
    public function create($data);
    public function findAllWithLanguageId($lId);
    public function findAllWithLanguageIdAndCityId($lId,$city_id);
    public function update($dataTr,$dataEn);
}
