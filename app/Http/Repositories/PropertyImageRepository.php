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

    public function saveImages($request,$property){
        $images = [];
        if($request->hasfile('images'))
        {
            foreach($request->file('images') as $image) {
                $imageName = time().'.'.$image->getClientOriginalName();
                $image->move(public_path('images'), $imageName);

                $pImage = PropertyImage::create([
                    'image' => $imageName,
                    'property_id' => $property->getOriginal('id')
                ]);
                $pImage->property()->associate($property);
                array_push($images,$pImage);
            }
        }
        return $images;
    }
}
