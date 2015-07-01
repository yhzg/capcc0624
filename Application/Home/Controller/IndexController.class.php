<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
        public function index(){
            //直接调用页面  无需存在对应的方法
         $this->display('Index:head');

         $res1= M('News_active');
         $news11=$res1->where('level=10')->select();
         $news12=$res1->where('level=4')->order('NewsID DESC')->limit('18')->select();
         $this->assign('list11',$news11);
         $this->assign('list12',$news12);

         $res2=M('main_page');
         $news21=$res2->select();
         $this->assign('list21',$news21);

         $res3=M('inscription_history');
         $news31=$res3->order('NewsID')->limit('9')->select();
        // $news31[0]['content']=R('SubString/substring',array($news31[0]['content'],0,120));
            //dump($news31);
         $this->assign('list31',$news31);

         $this->display();
         $this->display('Index:mainfoot');
    }




}