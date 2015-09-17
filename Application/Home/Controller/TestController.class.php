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
       $content="2013年12月30日，历时10余年改造的杭甬运河全线通航。京杭大运河由此向东延伸了近240公里，这条千年历史的水道终于有了出海口，京杭大运河终入海。我怀念的我觉得回我家啊电话加我的加我的啊接吻九五年的，得唔得。我的娃的为单位对我的我弟弟的点点滴滴。我的文档";
        echo R('SubString/subString',array($content,80));
    }
}
