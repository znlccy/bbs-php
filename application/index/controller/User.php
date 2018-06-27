<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/11
 * Time: 17:10
 */
namespace app\index\controller;

use think\Controller;
use app\index\model\User as UserModel;
use think\Session;

class User extends Controller {

    /**
     * 用户登录模块
     */
    public function login() {

        return $this->fetch();
    }

    /**
     * 检查登录
     * @param string $username
     * @param string $password
     * @throws \think\exception\DbException
     */
    public function checkLogin($username = '', $password = '') {
        $user = UserModel::get([
            'username' => $username,
            'password' => md5($password)
        ]);

        if ($user) {
            Session::start();
            Session::set('username', $username);
            /*$this->redirect(url('index/index/index', \session('username')));*/
            return $this->success('登录失败', url('index/index/index'));
        } else {
            return $this->error('登录失败', url('index/user/login'));
        }
    }

    /**
     * 用户注册模块
     */
    public function register() {
        return $this->fetch();
    }

    /**
     * @param $user_name
     * @param $user_passwd
     * @throws \think\exception\DbException
     */
    public function checkRegister($username, $password) {
        $user = UserModel::get([
            'username' => $username,
        ]);

        if ($user) {
            $this->error('已经注册过了');
        }
        else {
            $user = new UserModel();
            $user->username = $username;
            $user->password = md5($password);
            $user->addtime = time();
            $user->save();
        }
    }

    /**
     * 用户忘记密码模块
     */
    public function forgot() {
        return $this->fetch();
    }
}