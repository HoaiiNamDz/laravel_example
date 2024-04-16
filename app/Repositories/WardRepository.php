<?php

namespace App\Repositories;

use App\Repositories\Interfaces\WardRepositoryInterface;
use App\Repositories\BaseRepository;
use App\Models\Ward;

class WardRepository extends BaseRepository implements WardRepositoryInterface
{
    protected $model;

    public function __construct(
        Ward $model
    ) {
        $this->model = $model;
    }
}
