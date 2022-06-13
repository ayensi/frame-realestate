<?php

namespace App\Http\Controllers;

use App\Http\Contracts\ICrudService;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    private ICrudService $crudService;
    private IServiceService $serviceService;
    public function __construct(ICrudService $crudService)
    {
        $this->crudService = $crudService;

    }
    public function index(){
        $services = $this->crudService->findAll(Service::class);
        return view('admin.services.services',with(compact('services')));
    }
    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('images'), $imageName);

            $data = [
                'title' => $request->title,
                'image' => $imageName
            ];

        $this->crudService->create(Service::class,$data);
        return redirect(route('services.index'));
    }

    public function update(Request $request){
        $data = array_filter($request->except(['_token']));
        $this->crudService->update(Service::class,$request->id,$data);
        return redirect(route('services.index'));
    }

    public function orderUpdate(Request $request){
        $this->serviceService->orderUpdate($request->idToUpdate,$request->orderToUpdate);
        return redirect(route('services.index'));
    }

    public function destroy(Request $request){
        $this->crudService->delete(Service::class,$request->id);
        return redirect(route('services.index'));

    }

    public function destroyMany(Request $request){
        $ids = $request->ids;
        if(count($request->ids)>1){
            $this->crudService->deleteMany(Service::class,$request->ids);
        }
        return redirect(route('services.index'));
    }
}
