<?php
/**
 * Created by PhpStorm.
 * User: DT
 * Date: 2015/8/7
 * Time: 10:27
 */

namespace Admin\Controller;


use Think\Controller;

class CommonController extends Controller {

    //显示列表
    public function show_list($tag_name)
    {
        $db_name=CONTROLLER_NAME.'_'.$tag_name;

        //分页显示，每页10条
        $m=M($db_name);
        $count= $m->count('id');
        $page= new \Think\Page($count,10);
        $page->setConfig('theme','<b>%HEADER%</b> 当前第%NOW_PAGE%页 共%TOTAL_PAGE%页   &nbsp; %FIRST%   %UP_PAGE%    %LINK_PAGE%     %DOWN_PAGE% &nbsp;     %END%');
        $show= $page->show();
        $res = $m->order('id desc')->limit($page->firstRow.','.$page->listRows)->select();
        //dump($show);
        // exit;
        for($i=0;$i<count($res);$i++)
        {
            $res[$i]['content']=iconv_substr($res[$i]['content'],0,30,'utf-8');
        }
        $this->assign('list',$res);
        $this->assign('page',$show);

        $this->display();

    }

    //添加信息页面
    public function add()
    {
        //判断有无tag传递过来
        $tag=I('get.tag');
        if($tag)
        {
            $this->assign('tag',$tag);
            $this->display();
        }else
        {
            $this->redirect(CONTROLLER_NAME."/index",'',3,'出错了！');
        }

    }

    //添加新闻的方法
    public function  add_info()
    {
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize = 4194304;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath = './Public/';// 设置附件上传根目录
        $upload->savePath = './Uploads/'.CONTROLLER_NAME.'/images/'; // 设置附件上传目录
        $info = $upload->upload();

        if (!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        } else {// 上传成功
            //$this->success('上传成功！');
            //根据$db选择对应的数据库
            $tag=I('get.tag');
            $db_name=CONTROLLER_NAME.'_'.$tag;
            $m = M($db_name);
            $data = array(
                'Title' => I('post.title'),
                'Content' => I('post.content'),
                'Author' => I('post.author'),
                'InsertTime' => date('Y-m-d H:i:s', time()),
                'ImgPath' => str_replace('./', '', $info['Picture']['savepath']) . $info['Picture']['savename'],
            );

            $id = I('post.nid');
            //接收隐藏域传递的值
            //如果存在，说明是编辑页面过来的
            // 如果不存在，说明是添加页面过来的
            if ($id)
            {
                $where['ID'] = $id;
                $res = $m->where($where)->save($data);
                if ($res == false)
                {
                    $this->error('编辑失败！');
                } else
                {

                    $this->success('编辑成功！', U(CONTROLLER_NAME."/$tag"));
                }
            } else
            {
                $res = $m->add($data);
                if ($res == false) {
                    $this->error('添加失败！');
                } else {

                    $this->success('添加成功！', U(CONTROLLER_NAME."/$tag"));
                }
            }
        }
    }


    public function delete_info()
    {
        $tag=I('get.tag');
        $db_name=CONTROLLER_NAME.'_'.$tag;
        $m=M($db_name);
        $where['ID']=I('get.id');
        $res=$m->where($where)->delete();

        if($res>0)
        {
            $this->success('删除成功!',U(CONTROLLER_NAME."/$tag"));
        }else
        {
            $this->error('删除失败！');
        }

    }
    public function edit_info()
    {
        $tag=I('get.tag');
        $db_name=CONTROLLER_NAME.'_'.$tag;
        $m=M($db_name);
        $where['ID']=I('get.id');
        $res=$m->where($where)->find();
        //dump($news);
        // exit;
        $res['content']=htmlspecialchars_decode($res['content']);
        $this->assign('list',$res);
        $this->assign('tag',$tag);

        $this->display();

    }
}