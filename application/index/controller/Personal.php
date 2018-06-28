<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/28
 * Time: 9:57
 * Comment: 个人中心
 */
namespace app\index\controller;

use think\Controller;

class Personal extends Controller {

    /**
     * 资料管理界面
     * @return mixed
     */
    public function dataManager() {
        return $this->fetch();
    }

    /**
     * 已报名活动界面
     * @return mixed
     */
    public function registeredActivities() {
        return $this->fetch();
    }

    /**
     * 消息中心界面
     * @return mixed
     */
    public function messageCenter() {
        return $this->fetch();
    }
}