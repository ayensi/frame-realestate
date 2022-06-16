<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyImage extends Model
{
    use HasFactory;

    protected $guarded = [''];
    protected $fillable = [
        'image',
        'ad_number'
    ];

    public function property(){
        return $this->belongsTo(Property::class,'ad_number','ad_number');
    }
}
