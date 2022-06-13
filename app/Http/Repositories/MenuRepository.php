<?php

namespace App\Http\Repositories;

use App\Models\Menu;

class MenuRepository
{
    public function orderUpdate($id,$order){
        $menu = Menu::find($id);
        error_log($menu->name);
        $menu->order = $order;
        $menu->save();
    }
    public function findWithSlug($slug){
        return Menu::where('slug',$slug)->first()->id;
    }
}
