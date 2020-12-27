<?php

namespace App\Repositories;

use App\Models\PropertyPicture;
use Illuminate\Support\Facades\Storage;

class PropertyPictureRepository extends Repository
{
    function __construct(PropertyPicture $model) {
        $this->model = $model;
    }

    public function create($pictures, $property)
    {
        $results = [];
        foreach($pictures as $picture)
        {
            $hash_name = md5_file($picture->getRealPath());
            if(!Storage::disk('public')->exists('property_images/'.$hash_name)){ 

                $path = $picture->storeAs(
                    'property_images', $hash_name, 'public'
                );
            }else{
                $path = 'property_images/'.$hash_name; //TODO: could be better than this
            }
            $picture = $property->pictures()->create([
                'filename' => $path
            ]);
            $results[] = $picture;
        }

        return $results;
    }
}