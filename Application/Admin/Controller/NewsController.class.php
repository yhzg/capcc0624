<?php
/**
 * Created by PhpStorm.
 * User: DT
 * Date: 2015/8/7
 * Time: 10:27
 */

namespace Admin\Controller;


use Think\Controller;

class NewsController extends Controller {

    //显示图说新闻列表
    public function picture()
    {
        R('Common/show_list',array(ACTION_NAME));
    }
    //显示市场列表
    public function active()
    {
        R('Common/show_list',array(ACTION_NAME));
    }


    //添加新闻的页面
    public function add()
    {
        R('Common/add');
    }
    //添加新闻的方法
    public function  add_news()
    {
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize = 4194304;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath = './Public/';// 设置附件上传根目录
        $upload->savePath = './Uploads/News/images/'; // 设置附件上传目录

        $info = $upload->upload();
        /*dump($info);
        exit;*/
        if (!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        } else {// 上传成功
            //$this->success('上传成功！');
            //根据$db选择对应的数据库
            $tag=I('get.tag');
            $db_name='News_'.$tag;
            $m = M($db_name);
            $data = array(
                'Title' => I('post.title'),
                'Content' => I('post.content'),
                'OriAuthor' => I('post.oriAuthor'),
                'Author' => I('post.author'),
                'Editor' => I('post.editor'),
                'PubTime' => I('post.pubtime'),
                'InsertTime' => date('Y-m-d H:i:s', time()),
                'Source' => I('post.source'),
                'ImgPath' => str_replace('./', '', $info['Picture']['savepath']) . $info['Picture']['savename'],
                'Headline'=>(I('post.headline')=='on')?1:0 //标记头条
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

                    $this->success('编辑成功！', U("News/$tag"));
                }
            } else
            {
                $res = $m->add($data);
                if ($res == false) {
                    $this->error('添加失败！');
                } else {

                    $this->success('添加成功！', U("News/$tag"));
                }
            }
        }
    }


    public function delete_news()
    {
        R('Common/delete_info');
    }
    public function edit_news()
    {
        R('Common/edit_info');
    }
}