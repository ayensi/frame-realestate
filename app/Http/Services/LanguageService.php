<?php

namespace App\Http\Services;

use App\Http\Contracts\ILanguageService;
use App\Http\Repositories\LanguageRepository;

class LanguageService implements ILanguageService
{
    private LanguageRepository $languageRepository;
    public function __construct(LanguageRepository $languageRepository)
    {
        $this->languageRepository = $languageRepository;
    }

    public function findWithLanguageCode($code)
    {
        return $this->languageRepository->findWithLanguageCode($code);
    }
}
