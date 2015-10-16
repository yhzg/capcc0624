<?php
/**
 * Created by PhpStorm.
 * User: DT
 * Date: 2015/7/6
 * Time: 11:29
 */

namespace Home\Controller;


use Think\Controller;

class BrandController extends CommonController {
    public function index()
    {
        $this->display('Public:head');

        $res1= M('brand_product');
        $data['id']=array('ELT',1);
        $data1=$res1->where($data)->select();
        $this->assign('brand_product',$data1);


        $res2= M('brand_tradition');
        $data['id']=array('ELT',1);
        $data2=$res2->where($data)->select();
        $this->assign('brand_tradition',$data2);


        $res3= M('brand_brand');
        $data['id']=array('ELT',1);
        $data3=$res3->where($data)->select();
        $this->assign('brand_brand',$data3);

        $this->display();

        $this->display('Public:foot');
    }

    public function brand_product()
    {
        $this->display('Public:head');


        $res1= M('brand_product');
        $count =$res1->where()->count();
        $Page  = new \Think\Page($count,4);
        $show  = $Page->show();
        $list = $res1->where()->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        foreach ($list as $k=>$v)
        {
            //$list[$k]['title']=R('SubString/subString',array($list[$k]['title'],0,44));
            $list[$k]['content']=R('SubString/subString',array($list[$k]['content'],200));
        }
        $this->assign('list',$list);
        $this->assign('page',$show);


        $this->display();

        $this->display('Public:foot');
    }

    public function brand_tradition()
    {
        $this->display('Public:head');


        $res2= M('brand_tradition');
        $count =$res2->where()->count();
        $Page  = new \Think\Page($count,4);
        $show  = $Page->show();
        $list = $res2->where()->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        foreach ($list as $k=>$v)
        {
            //$list[$k]['title']=R('SubString/subString',array($list[$k]['title'],12));
            $list[$k]['content']=R('SubString/subString',array($list[$k]['content'],200));
        }
        $this->assign('list',$list);
        $this->assign('page',$show);

        $this->display();

        $this->display('Public:foot');
    }

    public function brand_brand()
    {
        $this->display('Public:head');

        $res3= M('brand_brand');
        $count =$res3->where()->count();
        $Page  = new \Think\Page($count,4);
        $show  = $Page->show();
        $list = $res3->where()->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        foreach ($list as $k=>$v)
        {
            //$list[$k]['title']=R('SubString/subString',array($list[$k]['title'],0,44));
            $list[$k]['content']=R('SubString/subString',array($list[$k]['content'],500));
        }
        $this->assign('list',$list);
        $this->assign('page',$show);

        $this->display();

        $this->display('Public:foot');
    }

    public function third_product()
    {
        $this->display('Public:head');
        $res1= M('brand_product');
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
       // $res1->getLastSql();

        $this->display();

        $this->display('Public:foot');
    }

    public function third_tradition()
    {
        $this->display('Public:head');
        $res1= M('brand_tradition');
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

    public function third_brand()
    {
        $this->display('Public:head');
        $res1= M('brand_brand');
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