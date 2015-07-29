<?php
/**
 * Created by PhpStorm.
 * User: DT
 * Date: 2015/7/29
 * Time: 14:57
 */

namespace Home\Controller;


use Think\Controller;

class EmptyController extends Controller {

    //所请求的模块不存在时，默认执行的模块
    public function index(){
        header("HTTP/1.0 404 Not Found");//404状态码
        $this->display("Public:404"); //显示自定义的404页面模版
    }

    function _empty(){
        header("HTTP/1.0 404 Not Found");//404状态码
        $this->display("Public:404");//显示自定义的404页面模版
    }
}