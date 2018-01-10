<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 2018/1/9
 * Time: 9:37
 */

namespace app\lib\exception;


class WechatException extends BaseException
{
    public $code = 400;
    public $msg = '微信服务器接口调用失败';
    public $errorCode = 999;
}