<?php

namespace App\Http\Repositories;

class CrudRepository
{
    public function findAll($model){
        return $model::all();
    }
    public function create($model,$data){
        $obj = new $model($data);
        if($obj){
            $obj->save();
        }
    }
    public function delete($model,$id){
        $obj = $model::find($id);
        $obj->delete();
    }
    public function deleteMany($model,$ids){
        foreach ($ids as $id){
            $obj = $model::find($id);
            $obj->delete();
        }
    }
}
