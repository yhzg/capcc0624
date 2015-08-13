<?php
/**
 * Created by PhpStorm.
 * User: DT
 * Date: 2015/8/7
 * Time: 10:27
 */

namespace Admin\Controller;


use Think\Controller;

class ClassicController extends Controller {

    //显示传奇列表
   public function legend()
    {
       R('Common/show_list',array(ACTION_NAME));
    }
    //显示市场列表
    public function market()
    {
        R('Common/show_list',array(ACTION_NAME));
    }
    //显示评论列表
    public function comment()
    {
        R('Common/show_list',array(ACTION_NAME));
    }
    //显示艺术群列表
    public function group()
    {
        R('Common/show_list',array(ACTION_NAME));
    }


    //添加新闻的页面
    public function add()
    {
        R('Common/add');

    }

    //添加新闻的方法
    public function  add_travel()
    {
        R('Common/add_info');
    }


    public function delete_travel()
    {
        R('Common/delete_info');
    }
    public function edit_travel()
    {
        R('Common/edit_info');
    }
}