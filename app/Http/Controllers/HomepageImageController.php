<?php

namespace App\Http\Controllers;

use App\Http\Contracts\ICrudService;
use App\Models\HomepageImage;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomepageImageController extends Controller
{
    private ICrudService $crudService;
    public function __construct(ICrudService $crudService)
    {
        $this->crudService = $crudService;
    }
    public function index(){
        $homepageimages = $this->crudService->findAll(HomepageImage::class);
        return view('admin.homepageimages.homepageimages',with(compact('homepageimages')));
    }
    public function store(Request $request){
        $request->validate([
            'text' => 'required',
            'order' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $data = $request->only('text','order');
        $imageName="";

        if($request->image){
            $imageName = time().'.'.$request->image->extension();

            $request->image->move(public_path('images'), $imageName);

        }
        $data['image'] = $imageName;

        $this->crudService->create(HomepageImage::class,$data);

        return redirect(route('homepageimages.index'));
    }

    public function destroy(Request $request){
        $this->crudService->delete(Slider::class,$request->id);
        return redirect(route('homepageimages.index'));

    }

    public function destroyMany(Request $request){
        $ids = $request->ids;
        if(count($request->ids)>1){
            $this->crudService->deleteMany(Slider::class,$request->ids);
        }
        return redirect(route('homepageimages.index'));
    }

    public function update(Request $request){
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $data = array_filter($request->except(['_token','image','welcometext','homepageimagetext']));
        $imageName="";
        $data['welcome_text'] = $request->welcometext;
        $data['homepageimage_text'] = $request->homepageimagetext;
        if($request->image){
            $imageName = time().'.'.$request->image->extension();

            $request->image->move(public_path('images'), $imageName);
            $data['image'] = $imageName;

        }

        $this->crudService->update(Slider::class,$request->id,$data);
        return redirect(route('homepageimages.index'));

    }
}
