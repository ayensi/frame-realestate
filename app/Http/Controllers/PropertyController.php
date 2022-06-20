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
use Illuminate\Support\Str;
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
        $teams = $this->crudService->withId(Team::class,auth()->user()->id);
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
        $propertyTr = null;
        if($request->input('name-tr')){
            if(!$request->input('slug-tr')){
                $slug = Str::slug($request->input('name-tr'));
            }
            else{
                $slug = $request->input('slug-tr');
            }
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
                'slug' => $slug,
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
        $propertyEn = null;
        if($request->input(('name-en'))){
            if(!$request->input('slug-en')){
                $slug = Str::slug($request->input('name-en'));
            }
            else{
                $slug = $request->input('slug-en');
            }
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
                'slug' => $slug,
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
        if($propertyTr)
            $propertyTr->images()->saveMany($images);
        if($propertyEn){
            $propertyEn->images()->saveMany($images);
        }
        return redirect(route('properties.index'));
    }

    public function getOne(Request $request){
        $data['propertyTr'] = $this->crudService->withLanguageId(Property::class,$request->number,2);
        $data['propertyEn'] = $this->crudService->withLanguageId(Property::class,$request->number,4);
        return response()->json($data);
    }

    public function update(Request $request){
        $dataTr = null;
        if($request->input('name-tr')){
            $dataTr = array_filter($request->except(['_token','name-tr','desc-tr','slug-tr','name-en','desc-en','slug-en']));
            $dataTr['name'] = $request->input('name-tr');
            $dataTr['description'] = $request->input('desc-tr');
            if(!$request->input('slug'))
                $dataTr['slug'] = Str::slug($dataTr['name']);
            else
                $dataTr['slug'] = $request->input('slug');
        }
        $dataEn = null;
        if($request->input('name-en') && $request->input('desc-en')){

            $dataEn = array_filter($request->except(['_token','name-en','desc-en','slug-en','name-tr','desc-tr','slug-tr']));
            $dataEn['name'] = $request->input('name-en');
            $dataEn['description'] = $request->input('desc-en');
            if(!$request->input('slug'))
                $dataEn['slug'] = Str::slug($dataEn['name']);
            else
                $dataEn['slug'] = $request->input('slug');
        }

        $this->propertyService->update($dataTr,$dataEn);

        return redirect(route('properties.index'));

    }
}
