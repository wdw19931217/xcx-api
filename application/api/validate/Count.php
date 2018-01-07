<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 2018/1/7
 * Time: 19:07
 */

namespace app\api\validate;


class Count extends BaseValidate
{
    protected $rule = [
        'count' => 'isPositiveInteger|between:1,15',
    ];
}