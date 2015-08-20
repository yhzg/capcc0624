<?php
/**
 * Created by PhpStorm.
 * User: ALL
 * Date: 2015/8/10
 * Time: 10:09
 */

namespace Home\Controller;
use Think\Controller;

class VolunteerController extends Controller{
    public function index(){
        $this->display('Public:head');




        $this->display();
        $this->display('Public:foot');
    }
}