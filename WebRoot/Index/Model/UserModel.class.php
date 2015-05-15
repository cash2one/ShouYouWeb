<?php
/**
 * Created by PhpStorm.
 * User: chencong
 * Date: 15/5/2
 * Time: 下午11:03
 *
 * User表的数据模型类
 */

namespace Index\Model;


use Think\Model;

class UserModel extends Model
{
    /**
     * @param string $userName 玩家账号
     * @param string $userPass 玩家密码
     * @return bool
     */
    public function checkLogin($userName, $userPass)
    {
        $data = $this->getByUser_Name($userName);
        if ($data != null) {
            if ($userPass == $data["user_pass"]) {
                return $data;
            }
        }
        return false;
    }
} 