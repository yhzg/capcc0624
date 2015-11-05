<?php
/**
 * Created by PhpStorm.
 * User: DT
 * Date: 2015/8/26
 * Time: 16:03
 */

namespace Home\Controller;


use Think\Controller;

class SearchController extends CommonController
{

    public function search()
    {
        $this->display('Public:head');

        $keyword_post=I('post.keyword');
        //dump($keyword_post);
        session('keyword',$keyword_post);

        $keyword=I('session.keyword');
        //dump($keyword);
        //exit;
        //$keywords  分割关键字并去除空关键字
        $keywords=array_filter(explode(' ',$keyword));
        //dump($keywords);
        //exit;
        foreach($keywords as $k)
        {
            $key_arr[]="%$k%";
        }
        //dump($key_arr);
        //exit;
        //搜索表集合
        $table_list=array("news_active","news_wechat","city_canal","city_protect","heritage_organization","heritage_expo","travel_spot","travel_eat","travel_live","travel_story","brand_tradition","brand_product","brand_brand","classic_legend","classic_market","classic_comment","classic_group","activity_activity","volunteer_grace","volunteer_act","volunteer_advice","volunteer_mon");
        //$res_search=array();
        for($i=0;$i<count($table_list);$i++)
        {
            $m=M($table_list[$i]);
            //多个关键字时 是‘与’的关系  需同时满足
            $data['Title']=array("like",$key_arr,'AND');
            $data['Content']=array("like",$key_arr,'AND');
            $data['Author']=array("like",$key_arr,'AND');
            //多个字段间是‘或’的关系
            $data['_logic']='OR';
            //得到$res 结果为三维数组｛第一层：不同表；第二层：每张表结果序列；第三层：title和content｝
            $res[$i] = $m->where($data)->Field('ID , Title , Content')->select();
            //给每条记录添加tb_name字段，方便后面操作

            //拼接跳转路径  志愿者家园的特殊处理
            $url_arr=explode('_',$table_list[$i]);
            $controller=$url_arr[0];
            $method=$url_arr[1];

            foreach($res[$i] as $k=>$v)
            {
                //id 就是数据库中的ID字段
                $id=$v['id'];
                if($method=='advice' ||$method=='mon')
                {
                    $db_name='Volunteer_'.$method;
                    $posts=M($db_name)->where(array('ID'=>$id))->find();
                    $tid=$posts['tid'];
                    $search_url=CAPCC_ROOT.'/'.ucfirst($controller).'/show_post/tag/'.$method.'/tid/'.$tid;
                }else{
                    $search_url=CAPCC_ROOT.'/'.ucfirst($controller).'/'.'third_'.$method.'/id/'.$id;
                }

                $res[$i][$k]['search_url'] = $search_url;
            }




        }
        //dump($res);
        //exit;
        //处理结果集
        //①删除空结果
        //②转换为二维数组，每个子数组都是title、content的格式
        //③获取关键字出现的内容段（前后200字节）
        $res=array_filter($res);
        //dump($res);
        //exit;
        foreach($res as $kk)
        {
            foreach($kk as $kkk)
            {
                foreach($keywords as $vo)
                {
                    $po =  strpos ( $kkk['content'] , $vo );
                    $start_po=($po-200)>=0?($po-200):0;
                    $kkk['title']=str_replace($vo,"<strong style='color:red'>$vo</strong>",$kkk['title']);
                    $kkk['content']=str_replace($vo,"<strong style='color:red'>$vo</strong>",R('SubString/subString_bit',array($kkk['content'],$start_po,400)));
                }
                $res_arr2[]=$kkk;
            }

        }

        //dump($res_arr2);
        //exit;
        $res_title=empty($res_arr2)?"抱歉，未找到<strong style='color:red'> $keyword</strong> 相关的内容":"我们为您找到以下 <strong style='color:red'> $keyword</strong> 相关的内容";
        $this->assign('res_title',"$res_title");

        $page_now=(I('get.p'))?I('get.p'):0;

        //一维变二维，每5个一组
        $new_res_arr=array_chunk($res_arr2,5);
        //dump($new_res_arr);
        //exit;
        $page=array_keys($new_res_arr);
        $this->assign('num_arr',$page);
        //dump($new_res_arr[$page_now]);
        //exit;
        $this->assign('content',$new_res_arr[$page_now]);
        //dump($new_res_arr[$page_now]);
        //exit;
        $this->display();

        $this->display('Public:foot');

    }


}