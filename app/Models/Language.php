<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;
    protected $guarded=[''];
    protected $fillable = [
        'name',
        'slug'
    ];
    public function contents(){
        return $this->hasMany(Content::class);
    }
    public function urls(){
        return $this->hasMany(Url::class,'language_id');
    }
}
