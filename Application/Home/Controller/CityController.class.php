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

        // 运河人物
        $res1= M('city_figure');
        $data['id']=array('ELT',1);
        $data1=$res1->where($data)->select();
        $data1[0]['content']=R('SubString/subString',array($data1[0]['content'],0,150));
        $data1[1]['content']=R('SubString/subString',array($data1[1]['content'],0,150));
        $data1[2]['content']=R('SubString/subString',array($data1[2]['content'],0,150));
        $this->assign('city_figure',$data1);

        //非遗保护
        $res2= M('city_protect');
        $data['id']=array('ELT',1);
        $data2=$res2->where($data)->select();
        $data2[0]['content']=R('SubString/subString',array($data2[0]['content'],0,200));
        $data2[1]['content']=R('SubString/subString',array($data2[1]['content'],0,200));
        $this->assign('city_protect',$data2);

        //运河地图
        $res3= M('city_canal');
        $data['id']=array('ELT',1);
        $data3=$res3->where($data)->select();
        $this->assign('city_canal',$data3);

        $this->display();

        $this->display('Public:foot');

    }

    public function city_figure()
    {
        $this->display('Public:head');

        // 运河人物
        $res1= M('city_figure');
        $data['id']=array('ELT',1);
        $data1=$res1->where($data)->select();
        $data1[0]['content']=R('SubString/subString',array($data1[0]['content'],0,150));
        $data1[1]['content']=R('SubString/subString',array($data1[1]['content'],0,150));
        $data1[2]['content']=R('SubString/subString',array($data1[2]['content'],0,150));
        $this->assign('city_figure',$data1);

        $this->display();

        $this->display('Public:foot');

    }

    public function city_protect()
    {
        $this->display('Public:head');

        //非遗保护
        $res2= M('city_protect');
        $data['id']=array('ELT',1);
        $data2=$res2->where($data)->select();
        $data2[0]['content']=R('SubString/subString',array($data2[0]['content'],0,200));
        $data2[1]['content']=R('SubString/subString',array($data2[1]['content'],0,200));
        $this->assign('city_protect',$data2);

        $this->display();

        $this->display('Public:foot');

    }

    public function city_canal()
    {
        $this->display('Public:head');

        //运河地图
        $res3= M('city_canal');
        $data['id']=array('ELT',1);
        $data3=$res3->where($data)->select();
        $this->assign('city_canal',$data3);

        $this->display();

        $this->display('Public:foot');

    }

}