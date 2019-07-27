<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Configs extends Model
{
    protected $table = 'ay_configs';

    public function getValueAttribute($value)
    {
        if (strpos($this->image,'images') !== false ){
            return asset('/storage/'.$this->image);
        }
        return $value;
    }
}
