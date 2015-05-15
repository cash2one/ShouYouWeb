<?php
namespace Index\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
        //获取游戏所有信息
        $path = APP_PATH . "Index/Conf/gameinfo.json";
        $handle = fopen($path, "r");
        $content = fread($handle, filesize($path));
        fclose($handle);
        $game_info_json = json_decode($content,true);

        //获取游戏截图
        $path = APP_PATH . "Index/Conf/gamepic.json";
        $handle = fopen($path, "r");
        $content = fread($handle, filesize($path));
        fclose($handle);
        $game_pic_json = json_decode($content,true);

        //获取版本信息
        $path = APP_PATH . "Index/Conf/gameversiontxt.txt";
        $handle = fopen($path, "r");
        $game_version_html = fread($handle, filesize($path));
        fclose($handle);

        //获取充值优惠信息
        $path = APP_PATH . "Index/Conf/gamechargeinfo.txt";
        $handle = fopen($path, "r");
        $game_charge_info_html = fread($handle, filesize($path));
        fclose($handle);

        $this->assign("game_charge_info_html",$game_charge_info_html);
        $this->assign("game_pic_json",$game_pic_json);
        $this->assign("game_version_html",$game_version_html);
        $this->assign("game_info_json",$game_info_json);
        $this->display();


    }

    public function about()
    {
        echo get_uuid(true);
        //$this->show(U('Index/index'));
    }
}