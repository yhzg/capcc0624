<?php
/**
 * Created by PhpStorm.
 * User: DT
 * Date: 2015/7/7
 * Time: 9:01
 */

namespace Home\Controller;


use Think\Controller;

class DgmuseumController extends CommonController {
    public function index()
    {
        $this->display('Public:head');

        // 传奇
        $res1= M('classic_legend');
        $data['id']=array('ELT',1);
        $data1=$res1->where($data)->select();
        $data1[0]['content']=R('SubString/subString',array($data1[0]['content'],0,170));
        $this->assign('classic_legend',$data1);

        // 市场
        $res2= M('classic_market');
        $data['id']=array('ELT',1);
        $data2=$res2->where($data)->select();
        $data2[1]['content']=R('SubString/subString',array($data2[1]['content'],0,160));
        $data2[2]['content']=R('SubString/subString',array($data2[2]['content'],0,160));
        $data2[3]['content']=R('SubString/subString',array($data2[3]['content'],0,160));
        $this->assign('classic_market',$data2);

        // 艺术群
        $res3= M('classic_group');
        $data['id']=array('ELT',1);
        $data3=$res3->where($data)->select();
        $data3[0]['content']=R('SubString/subString',array($data3[0]['content'],0,138));
        $data3[1]['content']=R('SubString/subString',array($data3[1]['content'],0,138));
        $data3[2]['content']=R('SubString/subString',array($data3[2]['content'],0,138));
        $this->assign('classic_group',$data3);

        // 评论
        $res4= M('classic_comment');
        $data['id']=array('ELT',1);
        $data4=$res4->where($data)->select();
        $data4[0]['content']=R('SubString/subString',array($data4[0]['content'],0,500));
        $this->assign('classic_comment',$data4);

        $this->display();

        $this->display('Public:foot');
    }

    public function classic_legend()
    {
        $this->display('Public:head');

        // 传奇
        $res1= M('classic_legend');
        $data['id']=array('ELT',1);
        $data1=$res1->where($data)->select();
        $data1[0]['content']=R('SubString/subString',array($data1[0]['content'],0,570));
        $data1[1]['content']=R('SubString/subString',array($data1[1]['content'],0,570));
        $data1[2]['content']=R('SubString/subString',array($data1[2]['content'],0,570));
        $data1[3]['content']=R('SubString/subString',array($data1[3]['content'],0,570));
        $this->assign('classic_legend',$data1);

        $this->display();

        $this->display('Public:foot');
    }

    public function classic_market()
    {
        $this->display('Public:head');

        // 市场
        $res2= M('classic_market');
        $data['id']=array('ELT',1);
        $data2=$res2->where($data)->select();
        $data2[0]['content']=R('SubString/subString',array($data2[0]['content'],0,570));
        $data2[1]['content']=R('SubString/subString',array($data2[1]['content'],0,570));
        $data2[2]['content']=R('SubString/subString',array($data2[2]['content'],0,570));
        $data2[3]['content']=R('SubString/subString',array($data2[3]['content'],0,570));
        $this->assign('classic_market',$data2);


        // 传奇
        $res1= M('classic_legend');
        $data['id']=array('ELT',1);
        $data1=$res1->where($data)->select();
        $this->assign('classic_legend',$data1);

        $this->display();

        $this->display('Public:foot');
    }

    public function classic_group()
    {
        $this->display('Public:head');

        // 艺术群
        $res3= M('classic_group');
        $data['id']=array('ELT',1);
        $data3=$res3->where($data)->select();
        $data3[0]['content']=R('SubString/subString',array($data3[0]['content'],0,138));
        $data3[1]['content']=R('SubString/subString',array($data3[1]['content'],0,138));
        $data3[2]['content']=R('SubString/subString',array($data3[2]['content'],0,138));
        $data3[3]['content']=R('SubString/subString',array($data3[3]['content'],0,138));
        $this->assign('classic_group',$data3);

        $this->display();

        $this->display('Public:foot');
    }

    public function classic_comment()
    {
        $this->display('Public:head');

        // 评论
        $res4= M('classic_comment');
        $data['id']=array('ELT',1);
        $data4=$res4->where($data)->select();
        $data4[0]['content']=R('SubString/subString',array($data4[0]['content'],0,570));
        $data4[1]['content']=R('SubString/subString',array($data4[1]['content'],0,570));
        $data4[2]['content']=R('SubString/subString',array($data4[2]['content'],0,570));
        $data4[3]['content']=R('SubString/subString',array($data4[3]['content'],0,570));
        $this->assign('classic_comment',$data4);

        $this->display();

        $this->display('Public:foot');
    }
}