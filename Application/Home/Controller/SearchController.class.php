<?php
/**
 * Created by PhpStorm.
 * User: DT
 * Date: 2015/8/26
 * Time: 16:03
 */

namespace Home\Controller;


use Think\Controller;

class SearchController extends Controller
{
    function index()
    {
        $keyword=I('post.keyword');
        //查找的数据表集合
        $table_list=array("news_active","news_picture");
        $res_search=array();
        for($i=0;$i<count($table_list);$i++)
        {
            $m=M($table_list[$i]);
            $data['Title']=array("like","%$keyword%");
            $data['Content']=array("like","%$keyword%");
            $data['_logic']='OR';
            //得到$res  为二维数组
            $res[$i]=$m->where($data)->Field('Title')->select();
            //转换为一维数组
            foreach($res[$i] as $k)
            {
                foreach($k as $kk)
                {
                    $res_search[]=$kk;
                }
            }

        }

        $this->assign('res_search',$res_search);
        $this->display();

    }
}