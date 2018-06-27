<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/11
 * Time: 17:16
 */
namespace app\index\controller;

use think\Controller;

class Contact extends Controller {

    /**
     * 联系我们
     */
    public function contactUs() {
        return $this->fetch();
    }

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
     * 处理加入我们
     */
    public function handleJoinUs() {

    }



}