<?php
/**
 * Created by PhpStorm.
 * User: chencong
 * Date: 15/5/6
 * Time: 下午1:53
 */

namespace Index\Controller;


use Think\Controller;

class AuthController extends Controller
{

    /**
     * 统一认证账号是否登录
     */
    function _initialize()
    {
        /*if (!session('?cw_name')) {
            $this->redirect("user/login", array(), 0);
        }*/
    }

    function get_User()
    {
        session('cw_name', 'wolaiwan');
        $data = D('User')->where("user_name='" . session('cw_name')."'")->find();
        return $data;
    }
} 