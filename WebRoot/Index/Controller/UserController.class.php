<?php
/**
 * Created by PhpStorm.
 * User: chencong
 * Date: 15/5/2
 * Time: 下午11:05
 */

namespace Index\Controller;


use Index\Model\UserModel;
use Think\Controller;
use Think\Verify;


class UserController extends Controller
{

    /**
     * 登陆界面视图
     */
    public function login()
    {
        echo "Test";
    }

    public function code()
    {
        $verify = new Verify();
        $verify->entry();
    }

    /**
     * 登陆操作
     */
    public function doLogin(){
        $userModel = new UserModel();
        $userRet = $userModel->checkLogin("wolaiwan", "wolaiwan");
        if($userRet){
            var_dump($userRet);
        }else{
            echo "登陆失败";
        }
    }

    public function userList()
    {
        $model = D("User");
        $data = $model->select();
        $this->assign("list", $data);
        $this->display();
    }

    public function getUser()
    {
        if (IS_GET) {
            $userName = I("get.username");
            //exit ($userName);
            $model = D("User");
            $info = $model->where("user_name = '%s'", $userName)->find();
            var_dump($info);
            /*
                    $info = $model->select();



                    $this->ajaxReturn($info);*/
        }
    }


} 