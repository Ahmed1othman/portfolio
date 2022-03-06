<?php

namespace App\Http\Repositories\Eloquent;

use App\Http\Repositories\Interfaces\CustomRepoInterface;
use App\Http\Repositories\Eloquent\AbstractRepo;
use App\Http\Repositories\Interfaces\PageSectionRepoInterface;
use App\Models\Custom;
use App\Models\PageSection;


class PageSectionRepo extends AbstractRepo implements PageSectionRepoInterface
{
    public function __construct()
    {
        parent::__construct(PageSection::class);
    }



}
