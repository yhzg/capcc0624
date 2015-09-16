<?php
/**
 * Created by PhpStorm.
 * User: ALL
 * Date: 2015/8/10
 * Time: 10:09
 */

namespace Home\Controller;
use Think\Controller;

class VolunteerController extends CommonController{
    public function index(){
        $this->display('Public:head');

        $res1= M('volunteer_grace');
        $data['id']=array('ELT',3);
        $data1=$res1->where($data)->select();
        $data1[0]['content']=R('SubString/subString',array($data1[0]['content'],0,570));
        $data1[1]['content']=R('SubString/subString',array($data1[1]['content'],0,570));
        $data1[2]['content']=R('SubString/subString',array($data1[2]['content'],0,570));
        $data1[3]['content']=R('SubString/subString',array($data1[3]['content'],0,570));
        $this->assign('volunteer_grace',$data1);



        $advice=M('Volunteer_advice')->order('ID desc')->find();
        $this->assign('advice',$advice);

        $mon=M('Volunteer_mon')->order('ID desc')->find();
        $this->assign('mon',$mon);


        $this->display();

        $this->display('Public:foot');


        $res2= M('volunteer_advice');
        $data['id']=array('ELT',3);
        $data2=$res2->where($data)->select();
        $data2[0]['content']=R('SubString/subString',array($data2[0]['content'],0,570));
        $data2[1]['content']=R('SubString/subString',array($data2[1]['content'],0,570));
        $data2[2]['content']=R('SubString/subString',array($data2[2]['content'],0,570));
        $data2[3]['content']=R('SubString/subString',array($data2[3]['content'],0,570));
        $this->assign('volunteer_advice',$data2);

    }
    //帖子列表
    public function posts_list()
    {
        $this->display('Public:head');

        $username=I('session.username');
        $user=M('User')->where(array('username'=>$username))->find();
        if($user['tel']=='')
        {
            $info="会员需经过手机认证后方可在志愿者家园发帖！<a href='".__APP__."/Login/bindphone'>立即认证？</a>";
            $this->assign('info',$info);
        }

        $tag=I('get.tag');
        $c_tag=$this->tag_exists($tag);

        $db_name=CONTROLLER_NAME.'_'.$tag;
        $m=M($db_name);
        $count=$m->where(array('isT'=>1))->count();
        //分页
        $Page=new \Think\Page($count,10);
        $Page->setConfig('theme','当前第%NOW_PAGE%页&nbsp; 共%TOTAL_PAGE%页   &nbsp; %FIRST%   %UP_PAGE%    %LINK_PAGE%     %DOWN_PAGE% &nbsp;     %END%  <b>%HEADER%</b> ');
        $pager=$Page->show();

        $posts=$m->where(array('isT'=>1))->order('last_post_time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        foreach($posts as $k =>$v)
        {
            $posts[$k]['content']=iconv_substr($v['content'],0,300,'utf-8');
        }
        //dump($posts);
        //dump($pager);

        $this->display();

        $this->display('Public:foot');
    }

    public function volunteer_advice(){
        $this->display('Public:head');

        $res2= M('volunteer_advice');
        $data['id']=array('ELT',3);
        $data2=$res2->where($data)->select();
        $data2[0]['content']=R('SubString/subString',array($data2[0]['content'],0,570));
        $data2[1]['content']=R('SubString/subString',array($data2[1]['content'],0,570));
        $data2[2]['content']=R('SubString/subString',array($data2[2]['content'],0,570));
        $data2[3]['content']=R('SubString/subString',array($data2[3]['content'],0,570));
        $this->assign('volunteer_advice',$data2);

        $this->display();

        $this->display('Public:foot');
    }

    public function volunteer_grace(){
        $this->display('Public:head');

        $res1= M('volunteer_grace');
        $data['id']=array('ELT',3);
        $data1=$res1->where($data)->select();
        $data1[0]['content']=R('SubString/subString',array($data1[0]['content'],0,570));
        $data1[1]['content']=R('SubString/subString',array($data1[1]['content'],0,570));
        $data1[2]['content']=R('SubString/subString',array($data1[2]['content'],0,570));
        $data1[3]['content']=R('SubString/subString',array($data1[3]['content'],0,570));
        $this->assign('volunteer_grace',$data1);

        $this->display();

        $this->display('Public:foot');
    }

    public function volunteer_mon(){
        $this->display('Public:head');

        $this->display();

        $this->display('Public:foot');
    }

    public function volunteer_act(){
        $this->display('Public:head');

        $this->display();

        $this->display('Public:foot');
    }

}