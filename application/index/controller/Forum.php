<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/12
 * Time: 11:44
 */
namespace app\index\controller;

use think\Controller;

class Forum extends Controller {

    /**
     * 论坛活动介绍
     * @return mixed
     */
    public function active() {
        return $this->fetch();
    }

    /**
     * 论坛介绍
     * @return mixed
     */
    public function introduce() {
        return $this->fetch();
    }
}