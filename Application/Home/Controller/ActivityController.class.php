<?php
/**
 * Created by PhpStorm.
 * User: DT
 * Date: 2015/7/7
 * Time: 15:26
 */

namespace Home\Controller;


use Think\Controller;

class ActivityController extends CommonController {
    public function index()
    {
        $this->display('Public:head');

        $res1= M('activity_activity');
        $data['id']=array('ELT',1);
        $data1 = $res1->where($data)->select();
        foreach ($data1 as $k=>$v)
        {
//            $data1[$k]['title']=R('SubString/subString',array($data1[$k]['title'],0,44));
            $data1[$k]['content']=R('SubString/subString',array($data1[$k]['content'],200));
        }
        $this->assign('activity_activity',$data1);

        $this->display();

        $this->display('Public:foot');
    }

    public function activity_activity()
    {
        $this->display('Public:head');

        $res1= M('activity_activity');
        $count = $res1->where()->count();
        $Page  = new \Think\Page($count,4);
        $show  = $Page->show();
        $list = $res1->where()->order()->limit($Page->firstRow.','.$Page->listRows)->select();
        foreach ($list as $k=>$v)
        {
//            $list[$k]['title']=R('SubString/subString',array($list[$k]['title'],0,44));
            $list[$k]['content']=R('SubString/subString',array($list[$k]['content'],200));
        }
        $this->assign('list',$list);
        $this->assign('page',$show);

        $this->display();

        $this->display('Public:foot');
    }

    public function third()
    {
        $this->display('Public:head');
        $res1= M('activity_activity');
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
}