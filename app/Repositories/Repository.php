<?php
namespace App\Repositories;

use Illuminate\Support\Facades\Auth;

class Repository
{
    public function all()
    {
        return $this->model->all();
    }

    public function getUser()
    {
        return Auth::user();
    }

}