<?php
/**
 * Created by PhpStorm.
 * User: DT
 * Date: 2015/11/2
 * Time: 9:20
 */

namespace Home\Controller;

use Think\Controller;
class WechatController extends CommonController
{
  /*  public function index()
    {
        $this->display();
    }
    */
    public function wechat_wechat()
    {
        $this->display('Public:head');

        $m=M('Wechat_wechat');
        $count = $m->where()->count();
        $Page  = new \Think\Page($count,4);
        $show  = $Page->show();
        $list = $m->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();

        foreach ($list as $k=>$v)
        {
            $list[$k]['title']=mb_substr($list[$k]['title'],0,28,'UTF-8');
            $list[$k]['content']=R('SubString/subString',array($list[$k]['content'],200));
            if($list[$k]['imgpath']=='')
            {
                $list[$k]['imgpath']='Home/Images/login/ologo.png';
            }else
            {
                $list[$k]['imgpath']=explode(',',$v['imgpath']);
            }
        }
        //dump($list);
        //exit;
        $this->assign('wechat_wechat',$list);
        $this->assign('page',$show);

        $this->display();



        $this->display('Public:foot');
    }

    public function third_wechat()
    {
        $this->display('Public:head');
        $m= M('Wechat_wechat');
        $aid=$_GET['id'];
//        dump($aid);
        $list = $m->where(array('ID'=>$aid))->find();
//        dump($list);
        if($list) {
            $list['content']=explode("\r",$list['content']);
            //dump($list['content']);
            foreach($list['content'] as $k=>$v)
            {
                $list['content'][$k]=htmlspecialchars_decode($v);
            }

            $this->assign('vo',$list);
        }else{
            $this->error('数据错误');
        }
        $this->display();

        $this->display('Public:foot');
    }
}