<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/11
 * Time: 17:16
 */
namespace app\index\controller;

use think\Controller;
use app\index\model\Us;

class Contact extends Controller {

    /**
     * 联系我们
     */
    /*public function contactUs() {
        return $this->fetch();
    }*/

    /**
     * 关于我们
     */
    public function aboutUs() {
        return $this->fetch();
    }

    /**
     * 加入我们
     */
    public function joinUs() {
        return $this->fetch();
    }

    /**
     * 寻求合作
     */
    public function seekCooperation() {
        return $this->fetch();
    }

    /**
     * 处理加入我们
     */
    public function handleJoinUs() {
        $username = input('username');
        $email = input('email');
        $phone = input('phone');
        $cellphone = input('cellphone');
        $remark = input('remark');
        $us = new Us();
        $us->username = $username;
        $us->email = $email;
        $us->phone = $phone;
        $us->cellphone = $cellphone;
        $us->remark = $remark;
        if (!isset($username) || !isset($email) || !isset($phone) || !isset($cellphone) || !isset($remark)) {

        } else {
            echo "用户名为空";
        }
        /*$result = Us::get(['username' => $username]);
        if ($result) {

            return $this->error('保存失败');
        } else {
            $us->save();
            return $this->success('保存成功');
        }*/
    }

}