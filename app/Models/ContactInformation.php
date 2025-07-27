<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactInformation extends Model
{
    protected $fillable = ['property_id', 'name', 'user_name', 'email', 'phone'];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
