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

        // 世界遗产组织
        $res1= M('heritage_organization');
        $data['id']=array('ELT',1);
        $data1=$res1->where($data)->select();
        $data1[0]['content']=R('SubString/subString',array($data1[0]['content'],60));
        $this->assign('heritage_organization',$data1);

        // 组织公约
        $res1= M('heritage_treaty');
        $data['id']=array('ELT',1);
        $data2=$res1->where($data)->select();
        $data2[0]['content']=R('SubString/subString',array($data2[0]['content'],60));
        $this->assign('heritage_treaty',$data2);

        // 中国世遗项目
        $res2= M('heritage_project');
        $data['id']=array('ELT',1);
        $data3=$res2->where($data)->select();
        $data3[0]['content']=R('SubString/subString',array($data3[0]['content'],60));
        $data3[1]['content']=R('SubString/subString',array($data3[1]['content'],60));
        $data3[2]['content']=R('SubString/subString',array($data3[2]['content'],60));
        $this->assign('heritage_project',$data3);

        // 申遗历程
        $res4= M('heritage_apply');
        $data['id']=array('ELT',1);
        $data4=$res4->where($data)->select();
        $data4[0]['content']=R('SubString/subString',array($data4[0]['content'],130));
        $this->assign('heritage_apply',$data4);

        // 研究机构
        $res2= M('heritage_institution');
        $data['id']=array('ELT',1);
        $data5=$res2->where($data)->select();
        $data5[0]['content']=R('SubString/subString',array($data5[0]['content'],70));
        $data5[1]['content']=R('SubString/subString',array($data5[1]['content'],70));
        $data5[2]['content']=R('SubString/subString',array($data5[2]['content'],70));
        $data5[3]['content']=R('SubString/subString',array($data5[3]['content'],70));
        $this->assign('heritage_institution',$data5);

        $this->display();

        $this->display('Public:foot');
    }

    public function heritage_organization()
    {
        $this->display('Public:head');

        // 世界遗产组织
        $res1= M('heritage_organization');
        $count = $res1->where()->count();
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

    public function heritage_treaty()
    {
        $this->display('Public:head');

        // 组织公约
        $res1= M('heritage_treaty');
        $count = $res1->where()->count();
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

    public function heritage_project()
    {
        $this->display('Public:head');

        // 中国世遗项目
        $res2= M('heritage_project');
        $count = $res2->where()->count();
        $Page  = new \Think\Page($count,4);
        $show  = $Page->show();
        $list = $res2->where()->order('')->limit($Page->firstRow.','.$Page->listRows)->select();
        foreach ($list as $k=>$v)
        {
           // $list[$k]['title']=R('SubString/subString',array($list[$k]['title'],0,44));
            $list[$k]['content']=R('SubString/subString',array($list[$k]['content'],200));
        }
        $this->assign('list',$list);
        $this->assign('page',$show);


        $this->display();

        $this->display('Public:foot');
    }

    public function heritage_apply()
    {
        $this->display('Public:head');

        // 申遗历程-运河申遗
        $res4= M('heritage_apply');
        $count = $res4->where()->count();
        $Page  = new \Think\Page($count,4);
        $show  = $Page->show();
        $list = $res4->where()->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        foreach ($list as $k=>$v)
        {
            //$list[$k]['title']=R('SubString/subString',array($list[$k]['title'],0,44));
            $list[$k]['content']=R('SubString/subString',array($list[$k]['content'],200));
            if($list[$k]['imgpath']=='')
            {
                $list[$k]['imgpath']='Home/Images/login/ologo.png';
            }
        }
        $this->assign('list',$list);
        $this->assign('page',$show);


        $this->display();

        $this->display('Public:foot');
    }

    public function heritage_institution()
    {
        $this->display('Public:head');

        // 研究机构
        $res2= M('heritage_institution');
        $count = $res2->where()->count();
        $Page  = new \Think\Page($count,4);
        $show  = $Page->show();
        $list = $res2->where()->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
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

    public function heritage_media()
    {
        $this->display('Public:head');

        // 主要媒体
        $res2= M('heritage_media');
        $count = $res2->where()->count();
        $Page  = new \Think\Page($count,4);
        $show  = $Page->show();
        $list = $res2->where()->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
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
    public function third_apply()
    {
        $this->display('Public:head');
        $res1= M('heritage_apply');
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

    public function third_institution()
    {
        $this->display('Public:head');
        $res1= M('heritage_institution');
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

    public function third_media()
    {
        $this->display('Public:head');
        $res1= M('heritage_media');
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

    public function third_organization()
    {
        $this->display('Public:head');
        $res1= M('heritage_organization');
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
    public function third_project()
    {
        $this->display('Public:head');
        $res1= M('heritage_project');
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
    public function third_treaty()
    {
        $this->display('Public:head');
        $res1= M('heritage_treaty');
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
