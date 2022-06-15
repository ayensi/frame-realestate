<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $guarded = [''];

    public function images(){
        $this->hasMany(Image::class);
    }
    public function propertyStatus(){
        $this->belongsTo(PropertyStatus::class);
    }
    public function city(){
        $this->belongsTo(City::class);
    }
    public function district(){
        $this->belongsTo(District::class);
    }
    public function estateType(){
        $this->belongsTo(EstateType::class);
    }
    public function team(){
        $this->belongsTo(Team::class);
    }
    public function category(){
        $this->belongsTo(Category::class);
    }
    public function language(){
        $this->belongsTo(Language::class);
    }
}
