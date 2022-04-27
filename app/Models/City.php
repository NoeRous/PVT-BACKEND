<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\User;
use App\Models\Affiliate\Address;

class City extends Model
{
    public $timestamps = false;
    public $fillable = ['name', 'first_shortened', 'second_shortened', 'third_shortened', 'latitude', 'longitude'];

    public function getLatitudeAttribute($value)
    {
        return floatval($value);
    }

    public function getLongitudeAttribute($value)
    {
        return floatval($value);
    }
    public function users()    
    {
        return $this->hasMany(User::class);
    }
    public function addresses()                 
    {
        return $this->hasMany(Address::class,'city_address_id','id');
    }
}
