<?php
/**
 * Created by PhpStorm.
 * User: DT
 * Date: 2015/6/24
 * Time: 11:03
 */

namespace Home\Controller;
use Think\Controller;

class NewsController extends Controller{
    public function index()
    {
        $this->display('Public:head');

        $m= M('news_active');
        $news=$m->where('id = 28')->limit('1')->select();
        $this->assign('news_pic',$news);

        $res1= M('news_active');
        $data['id']=array('ELT',3);
        $data1=$res1->where($data)->select();
        $data1[0]['content']=R('SubString/subString',array($data1[0]['content'],0,205));
        $data1[1]['content']=R('SubString/subString',array($data1[1]['content'],0,205));
        $data1[2]['content']=R('SubString/subString',array($data1[2]['content'],0,205));
        $this->assign('list1',$data1);

        $this->display();

        $this->display('Public:foot');
    }
}