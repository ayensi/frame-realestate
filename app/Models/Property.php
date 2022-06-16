<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $guarded = [''];
    protected $fillable = [
        'name',
        'team_id',
        'category_id',
        'description',
        'room_number',
        'bathroom_number',
        'property_age',
        'property_status',
        'floor_number',
        'value',
        'slug',
        'area',
        'status',
        'district_id',
        'estate_type',
        'ref_no',
        'register_status',
        'city_id',
        'which_floor',
        'language_id',
        'ad_number'
    ];


    public function images(){
        return $this->hasMany(PropertyImage::class,'ad_number','ad_number');
    }
    public function propertyStatus(){
        return $this->belongsTo(PropertyStatus::class,'property_status');
    }
    public function city(){
        return $this->belongsTo(City::class);
    }
    public function district(){
        return $this->belongsTo(District::class);
    }
    public function estateType(){
        return $this->belongsTo(EstateType::class,'estate_type');
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
