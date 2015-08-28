<?php
/**
 * Created by PhpStorm.
 * User: DT
 * Date: 2015/7/6
 * Time: 10:38
 */

namespace Home\Controller;
use Think\Controller;


class HeritageController extends Controller{
    public function index()
    {
        $this->display('Public:head');

        // 世界遗产组织
        $res1= M('heritage_organization');
        $data['id']=array('ELT',1);
        $data1=$res1->where($data)->select();
        $data1[0]['content']=R('SubString/subString',array($data1[0]['content'],0,170));
        $this->assign('heritage_organization',$data1);

        // 组织公约
        $res1= M('heritage_treaty');
        $data['id']=array('ELT',1);
        $data2=$res1->where($data)->select();
        $data2[0]['content']=R('SubString/subString',array($data2[0]['content'],0,170));
        $this->assign('heritage_treaty',$data2);

        // 中国世遗项目
        $res2= M('heritage_project');
        $data['id']=array('ELT',1);
        $data3=$res2->where($data)->select();
        $data3[0]['content']=R('SubString/subString',array($data3[0]['content'],0,150));
        $data3[1]['content']=R('SubString/subString',array($data3[1]['content'],0,150));
        $data3[2]['content']=R('SubString/subString',array($data3[2]['content'],0,150));
        $this->assign('heritage_project',$data3);

        // 申遗历程
        $res4= M('heritage_apply');
        $data['id']=array('ELT',1);
        $data4=$res4->where($data)->select();
        $data4[0]['content']=R('SubString/subString',array($data4[0]['content'],0,350));
        $this->assign('heritage_apply',$data4);

        // 研究机构
        $res2= M('heritage_institution');
        $data['id']=array('ELT',1);
        $data5=$res2->where($data)->select();
        $data5[0]['content']=R('SubString/subString',array($data5[0]['content'],0,200));
        $data5[1]['content']=R('SubString/subString',array($data5[1]['content'],0,200));
        $data5[2]['content']=R('SubString/subString',array($data5[2]['content'],0,200));
        $data5[3]['content']=R('SubString/subString',array($data5[3]['content'],0,200));
        $this->assign('heritage_institution',$data5);

        $this->display();

        $this->display('Public:foot');
    }

    public function heritage_organization()
    {
        $this->display('Public:head');

        // 世界遗产组织
        $res1= M('heritage_organization');
        $data['id']=array('ELT',1);
        $data1=$res1->where($data)->select();
        $data1[0]['content']=R('SubString/subString',array($data1[0]['content'],0,570));
        $data1[1]['content']=R('SubString/subString',array($data1[1]['content'],0,570));
        $data1[2]['content']=R('SubString/subString',array($data1[2]['content'],0,570));
        $data1[3]['content']=R('SubString/subString',array($data1[3]['content'],0,570));
        $this->assign('heritage_organization',$data1);


        $this->display();

        $this->display('Public:foot');
    }

    public function heritage_treaty()
    {
        $this->display('Public:head');

        // 组织公约
        $res1= M('heritage_treaty');
        $data['id']=array('ELT',1);
        $data2=$res1->where($data)->select();
        $data2[0]['content']=R('SubString/subString',array($data2[0]['content'],0,570));
        $this->assign('heritage_treaty',$data2);


        $this->display();

        $this->display('Public:foot');
    }

    public function heritage_project()
    {
        $this->display('Public:head');

        // 中国世遗项目
        $res2= M('heritage_project');
        $data['id']=array('ELT',1);
        $data3=$res2->where($data)->select();
        $data3[0]['content']=R('SubString/subString',array($data3[0]['content'],0,570));
        $data3[1]['content']=R('SubString/subString',array($data3[1]['content'],0,570));
        $data3[2]['content']=R('SubString/subString',array($data3[2]['content'],0,570));
        $data3[3]['content']=R('SubString/subString',array($data3[3]['content'],0,570));
        $this->assign('heritage_project',$data3);


        $this->display();

        $this->display('Public:foot');
    }

    public function heritage_apply()
    {
        $this->display('Public:head');

        // 申遗历程
        $res4= M('heritage_apply');
        $data['id']=array('ELT',1);
        $data4=$res4->where($data)->select();
        $data4[0]['content']=R('SubString/subString',array($data4[0]['content'],0,500));
        $data4[1]['title']=R('SubString/subString',array($data4[1]['title'],0,70));
        $data4[1]['content']=R('SubString/subString',array($data4[1]['content'],0,500));
        $data4[2]['content']=R('SubString/subString',array($data4[2]['content'],0,500));
        $data4[3]['content']=R('SubString/subString',array($data4[3]['content'],0,500));
        $this->assign('heritage_apply',$data4);


        $this->display();

        $this->display('Public:foot');
    }

    public function heritage_institution()
    {
        $this->display('Public:head');

        // 研究机构
        $res2= M('heritage_institution');
        $data['id']=array('ELT',1);
        $data5=$res2->where($data)->select();
        $data5[0]['content']=R('SubString/subString',array($data5[0]['content'],0,570));
        $data5[1]['content']=R('SubString/subString',array($data5[1]['content'],0,570));
        $data5[2]['content']=R('SubString/subString',array($data5[2]['content'],0,570));
        $data5[3]['content']=R('SubString/subString',array($data5[3]['content'],0,570));
        $this->assign('heritage_institution',$data5);


        $this->display();

        $this->display('Public:foot');
    }

    public function heritage_media()
    {
        $this->display('Public:head');

        //主要媒体

        $this->display();

        $this->display('Public:foot');
    }
}