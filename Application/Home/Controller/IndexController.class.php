<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {

        //show_now 为需要随日期变化二内容变化的区域
        //$n:每日需要显示的条目数
        public function show_now($tableName,$n,$content_len=80)
        {
            $d=date(d,time());
            $id_arr=M($tableName)->field('ID')->select();
            foreach($id_arr as $k=>$v)
            {
                $id_arr_new[]=$v['id'];
            }

            $count=count($id_arr_new);
            //$arr_num 确定要合并多少个数组
            $arr_num=floor(31*$n/$count);
            if($arr_num==0)
            {
                $arr_big=$id_arr_new;
            }else{
                for($i=0;$i<$arr_num;$i++)
                {
                    $arr_big=array_merge($id_arr_new,$id_arr_new);
                }
            }

            $start_id=($d-1)*$n%$count;
            $m=M($tableName);
            for($j=0;$j<$n;$j++)
            {
                $res[$j]=$m->where(array('ID'=>$arr_big[$start_id]))->find();
                $start_id++;
            }
            foreach($res as $k=>$v)
            {
                $res[$k]['content']=R('SubString/subString',array($v['content'],$content_len));
            }

            //结果集为二维数组
            return $res;


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


            // 新闻
            $res1= M('news_wechat');
            $data1=$res1->order('ID desc')->limit(3)->select();
            foreach($data1 as $k=>$v)
            {
                $img_arr[$k]['id']=$v['id'];
                $data1[$k]['imgpath']=explode(',',$v['imgpath']);
                $img_arr[$k]['imgpath']=$data1[$k]['imgpath'][0];
            }

            $img_json=json_encode($img_arr);

            $this->assign('imgs',$img_json);

            $this->assign('news_wechat',$data1);

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
            $info_city=$this->show_now('city_canal',1,110);
            $this->assign('city',$info_city);

            // 景点
            $info_spot=$this->show_now('travel_spot',3);
            $this->assign('travel_spot',$info_spot);

            // 吃
            $info_eat=$this->show_now('travel_eat',2);
            $this->assign('travel_eat',$info_eat);

            // 攻略
            $info_story=$this->show_now('travel_story',2,110);
            $this->assign('travel_story',$info_story);

            // 志愿者家园

            //数字美术馆--传奇
            $info_legend=$this->show_now('classic_legend',1,110);
            $this->assign('classic_legend',$info_legend);

            //艺术群
            $info_group=$this->show_now('classic_group',1,110);
            $this->assign('classic_group',$info_group);

            //市场
            $info_market=$this->show_now('classic_market',1,80);
            $this->assign('classic_market',$info_market);

            // 评论
            $info_comment=$this->show_now('classic_comment',1,80);
            $this->assign('classic_comment',$info_comment);

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