<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 2018/1/5
 * Time: 20:30
 */

namespace app\lib\exception;


class ParameterException extends BaseException
{
    public $code = 400;
    public $msg = '参数错误';
    public $errorCode = 10000;
}