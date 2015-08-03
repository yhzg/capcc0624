<?php
/**
 * Created by PhpStorm.
 * User: DT
 * Date: 2015/7/30
 * Time: 14:13
 */

namespace Home\Controller;


use Think\Controller;

class TestController extends Controller {

    public function add(){
        $res=send_mail($_POST['mail'],$_POST['title'],$_POST['content']);
        if($res)
        {
            $this->success('发送成功！');
        }

        else
        {

            dump($res);
            $this->error('发送失败');
        }

    }
}