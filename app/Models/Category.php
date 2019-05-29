<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'parent_id','order','title','is_show',
    ];

    protected $casts = [
        'is_show' => 'boolean',
    ];

    public function childs()
    {
        return $this->hasMany(self::class);
    }
}
