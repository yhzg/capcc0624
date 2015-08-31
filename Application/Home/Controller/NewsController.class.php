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

        $m= M('news_active');
        $news=$m->where('id = 28')->limit('1')->select();
        $this->assign('news_pic',$news);

        $res1= M('news_active');
        $data['id']=array('ELT',3);
        $data1=$res1->where($data)->select();
        $data1[0]['content']=R('SubString/subString',array($data1[0]['content'],0,570));
        $data1[1]['content']=R('SubString/subString',array($data1[1]['content'],0,570));
        $data1[2]['content']=R('SubString/subString',array($data1[2]['content'],0,570));
        $data1[3]['content']=R('SubString/subString',array($data1[3]['content'],0,570));
        $this->assign('list1',$data1);

        $m = M('news_active');
        $p = getpage($m,$where,4);
        $list=$m->field(true)->where($where)->order('id desc')->select();
        $this->list=$list;
        $this->page=$p->show();

        $this->display();

        $this->display('Public:foot');
    }

    public function news_picture()
    {
        $this->display('Public:head');

        $m= M('news_picture');
        $news=$m->where('id = 28')->limit('1')->select();
        $this->assign('news_pic',$news);

        $res1= M('news_picture');
        $data['id']=array('ELT',3);
        $data1=$res1->where($data)->select();
        $data1[0]['content']=R('SubString/subString',array($data1[0]['content'],0,205));
        $data1[1]['content']=R('SubString/subString',array($data1[1]['content'],0,205));
        $data1[2]['content']=R('SubString/subString',array($data1[2]['content'],0,205));
        $this->assign('news_picture',$data1);

        $this->display();

        $this->display('Public:foot');
    }
}