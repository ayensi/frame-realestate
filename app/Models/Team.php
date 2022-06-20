<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Team extends Authenticatable
{
    use HasFactory, HasFactory, Notifiable;

    protected $hidden = [
        'password',
    ];

    protected $guarded = ['id'];

    public function properties(){
        return $this->hasMany(Property::class);
    }
}
