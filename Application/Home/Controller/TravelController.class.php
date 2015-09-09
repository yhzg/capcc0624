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

        $res1= M('travel_spot');
        $data['id']=array('ELT',3);
        $data1=$res1->where($data)->select();
        $data1[0]['content']=R('SubString/subString',array($data1[0]['content'],0,150));
        $data1[1]['content']=R('SubString/subString',array($data1[1]['content'],0,150));
        $data1[2]['content']=R('SubString/subString',array($data1[2]['content'],0,150));
        $this->assign('travel_spot',$data1);

        $res2= M('travel_eat');
        $data['id']=array('ELT',1);
        $data2=$res2->where($data)->select();
        $data2[0]['content']=R('SubString/subString',array($data2[0]['content'],0,150));
        $data2[1]['content']=R('SubString/subString',array($data2[1]['content'],0,150));
        $this->assign('travel_eat',$data2);


        $res4= M('travel_live');
        $data['id']=array('ELT',1);
        $data4=$res4->where($data)->select();
        $this->assign('travel_live',$data4);


        $res3= M('travel_story');
        $data['id']=array('ELT',1);
        $data3=$res3->where($data)->select();
        $this->assign('travel_story',$data3);
        
        $this->display('Travel:index1');

        $this->display('Public:foot');

    }

    public function travel_spot()
    {
        $this->display('Public:head');

        $res1= M('travel_spot');
        $count = $res1->where()->count();
        $Page  = new \Think\Page($count,4);
        $show  = $Page->show();
        $list = $res1->where()->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        foreach ($list as $k=>$v)
        {
            $list[$k]['title']=R('SubString/subString',array($list[$k]['title'],0,44));
            $list[$k]['content']=R('SubString/subString',array($list[$k]['content'],0,570));
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
            $list[$k]['title']=R('SubString/subString',array($list[$k]['title'],0,44));
            $list[$k]['content']=R('SubString/subString',array($list[$k]['content'],0,570));
        }
        $this->assign('list',$list);
        $this->assign('page',$show);


//        $res4= M('travel_live');
//        $count =$res4->where()->count();
//        $Page  = new \Think\Page($count,4);
//        $show  = $Page->show();
//        $list1 = $res4->where()->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
//        $list1[0]['content']=R('SubString/subString',array($list1[0]['content'],0,570));
//        $list1[1]['content']=R('SubString/subString',array($list1[1]['content'],0,570));
//        $list1[2]['content']=R('SubString/subString',array($list1[2]['content'],0,570));
//        $list1[3]['content']=R('SubString/subString',array($list1[3]['content'],0,570));
//        $this->assign('list1',$list1);
//        $this->assign('page',$show);


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
            $list[$k]['title']=R('SubString/subString',array($list[$k]['title'],0,44));
            $list[$k]['content']=R('SubString/subString',array($list[$k]['content'],0,570));
        }
        $this->assign('list',$list);
        $this->assign('page',$show);

        $this->display();

        $this->display('Public:foot');

    }
}