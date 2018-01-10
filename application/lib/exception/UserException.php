<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 2018/1/10
 * Time: 11:38
 */

namespace app\lib\exception;


class UserException extends BaseException
{
    public $code = 404;
    public $msg = '用户不存在';
    public $errorCode = 60000;
}