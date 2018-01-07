<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 2018/1/4
 * Time: 20:49
 */

namespace app\api\validate;



class IDMustBePositiveInt extends BaseValidate
{
    protected $rule = [
        'id' => 'require|isPositiveInteger',
    ];

    protected $message = [
        'id' => 'id必须是正整数',
    ];
}