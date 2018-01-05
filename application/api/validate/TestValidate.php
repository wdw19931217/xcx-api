<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 2018/1/4
 * Time: 20:35
 */

namespace app\api\validate;


use think\Validate;

class TestValidate extends Validate
{
    protected $rule = [
        'name' => 'require|max:10',
        'email' => 'email',
    ];
}