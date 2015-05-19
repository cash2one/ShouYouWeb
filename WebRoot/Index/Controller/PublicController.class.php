<?php
	/**
	 * Created by PhpStorm.
	 * User: chencong
	 * Date: 15/5/6
	 * Time: 下午9:20
	 */

	namespace Index\Controller;


	use Think\Controller;

	class PublicController extends Controller
	{
		/**
		 * 获取玩家信息，公共调用
		 */
		public function  getSession ()
		{
			$uiData = array('flag' => FALSE , 'user' => '');
			if (IS_POST) {
				$postData = I('post.');
				session('cw_name' , $postData['uname']);
				if (session('?cw_name')) {
					$uiData['flag'] = TRUE;
					$uiData['user'] = D('User')->where("user_name='" . session('cw_name') . "'")->find();
				}
			}
			$this->ajaxReturn($uiData);
		}
	}