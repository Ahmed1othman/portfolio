<?php

namespace App\Http\Repositories\Eloquent;

use App\Http\Repositories\Interfaces\projectsRepoInterface;
use App\Models\project;


class projectsRepo extends AbstractRepo implements projectsRepoInterface
{
    public function __construct()
    {
        parent::__construct(project::class);
    }

}
