<?php
	/**
	 * 公共配置文件
	 */
	return array(

		'MODULE_ALLOW_LIST' => array('Home' , 'Manage') ,//模块列表

		'DEFAULT_MODULE'    => 'Home' ,//默认模块

		'URL_MODEL'         => 2 ,//URL Model

		'URL_HTML_SUFFIX'   => '.shtml' ,//修改显示的URL后缀

		'SHOW_PAGE_TRACE'   => TRUE ,//显示页面追踪信息

		'ERROR_MESSAGE'     => '系统正在神游天外,请稍后再试~' ,

		'TMPL_L_DELIM'      => '<{' ,            // 模板引擎普通标签开始标记

		'TMPL_R_DELIM'      => '}>' ,            // 模板引擎普通标签结束标记

		//'LAYOUT_ON'         => TRUE ,

		//'LAYOUT_NAME'       => 'layout' ,

		'TMPL_STRIP_SPACE'  => TRUE ,
	);