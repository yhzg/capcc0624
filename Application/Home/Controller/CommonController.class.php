<?php
/**
 * Created by PhpStorm.
 * User: DT
 * Date: 2015/7/27
 * Time: 9:32
 */

namespace Home\Controller;

use Think\Controller;
use Think\Model;
use Think\Verify;


class CommonController extends Controller {
    //生成验证码
    function verify_code()
    {
        $config=array(
            'length'	=> 4,
           // 'fontSize' =>50,
            'useNoise' => false,
            'reset'     =>  false,
        );
        $Verify = new \Think\Verify($config);
        $Verify->entry();
    }

    protected function _initialize()
    {
        $username=I('session.username');

        //session存在，显示登录的用户名
        //否则，显示登录等按钮
        if(empty($username))
        {
            $navbar['url1']=U('Login/login');
            $navbar['bar1']='登录';
            $navbar['url2']=U('Login/register');
            $navbar['bar2']='立即加入';
        }else
        {
            $navbar['url1']='#';
            $navbar['bar1']='欢迎您：'.$username;
            $navbar['url2']=U('Login/logout');
            $navbar['bar2']='退出登录';
        }

        $this->assign('navbar',$navbar);

    }

}