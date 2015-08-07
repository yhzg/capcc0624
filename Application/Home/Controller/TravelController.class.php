<?php
/**
 * Created by PhpStorm.
 * User: DT
 * Date: 2015/7/6
 * Time: 10:38
 */

namespace Home\Controller;
use Think\Controller;


class TravelController extends Controller{
    public function index()
    {
        $this->display('Public:head');


        
        $this->display('Travel:index1');

        $this->display('Public:foot');

    }

}