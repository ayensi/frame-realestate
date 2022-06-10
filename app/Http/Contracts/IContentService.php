<?php

namespace App\Http\Contracts;

use Illuminate\Http\Request;

interface IContentService
{
    public function create(Request $request);
    public function findWithMenuAndLanguage($mId,$lId);
}
