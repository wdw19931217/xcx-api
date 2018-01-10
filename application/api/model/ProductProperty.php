<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 2018/1/9
 * Time: 23:45
 */

namespace app\api\model;


class ProductProperty extends BaseModel
{
    protected $hidden = [
        'product_id', 'delete_time', 'id',
    ];
}