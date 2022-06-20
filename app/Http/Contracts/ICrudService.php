<?php

namespace App\Http\Contracts;

interface ICrudService
{
    public function findAll($model);
    public function findOne($model,$id);
    public function findAllByOrder($model);
    public function create($model,$data);
    public function delete($model,$id);
    public function deleteMany($model,$ids);
    public function update($model,$id,$data);
    public function findWithMenuId($model,$id,$lId);
    public function paginateAll($model,$count,$id);
    public function withCityId($model,$city_id);
    public function withId($model,$id);
    public function withLanguageId($model,$id,$lId);

}
