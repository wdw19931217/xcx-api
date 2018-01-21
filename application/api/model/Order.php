<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 2018/1/14
 * Time: 10:07
 */

namespace app\api\model;


class Order extends BaseModel
{
    protected $hidden = [
        'user_id', 'delete_time', 'update_time',
    ];
}