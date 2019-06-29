<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nav extends Model
{
    protected $table = 'ay_naves';

    protected $fillable = [
        'parent_id','sort_num','title','is_show','cover_url','url',
    ];

    protected $casts = [
        'is_show' => 'boolean',
    ];

    public function getCoverUrlAttribute($value)
    {
        return env('APP_URL').'/uploads/'.$value;
    }

    public function childs()
    {
        return $this->hasMany(self::class);
    }
}
