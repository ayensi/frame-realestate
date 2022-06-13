<?php

namespace App\Http\Services;

use App\Http\Contracts\IUrlService;
use App\Http\Repositories\UrlRepository;

class UrlService implements IUrlService
{
    private UrlRepository $urlRepository;
    public function __construct(UrlRepository $urlRepository)
    {
        $this->urlRepository = $urlRepository;
    }

    public function create($request)
    {
        $this->urlRepository->create($request);
    }

    public function findMenuWithUrl($url)
    {
        return $this->urlRepository->findMenuWithUrl($url);
    }
}
