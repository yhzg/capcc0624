<?php
/**
 * Created by PhpStorm.
 * User: DT
 * Date: 2015/7/9
 * Time: 11:12
 */

namespace Admin\Controller;


use Think\Controller;

class ManageController extends Controller{
    public function  index_news()
    {
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize  =  4194304 ;// 设置附件上传大小
        $upload->exts     =  array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->savePath  = '__PUBLIC__/Uploads/images'; // 设置附件上传目录

        $info=$upload->upload();
        if(!$info)
        {// 上传错误提示错误信息
             $this->error($upload->getError());
        }else
        {// 上传成功
            $this->success('上传成功！');
        }

        $m=M('admin');
        $data=array(
            'Title'=>I('title'),
            'Content'=>I('content'),
            'Author'=>I('author'),
            'Editor'=>I('editor'),
            'Source'=>I('source'),
            //'Picture'=>I('source'),
        )
    }
}