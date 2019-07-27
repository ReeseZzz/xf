<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resources extends Model
{
    const TYPE_LOGO = 1;
    const TYPE_CERT = 2;
    const TYPE_TITLE = 3;

    const TYPE = [
        self::TYPE_LOGO => '合作伙伴Logo',
        self::TYPE_CERT => '证书',
        self::TYPE_TITLE => '资质',
    ];
    protected $table = 'ay_resources';
    /**
     * 只包含合作logo的查询作用域
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeLogo($query)
    {
        return $query->where('type', self::TYPE_LOGO);
    }

    /**
     * 只包含证书的查询作用域
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeCert($query)
    {
        return $query->where('type', self::TYPE_CERT);
    }
    /**
     * 只包含资质的查询作用域
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeTitle($query)
    {
        return $query->where('type', self::TYPE_TITLE);
    }

    public function getUrlAttribute($value)
    {
        return asset('/storage/'.$value);
    }
}
