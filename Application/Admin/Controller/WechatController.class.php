<?php
/**
 * Created by PhpStorm.
 * User: DT
 * Date: 2015/10/29
 * Time: 10:27
 */

namespace Admin\Controller;


use Think\Controller;

class WechatController extends Controller {

    public function img_path($content)
    {
        $content=htmlspecialchars_decode($content);//html字符处理
        // 使用simple_html_dom类库
        $dom= new \Org\Util\simple_html_dom();
        $dom->load($content);
        $img = $dom->find('img');
        $paths_arr=array();
        foreach($img as $k=>$v)
        {
            //图片路径处理  符合在Public目录下的格式
            $paths_arr[]=str_replace(ROOT.'/Public/','',$v->attr['src']);
        }
        $paths_str=implode(',',$paths_arr);
        return $paths_str;
    }
    //显示微信列表
    public function wechat()
    {
        R('Common/show_list',array(ACTION_NAME));
    }



    //添加新闻的页面
    public function add()
    {
        R('Common/add');
    }
    //添加新闻的方法
    public function  add_wechat()
    {
        $tag=I('get.tag');
        $db_name='Wechat_'.$tag;
        $content=I('post.content');
        $paths_str=$this->img_path($content);
        $m = M($db_name);
        $data = array(
            'Title' => I('post.title'),
            'Abstract'=>I('abstract'),
            'Content' => I('post.content'),
            'OriAuthor' => I('post.oriAuthor'),
            'Author' => I('post.author'),
            'Editor' => I('post.editor'),
            'PubTime' => I('post.pubtime'),
            'InsertTime' => date('Y-m-d H:i:s', time()),
            'Source' => I('post.source'),
            'ImgPath' =>$paths_str,
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

                $this->success('编辑成功！', U("Wechat/$tag"));
            }
        } else
        {
            $res = $m->add($data);
            if ($res == false) {
                $this->error('添加失败！');
            } else {

                $this->success('添加成功！', U("Wechat/$tag"));
            }
        }
    }



    public function delete_wechat()
    {
        R('Common/delete_info');
    }
    public function edit_wechat()
    {
        R('Common/edit_info');
    }
}