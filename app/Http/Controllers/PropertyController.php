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
use Nette\Utils\Random;

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
        $properties = $this->crudService->paginateAll(Property::class,32,auth()->user()->id);

        return view("admin.properties.property",with(compact('properties','categories','cities','districts','teams','property_statuses','estate_types','languages')));
    }

    public function store(Request $request){
        $random = random_int(1,1000000);
        $request->validate([
            'team_id' => 'required',
            'category_id' => 'required',
            'room_number' => 'required',
            'bathroom_number' => 'required',
            'property_age' => 'required',
            'property_status' => 'required',
            'floor_number' => 'required',
            'value' => 'required',
            'area' => 'required',
            'district_id' => 'required',
            'estate_type' => 'required',
            'ref_no' => 'required|unique:properties',
            'register_status' => 'required',
            'city_id' => 'required',
            'which_floor' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        if($request->input('name-tr')){
            $data = [
                'ad_number' => $random,
                'name' => $request->input('name-tr'),
                'team_id' => $request->team_id,
                'category_id' => $request->category_id,
                'description' => $request->input('desc-tr'),
                'room_number' => $request->room_number,
                'bathroom_number' => $request->bathroom_number,
                'property_age' => $request->property_age,
                'property_status' => $request->property_status,
                'floor_number' => $request->floor_number,
                'value' => $request->value,
                'slug' => $request->input('slug-tr'),
                'area' => $request->area,
                'status' => 1,
                'district_id' => $request->district_id,
                'estate_type' => $request->estate_type,
                'ref_no' => $request->ref_no,
                'register_status' => $request->register_status,
                'city_id' => $request->city_id,
                'which_floor' => $request->which_floor,
                'language_id' => 2,

            ];

            $propertyTr = $this->propertyService->create($data);
        }
        if($request->input(('name-en'))){
            $data = [
                'ad_number' => $random,
                'name' => $request->input('name-en'),
                'team_id' => $request->team_id,
                'category_id' => $request->category_id,
                'description' => $request->input('desc-en'),
                'room_number' => $request->room_number,
                'bathroom_number' => $request->bathroom_number,
                'property_age' => $request->property_age,
                'property_status' => $request->property_status,
                'floor_number' => $request->floor_number,
                'value' => $request->value,
                'slug' => $request->input('slug-en'),
                'area' => $request->area,
                'status' => 1,
                'district_id' => $request->district_id,
                'estate_type' => $request->estate_type,
                'ref_no' => $request->ref_no,
                'register_status' => $request->register_status,
                'city_id' => $request->city_id,
                'which_floor' => $request->which_floor,
                'language_id' => 4,
            ];

            $propertyEn = $this->propertyService->create($data);
        }
        $images = $this->imageService->saveImages($request,$propertyTr,$propertyEn);
        $propertyTr->images()->saveMany($images);
        $propertyEn->images()->saveMany($images);
        return redirect(route('properties.index'));
    }

    public function getOne(Request $request){
        $data['property'] = $this->crudService->findOne(Property::class,$request->property_id);
        return response()->json($data);
    }
}
