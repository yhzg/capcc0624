<?php
/**
 * Created by PhpStorm.
 * User: DT
 * Date: 2015/7/6
 * Time: 10:38
 */

namespace Home\Controller;
use Think\Controller;


class TravelController extends Controller{
    public function index()
    {
        $this->display('Public:head');

        // ¾°µã
        $res1= M('travel_spot');
        $data['id']=array('ELT',3);
        $data1=$res1->where($data)->select();
        $data1[0]['content']=R('SubString/subString',array($data1[0]['content'],0,150));
        $data1[1]['content']=R('SubString/subString',array($data1[1]['content'],0,150));
        $data1[2]['content']=R('SubString/subString',array($data1[2]['content'],0,150));
        $this->assign('travel_spot',$data1);

        // ³Ô
        $res2= M('travel_eat');
        $data['id']=array('ELT',1);
        $data2=$res2->where($data)->select();
        $data2[0]['content']=R('SubString/subString',array($data2[0]['content'],0,150));
        $data2[1]['content']=R('SubString/subString',array($data2[1]['content'],0,150));
        $this->assign('travel_eat',$data2);

        // ×¡
        $res4= M('travel_live');
        $data['id']=array('ELT',1);
        $data4=$res4->where($data)->select();
        $this->assign('travel_live',$data4);


        // ¹¥ÂÔ
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

        // ¾°µã
        $res1= M('travel_spot');
        $data['id']=array('ELT',3);
        $data1=$res1->where($data)->select();
        $data1[0]['content']=R('SubString/subString',array($data1[0]['content'],0,570));
        $data1[1]['content']=R('SubString/subString',array($data1[1]['content'],0,570));
        $data1[2]['content']=R('SubString/subString',array($data1[2]['content'],0,570));
        $data1[3]['content']=R('SubString/subString',array($data1[3]['content'],0,570));
        $this->assign('travel_spot',$data1);

        $this->display();

        $this->display('Public:foot');

    }

    public function eat_live()
    {
        $this->display('Public:head');

        // ³Ô
        $res2= M('travel_eat');
        $data['id']=array('ELT',1);
        $data2=$res2->where($data)->select();
        $data2[0]['content']=R('SubString/subString',array($data2[0]['content'],0,570));
        $data2[1]['content']=R('SubString/subString',array($data2[1]['content'],0,570));
        $this->assign('travel_eat',$data2);

        // ×¡
        $res4= M('travel_live');
        $data['id']=array('ELT',1);
        $data4=$res4->where($data)->select();
        $data4[0]['content']=R('SubString/subString',array($data4[0]['content'],0,570));
        $data4[1]['content']=R('SubString/subString',array($data4[1]['content'],0,570));
        $this->assign('travel_live',$data4);

        $this->display();

        $this->display('Public:foot');

    }

    public function travel_story()
    {
        $this->display('Public:head');

        // ¹¥ÂÔ
        $res3= M('travel_story');
        $data['id']=array('ELT',1);
        $data3=$res3->where($data)->select();
        $data3[0]['content']=R('SubString/subString',array($data3[0]['content'],0,570));
        $data3[1]['content']=R('SubString/subString',array($data3[1]['content'],0,570));
        $data3[2]['content']=R('SubString/subString',array($data3[2]['content'],0,570));
        $data3[3]['content']=R('SubString/subString',array($data3[3]['content'],0,570));
        $this->assign('travel_story',$data3);

        $this->display();

        $this->display('Public:foot');

    }
}