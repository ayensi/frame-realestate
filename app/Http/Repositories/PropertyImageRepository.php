<?php

namespace App\Http\Repositories;

use App\Http\Contracts\ICrudService;
use App\Models\Property;
use App\Models\PropertyImage;

class PropertyImageRepository
{
    private ICrudService $crudService;
    public function __construct(ICrudService $crudService)
    {
        $this->crudService = $crudService;
    }

    public function saveImages($request,$property){
        if($request->hasfile('images'))
        {
            foreach($request->file('images') as $image) {

                $name = $image->getClientOriginalName();
                $image->move(public_path() . '/images/', $name);
                $pImage = PropertyImage::create([
                    'image' => $name,
                    'property_id' => $property->getOriginal('id')
                ]);
                $pImage->property()->associate($property);
                $pImage->save();
            }
        }
    }
}
