<?php

namespace App\Http\Contracts;

interface IPropertyImageService
{
    public function saveImages($request,$propertyTr,$propertyEn);

}
