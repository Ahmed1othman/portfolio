<?php

namespace App\Http\Repositories\Eloquent;
use App\Http\Repositories\Interfaces\ServicesRepoInterface;
use App\Models\Service;

class ServicesRepo extends AbstractRepo implements ServicesRepoInterface
{
    public function __construct()
    {
        parent::__construct(Service::class);
    }

}
