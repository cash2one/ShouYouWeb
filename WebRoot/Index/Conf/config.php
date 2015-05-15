<?php
/**
 * 当前项目的单独配置文件
 */
return array(
    'SESSION_AUTO_START' => TRUE,//自动开启SESSION


    /**
     * 网站的基本配置
     */
    //游戏名字
    'GAME_NAME' => '1678玩手游网_手游BT手游平台_官方差异化版手游_手机网游_手机游戏下载_手机游戏排行榜',
    //游戏域名
    'GAME_DOMAIN' => '',
    //网站关键词
    'WEB_KEYWORD' => 'cw678,常玩678,cw,手游,变态手游,官方差异化版本',
    //网站简介
    'WEB_DESCRIPTION' => '常玩678手游平台是最大的BT手游平台,致力于开放官方差异化版本游戏,给广大手游玩家最大优惠和福利.',
    //管理QQ号
    'QQ_NUM' => '',
    //游戏群号
    'QQ_GROUP_NUM' => '',
    //QQ加群链接
    'ADD_QQ_GROUP_LINK' => '',
    //客户端下载地址
    'CLIENT_DOWN_LOAD_URL' => '',
    //安卓版二维码地址
    'ANDROID_QR_CODE_IMAGE' => '',
    //IOS版二维码地址
    'IOS_QR_CODE_IMAGE' => '',
    //游戏充值地址
    'CHARGE_URL' => '',
    //接口远程访问KEY
    'ACCESS_SERVICE_KEY' => '',

    /**
     * 网站控制开关
     */
    //是否打开注册功能，（有些游戏不需要在网站注册，直接在客户端注册到网站的接口）--默认是关闭的
    'WEB_RESTART_SWITCH' => false,


    'LOAD_EXT_CONFIG' => 'DbConfig',

);
