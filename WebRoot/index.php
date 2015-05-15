<?php
/**
 * Created by PhpStorm.
 * User: chencong
 * Date: 15/4/29
 * Time: 下午8:21
 */

header("Content-type: text/html; charset=utf-8");

//网站名称
define('WEB_NAME', '1678玩手游网');
// 站点地址
define('WEB_DOMAIN', 'http://www.1678wan.com/');
//脚本路径
define('STATIC_SCRIPT_URL', WEB_DOMAIN . 'Public/Index/Scripts/');
//样式路径
define('STATIC_STYLE_URL', WEB_DOMAIN . 'Public/Index/Styles/');
//图片路径
define('STATIC_IMAGE_URL', WEB_DOMAIN . 'Public/Index/Images/');

//后台脚本路径
define('ADMIN_STATIC_SCRIPT_URL', WEB_DOMAIN . 'Public/Admin/Scripts/');
//后台样式路径
define('ADMIN_STATIC_STYLE_URL', WEB_DOMAIN . 'Public/Admin/Styles/');
//后台图片路径
define('ADMIN_STATIC_IMAGE_URL', WEB_DOMAIN . 'Public/Admin/Images/');


// 定义运行时目录
define('RUNTIME_PATH', './Runtime/');

// 开启调试模式
define('APP_DEBUG', true);

// 更名框架目录名称，并载入框架入口文件
require '../ThinkPHP/ThinkPHP.php';
