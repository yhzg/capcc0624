<?php
/**
 * Created by PhpStorm.
 * User: DT
 * Date: 2015/8/7
 * Time: 10:27
 */

namespace Admin\Controller;


use Think\Controller;

class TravelController extends Controller {

    //显示景点列表
    public function spot()
    {
        R('Common/show_list',array(ACTION_NAME));
    }

    //显示吃列表
    public function eat()
    {
        R('Common/show_list',array(ACTION_NAME));
    }

    //显示住列表
    public function live()
    {
        R('Common/show_list',array(ACTION_NAME));
    }
    //显示攻略列表
    public function story()
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