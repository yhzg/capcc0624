<?php
/**
 * Created by PhpStorm.
 * User: DT
 * Date: 2015/7/6
 * Time: 10:38
 */

namespace Home\Controller;
use Think\Controller;


class TravelController extends CommonController{
    public function index()
    {
        $this->display('Public:head');
        
        $this->display('Travel:city_map');

        $this->display('Public:foot');

    }

    public function index1()
    {
        $this->display('Public:head');

        $res1= M('travel_spot');

        $aid=$_GET['city'];
        $list = $res1->where(array('City'=>$aid))->select();
        foreach ($list as $k=>$v)
        {
            $list[$k]['content']=R('SubString/subString',array($list[$k]['content'],100));
        }
        if($list) {
            $this->assign('travel_spot',$list);
        }else{
            $this->error('数据错误');
        }
        $res1->getLastSql();


        $res2= M('travel_eat');
        $aid=$_GET['city'];
        $list = $res2->where(array('City'=>$aid))->select();
        foreach ($list as $k=>$v)
        {
            $list[$k]['content']=R('SubString/subString',array($list[$k]['content'],100));
        }
        if($list) {
            $this->assign('travel_eat',$list);
        }else{
            $this->error('数据错误');
        }
        $res2->getLastSql();

        $res3= M('travel_live');
        $list = $res3->where(array('City'=>$aid))->select();
        if($list) {
            $this->assign('travel_live',$list);
        }else{
            $this->error('数据错误');
        }


        $res4= M('travel_story');
        $list = $res4->where(array('City'=>$aid))->select();
        if($list) {
            $this->assign('travel_story',$list);
        }else{
            $this->error('数据错误');
        }

        $this->display();

        $this->display('Public:foot');

    }

    public function travel_spot()
    {
        $this->display('Public:head');

        $res1= M('travel_spot');
        $data = $_GET['city'];
        $count = $res1->where(array('City'=>$data))->count();
        $Page  = new \Think\Page($count,4);
        $show  = $Page->show();
        $list = $res1->where(array('City'=>$data))->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        foreach ($list as $k=>$v)
        {
            $list[$k]['content']=R('SubString/subString',array($list[$k]['content'],200));
        }
        $this->assign('list',$list);
        $this->assign('page',$show);

        $this->display();

        $this->display('Public:foot');

    }

    public function eat_live()
    {
        $this->display('Public:head');

        $res2= M('travel_eat');
        $count = $res2->where()->count();
        $Page  = new \Think\Page($count,4);
        $show  = $Page->show();
        $list =$res2->where()->order()->limit($Page->firstRow.','.$Page->listRows)->select();
        foreach ($list as $k=>$v)
        {
            $list[$k]['content']=R('SubString/subString',array($list[$k]['content'],200));
        }
        $this->assign('list',$list);
        $this->assign('page',$show);



        $this->display();

        $this->display('Public:foot');

    }

    public function travel_story()
    {
        $this->display('Public:head');

        $res3= M('travel_story');
        $count =$res3->where()->count();
        $Page  = new \Think\Page($count,4);
        $show  = $Page->show();
        $list = $res3->where()->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        foreach ($list as $k=>$v)
        {
            $list[$k]['content']=R('SubString/subString',array($list[$k]['content'],200));
        }
        $this->assign('list',$list);
        $this->assign('page',$show);

        $this->display();

        $this->display('Public:foot');

    }
    public function third_spot()
    {
        $this->display('Public:head');
        $res1= M('travel_spot');
        $aid=$_GET['id'];
        $list = $res1->where(array('ID'=>$aid))->find();
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

    public function third_eat()
    {
        $this->display('Public:head');
        $res1= M('travel_eat');
        $aid=$_GET['id'];
        $list = $res1->where(array('ID'=>$aid))->find();
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

    public function third_canal()
    {
        $this->display('Public:head');
        $res1= M('travel_live');
        $aid=$_GET['id'];
        $list = $res1->where(array('ID'=>$aid))->find();
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

    public function third_story()
    {
        $this->display('Public:head');
        $res1= M('travel_story');
        $aid=$_GET['id'];
        $list = $res1->where(array('ID'=>$aid))->find();
        //dump($list);
        //exit;
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