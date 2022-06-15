<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    protected $guarded = [''];

    public function properties(){
        $this->hasMany(Property::class);
    }

    public function city()
    {
        $this->belongsTo(City::class);
    }
}
