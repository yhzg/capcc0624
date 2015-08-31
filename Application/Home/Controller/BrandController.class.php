<?php
/**
 * Created by PhpStorm.
 * User: DT
 * Date: 2015/7/6
 * Time: 11:29
 */

namespace Home\Controller;


use Think\Controller;

class BrandController extends CommonController {
    public function index()
    {
        $this->display('Public:head');


        $this->display();

        $this->display('Public:foot');
    }

}