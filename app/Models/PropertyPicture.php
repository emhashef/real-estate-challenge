<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class PropertyPicture extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_id',
        'filename'
    ];

    public function url()
    {
        return Storage::disk('public')->url($this->filename);
    }
}
