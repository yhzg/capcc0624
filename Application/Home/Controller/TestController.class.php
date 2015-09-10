<?php
/**
 * Created by PhpStorm.
 * User: DT
 * Date: 2015/7/30
 * Time: 14:13
 */

namespace Home\Controller;


use Think\Controller;

class TestController extends CommonController {

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

    public function db()
    {
        $res=$this->user->where('userID= 4')->select();
        dump($res);
    }

    public function test()
    {
        $data="";
        $datas= array(12345);
        for($i=0;$i<count($datas);$i++){
            $data = $data. "<data>".$datas[$i]."</data>";
        }
        echo count($datas);
        echo '<br>';
        echo $datas[0];
    }

    function index()
    {
        $a=join(',',array(1,2,3));
        dump($a);
        $m=M('test');
        $data['id']=$a;
        $res=$m->add($data);

        dump($res);



    }


}
