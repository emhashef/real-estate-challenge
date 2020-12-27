<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    public const TYPES = [
        'villa' => 'Villa',
        'apartment' => 'Apartment',
        'garden' => 'Garden'
    ];


    protected $fillable = [
        'title',
        'area_id',
        'status',
        'type',
        'description',
        'user_id'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    /**
     * get pictures models of property
     *
     * @return array
     */
    public function pictures()
    {
        return $this->hasMany(PropertyPicture::class);
    }

    /**
     * get area record of property
     *
     * @return Area
     */
    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function getTypeLabelAttribute()
    {
        //TODO: add exception for unknown types
        return self::TYPES[$this->type];
    }

    public function accept()
    {
        // TODO: move statuses to constraints
        return $this->update(['status' => 'accepted']);
    }
}
