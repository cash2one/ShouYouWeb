<?php
/**
 * Groups configuration for default Minify implementation
 * @package Minify
 */

/**@
 * You may wish to use the Minify URI Builder app to suggest
 * changes. http://yourdomain/min/builder/
 *
 * See http://code.google.com/p/minify/wiki/CustomSource for other ideas
 * 设置方式
 * return array(
 * 'js' => array(
 * '//js/file.js'            // 相对设置1
 * ,'//../file.js'           // 相对设置2
 * ,'C:/User/Steve/file.js' // 绝对设置
 * )
 * );
 **/

return array(
    'public_js' => array(
        '//Public/Index/Scripts/jquery.min.js',
        '//Public/Index/Scripts/jquery-ui.min.js',
        '//Public/Index/Scripts/jquery.alert.js',
        '//Public/Index/Scripts/scroll.js',
        '//Public/Index/Scripts/jquery.lazyload.js',
        '//Public/Index/Scripts/common.js'
    ),
    'index_js'=>array(
        '//Public/Index/Scripts/jquery.cookie.js',
        '//Public/Index/Scripts/fun_cp.js',
        '//Public/Index/Scripts/fun_login.js'
    ),
    'admin_js'=>array(
        '//public/Admin/Scripts/jquery.min.js',
        '//public/Admin/Scripts/easyui/jquery.easyui.min.js',
        '//public/Admin/Scripts/easyui/locale/easyui-lang-zh_CN.js'
    ),
    'admin_css'=>array(
        '//public/Admin/Scripts/easyui/themes/bootstrap/easyui.css',
        '//public/Admin/Scripts/easyui/themes/icon.css'
    ),
    'css' => array('//Public/css/dist/home/Item/add.css', '//Public/css/dist/home/Item/add_step2.css'),
);