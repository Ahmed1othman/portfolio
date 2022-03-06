<?php

namespace App\Http\Repositories\Eloquent;

use App\Http\Repositories\Interfaces\CustomRepoInterface;
use App\Http\Repositories\Eloquent\AbstractRepo;
use App\Models\Custom;



class CustomRepo extends AbstractRepo implements CustomRepoInterface
{
    public function __construct()
    {
        parent::__construct(Custom::class);
    }



}
