<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $primaryKey = "id";
    public $incrementing = true;


    public function images(){
        return $this->hasMany(Image::class);
    }
    public function propertyStatus(){
        return $this->belongsTo(PropertyStatus::class,'id');
    }
    public function city(){
        return $this->belongsTo(City::class);
    }
    public function district(){
        return $this->belongsTo(District::class);
    }
    public function estateType(){
        return $this->belongsTo(EstateType::class,'id');
    }
    public function team(){
        return $this->belongsTo(Team::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function language(){
        return $this->belongsTo(Language::class);
    }
}
