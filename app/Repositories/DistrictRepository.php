<?php

namespace App\Repositories;

use App\Repositories\Interfaces\DistrictRepositoryInterface;
use App\Models\District;

class DistrictRepository implements DistrictRepositoryInterface
{
    public function all() {
        return District::all();
    }
}
