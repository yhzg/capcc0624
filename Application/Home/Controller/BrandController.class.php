<?php
/**
 * Created by PhpStorm.
 * User: DT
 * Date: 2015/7/6
 * Time: 11:29
 */

namespace Home\Controller;


use Think\Controller;

class BrandController extends Controller {
    public function index()
    {
        $this->display('Public:head');

        $res1=M('brand_agent');
        $data11=$res1->where('level = 1')->limit('1')->select();
        $data11[0]['content']=R('SubString/subString',array($data11[0]['content'],0,150));
        $this->assign('list11',$data11);

        $data12=$res1->where('level = 0')->limit('7')->select();
        $this->assign('list12',$data12);       

        $res2=M('brand_old');
        $data21=$res2->limit('1')->select();
        $this->assign('list21',$data21);

        $data22=$res2->limit('6')->select();
        $this->assign('list22',$data22);

        $data23=$res2->limit('6')->select();
        $data23[0]['content']=R('SubString/subString',array($data23[0]['content'],0,120));
        $this->assign('list23',$data23);

        $data24=$res2->where('level = 0')->limit('7')->select();
        $this->assign('list24',$data24);

        $res3=M('brand_advertisement_spread');
        $data31=$res3->where('level = 1')->limit('1')->select();
        $data31[0]['content']=R('SubString/subString',array($data31[0]['content'],0,120));
        $this->assign('list31',$data31);

        $data32=$res3->where('level = 0')->limit('7')->select();
        $this->assign('list32',$data32);
        
        $res4=M('brand_custom_made');
        $data41=$res4->where('level = 0')->limit('4')->select();
        $this->assign('list41',$data41);
        
        $data42=$res4->where('level = 1')->limit('7')->select();
        //dump($data42);
        $data42[0]['content']=R('SubString/subString',array($data42[0]['content'],0,100));
        $this->assign('list42',$data42);




        $this->display();

        $this->display('Public:foot');
    }

}