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

        $m= M('news_wechat');
        $news_wechat=$m->order('ID desc')->limit(3)->select();
        $this->assign('news_wechat',$news_wechat);

        $res1= M('news_active');
        $data1=$res1->order('ID desc')->limit('3')->select();
        $data1[0]['content']=R('SubString/subString',array($data1[0]['content'],70));
        $data1[1]['content']=R('SubString/subString',array($data1[1]['content'],70));
        $data1[2]['content']=R('SubString/subString',array($data1[2]['content'],70));
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
            //$list[$k]['title']=R('SubString/subString',array($list[$k]['title'],0,76));
            $list[$k]['title']=mb_substr($list[$k]['title'],0,28,'UTF-8');
            $list[$k]['content']=R('SubString/subString',array($list[$k]['content'],200));
            //$list[$k]['title']=R('SubString/subString',array($list[$k]['title'],0,76));
            if($list[$k]['imgpath']=='')
            {
                $list[$k]['imgpath']='Home/Images/login/ologo.png';
            }
        }
        //dump($list);
        //exit;
        $this->assign('list',$list);
        $this->assign('page',$show);
        $this->display();

        $this->display('Public:foot');
    }

    public function news_wechat()
    {
        $this->display('Public:head');

        $m=M('News_wechat');
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
        $this->assign('news_wechat',$list);
        $this->assign('page',$show);

        $this->display();

        $this->display('Public:foot');
    }
    public function third_wechat()
    {
        $this->display('Public:head');
        $m= M('News_wechat');
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


    public function third_active()
    {
        $this->display('Public:head');
        $res1= M('news_active');
        $aid=$_GET['id'];
//        dump($aid);
        $list = $res1->where(array('ID'=>$aid))->find();
        if($list['imgpath']!='')
        {
            $list['imgpath']=CAPCC_ROOT.'/Public/'.$list['imgpath'];
        }
        //$list['imgpath']=''
       //dump($list);
        //EXIT;
        if($list) {
            $list['content']=explode("\r",$list['content']);
            $this->assign('vo',$list);
        }else{
            $this->error('数据错误');
        }
        $res1->getLastSql();

        $this->display();

        $this->display('Public:foot');
    }
}