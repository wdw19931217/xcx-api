<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 2018/1/5
 * Time: 16:29
 */

namespace app\lib\exception;


class BannerMissException extends BaseException
{
    public $code = 404;
    public $msg = '请求的Banner不存在';
    public $errorCode = 10000;
}