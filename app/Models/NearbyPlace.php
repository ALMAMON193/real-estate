<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NearbyPlace extends Model
{
    protected $fillable = ['property_id', 'category', 'name', 'distance', 'rating', 'map_url'];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
