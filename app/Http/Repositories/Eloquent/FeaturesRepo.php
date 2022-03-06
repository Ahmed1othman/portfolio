<?php
namespace App\Http\Repositories\Eloquent;
use App\Http\Repositories\Interfaces\featuresInterface;
use App\Models\feature;
use App\Models\Service;

class FeaturesRepo extends AbstractRepo implements featuresInterface
{
    public function __construct()
    {
        parent::__construct(feature::class);
    }

}
