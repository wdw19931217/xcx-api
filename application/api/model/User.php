<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 2018/1/8
 * Time: 23:48
 */

namespace app\api\model;


class User extends BaseModel
{
    public function address()
    {
        return $this->hasOne('UserAddress', 'user_id', 'id');
    }

    public static function getByOpenID($openid)
    {
        $user = self::where('openid', '=', $openid)->find();
        return $user;
    }
}