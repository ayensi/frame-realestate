<?php

namespace App\Http\Services;
use Illuminate\Http\Request;
use App\Http\Contracts\IContentService;
use App\Http\Repositories\ContentRepository;

class ContentService implements IContentService
{
    private ContentRepository $contentRepository;
    public function __construct(ContentRepository $contentRepository)
    {
        $this->contentRepository = $contentRepository;
    }
    public function create(Request $request)
    {
        $this->contentRepository->create($request);
    }


    public function findWithMenuAndLanguage($mId, $lId)
    {
        return $this->contentRepository->findWithMenuAndLanguage($mId,$lId);
    }
}
