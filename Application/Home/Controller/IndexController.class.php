<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
        public function index(){
            //直接调用页面  无需存在对应的方法
         $this->display('Public:head');

         $m=M('News_main');
         $news=$m->order('NewsID DESC')->limit('1')->select();
         $this->assign('list11',$news);


         $res1= M('News_active');
        // $news11=$res1->order('NewsID desc')->select();
         $news12=$res1->order('NewsID DESC')->limit('18')->select();

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