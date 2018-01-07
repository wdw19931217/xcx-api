<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 2018/1/7
 * Time: 17:08
 */

namespace app\lib\exception;


class ThemeException extends BaseException
{
    public $code = 404;
    public $msg = '指定主题不存在，请检查主题ID';
    public $errorCode = 30000;
}