<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 2018/1/7
 * Time: 19:38
 */

namespace app\api\model;


class Category extends BaseModel
{
    protected $hidden = [
        'delete_time', 'update_time', 'create_time',
    ];

    public function img()
    {
        return $this->belongsTo('Image', 'topic_img_id', 'id');
    }
}