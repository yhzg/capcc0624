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
    public function  main_news()
    {
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize  =  4194304 ;// 设置附件上传大小
        $upload->exts     =  array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =  './Public/Uploads';// 设置附件上传根目录
        $upload->savePath  = './Index/images/'; // 设置附件上传目录

        $info=$upload->upload();
        //dump($info);
        if(!$info)
        {// 上传错误提示错误信息
             $this->error($upload->getError());
        }else
        {// 上传成功
            //$this->success('上传成功！');
            $m=M('News_main');

            $data=array(
                'Title'=>I('title'),
                'Content'=>I('content'),
                'O_Author'=>I('o_author'),
                'Author'=>I('author'),
                'Editor'=>I('editor'),
                'Time'=> date('Y-m-d H:i:s',time()),
                'Source'=>I('source'),
                'Picture'=>str_replace('./','',$info['Picture']['savepath']).$info['Picture']['savename']
            );



            $m->add($data);
            if(!isset($m))
            {
                $this->error('添加失败！');
            }else
            {
                $this->success('添加成功！','show_news_main_list');
            }
        }


    }

    public function show_news_main_list()
    {
        $m=M('News_main');
        $news=$m->order('NewsID DESC')->select();
       // dump($news);
       // exit;
        for($i=0;$i<count($news);$i++)
        {
            $news[$i]['content']=iconv_substr($news[$i]['content'],0,30,'utf-8');
        }
        $this->assign('list',$news);

        $this->display();

    }

    public function delete_main_news()
    {
        $m=M('News_main');
        $whewe['newsid']=I('newsid');
        echo I('newsid');
        exit;
        $m->where('$where')->delete();

        if($m>0)
        {
            $this->success('删除成功!','show_news_main_list');
        }else
        {
            $this->error('删除失败！');
        }

    }
}