<?php
/**
 * Created by PhpStorm.
 * User: chencong
 * Date: 15/5/2
 * Time: 上午12:57
 */

namespace Index\Controller;

use Think\Controller;

/**
 * Class EmptyController
 * @package Index\Controller
 * 空控制器，无任何意义，防止用户访问空的控制器
 */
class EmptyController extends Controller
{
    public function _empty()
    {
        $this->show("<div style='text-align: center;color: #fe33ac; line-height: 100px;font-size: 18px;font-weight: 600;'>网络繁忙，请稍后再试！</div>");
    }
}