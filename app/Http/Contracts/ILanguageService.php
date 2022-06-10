<?php

namespace App\Http\Contracts;

interface ILanguageService
{
    public function findWithLanguageCode($code);
}
