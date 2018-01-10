<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 2018/1/10
 * Time: 14:07
 */

namespace app\api\model;


class UserAddress extends BaseModel
{
    protected $hidden = [
        'id', 'delete_time', 'user_id',
    ];
}