<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    protected $table = 'ay_cases';

    protected $fillable = [
        'sort_num','name','icon','icon_active'
    ];

    public function getCoverUrlAttribute($value)
    {
        return env('APP_URL').'/uploads/'.$value;
    }
}
