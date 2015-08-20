<?php
/**
 * Created by PhpStorm.
 * User: DT
 * Date: 2015/8/7
 * Time: 10:27
 */

namespace Admin\Controller;


use Think\Controller;

class BrandController extends Controller {

    //显示老字号列表
    public function tradition()
    {
        R('Common/show_list',array(ACTION_NAME));
    }

    //显示动态新闻列表
    public function product()
    {
        R('Common/show_list',array(ACTION_NAME));
    }
    public function brand()
    {
        R('Common/show_list',array(ACTION_NAME));
    }

    //添加新闻的页面
    public function add()
    {
        R('Common/add');
    }

    public function  add_brand()
    {
        R('Common/add_info');
    }


    public function delete_brand()
    {
        R('Common/delete_info');
    }
    public function edit_brand()
    {
        R('Common/edit_info');

    }
}