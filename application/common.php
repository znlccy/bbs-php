<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

use phpmailer\phpmailer;

/**
 * 发送邮箱 邮箱队列数据 包含邮箱地址 内容
 * @param array $data
 * @throws \phpmailer\phpmailerException
 */
function sendEmail($data = []) {

    Vendor('phpmailer.phpmailer');
    $mail = new PHPMailer(); //实例化

    $mail->IsSMTP(); // 启用SMTP
    $mail->Host = 'smtp.163.com'; //SMTP服务器 以126邮箱为例子
    $mail->Port = 465;  //邮件发送端口
    $mail->SMTPAuth = true;  //启用SMTP认证
    $mail->SMTPSecure = "ssl";   // 设置安全验证方式为ssl

    $mail->CharSet = "UTF-8"; //字符集
    $mail->Encoding = "base64"; //编码方式

    $mail->Username = 'znl06***03****@163.com';  //你的邮箱
    $mail->Password = 'znl*****ccy0603******0704';  //你的密码
    $mail->Subject = '资源鸟系统提示'; //邮件标题

    $mail->From = 'ccy******06****03@163.com';  //发件人地址（也就是你的邮箱）
    $mail->FromName = '资源鸟';  //发件人姓名

    if($data && is_array($data)){
        foreach ($data as $k=>$v){
            $mail->AddAddress($v['user_email'], "亲"); //添加收件人（地址，昵称）
            $mail->IsHTML(true); //支持html格式内容
            $mail->Body = $v['content']; //邮件主体内容

            //发送成功就删除
            if ($mail->Send()) {
                echo "发送成功";
            }else{
                echo "Mailer Error: ".$mail->ErrorInfo;// 输出错误信息
            }
        }
    }
}