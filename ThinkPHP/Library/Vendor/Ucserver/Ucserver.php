<?php
/**
 * Created by PhpStorm.
 * User: DT
 * Date: 2015/8/17
 * Time: 14:58
 */

class UcServer
{
    public function __construct()
    {
        include_once(CAPCC_ROOT_PATH . 'config.inc.php');
        include_once(CAPCC_ROOT_PATH . 'uc_client/client.php');
    }

    /**
     * 会员注册
     */
    public function register($username, $password, $email){
        $uid = uc_user_register($username, $password, $email);//UCenter的注册验证函数
        if($uid <= 0) {
            if($uid == -1) {
                return '用户名不合法';
            } elseif($uid == -2) {
                return '包含不允许注册的词语';
            } elseif($uid == -3) {
                return '用户名已经存在';
            } elseif($uid == -4) {
                return 'Email 格式有误';
            } elseif($uid == -5) {
                return 'Email 不允许注册';
            } elseif($uid == -6) {
                return '该 Email 已经被注册';
            } else {
                return '未定义';
            }
        } else {
            return intval($uid);//返回一个非负数
        }
    }

}