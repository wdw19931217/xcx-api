<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 2018/1/4
 * Time: 23:36
 */

namespace app\api\model;


use think\Db;

class Banner
{
    public static function getBannerByID($id)
    {
        $result = Db::query('select * from banner_item where banner_id=?', [$id]);
        return $result;
    }
}