<?php
/**
 * Created by PhpStorm.
 * User: DT
 * Date: 2015/8/7
 * Time: 10:27
 */

namespace Admin\Controller;


use Think\Controller;

class VolunteerController extends Controller {

//风采
    public function grace()
    {
        R('Common/show_list',array(ACTION_NAME));
    }

//活动
    public function act()
    {
        R('Common/show_list',array(ACTION_NAME));
    }

//良策
    public function advice()
    {
        R('Common/show_list',array(ACTION_NAME));
    }

//监测
    public function mon()
    {
        R('Common/show_list',array(ACTION_NAME));
    }


    public function add()
    {
        R('Common/add');
    }


    public function  add_volunteer()
    {
        R('Common/add_info');
    }


    public function delete_volunteer()
    {
        R('Common/delete_info');
    }
    public function edit_volunteer()
    {
        R('Common/edit_info');
    }
}