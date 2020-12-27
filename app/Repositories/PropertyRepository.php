<?php
namespace App\Repositories;

use App\Models\Property;
use Illuminate\Support\Facades\Auth;

class PropertyRepository extends Repository
{

    function __construct(PropertyPictureRepository $picture, Property $model)
    {
        $this->picture = $picture;
        $this->model = $model;
    }

    public function userProperties()
    {
        return $this->getUser()->properties; 
    }

    public function create($data)
    {
        $property =  $this->model->create([
            'status' => 'checking',
            'user_id' => $this->getUser()->id
        ] + $data);
        $this->picture->create($data['pictures'],$property);
        return $property;
    }

    public function published()
    {
        return $this->model->where('status', 'accepted')->get();
    }
    

}