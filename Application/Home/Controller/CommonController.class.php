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

}