<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 2018/1/3
 * Time: 23:38
 */

namespace app\api\controller\v2;


use app\api\validate\IDMustBePositiveInt;
use app\api\model\Banner as BannerModel;
use app\lib\exception\BannerMissException;
use think\Exception;

class Banner
{
    /**
     * 获取指定id的banner信息 AOP面向切面编程
     * @url /banner/:id
     * @http GET
     * @id banner的id号
     */
    public function getBanner($id)
    {
        return 'this is v2 version';
    }
}