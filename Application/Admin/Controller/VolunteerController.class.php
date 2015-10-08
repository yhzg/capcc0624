<?php
/**
 * Created by PhpStorm.
 * User: DT
 * Date: 2015/8/7
 * Time: 10:27
 */

namespace Admin\Controller;


use Think\Controller;

class VolunteerController extends Controller {

//风采
    public function grace()
    {
        R('Common/show_list',array(ACTION_NAME));
    }

//活动
    public function act()
    {
        R('Common/show_list',array(ACTION_NAME));
    }

//良策
    public function advice()
    {
        //分页显示，每页10条
        $m=M('Volunteer_advice');
        $count= $m->where(array('isT'=>1))->count();
        $page= new \Think\Page($count,10);
        $page->setConfig('theme','<b>%HEADER%</b> 当前第%NOW_PAGE%页 共%TOTAL_PAGE%页   &nbsp; %FIRST%   %UP_PAGE%    %LINK_PAGE%     %DOWN_PAGE% &nbsp;  %END%');
        $show= $page->show();
        $res = $m->order('tid desc')->where(array('isT'=>1))->limit($page->firstRow.','.$page->listRows)->select();
        //dump($show);
        // exit;
        for($i=0;$i<count($res);$i++)
        {
            $res[$i]['content']=iconv_substr($res[$i]['content'],0,30,'utf-8');
        }
        $this->assign('list',$res);
        $this->assign('page',$show);

        $this->display();
    }

//监测
    public function mon()
    {
        $m=M('Volunteer_mon');
        $count= $m->where(array('isT'=>1))->count();
        $page= new \Think\Page($count,10);
        $page->setConfig('theme','<b>%HEADER%</b> 当前第%NOW_PAGE%页 共%TOTAL_PAGE%页   &nbsp; %FIRST%   %UP_PAGE%    %LINK_PAGE%     %DOWN_PAGE% &nbsp;  %END%');
        $show= $page->show();
        $res = $m->order('tid desc')->where(array('isT'=>1))->limit($page->firstRow.','.$page->listRows)->select();
        //dump($show);
        // exit;
        for($i=0;$i<count($res);$i++)
        {
            $res[$i]['content']=iconv_substr($res[$i]['content'],0,30,'utf-8');
        }
        $this->assign('list',$res);
        $this->assign('page',$show);

        $this->display();

    }

    public function show_reply()
    {
        $tag=I('get.tag');
        $tid=I('get.tid');
        $db_name=CONTROLLER_NAME.'_'.$tag;
        $m=M($db_name);
       // $posts=$m->where(array('id'=>$id))->find();
        $count= $m->where(array('tid'=>$tid,'isT'=>0))->count();
        $page= new \Think\Page($count,10);
        $page->setConfig('theme','<b>%HEADER%</b> 当前第%NOW_PAGE%页 共%TOTAL_PAGE%页   &nbsp; %FIRST%   %UP_PAGE%    %LINK_PAGE%     %DOWN_PAGE% &nbsp;  %END%');
        $show= $page->show();
        $res = $m->order('fid desc')->where(array('tid'=>$tid,'isT'=>0))->limit($page->firstRow.','.$page->listRows)->select();
        //dump($show);
        // exit;

        $this->assign('tag',$tag);
        $this->assign('list',$res);
        $this->assign('page',$show);

        $this->display();
    }

    public function add()
    {
        R('Common/add');
    }


    public function  add_volunteer()
    {
        R('Common/add_info');
    }

    public function delete_volunteer()
    {
        R('Common/delete_info');
    }

    public function delete_reply()
    {
        $tag=I('get.tag');

        $id=I('get.id');

        $db_name='Volunteer_'.$tag;
        $m=M($db_name);
        $posts=$m->where(array('ID'=>$id))->find();
        $tid=$posts['tid'];
        $main_posts=$m->where(array('tid'=>$tid,'isT'=>1))->find();

        $res=$m->where(array('ID'=>$id))->delete();
        //dump($res);
        //exit;
        if($res>0)
        {
            $data['replyNum']=$main_posts['replynum']-1;
            $m->where(array('tid'=>$tid,'isT'=>1))->save($data);
            $this->success('删除成功!',U('Admin/'.CONTROLLER_NAME."/show_reply/tag/$tag/tid/$tid"));
        }else
        {
            $this->error('删除失败！');
        }

    }
    public function edit_volunteer()
    {
        R('Common/edit_info');
    }
}