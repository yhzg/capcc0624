<?php
/**
 * Created by PhpStorm.
 * User: DT
 * Date: 2015/7/7
 * Time: 9:01
 */

namespace Home\Controller;


use Think\Controller;

class DgmuseumController extends Controller {
    public function index()
    {
        $this->display('Public:head');

        $res1=M('classic_comment');
        $data11=$res1->where('level = 2')->limit('1')->select();
        $data11[0]['content']=R('SubString/subString',array($data11[0]['content'],0,120));
        // dump($data11[0]['content']);
        $this->assign('list11',$data11);

        $data12=$res1->where('level = 1')->limit('1')->select();
        $data12[0]['content']=R('SubString/subString',array($data12[0]['content'],0,120));
        $works_top=explode(';',$data12[0]['works']);
         //dump( $data12  );
        $this->assign('list12',$data12);
        $this->assign('works_top',$works_top);

        $data13=$res1->select();
        $this->assign('list13',$data13);

        $res2=M('classic_legend');
        $data21=$res2->where('level = 1')->limit('1')->select();
        $data21[0]['content']=R('SubString/subString',array($data21[0]['content'],0,120));
        // dump($data11[0]['content']);
        $this->assign('list21',$data21);

        $data22=$res2->limit('7')->select();
        $this->assign('list22',$data22);

        $data23=$res2->select();
        for($i=0;$i<count($data23);$i++)
        {
            $works_bottom[$i]=explode(';',$data23[$i]['works']);
        }

        //dump( $works_bottom);
        $this->assign('list23',$data23);
        $this->assign('works_bottom',$works_bottom);

        

        $res3=M('classic_market');
        $data31=$res3->where('level = 1')->limit('1')->select();
        $data31[0]['content']=R('SubString/subString',array($data31[0]['content'],0,130));
        // dump($data11[0]['content']);
        $this->assign('list31',$data31);

        $data32=$res3->select();
        $this->assign('list32',$data32);

        $res4=M('classic_present');
        $data41=$res4->where('level = 1')->limit('1')->select();
        $data41[0]['content']=R('SubString/subString',array($data41[0]['content'],0,120));
        // dump($data11[0]['content']);
        $this->assign('list41',$data41);

        $data42=$res4->select();
        $this->assign('list42',$data42);

        $this->display();

        $this->display('Public:foot');
    }

}