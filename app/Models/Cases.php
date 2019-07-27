<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    protected $table = 'ay_cases';

    protected $fillable = [
        'business_id','title','address','product','cover_url','content'
    ];

    public function getCoverUrlAttribute($value)
    {
        return asset('/storage/'.$value);
    }
}
