<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $table = 'ay_business';

    protected $fillable = [
       'business_id', 'title', 'content', 'sort_num',
    ];
}
