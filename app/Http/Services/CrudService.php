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
}
