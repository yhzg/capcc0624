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

        // �˺�����
        $res1= M('city_figure');
        $data['id']=array('ELT',1);
        $data1=$res1->where($data)->select();
        $data1[0]['content']=R('SubString/subString',array($data1[0]['content'],0,150));
        $data1[1]['content']=R('SubString/subString',array($data1[1]['content'],0,150));
        $data1[2]['content']=R('SubString/subString',array($data1[2]['content'],0,150));
        $this->assign('city_figure',$data1);

        //���ű���
        $res2= M('city_protect');
        $data['id']=array('ELT',1);
        $data2=$res2->where($data)->select();
        $data2[0]['content']=R('SubString/subString',array($data2[0]['content'],0,200));
        $data2[1]['content']=R('SubString/subString',array($data2[1]['content'],0,200));
        $this->assign('city_protect',$data2);

        //�˺ӵ�ͼ
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

        // �˺�����
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

        //���ű���
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

        //�˺ӵ�ͼ
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

}