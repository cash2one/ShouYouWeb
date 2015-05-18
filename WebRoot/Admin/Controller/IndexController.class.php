<?php
/**
 * Created by PhpStorm.
 * User: chencong
 * Date: 15/5/9
 * Time: 下午3:59
 */

namespace Admin\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $this->display();
    }

    public function getJson()
    {
        $data = array(
            array(
                "id" => 1,
                "text" => "我是一个测试",
                "state" > "close",
                "url"=>"http://www.qq.com"
            ),
            array(
                "id" => 2,
                "text" => "我是一个测试2",
                "state" > "close"
            )
        );

        echo json_encode($data);
    }
} 