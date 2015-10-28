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
    public function show_now($tableName,$num)
    {
        $date=date(d,time());
        $count=M($tableName)->count();
        $start_id=(($date-1)*$num+1)%($count-$num+1);
        if($start_id==0)
        {
            $start_id=1;
        }
        return $start_id;

    }

    public function index()
    {
        $this->display('Public:head');

        $table1='city_figure';
        $start_id1=$this->show_now($table1,3);
        //dump($start_id);
        $data1['ID']=array('between',array($start_id1,$start_id1+2));
        $res1= M($table1)->where($data1)->select();
        foreach($res1 as $k=>$v)
        {
            $res1[$k]['content']=R('SubString/subString',array($v['content'],80));
        }

        $this->assign('city_figure',$res1);


        $table2='city_protect';
        $start_id2=$this->show_now($table2,3);
        //dump($start_id);
        $data2['ID']=array('between',array($start_id2,$start_id2+2));
        $res2= M($table2)->where($data2)->select();
        foreach($res2 as $k=>$v)
        {
            $res2[$k]['content']=R('SubString/subString',array($v['content'],80));
        }

        $this->assign('city_protect',$res2);

        $table3='city_canal';
        $start_id3=$this->show_now($table3,6);
        //dump($start_id);
        $data3['ID']=array('between',array($start_id3,$start_id3+5));
        $res3= M($table3)->where($data3)->select();
        foreach($res3 as $k=>$v)
        {
            $res3[$k]['content']=R('SubString/subString',array($v['content'],80));
        }

        $this->assign('city_canal',$res3);


        /*$res3= M('city_canal');
        $data['id']=array('ELT',1);
        $data3=$res3->where($data)->select();
        $this->assign('city_canal',$data3);*/

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