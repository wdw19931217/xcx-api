<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 2018/1/9
 * Time: 23:45
 */

namespace app\api\model;


class ProductImage extends BaseModel
{
    protected $hidden = [
        'img_id', 'delete_time', 'product_id',
    ];

    public function imgUrl()
    {
        return $this->belongsTo('Image', 'img_id', 'id');
    }
}