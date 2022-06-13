<?php

namespace App\Http\Services;

use App\Http\Contracts\IMenuService;
use App\Http\Repositories\MenuRepository;

class MenuService implements IMenuService
{
    private MenuRepository $menuRepository;

    public function __construct(MenuRepository $menuRepository)
    {
        $this->menuRepository = $menuRepository;
    }

    public function orderUpdate($id, $order)
    {
        $this->menuRepository->orderUpdate($id,$order);
    }

    public function findWithSlug($slug)
    {
        return $this->menuRepository->findWithSlug($slug);
    }
}
