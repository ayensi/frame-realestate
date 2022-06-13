<?php

namespace App\Http\Contracts;

interface IUrlService
{
    public function create($request);
    public function findMenuWithUrl($url);
}
