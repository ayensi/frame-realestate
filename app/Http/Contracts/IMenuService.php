<?php

namespace App\Http\Contracts;

interface IMenuService
{
    public function orderUpdate($id,$order);
    public function findWithSlug($slug);
}
