<?php
/**
 * Created by PhpStorm.
 * User: DT
 * Date: 2015/7/2
 * Time: 10:24
 */

namespace Home\Controller;
use Think\Controller;

class CityController extends Controller{
    public function index()
    {
        $this->display('Public:head');

        $res1=M('city_canal');
        $data11=$res1->where('level = 2')->limit('1')->select();
        $data11[0]['content']=R('SubString/subString',array($data11[0]['content'],0,200));
       // dump($data11[0]['content']);
        $this->assign('list11',$data11);

        $data12=$res1->where('level = 1')->limit('1')->select();
        $data12[0]['content']=R('SubString/subString',array($data12[0]['content'],0,150));
        $this->assign('list12',$data12);

        $res2=M('city_world');
        $data21=$res2->where('level = 0')->limit('1')->select();
        $this->assign('list21',$data21);

        $data22=$res2->where('level = 0')->limit('7')->select();
        $this->assign('list22',$data22);

        $data23[0]['content']=R('SubString/subString',array($data23[0]['content'],0,150));
        $data23=$res2->where('level = 1')->limit('1')->select();
        $this->assign('list23',$data23);

        $data24=$res2->where('class = 1')->limit('7')->select();
        $this->assign('list24',$data24);

        $data25=$res2->where('class = 2')->limit('7')->select();
        $this->assign('list25',$data25);

        $res3=M('main_page');
        $data31=$res3->field('City')->select();
       // dump($data31);
        $this->assign('list31',$data31);

        $this->display();

        $this->display('Public:foot');

    }

}