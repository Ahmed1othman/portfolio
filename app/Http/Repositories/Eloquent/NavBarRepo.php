<?php

namespace App\Http\Repositories\Eloquent;

use App\Http\Repositories\Interfaces\NavBarRepoInterface;
use App\Http\Repositories\Eloquent\AbstractRepo;
use App\Models\NavBar;



class NavBarRepo extends AbstractRepo implements NavBarRepoInterface
{
    public function __construct()
    {
        parent::__construct(NavBar::class);
    }



}
