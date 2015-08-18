<?php
/**
 * Created by PhpStorm.
 * User: DT
 * Date: 2015/7/2
 * Time: 10:24
 */

namespace Home\Controller;
use Think\Controller;

class CityController extends Controller{
    public function index()
    {
        $this->display('Public:head');

        $this->display();

        $this->display('Public:foot');

    }

}