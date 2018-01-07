<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 2018/1/4
 * Time: 23:36
 */

namespace app\api\model;


class Banner extends BaseModel
{
    protected $hidden = ['id', 'delete_time', 'update_time'];
    public function items()
    {
        return $this->hasMany('BannerItem', 'banner_id', 'id');
    }
    public static function getBannerByID($id)
    {
        $banner = self::with(['items', 'items.img'])
            ->find($id);

        return $banner;
    }
}