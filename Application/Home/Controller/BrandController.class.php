<?php
/**
 * Created by PhpStorm.
 * User: DT
 * Date: 2015/7/6
 * Time: 11:29
 */

namespace Home\Controller;


use Think\Controller;

class BrandController extends Controller {
    public function index()
    {
        $this->display('Public:head');

        // 产品广告
        $res1= M('brand_product');
        $data['id']=array('ELT',1);
        $data1=$res1->where($data)->select();
        $this->assign('brand_product',$data1);

        // 中华老字号
        $res2= M('brand_tradition');
        $data['id']=array('ELT',1);
        $data2=$res2->where($data)->select();
        $this->assign('brand_tradition',$data2);

        // 品牌
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

        // 产品广告
        $res1= M('brand_product');
        $data['id']=array('ELT',1);
        $data1=$res1->where($data)->select();
        $this->assign('brand_product',$data1);


        $this->display();

        $this->display('Public:foot');
    }

    public function brand_tradition()
    {
        $this->display('Public:head');

        // 中华老字号
        $res2= M('brand_tradition');
        $data['id']=array('ELT',1);
        $data2=$res2->where($data)->select();
        $this->assign('brand_tradition',$data2);

        $this->display();

        $this->display('Public:foot');
    }

    public function brand_brand()
    {
        $this->display('Public:head');

        // 品牌
        $res3= M('brand_brand');
        $data['id']=array('ELT',1);
        $data3=$res3->where($data)->select();
        $this->assign('brand_brand',$data3);

        $this->display();

        $this->display('Public:foot');
    }
}