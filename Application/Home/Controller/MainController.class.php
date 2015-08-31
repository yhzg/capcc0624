<?php
/**
 * Created by PhpStorm.
 * User: DT
 * Date: 2015/6/25
 * Time: 16:31
 */

namespace Home\Controller;
use Think\Controller;

class MainController extends CommonController{
    public function index()
    {
        $this->display();
    }

}