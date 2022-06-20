<?php

namespace App\Http\Repositories;

use App\Http\Contracts\ICrudService;
use App\Models\Property;
use App\Models\PropertyImage;
use Illuminate\Support\Str;

class PropertyImageRepository
{
    private ICrudService $crudService;
    public function __construct(ICrudService $crudService)
    {
        $this->crudService = $crudService;
    }

    public function saveImages($request,$propertyTr,$propertyEn){
        $images = [];
        if($request->hasfile('images'))
        {
            foreach($request->file('images') as $image) {
                $imageName = time().'.'.$image->getClientOriginalName();
                $image->move(public_path('images'), $imageName);
                if($propertyTr){
                    $pImage = PropertyImage::create([
                        'image' => $imageName,
                        'ad_number' => $propertyTr->ad_number
                    ]);
                }
                else{
                    $pImage = PropertyImage::create([
                        'image' => $imageName,
                        'ad_number' => $propertyEn->ad_number
                    ]);
                }
                if($propertyTr){
                    $pImage->property()->associate($propertyTr);
                }
                if($propertyEn){
                    $pImage->property()->associate($propertyEn);
                }
                array_push($images,$pImage);
            }
        }
        return $images;
    }
}
