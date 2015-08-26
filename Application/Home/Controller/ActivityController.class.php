<?php
/**
 * Created by PhpStorm.
 * User: DT
 * Date: 2015/7/7
 * Time: 15:26
 */

namespace Home\Controller;


use Think\Controller;

class ActivityController extends Controller {
    public function index()
    {
        $this->display('Public:head');

        $res1= M('activity_activity');
        $data['id']=array('ELT',1);
        $data1=$res1->where($data)->select();
        $data1[0]['content']=R('SubString/subString',array($data1[0]['content'],0,190));
        $this->assign('activity_activity',$data1);

        $this->display();

        $this->display('Public:foot');
    }

    public function activity_activity()
    {
        $this->display('Public:head');

        $res1= M('activity_activity');
        $data['id']=array('ELT',1);
        $data1=$res1->where($data)->select();
        $data1[0]['content']=R('SubString/subString',array($data1[0]['content'],0,190));
        $this->assign('activity_activity',$data1);

        $this->display();

        $this->display('Public:foot');
    }
}