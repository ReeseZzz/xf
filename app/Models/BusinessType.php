<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusinessType extends Model
{
    protected $table = 'ay_business_types';

    protected $fillable = [
        'sort_num','name','icon','icon_active'
    ];

    public function getIconAttribute($value)
    {
        return asset('/storage/'.$value);
    }
    public function getIconActiveAttribute($value)
    {
        return asset('/storage/'.$value);
    }

    public function business()
    {
        return $this->hasMany(Business::class,'business_id','id');
    }
    public function cases()
    {
        return $this->hasMany(Cases::class,'business_id','id');
    }
}
