<?php

namespace App\Http\Controllers;

use App\Http\Contracts\ICrudService;
use App\Models\Language;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    private ICrudService $crudService;
    public function __construct(ICrudService $crudService)
    {
        $this->crudService = $crudService;
    }
    public function index(){
        $sliders = $this->crudService->findAll(Slider::class);
        return view('admin.sliders.slider',with(compact('sliders')));
    }
    public function store(Request $request){
        $request->validate([
            'welcometext' => 'required',
            'slidertext' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $data = $request->only('welcometext','slidertext');
        $data['status'] = 1;
        $data['welcome_text'] = $request->welcometext;
        $data['slider_text'] = $request->slidertext;
        $imageName="";

        if($request->image){
            $imageName = time().'.'.$request->image->extension();

            $request->image->move(public_path('images'), $imageName);

        }
        $data['image'] = $imageName;

        $this->crudService->create(Slider::class,$data);

        return redirect(route('sliders.index'));
    }

    public function destroy(Request $request){
        $this->crudService->delete(Slider::class,$request->id);
        return redirect(route('sliders.index'));

    }

    public function destroyMany(Request $request){
        $ids = $request->ids;
        if(count($request->ids)>1){
            $this->crudService->deleteMany(Slider::class,$request->ids);
        }
        return redirect(route('sliders.index'));
    }

    public function update(Request $request){
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $data = array_filter($request->except(['_token','image','welcometext','slidertext']));
        $imageName="";
        $data['welcome_text'] = $request->welcometext;
        $data['slider_text'] = $request->slidertext;
        if($request->image){
            $imageName = time().'.'.$request->image->extension();

            $request->image->move(public_path('images'), $imageName);
            $data['image'] = $imageName;

        }

        $this->crudService->update(Slider::class,$request->id,$data);
        return redirect(route('sliders.index'));

    }
}
