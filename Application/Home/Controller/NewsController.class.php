<?php
/**
 * Created by PhpStorm.
 * User: DT
 * Date: 2015/6/24
 * Time: 11:03
 */

namespace Home\Controller;
use Think\Controller;

class NewsController extends CommonController{
    public function index()
    {
        $this->display('Public:head');

        $m= M('news_active');
        $news=$m->where('id = 28')->limit('1')->select();
        $this->assign('news_pic',$news);

        $res1= M('news_active');
        $data['id']=array('ELT',3);
        $data1=$res1->where($data)->select();
        $data1[0]['content']=R('SubString/subString',array($data1[0]['content'],0,205));
        $data1[1]['content']=R('SubString/subString',array($data1[1]['content'],0,205));
        $data1[2]['content']=R('SubString/subString',array($data1[2]['content'],0,205));
        $this->assign('list1',$data1);

        $this->display();

        $this->display('Public:foot');
    }

    public function news_active()
    {
        $this->display('Public:head');

        $Data = M('news_active');
        $count = $Data->where()->count();
        $Page  = new \Think\Page($count,4);
        $show  = $Page->show();
        $list = $Data->where()->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        foreach ($list as $k=>$v)
        {
            $list[$k]['title']=R('SubString/subString',array($list[$k]['title'],0,76));
            $list[$k]['content']=R('SubString/subString',array($list[$k]['content'],0,570));
        }
        $this->assign('list',$list);
        $this->assign('page',$show);
        $this->display();

        $this->display('Public:foot');
    }

    public function news_picture()
    {
        $this->display('Public:head');

        $m= M('news_picture');
        $count = $m->where()->count();
        $Page  = new \Think\Page($count,4);
        $show  = $Page->show();
        $list1 = $m->where()->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        foreach ($list1 as $k=>$v)
        {
            $list1[$k]['content']=R('SubString/subString',array($list1[$k]['content'],0,570));
        }
        $this->assign('list1',$list1);
        $this->assign('page',$show);
        $this->display();

        $this->display('Public:foot');
    }
}