<?php

namespace App\Http\Repositories;

use App\Models\Language;

class LanguageRepository
{
    public function findWithLanguageCode($code){
        return Language::where('slug',$code)->first();
    }
}
