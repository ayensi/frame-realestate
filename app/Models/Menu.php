<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $guarded=[''];
    protected $fillable = [
        'name',
        'slug',
        'isSubMenu',
        'parentId'
    ];
    protected $casts = [
      'isSubMenu' => 'boolean'
    ];
    protected $table = 'menus';
    public $timestamps = false;
    public function contents(){
        return $this->hasMany(Content::class);
    }
    public function submenus()
    {
        return $this->hasMany(Menu::class,'parentId');
    }
    public function parentmenu()
    {
        return $this->belongsTo(Menu::class,'parentId');
    }
    public function urls(){
        return $this->hasMany(Url::class,'menu_id');
    }
    public function url(){
        return $this->hasOne(Url::class,'menu_id');
    }
}
