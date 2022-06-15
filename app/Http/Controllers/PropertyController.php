<?php

namespace App\Http\Controllers;

use App\Http\Contracts\ICrudService;
use App\Http\Contracts\IPropertyImageService;
use App\Http\Contracts\IPropertyService;
use App\Models\Category;
use App\Models\City;
use App\Models\District;
use App\Models\EstateType;
use App\Models\Language;
use App\Models\Property;
use App\Models\PropertyStatus;
use App\Models\Team;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    private IPropertyService $propertyService;
    private IPropertyImageService $imageService;
    private ICrudService $crudService;
    public function __construct(IPropertyService $propertyService,ICrudService $crudService,IPropertyImageService $imageService)
    {
        $this->propertyService = $propertyService;
        $this->crudService = $crudService;
        $this->imageService = $imageService;
    }
    public function index(){

        $categories = $this->crudService->findAll(Category::class);
        $cities = $this->crudService->findAll(City::class);
        $districts = $this->crudService->findAll(District::class);
        $teams = $this->crudService->findAll(Team::class);
        $property_statuses = $this->crudService->findAll(PropertyStatus::class);
        $estate_types = $this->crudService->findAll(EstateType::class);
        $languages = $this->crudService->findAll(Language::class);
        $properties = $this->crudService->paginateAll(Property::class,32);

        return view("admin.properties.property",with(compact('properties','categories','cities','districts','teams','property_statuses','estate_types','languages')));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'team_id' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'room_number' => 'required',
            'bathroom_number' => 'required',
            'property_age' => 'required',
            'property_status' => 'required',
            'floor_number' => 'required',
            'value' => 'required',
            'slug' => 'required',
            'area' => 'required',
            'district_id' => 'required',
            'estate_type' => 'required',
            'ref_no' => 'required',
            'register_status' => 'required',
            'city_id' => 'required',
            'which_floor' => 'required',
            'language_id' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $data = [
            'name' => $request->name,
            'team_id' => $request->team_id,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'room_number' => $request->room_number,
            'bathroom_number' => $request->bathroom_number,
            'property_age' => $request->property_age,
            'property_status' => $request->property_status,
            'floor_number' => $request->floor_number,
            'value' => $request->value,
            'slug' => $request->slug,
            'area' => $request->area,
            'status' => 1,
            'district_id' => $request->district_id,
            'estate_type' => $request->estate_type,
            'ref_no' => $request->ref_no,
            'register_status' => $request->register_status,
            'city_id' => $request->city_id,
            'which_floor' => $request->which_floor,
            'language_id' => $request->language_id,
        ];



        $property = $this->propertyService->create($data);
        $this->imageService->saveImages($request,$property);

        return redirect(route('properties.index'));
    }
}
