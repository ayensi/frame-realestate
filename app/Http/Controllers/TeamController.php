<?php

namespace App\Http\Controllers;

use App\Http\Contracts\ICrudService;
use App\Models\team;
use App\Models\Language;
use App\Models\Menu;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    private ICrudService $crudService;


    public function __construct(ICrudService $crudService)
    {
        $this->crudService = $crudService;
    }

    public function index(){
        $teams = $this->crudService->findAll(Team::class);
        return view('admin.teams.team',with(compact('teams')));
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'tag' => 'required',
            'mobile' => 'required',
            'office' => 'required',
            'email' => 'required|email',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('images'), $imageName);
        $data = [
            'name' => $request->name,
            'tag' => $request->tag,
            'mobile' => $request->mobile,
            'office' => $request->office,
            'email' => $request->email,
            'image' => $imageName
        ];
        $this->crudService->create(Team::class,$data);
        return redirect(route('teams.index'));
    }

    public function destroy(Request $request){
        $this->crudService->delete(Team::class,$request->id);
        return redirect(route('teams.index'));

    }

    public function destroyMany(Request $request){
        $ids = $request->ids;
        if(count($request->ids)>1){
            $this->crudService->deleteMany(Team::class,$request->ids);
        }
        return redirect(route('teams.index'));
    }

    public function update(Request $request){
        $data = array_filter($request->except(['_token']));
        $this->crudService->update(Team::class,$request->id,$data);
        return redirect(route('teams.index'));

    }
}
