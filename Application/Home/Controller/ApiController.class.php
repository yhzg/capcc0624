<?php
/**
 * Created by PhpStorm.
 * User: DT
 * Date: 2015/11/3
 * Time: 12:36
 */

namespace Home\Controller;


use Ucenter\Api\Uc;

class ApiController extends Uc
{
    public function index()
    {
        $this->response();
    }
}