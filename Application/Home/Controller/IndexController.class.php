<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {
        public function show_now($tableName,$num)
        {
          $date=date(d,time());
          $count=M($tableName)->count();
          $start_id=(($date-1)*$num+1)%($count-$num+1);
          if($start_id==0)
          {
            $start_id=1;
          }
          return $start_id;

        }



        public function index(){

         //记录ip
//            $ip=get_client_ip();
//            $m=M('ip');
//            $Ip = new \Org\Net\IpLocation('UTFWry.dat');
//            $area = $Ip->getlocation($ip);
//            $date=date('Y-m-d',time());
//            $data=array(
//                'ip'=>$ip,
//                'area'=>$area['area'],
//                'time'=>date('Y-m-d H:i:s',time()),
//                'date'=>$date
//           );
//            $is_access=$m->where(array('ip'=>$ip,'date'=>$date))->find();
//            if(!$is_access)
//            {
//             $m->add($data);
//            }



            //直接调用页面  无需存在对应的方法
            $this->display('Public:head');
            // 首页图

            //在headline=1的字段中获取最新的一条
          $m= M('news_picture');
          $headline=$m->where(array('Headline'=>'1'))->order('id desc')->limit('3')->select();

          foreach($headline as $k=>$v)
          {
            $img_arr[$k]['id']=$v['id'];
            $img_arr[$k]['imgpath']=$v['imgpath'];
          }
          //dump($imgpath_arr);
          $img_json=json_encode($img_arr);
          //dump($img_json);
          $this->assign('imgs',$img_json);
          $this->assign('headline',$headline);

          /*  $res1= M('news_picture');
            $data['id']=array('ELT',3);
            $data1=$res1->where($data)->select();
            $this->assign('news_pic',$data1);*/

            // 新闻
            $res1= M('news_active');
            $data1=$res1->order('ID desc')->limit(3)->select();
            $this->assign('news_active',$data1);

            // 中国世界遗项目
            $res2= M('heritage_project');
            $data2=$res2->where('id = 16')->limit('1')->select();
            $this->assign('heritage_project',$data2);

            // 申遗历程
            $res3= M('heritage_special');
            $news3=$res3->order('id desc')->limit('1')->select();
            $this->assign('heritage_special',$news3);

            $res4= M('heritage_apply');
            $data4=$res4->order('id desc')->limit('1')->select();
            $this->assign('heritage_apply',$data4);

            // 世界遗产组织
            $res5= M('heritage_organization');
            $data5=$res5->order('id desc')->limit('1')->select();
            $this->assign('heritage_organization',$data5);

            // 活动
            $res66= M('activity_activity');
            $data66=$res66->order('ID desc')->limit('3')->select();
            $data66[0]['content']=R('SubString/subString',array($data66[0]['content'],200));
            $this->assign('activity',$data66);

            // 城市
            $res6= M('city_canal');
            $start_id6=$this->show_now('city_canal',1);
            $data6=$res6->where("ID >=$start_id6")->find();
            $data6['content']=R('SubString/subString',array($data6['content'],110));
            $this->assign('city',$data6);

            // 景点
            $res7= M('travel_spot');
            $start_id7=$this->show_now('travel_spot',3);
            $data7=$res7->where("ID >=$start_id7")->limit(3)->select();
            $this->assign('travel_spot',$data7);

            // 吃
            $res8= M('travel_eat');
            $start_id8=$this->show_now('travel_eat',2);
            $data8=$res8->where("ID >=$start_id8")->limit(2)->select();
            $this->assign('travel_eat',$data8);



            // 攻略
            $res9= M('travel_story');
            $start_id9=$this->show_now('travel_story',2);
            $data9=$res9->where("ID >=$start_id9")->limit(2)->select();
            foreach($data9 as $k=>$v)
            {
              $data9[$k]['content']=R('SubString/subString',array($data9[$k]['content'],80));
            }

            $this->assign('travel_story',$data9);

            // 志愿者家园

            //数字美术馆--传奇
            $res10= M('classic_legend');
            $start_id10=$this->show_now('classic_legend',1);
            $data10=$res10->where("ID >=$start_id10")->find();
            $data10['content']=R('SubString/subString',array($data10['content'],80));
            $this->assign('classic_legend',$data10);

            //艺术群
            $res11= M('classic_group');
            $start_id11=$this->show_now('classic_group',1);
            $data11=$res11->where("ID >=$start_id11")->find();
            $data11['content']=R('SubString/subString',array($data11['content'],80));
            $this->assign('classic_group',$data11);

            //市场
            $res12= M('classic_market');
            $start_id12=$this->show_now('classic_market',1);
            $data12=$res12->where("ID >=$start_id12")->find();
            $data12['content']=R('SubString/subString',array($data12['content'],80));
            $this->assign('classic_market',$data12);

            // 评论
            $res13= M('classic_comment');
            $start_id13=$this->show_now('classic_comment',1);
            $data13=$res13->where("ID >=$start_id13")->find();
            $data13['content']=R('SubString/subString',array($data13['content'],80));
            $this->assign('classic_comment',$data13);

            // 品牌--中华老字号
            $res14= M('brand_tradition');
            $data['id']=array('ELT',7);
            $data14=$res14->where($data)->select();
            $this->assign('brand_tradition',$data14);

            // 产品广告
            $res15= M('brand_product');
            $data['id']=array('ELT',7);
            $data15=$res15->where($data)->limit('1')->select();
            $data15[0]['content']=R('SubString/subString',array($data15[0]['content'],80));
            $this->assign('brand_product',$data15);

            // 品牌广告
            $res16= M('brand_brand');
            $data['id']=array('ELT',7);
            $data16=$res16->where($data)->limit('2')->select();
            $data16[0]['content']=R('SubString/subString',array($data16[0]['content'],80));
            $this->assign('brand_brand',$data16);

            $this->display('Index:index1');

            $this->display('Public:foot');
    }

}