<?php
	/**
	 * Created by PhpStorm.
	 * User: chencong
	 * Date: 15/5/20
	 * Time: 下午3:08
	 */

	header("Content-type: text/html; charset=utf-8");

	// 定义运行时目录
	define('RUNTIME_PATH' , './Runtime/');

	// 开启调试模式
	define('APP_DEBUG' , TRUE);

	// 更名框架目录名称，并载入框架入口文件
	require '../ThinkPHP/ThinkPHP.php';