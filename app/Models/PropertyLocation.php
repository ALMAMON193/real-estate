<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyLocation extends Model
{
    protected $fillable = ['property_id', 'address', 'city', 'state', 'zip', 'country', 'latitude', 'longitude'];

    public function property(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Property::class);
    }
}
