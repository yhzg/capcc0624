<?php
/**
 * Created by PhpStorm.
 * User: ALL
 * Date: 2015/8/10
 * Time: 10:09
 */

namespace Home\Controller;
use Think\Controller;

class VolunteerController extends CommonController{
    public function index(){
        $this->display('Public:head');

        // 风采
        $res1= M('volunteer_grace');
        $data['id']=array('ELT',3);
        $data1=$res1->where($data)->select();
        $data1[0]['content']=R('SubString/subString',array($data1[0]['content'],0,570));
        $data1[1]['content']=R('SubString/subString',array($data1[1]['content'],0,570));
        $data1[2]['content']=R('SubString/subString',array($data1[2]['content'],0,570));
        $data1[3]['content']=R('SubString/subString',array($data1[3]['content'],0,570));
        $this->assign('volunteer_grace',$data1);

        // 良策
        $res2= M('volunteer_advice');
        $data['id']=array('ELT',3);
        $data2=$res2->where($data)->select();
        $data2[0]['content']=R('SubString/subString',array($data2[0]['content'],0,570));
        $data2[1]['content']=R('SubString/subString',array($data2[1]['content'],0,570));
        $data2[2]['content']=R('SubString/subString',array($data2[2]['content'],0,570));
        $data2[3]['content']=R('SubString/subString',array($data2[3]['content'],0,570));
        $this->assign('volunteer_advice',$data2);

        $this->display();

        $this->display('Public:foot');
    }

    public function volunteer_advice(){
        $this->display('Public:head');

        // 良策
        $res2= M('volunteer_advice');
        $data['id']=array('ELT',3);
        $data2=$res2->where($data)->select();
        $data2[0]['content']=R('SubString/subString',array($data2[0]['content'],0,570));
        $data2[1]['content']=R('SubString/subString',array($data2[1]['content'],0,570));
        $data2[2]['content']=R('SubString/subString',array($data2[2]['content'],0,570));
        $data2[3]['content']=R('SubString/subString',array($data2[3]['content'],0,570));
        $this->assign('volunteer_advice',$data2);

        $this->display();

        $this->display('Public:foot');
    }

    public function volunteer_grace(){
        $this->display('Public:head');

        // 风采
        $res1= M('volunteer_grace');
        $data['id']=array('ELT',3);
        $data1=$res1->where($data)->select();
        $data1[0]['content']=R('SubString/subString',array($data1[0]['content'],0,570));
        $data1[1]['content']=R('SubString/subString',array($data1[1]['content'],0,570));
        $data1[2]['content']=R('SubString/subString',array($data1[2]['content'],0,570));
        $data1[3]['content']=R('SubString/subString',array($data1[3]['content'],0,570));
        $this->assign('volunteer_grace',$data1);

        $this->display();

        $this->display('Public:foot');
    }

    public function volunteer_mon(){
        $this->display('Public:head');

        $this->display();

        $this->display('Public:foot');
    }

}