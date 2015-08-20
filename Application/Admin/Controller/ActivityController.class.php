<?php
/**
 * Created by PhpStorm.
 * User: DT
 * Date: 2015/8/7
 * Time: 10:27
 */

namespace Admin\Controller;


use Think\Controller;

class ActivityController extends Controller {


    public function activity()
    {
        R('Common/show_list',array(ACTION_NAME));
    }


    public function add()
    {
        R('Common/add');
    }

    public function  add_activity()
    {
        R('Common/add_info');
    }

    public function delete_activity()
    {
        R('Common/delete_info');
    }
    public function edit_activity()
    {
        R('Common/edit_info');

    }
}