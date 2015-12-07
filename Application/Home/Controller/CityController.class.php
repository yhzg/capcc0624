<?php
/**
 * Created by PhpStorm.
 * User: DT
 * Date: 2015/7/2
 * Time: 10:24
 */

namespace Home\Controller;
use Think\Controller;

class CityController extends CommonController{
    public function index()
    {
        $this->display('Public:head');

        $table1='city_figure';
        $res1=$this->show_now($table1,3);
        $this->assign('city_figure',$res1);


        $table2='city_protect';
        $res2=$this->show_now($table2,3);
        $this->assign('city_protect',$res2);

        $table3='city_canal';
        $res3=$this->show_now($table3,6);
        $this->assign('city_canal',$res3);

        $this->display();

        $this->display('Public:foot');
    }


    public function city_figure()
    {
        $this->display('Public:head');

        $res1= M('city_figure');
        $count = $res1->where()->count();
        $Page  = new \Think\Page($count,16);
        $show  = $Page->show();
        $list = $res1->where()->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);
        $this->assign('page',$show);

        $this->display();

        $this->display('Public:foot');

    }

    public function city_protect()
    {
        $this->display('Public:head');

        $res2= M('city_protect');
        $count = $res2->where()->count();
        $Page  = new \Think\Page($count,16);
        $show  = $Page->show();
        $list = $res2->where()->order('')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);
        $this->assign('page',$show);

        $this->display();

        $this->display('Public:foot');

    }

    public function city_canal()
    {
        $this->display('Public:head');

        $res3= M('city_canal');
        $count = $res3->where()->count();
        $Page  = new \Think\Page($count,16);
        $show  = $Page->show();
        $list = $res3->where()->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);
        $this->assign('page',$show);

        $this->display();

        $this->display('Public:foot');

    }

    public function third_figure()
    {
        $this->display('Public:head');
        $res1= M('city_figure');
        $aid=$_GET['id'];
//        dump($aid);
        $list = $res1->where(array('ID'=>$aid))->find();
//        dump($list);
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

    public function third_protect()
    {
        $this->display('Public:head');

        $res1= M('city_protect');
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

        $res1= M('city_canal');
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

}