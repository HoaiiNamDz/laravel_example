<?php

namespace App\Repositories\Interfaces;

interface WardRepositoryInterface
{
    public function all();
    public function findWardsByDistrictId(int $district_id);
}
