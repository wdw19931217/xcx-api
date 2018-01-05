<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 2018/1/4
 * Time: 21:10
 */

namespace app\api\validate;


use app\lib\exception\ParameterException;
use think\Request;
use think\Validate;

class BaseValidate extends Validate
{
    public function goCheck()
    {
        // 获取http传入的参数
        // 对这些参数做校验
        $request = Request::instance();
        $params = $request->param();

        $result = $this->batch()->check($params);
        if (! $result) {
            $e = new ParameterException([
                'msg' => $this->error,
            ]);
            throw $e;
        } else {
            return true;
        }
    }
}