<?php

namespace App\Http\Contracts;

interface ICrudService
{
    public function findAll($model);
    public function create($model,$data);
    public function delete($model,$id);
    public function deleteMany($model,$ids);
}
