<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 2018/1/8
 * Time: 23:42
 */

namespace app\api\validate;


class TokenGet extends BaseValidate
{
    protected $rule = [
        'code' => 'require|isNotEmpty',
    ];

    protected $message = [
        'code' => '缺少code参数，无法获取token',
    ];
}