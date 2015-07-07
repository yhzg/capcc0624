<?php
/**
 * Created by PhpStorm.
 * User: DT
 * Date: 2015/7/6
 * Time: 10:38
 */

namespace Home\Controller;
use Think\Controller;


class TravelController extends Controller{
    public function index()
    {
        $this->display('Public:head');

        $res1=M('travel_ancient_town');
        $data11=$res1->where('level = 2')->limit('1')->select();
        $data11[0]['content']=R('SubString/subString',array($data11[0]['content'],0,120));
        // dump($data11[0]['content']);
        $this->assign('list11',$data11);

        $data12=$res1->limit('1')->select();
        $this->assign('list12',$data12);

        $data13=$res1->limit('7')->select();
        $this->assign('list13',$data13);

        $data14=$res1->where('level = 1')->limit('1')->select();
        $data14[0]['content']=R('SubString/subString',array($data14[0]['content'],0,180));
        $this->assign('list14',$data14);

        $data15=$res1->where('level = 0')->limit('7')->select();
        $this->assign('list15',$data15);

        $res2=M('travel_lake');
        $data21=$res2->where('level = 1')->limit('1')->select();
        $data21[0]['content']=R('SubString/subString',array($data21[0]['content'],0,180));
        $this->assign('list21',$data21);

        $res2=M('travel_lake');
        $data22=$res2->where('level = 0')->limit('7')->select();
        $this->assign('list22',$data22);

        $res3=M('travel_garden');
        $data31=$res3->where('level = 1')->limit('1')->select();
        $data31[0]['content']=R('SubString/subString',array($data31[0]['content'],0,180));
        $this->assign('list31',$data31);

        $data32=$res3->where('level = 0')->limit('7')->select();
        $this->assign('list32',$data32);

        $res4=M('travel_college');
        $data41=$res4->where('level = 1')->limit('1')->select();
        $data41[0]['content']=R('SubString/subString',array($data41[0]['content'],0,180));
        $this->assign('list41',$data41);

        $data42=$res4->where('level = 0')->limit('7')->select();
        $this->assign('list42',$data42);

        $res5=M('travel_bowuguan');
        $data51=$res5->where('level = 1')->limit('1')->select();
        $data51[0]['content']=R('SubString/subString',array($data51[0]['content'],0,180));
        $this->assign('list51',$data51);
        
        $data52=$res5->where('level = 0')->limit('7')->select();
        $this->assign('list52',$data52);

        $res6=M('travel_site');
        $data61=$res6->where('level = 1')->limit('1')->select();
        $data61[0]['content']=R('SubString/subString',array($data61[0]['content'],0,180));
        $this->assign('list61',$data61);

        $data62=$res6->where('level = 0')->limit('7')->select();
        $this->assign('list62',$data62);

        $res7=M('travel_park');
        $data71=$res7->where('level = 1')->limit('1')->select();
        $data71[0]['content']=R('SubString/subString',array($data71[0]['content'],0,180));
        $this->assign('list71',$data71);

        $data72=$res7->where('level = 0')->limit('7')->select();
        $this->assign('list72',$data72);
        
        $this->display();

        $this->display('Public:foot');

    }

}