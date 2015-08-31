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
        $data1[0]['content']=R('SubString/subString',array($data1[0]['content'],0,570));
        $data1[1]['content']=R('SubString/subString',array($data1[1]['content'],0,570));
        $data1[2]['content']=R('SubString/subString',array($data1[2]['content'],0,570));
        $data1[3]['content']=R('SubString/subString',array($data1[3]['content'],0,570));
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
        $data2[0]['content']=R('SubString/subString',array($data2[0]['content'],0,570));
        $data2[1]['content']=R('SubString/subString',array($data2[1]['content'],0,570));
        $data2[2]['content']=R('SubString/subString',array($data2[2]['content'],0,570));
        $data2[3]['title']=R('SubString/subString',array($data2[3]['title'],0,56));
        $data2[3]['content']=R('SubString/subString',array($data2[3]['content'],0,570));
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
        $data3[0]['content']=R('SubString/subString',array($data3[0]['content'],0,570));
        $data3[1]['content']=R('SubString/subString',array($data3[1]['content'],0,570));
        $data3[2]['content']=R('SubString/subString',array($data3[2]['content'],0,570));
        $data3[3]['content']=R('SubString/subString',array($data3[3]['content'],0,570));
        $this->assign('brand_brand',$data3);

        $this->display();

        $this->display('Public:foot');
    }
}