<?php

namespace App\Http\Repositories\Eloquent;

use App\Http\Repositories\Interfaces\newsRepoInterface;
use App\Models\news;

class newsRepo extends AbstractRepo implements newsRepoInterface
{
    public function __construct()
    {
        parent::__construct(news::class);
    }


}
