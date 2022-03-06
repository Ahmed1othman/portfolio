<?php

namespace App\Http\Repositories\Eloquent;

use App\Http\Repositories\Interfaces\ActiveSectionRepoInterface;
use App\Http\Repositories\Eloquent\AbstractRepo;
use App\Models\ActiveSection;



class ActiveSectionRepo extends AbstractRepo implements ActiveSectionRepoInterface
{
    public function __construct()
    {
        parent::__construct(ActiveSection::class);
    }



}
