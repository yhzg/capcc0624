<?php
/**
 * Created by PhpStorm.
 * User: DT
 * Date: 2015/8/5
 * Time: 10:49
 */

namespace Home\Controller;


use Think\Controller;

class OrderController extends CommonController {
    public function index()
    {
        $orderinfo=array(
            'WIDsubject' =>xxxxx  ,//订单号
            'WIDsubject'=> I('post.goods')  ,  //订单名称
            'WIDprice'=>  I('post.price')*I('post.qty'),  //付款金额
            'WIDbody'=>'', //订单描述  可以为空
            'WIDshow_url'=>'',//商品展示url 可以为空

        );

        $buyerinfo=array(
            'WIDreceive_name'=>'',//收货人信息
            'WIDreceive_address'=>'',//收货人地址
            'WIDreceive_zip'=>'',//收货人邮编
        );
        $this->display();
    }

}