<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/26
 * Time: 10:56
 */
namespace app\api\controller;

class Code extends BaseController {

    public function get_code() {
        $username = $this->params['username'];
        $exists = $this->params['is_exists'];

        $username_type = $this->check_username($username);

        switch ($username_type) {
            case 'phone':
                $this->get_code_by_phone($username, $exists);
                break;
            case 'email':
                $this->get_code_by_email($username, $exists);
                break;
        }
    }

    public function get_code_by_phone($phone, $exists) {
        /********** 检测手机是否存在 ***********/
        /********** 检查验证发送频率 ***********/
        /********** 生成验证码 ***********/
        /********** 使用session存储验证码，方便比对，md5加密 ***********/

    }
}