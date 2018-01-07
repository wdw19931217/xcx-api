<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 2018/1/7
 * Time: 19:45
 */

namespace app\lib\exception;


class CategoryException extends BaseException
{
    public $code = 404;
    public $msg = '指定的类目不存在，请检查参数';
    public $errorCode = 50000;
}