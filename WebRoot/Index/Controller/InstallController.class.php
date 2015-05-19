<?php
	/**
	 * Created by PhpStorm.
	 * User: chencong
	 * Date: 15/5/3
	 * Time: 上午1:53
	 */

	namespace Index\Controller;


	use Think\Controller;

	class InstallController extends Controller
	{
		/**
		 * 安装应用，用文件作为标识，如果文件已经存在就不再重新安装，如果文件不存在，则进行安装。
		 */
		public function index ()
		{
			$flagFilePath = MODULE_PATH . "Conf/installed.lock";//定义标识文件路径
			if (file_exists($flagFilePath)) {
				echo "文件已经存在";
			} else {
				$file = fopen($flagFilePath , "w");
				fwrite($file , "App Installed！！Please Don't Delete This File！！！");
				fclose($file);
			}
		}
	}