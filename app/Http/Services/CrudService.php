<?php

namespace App\Http\Services;

use App\Http\Contracts\ICrudService;
use App\Http\Repositories\CrudRepository;

class CrudService implements ICrudService
{
    private CrudRepository $crudRepository;
    public function __construct(CrudRepository $crudRepository)
    {
        $this->crudRepository = $crudRepository;
    }

    public function findAll($model)
    {
        return $this->crudRepository->findAll($model);
    }

    public function create($model,$data)
    {
        $this->crudRepository->create($model,$data);
    }

    public function delete($model, $id)
    {
        $this->crudRepository->delete($model,$id);
    }

    public function deleteMany($model, $ids)
    {
        $this->crudRepository->deleteMany($model,$ids);
    }


    public function update($model, $id, $data)
    {
        $this->crudRepository->update($model,$id,$data);
    }

    public function findAllByOrder($model)
    {
        return $this->crudRepository->findAllByOrder($model);
    }

    public function findOne($model,$id)
    {
        return $this->crudRepository->findOne($model,$id);
    }

    public function findWithMenuId($model, $id,$lId)
    {
        return $this->crudRepository->findWithMenuId($model,$id,$lId);
    }

    public function paginateAll($model, $count,$id)
    {
        return $this->crudRepository->paginateAll($model,$count,$id);
    }

    public function withCityId($model, $city_id)
    {
        return $this->crudRepository->withCityId($model,$city_id);
    }

    public function withId($model, $id)
    {
        return $this->crudRepository->withId($model,$id);
    }

    public function withLanguageId($model, $id, $lId)
    {
        return $this->crudRepository->withLanguageId($model,$id,$lId);
    }
}
