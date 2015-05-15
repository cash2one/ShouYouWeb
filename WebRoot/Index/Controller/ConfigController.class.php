<?php
/**
 * Created by PhpStorm.
 * User: chencong
 * Date: 15/5/3
 * Time: 下午4:59
 */

namespace Index\Controller;


use Think\Controller;

class ConfigController extends AuthController
{

    public function index()
    {

    }

    public function showDbConfig()
    {
        $userData = $this->get_User();
        echo $userData["fcm"];

        $dbConfigs = array(
            'DB_TYPE' => C('DB_TYPE'),     // 数据库类型
            'DB_HOST' => C('DB_HOST'), // 服务器地址
            'DB_NAME' => C('DB_NAME'),          // 数据库名
            'DB_USER' => C('DB_USER'),      // 用户名
            'DB_PWD' => C('DB_PWD'),          // 密码
            'DB_PORT' => C('DB_PORT'),        // 端口
            'DB_PREFIX' => C('DB_PREFIX'),    // 数据库表前缀
            'DB_CHARSET' => C('DB_CHARSET'),      // 数据库编码默认采用utf8
        );
        $this->assign('dbConfigs', $dbConfigs);
        //echo U("Config/showDbConfig");
        $this->display();
    }

    public function updateDbConfig()
    {
        /*strip_whitespace("opop");*/
        if (IS_POST) {
            $postData = I("post.");

            $fo = fopen(MODULE_PATH . 'Conf/DbConfig.php', "w");
            //拼装DbConfig.php的配置数据
            $data = "<?php\n";
            $data .= "return array(\n";
            $data .= "      'DB_TYPE' => '" . $postData['DB_TYPE'] . "',     // 数据库类型\n";
            $data .= "      'DB_HOST' => '" . $postData['DB_HOST'] . "', // 服务器地址\n";
            $data .= "      'DB_NAME' => '" . $postData['DB_NAME'] . "',          // 数据库名\n";
            $data .= "      'DB_USER' => '" . $postData['DB_USER'] . "',      // 用户名\n";
            $data .= "      'DB_PWD' => '" . $postData['DB_PWD'] . "',          // 密码\n";
            $data .= "      'DB_PORT' => '" . $postData['DB_PORT'] . "',        // 端口\n";
            $data .= "      'DB_PREFIX' => '" . $postData['DB_PREFIX'] . "',    // 数据库表前缀\n";
            $data .= "      'DB_PARAMS' => array(), // 数据库连接参数\n";
            $data .= "      'DB_DEBUG' => TRUE, // 数据库调试模式 开启后可以记录SQL日志\n";
            $data .= "      'DB_FIELDS_CACHE' => TRUE,        // 启用字段缓存\n";
            $data .= "      'DB_CHARSET' => '" . $postData['DB_CHARSET'] . "',      // 数据库编码默认采用utf8\n";
            $data .= ");";

            if (fwrite($fo, $data)) {
                fclose($fo);
                $this->success("修改数据库配置成功", U("Index/index"));
            } else {
                fclose($fo);
                $this->error("修改失败，请检查DbConfig.php权限！", U("Index/index"));
            }
        }
    }
} 