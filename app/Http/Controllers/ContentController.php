<?php

namespace App\Http\Controllers;

use App\Http\Contracts\ICrudService;
use App\Http\Contracts\IMenuService;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    private ICrudService $crudService;

    public function __construct(ICrudService $crudService)
    {
        $this->crudService = $crudService;
    }
    public function __construct()
    {
    }

    public function index(){

    }
    public function store(){

    }
}
