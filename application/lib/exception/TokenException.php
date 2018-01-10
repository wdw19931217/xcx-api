<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 2018/1/9
 * Time: 20:43
 */

namespace app\lib\exception;


class TokenException extends BaseException
{
    public $code = 401;
    public $msg = 'Token已过期或无效Token';
    public $errorCode = 10001;
}