<?php
	/**
	 * Created by PhpStorm.
	 * User: chencong
	 * Date: 15/5/5
	 * Time: 下午6:20
	 */


	/**
	 * 发送HTTP请求方法
	 *
	 * @param string $url    请求URL
	 * @param array  $params 请求参数
	 * @param string $method 请求方法GET/POST
	 * @param array  $header
	 * @param bool   $multi
	 *
	 * @return array  $data   响应数据
	 * @throws Exception
	 */
	function http ($url , $params , $method = 'GET' , $header = array() , $multi = FALSE)
	{
		$opts = array(
			CURLOPT_TIMEOUT        => 30 ,
			CURLOPT_RETURNTRANSFER => 1 ,
			CURLOPT_SSL_VERIFYPEER => FALSE ,
			CURLOPT_SSL_VERIFYHOST => FALSE ,
			CURLOPT_HTTPHEADER     => $header
		);
		/* 根据请求类型设置特定参数 */
		switch (strtoupper($method)) {
			case 'GET':
				$opts[CURLOPT_URL] = $url . '?' . http_build_query($params);
				break;
			case 'POST':
				//判断是否传输文件
				$params = $multi ? $params : http_build_query($params);
				$opts[CURLOPT_URL] = $url;
				$opts[CURLOPT_POST] = 1;
				$opts[CURLOPT_POSTFIELDS] = $params;
				break;
			default:
				throw new Exception('不支持的请求方式！');
		}
		/* 初始化并执行curl请求 */
		$ch = curl_init();
		curl_setopt_array($ch , $opts);
		$data = curl_exec($ch);
		$error = curl_error($ch);
		curl_close($ch);
		if ($error) throw new Exception('请求发生错误：' . $error);
		return $data;
	}

	/**
	 * 获取UUID
	 *
	 * @param bool $is_low
	 *
	 * @return UUID
	 */
	function get_uuid ($is_low = TRUE)
	{
		$charId = '';
		if ($is_low) {
			$charId = strtolower(md5(uniqid(mt_rand() , TRUE)));
		} else {
			$charId = strtoupper(md5(uniqid(mt_rand() , TRUE)));
		}
		$uuid = substr($charId , 0 , 8)
			. substr($charId , 8 , 4)
			. substr($charId , 12 , 4)
			. substr($charId , 16 , 4)
			. substr($charId , 20 , 12);
		return $uuid;
	}