<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExtraInformation extends Model
{
    protected $fillable = [
        'property_id', 'bedroom', 'bathroom', 'kitchen', 'window', 'balcony', 'living_room', 'dining_room', 'garage',
        'has_garden', 'has_rooftop', 'build_year', 'note'
    ];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
