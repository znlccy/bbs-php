<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/21
 * Time: 17:19
 */
namespace app\api\controller;

class User {

    /**
     * 用户登录首页
     */
    public function index($id) {
        echo "User Controller: ";
        echo $id;
    }

    /**
     * 发送邮件
     */
    public function sendMail() {
        sendEmail([['user_email'=>'znlccy0603@163.com','content'=>'资源鸟，让一切变得简单，加qq群 623918245 畅聊']]);
    }
}