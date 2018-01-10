<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 2018/1/10
 * Time: 20:29
 */

namespace app\lib\exception;


class ForbiddenException extends BaseException
{
    public $code = 403;
    public $msg = '权限不够';
    public $errorCode = 10001;
}