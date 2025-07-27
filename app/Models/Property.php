<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'property_id','title', 'description', 'status', 'price', 'area'
    ];

    public function images()
    {
        return $this->hasMany(PropertyImage::class);
    }

    public function videos()
    {
        return $this->hasMany(PropertyVideo::class);
    }

    public function nearbyPlaces()
    {
        return $this->hasMany(NearbyPlace::class);
    }

    public function location()
    {
        return $this->hasOne(propertyLocation::class);
    }

    public function contact()
    {
        return $this->hasOne(ContactInformation::class);
    }

    public function extraInformation()
    {
        return $this->hasOne(ExtraInformation::class);
    }

    public function features()
    {
        return $this->hasMany(PropertyFeature::class);
    }
}
