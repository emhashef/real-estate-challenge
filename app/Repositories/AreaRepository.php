<?php
namespace App\Repositories;

use App\Models\Area;
use App\Repositories\Repository;

class AreaRepository extends Repository
{
    function __construct(Area $model)
    {
        $this->model = $model;
    }
    
    public function all()
    {
        return $this->model->all();
    }

    public function create($area_name)
    {
        return $this->model->create([
            'name' => $area_name
        ]);
    }
}
