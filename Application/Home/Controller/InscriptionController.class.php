<?php
/**
 * Created by PhpStorm.
 * User: DT
 * Date: 2015/7/6
 * Time: 10:38
 */

namespace Home\Controller;
use Think\Controller;


class InscriptionController extends Controller{
    public function index()
    {
        $this->display('Public:head');

           $res1=M('inscription_special');
           $data11=$res1->where('level = 2')->limit('1')->select();
           $data11[0]['content']=R('SubString/subString',array($data11[0]['content'],0,120));
               // dump($data11[0]['content']);
           $this->assign('list11',$data11);

           $data12=$res1->limit('4')->select();
           $this->assign('list12',$data12);

           $res2=M('inscription_history');
           //此处查询条件需再确认
           $data21=$res2->limit('1')->select();
           $this->assign('list21',$data21);

           $data22=$res2->limit('7')->select();
           $this->assign('list22',$data22);

           $res3=M('inscription_organization');
           $data31=$res3->select();
           // dump($data31);
           $this->assign('list31',$data31);

           $res4=M('inscription_convention');
           $data41=$res4->where('newsid = 1')->select();
           $data41[0]['content']=R('SubString/subString',array($data41[0]['content'],0,200));
           $this->assign('list41',$data41);

           $res5=M('inscription_concept');
           $data51=$res5->select();
           $this->assign('list51',$data51);

           $res6=M('inscription_research');
           $data61=$res6->select();
           $this->assign('list61',$data61);

           $res7=M('inscription_media');
           $data71=$res7->select();
           $this->assign('list71',$data71);

           $res8=M('inscription_union');
           $data81=$res8->select();
           $this->assign('list81',$data81);

           $this->display();

           $this->display('Public:foot');
    }
}