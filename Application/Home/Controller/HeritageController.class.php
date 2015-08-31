<?php
/**
 * Created by PhpStorm.
 * User: DT
 * Date: 2015/7/6
 * Time: 10:38
 */

namespace Home\Controller;
use Think\Controller;


class HeritageController extends CommonController{
    public function index()
    {
        $this->display('Public:head');

        // �����Ų���֯
        $res1= M('heritage_organization');
        $data['id']=array('ELT',1);
        $data1=$res1->where($data)->select();
        $data1[0]['content']=R('SubString/subString',array($data1[0]['content'],0,170));
        $this->assign('heritage_organization',$data1);

        // ��֯��Լ
        $res1= M('heritage_treaty');
        $data['id']=array('ELT',1);
        $data2=$res1->where($data)->select();
        $data2[0]['content']=R('SubString/subString',array($data2[0]['content'],0,170));
        $this->assign('heritage_treaty',$data2);

        // �й�������Ŀ
        $res2= M('heritage_project');
        $data['id']=array('ELT',1);
        $data3=$res2->where($data)->select();
        $data3[0]['content']=R('SubString/subString',array($data3[0]['content'],0,150));
        $data3[1]['content']=R('SubString/subString',array($data3[1]['content'],0,150));
        $data3[2]['content']=R('SubString/subString',array($data3[2]['content'],0,150));
        $this->assign('heritage_project',$data3);

        // ��������
        $res4= M('heritage_apply');
        $data['id']=array('ELT',1);
        $data4=$res4->where($data)->select();
        $data4[0]['content']=R('SubString/subString',array($data4[0]['content'],0,350));
        $this->assign('heritage_apply',$data4);

        // �о�����
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
}