<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 2018/1/13
 * Time: 22:36
 */

namespace app\lib\exception;


class OrderException extends BaseException
{
    public $code = 404;
    public $msg = '订单不存在，请检查ID';
    public $errorCode = 80000;
}