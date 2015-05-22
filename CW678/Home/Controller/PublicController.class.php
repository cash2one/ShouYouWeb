<?php
	/**
	 * Created by PhpStorm.
	 * User: chencong
	 * Date: 15/5/20
	 * Time: 下午5:33
	 */

	namespace Home\Controller;


	use Think\Controller;


	/**
	 * 公用控制器
	 *
	 * @package Home\Controller
	 */
	class PublicController extends Controller
	{
		/**
		 * 压缩javascript跟css的公用方法
		 */
		public function min ()
		{
			vendor("Minify.index");
		}


	}