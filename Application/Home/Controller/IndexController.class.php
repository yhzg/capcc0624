<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
        public function _before_index()
        {
            $username=I('session.username');
            //session存在，显示登录的用户名
            //否则，显示登录等按钮
           if(empty($username))
           {
               $navbar['url1']=U('Login/login');
               $navbar['bar1']='登录';
               $navbar['url2']=U('Login/register');
               $navbar['bar2']='立即加入';
           }else
           {
               $navbar['url1']='#';
               $navbar['bar1']='欢迎您：'.$username;
               $navbar['url2']=U('Login/logout');
               $navbar['bar2']='退出登录';
           }

            $this->assign('navbar',$navbar);
        }

        public function index(){

            //直接调用页面  无需存在对应的方法
//        $this->display('Public:head');
            // 首页图
            $m= M('news_picture');
            $news=$m->order('id desc')->limit('1')->select();
            $this->assign('home_pic',$news);

            // 新闻
            $res1= M('news_active');
            $data['id']=array('ELT',3);
            $data1=$res1->where($data)->select();
            $data1[0]['content']=R('SubString/subString',array($data1[0]['content'],0,205));
            $data1[1]['content']=R('SubString/subString',array($data1[1]['content'],0,205));
            $data1[2]['content']=R('SubString/subString',array($data1[2]['content'],0,205));
            $this->assign('list2',$data1);

            // 中国世界遗项目
            $res2= M('heritage_project');
            $data2=$res2->where('id = 16')->limit('1')->select();
            $data2[0]['content']=R('SubString/subString',array($data2[0]['content'],0,150));
            $this->assign('list3',$data2);

            // 申遗历程
            $res3= M('heritage_special');
            $news3=$res3->order('id desc')->limit('1')->select();
            $this->assign('list4',$news3);

            $res4= M('heritage_special');
            $data2=$res4->order('id desc')->limit('1')->select();
            $data2[0]['content']=R('SubString/subString',array($data2[0]['content'],0,150));
            $this->assign('list4',$data2);

            // 世界遗产组织
            $res5= M('heritage_organization');
            $data3=$res5->order('id desc')->limit('1')->select();
            $data3[0]['content']=R('SubString/subString',array($data3[0]['content'],0,400));
            $this->assign('list5',$data3);

            // 活动

            // 城市
            $res6= M('city_canal');
            $data4=$res6->where('id = 10')->limit('1')->select();
            $data4[0]['content']=R('SubString/subString',array($data4[0]['content'],0,350));
            $this->assign('city',$data4);

            // 景点
            $res7= M('travel_spot');
            $data['id']=array('ELT',3);
            $data5=$res7->where($data)->select();
            $this->assign('travel_spot',$data5);

            // 吃
            $res8= M('travel_eat');
            $data['id']=array('ELT',1);
            $data5=$res8->where($data)->select();
            $this->assign('travel_eat',$data5);

            // 住

            // 攻略
            $res9= M('travel_story');
            $data['id']=array('ELT',1);
            $data6=$res9->where($data)->select();
            $this->assign('travel_story',$data6);

            // 志愿者家园

            //数字美术馆--传奇
            $res10= M('classic_legend');
            $data7=$res10->where('id = 11')->limit('1')->select();
            $data7[0]['content']=R('SubString/subString',array($data7[0]['content'],0,250));
            $this->assign('classic_legend',$data7);

            //艺术群
            $res11= M('classic_group');
            $data['id']=array('ELT',3);
            $data8=$res11->where($data)->limit('1')->select();
            $data8[0]['content']=R('SubString/subString',array($data8[0]['content'],0,250));
            $this->assign('classic_group',$data8);

            //市场
            $res12= M('classic_market');
            $data['id']=array('ELT',3);
            $data9=$res12->where($data)->limit('1')->select();
            $data9[0]['content']=R('SubString/subString',array($data9[0]['content'],0,200));
            $this->assign('classic_market',$data9);

            // 评论
            $res13= M('classic_comment');
            $data['id']=array('ELT',3);
            $data10=$res13->where($data)->limit('1')->select();
            $data10[0]['content']=R('SubString/subString',array($data10[0]['content'],0,200));
            $this->assign('classic_comment',$data10);

            // 品牌--中华老字号
            $res14= M('brand_tradition');
            $data['id']=array('ELT',7);
            $data11=$res14->where($data)->select();
            $this->assign('brand_tradition',$data11);

            // 产品广告
            $res15= M('brand_product');
            $data['id']=array('ELT',7);
            $data12=$res15->where($data)->limit('1')->select();
            $data12[0]['content']=R('SubString/subString',array($data12[0]['content'],0,200));
            $this->assign('brand_product',$data12);

            // 品牌广告
            $res16= M('brand_brand');
            $data['id']=array('ELT',7);
            $data13=$res16->where($data)->limit('2')->select();
            $data13[0]['content']=R('SubString/subString',array($data13[0]['content'],0,200));
            $this->assign('brand_brand',$data13);


            $this->display('Index:index1');
    }




}