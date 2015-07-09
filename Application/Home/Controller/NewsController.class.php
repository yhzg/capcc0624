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

        $res1= M('News_active');
        $data11=$res1->order('time')->limit('1')->select();
        $data11[0]['content']=R('SubString/substring',array($data11[0]['content'],0,120));
        $this->assign('list11',$data11);

        $data12=$res1->where('level=10')->select();

        $data12[0]['content']=R('SubString/substring',array($data12[0]['content'],0,120));
        $this->assign('list12',$data12);
        //dump($data12);

        $data13=$res1->where('title like "%大运河世界遗产保护与可持续发展研讨会%"')->order('time')->select();
        //dump(count($data13));
        for($i=0;$i<count($data13);$i++)
        {
            $pos=array();
            $pos[$i]=strrpos($data13[$i]['author'],"（");//获取（最后出现的位置
            if($pos[$i])
            {
                $data13[$i]['author']=substr($data13[$i]['author'],0,$pos[$i]);//删除后面
            }

        }

        $this->assign('list13',$data13);

        $data14=$res1->where("level = 4")->order('NewsId desc')->limit('18')->select();
        $this->assign('list14',$data14);


        $res2=M('News_angle');
        $data21=$res2->order('time desc')->limit('1')->select();
        $data21[0]['content']=R('SubString/substring',array( $data21[0]['content'],0,120));
        $this->assign('list21',$data21);

        $data22=$res2->order('time desc')->limit('5')->select();
        $this->assign('list22',$data22);

        $res3=M('News_investigation');
        $data31=$res3->order('time desc')->limit('1')->select();
        $data31[0]['foreword']=R('SubString/substring',array( $data31[0]['foreword'],0,120));
        //dump($data31);
        $this->assign('list31',$data31);

        $data32=$res3->order('time desc')->limit('7')->select();
        $this->assign('list32',$data32);

        $this->display();

        $this->display('Public:foot');
    }

    public function activities()
    {
        $this->display('Public:head');

        $res1=M('News_active');
        $newsid=I('newsid');
        $where1['NewsID']=$newsid;
        $data11=$res1->where($where1)->select();
        //dump($data11);
        $this->assign('list11',$data11);

        $data111['date']=date('Y-m-d H:i:s',strtotime($data11[0]['time']));
        $this->assign('list111',$data111);

        $data112=explode("\n",$data11[0]['content']);
        $this->assign('list112',$data112);

        //$new_browsenumber=$data11[0]['BrowseNumber']+1;\
        //dump($data11);
        $data['BrowseNumber']= $data11[0]['browsenumber'] +1;
        //dump($data);
        $res1->where($where1)->save($data);


        $where2['NewsID']=array('gt',$newsid);
        $data12=$res1->where($where2)->order('NewsID')->limit('1')->select();
        //dump($data12);
        $this->assign('list12',$data12);

        $where3['NewsID']=array('lt',$newsid);
        $data13=$res1->where($where3)->order('NewsID desc')->limit('1')->select();
        $this->assign('list13',$data13);


        $this->display();

        $this->display('Public:foot');
    }

    public function investigation()
    {

    }

}