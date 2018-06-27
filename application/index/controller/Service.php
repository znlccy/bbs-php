<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/11
 * Time: 19:31
 */
namespace app\index\controller;

use think\Controller;

class Service extends Controller {

    /**
     * 创业服务资源
     */
    public function resource() {
        return $this->fetch();
    }

}