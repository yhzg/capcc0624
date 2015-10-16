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

        $res1= M('classic_legend');
        $data['id']=array('ELT',1);
        $data1=$res1->where($data)->select();
        $data1[0]['content']=R('SubString/subString',array($data1[0]['content'],60));
        $this->assign('classic_legend',$data1);

        $res2= M('classic_market');
        $data['id']=array('ELT',1);
        $data2=$res2->where($data)->select();
        $data2[1]['content']=R('SubString/subString',array($data2[1]['content'],50));
        $data2[2]['content']=R('SubString/subString',array($data2[2]['content'],50));
        $data2[3]['content']=R('SubString/subString',array($data2[3]['content'],50));
        $this->assign('classic_market',$data2);

        $res3= M('classic_group');
        $data['id']=array('ELT',1);
        $data3=$res3->where($data)->select();
        $data3[0]['content']=R('SubString/subString',array($data3[0]['content'],50));
        $data3[1]['content']=R('SubString/subString',array($data3[1]['content'],50));
        $data3[2]['content']=R('SubString/subString',array($data3[2]['content'],50));
        $this->assign('classic_group',$data3);

        $res4= M('classic_comment');
        $data['id']=array('ELT',1);
        $data4=$res4->where($data)->select();
        $data4[0]['content']=R('SubString/subString',array($data4[0]['content'],160));
        $this->assign('classic_comment',$data4);

        $this->display();

        $this->display('Public:foot');
    }

    public function classic_legend()
    {
        $this->display('Public:head');

        $res1= M('classic_legend');
        $count = $res1->where()->count();
        $Page  = new \Think\Page($count,16);
        $show  = $Page->show();
        $list =$res1->where()->order('')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);
        $this->assign('page',$show);

        $this->display();

        $this->display('Public:foot');
    }

    public function classic_market()
    {
        $this->display('Public:head');

        $res2= M('classic_market');
        $count = $res2->where()->count();
        $Page  = new \Think\Page($count,16);
        $show  = $Page->show();
        $list = $res2->where()->order('')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);
        $this->assign('page',$show);

        $this->display();

        $this->display('Public:foot');
    }

    public function classic_group()
    {
        $this->display('Public:head');

        $res3= M('classic_group');
        $count = $res3->where()->count();
        $Page  = new \Think\Page($count,16);
        $show  = $Page->show();
        $list = $res3->where()->order('')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);
        $this->assign('page',$show);


        $this->display();

        $this->display('Public:foot');
    }

    public function classic_comment()
    {
        $this->display('Public:head');

        $res4= M('classic_comment');
        $count = $res4->where()->count();
        $Page  = new \Think\Page($count,4);
        $show  = $Page->show();
        $list = $res4->where()->order('')->limit($Page->firstRow.','.$Page->listRows)->select();
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

    public function third_legend()
    {
        $this->display('Public:head');

        $res1= M('classic_legend');
        $aid=$_GET['id'];
        $list = $res1->where(array('ID'=>$aid))->find();
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

    public function third_market()
    {
        $this->display('Public:head');

        $res1= M('classic_market');
        $aid=$_GET['id'];
        $list = $res1->where(array('ID'=>$aid))->find();
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

    public function third_group()
    {
        $this->display('Public:head');

        $res1= M('classic_group');
        $aid=$_GET['id'];
        $list = $res1->where(array('ID'=>$aid))->find();
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

    public function third_comment()
    {
        $this->display('Public:head');

        $res1= M('classic_comment');
        $aid=$_GET['id'];
        $list = $res1->where(array('ID'=>$aid))->find();
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