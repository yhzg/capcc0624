<?php
/**
 * Created by PhpStorm.
 * User: ALL
 * Date: 2015/8/10
 * Time: 10:09
 */

namespace Home\Controller;
use Think\Controller;

class VolunteerController extends CommonController{
    public $tag_arr=array(
        '良策' => 'advice',
        '监测' => 'mon',
        '反馈' => 'feedback',

    );
    public function index(){
        $this->display('Public:head');
        // 风采
        $res1= M('volunteer_grace');
        $data['id']=array('ELT',3);
        $data1=$res1->where($data)->select();

        $data1[0]['content']=R('SubString/subString',array($data1[0]['content'],200));
        $data1[1]['content']=R('SubString/subString',array($data1[1]['content'],200));
        $data1[2]['content']=R('SubString/subString',array($data1[2]['content'],200));
        $data1[3]['content']=R('SubString/subString',array($data1[3]['content'],200));
        // dump($data1);
        $this->assign('volunteer_grace',$data1);


        $res2= M('volunteer_act');
        $data['id']=array('ELT',3);
        $data1=$res2->where($data)->select();
        $data1[0]['content']=R('SubString/subString',array($data1[0]['content'],200));
        $data1[1]['content']=R('SubString/subString',array($data1[1]['content'],200));
        $data1[2]['content']=R('SubString/subString',array($data1[2]['content'],200));
        $data1[3]['content']=R('SubString/subString',array($data1[3]['content'],200));
        $this->assign('volunteer_act',$data1);

        $this->display();
        $this->display('Public:foot');
    }
    public function tag_exists($tag)
    {
        if(array_search($tag,$this->tag_arr))
        {
            return array_search($tag,$this->tag_arr);
        }else
        {
            $this->error('访问路径出错，正在跳转',U('Volunteer/index'));
        }
    }

    public function _before_posts_list()
    {
        $username=I('session.username');
        $res=M('User')->where(array('username'=>$username))->find();

        if($res['tel'])
        {
            $this->assign('checked','1');
        }

    }

    //帖子列表
    public function posts_list()
    {
        $this->display('Public:head');
        $tag=I('get.tag');
        $c_tag=$this->tag_exists($tag);
        $db_name=CONTROLLER_NAME.'_'.$tag;
        $m=M($db_name);
        $count=$m->where(array('isT'=>1))->count();
        //分页
        $Page=new \Think\Page($count,10);
        $Page->setConfig('theme','当前第%NOW_PAGE%页&nbsp; 共%TOTAL_PAGE%页   &nbsp; %FIRST%   %UP_PAGE%    %LINK_PAGE%     %DOWN_PAGE% &nbsp;     %END%  <b>%HEADER%</b> ');
        $pager=$Page->show();
        $posts=$m->where(array('isT'=>1))->order('last_post_time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        foreach($posts as $k =>$v)
        {
            $posts[$k]['content']=iconv_substr($v['content'],0,300,'utf-8');
        }
        //dump($posts);
        //dump($pager);
        // exit;
        $this->assign('tag',$tag);
        $this->assign('c_tag',$c_tag);
        $this->assign('posts',$posts);
        $this->assign('pager',$pager);
        $this->display();
        $this->display('Public:foot');
    }
    //发表新帖界面
    public function new_post()
    {
        $this->display('Public:head');
        $tag=I('get.tag');
        $c_tag=$this->tag_exists($tag);
        $this->assign('tag',$tag);
        $this->assign('c_tag',$c_tag);
        $this->display();
        $this->display('Public:foot');
    }
    public function _before_new_post()
    {
        //登录后方可发帖
        $username=I('session.username');
        if($username!='')
        {
            $m=M('User');
            $info=$m->where(array('username'=>$username))->find();
            if($info['tel']==NULL)
            {
                $this->error('志愿者家园发帖需要通过手机验证',U('Login/bindphone'));
            }
        }else
        {
            $this->error('抱歉，需登录后方可发帖!');
        }
    }
  /*  public function _before_do_new_post()
    {
        //登录后方可发帖
        $username=I('session.username');
        if($username!='')
        {
            $m=M('User');
            $info=$m->where(array('username'=>$username))->find();
            if($info['tel']==NULL)
            {
                $this->error('志愿者家园发帖需要通过手机验证',U('Login/bindPhone'));
            }
        }else
        {
            $this->error('抱歉，需登录后方可发帖!');
        }
    }*/
    //发表新帖处理

    public function do_new_post()
    {
        if(empty(I('post.title')) || empty(I('post.content')) )
        {
            $this->error('标题或内容缺失');
        }
        //回帖时传过来的tid
        $get_tid=I('get.tid');
        $tag=I('get.tag');
        //dump($_FILES);
        //如果有图片上传
        $img_path = array();
        if(($_FILES['photo']['name'] != array('','','','')))
        {
            //上传图片处理
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize   =     3145728 ;// 设置附件上传大小
            $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath      =    './Public/';// 设置附件上传类型
            $upload->savePath  =      './Uploads/Volunteer/'; // 设置附件上传目录
            // 上传文件
            $info   =   $upload->upload();
            if(!$info) {
                // 上传错误提示错误信息
                $this->error($upload->getError());
            }else {
                // 上传成功
                // $this->success('上传成功！');
                foreach ($info as $file) {
                    $img_path[] = '/Public'.str_replace('.','',$file['savepath']).$file['savename'];
                }
                $img_path=join(',',$img_path);
            }
        }
        //dump($info);
        //dump(__PUBLIC__);
        //dump($img_path);
        //exit;
        $db_name=CONTROLLER_NAME.'_'.$tag;
        $m=M($db_name);
        if(empty($get_tid))
        {
            $now_tid = $m->where(array('isT'=>1))->count();
            $tid=$now_tid+1;
            $fid=0;
            $isT=1;
        }else
        {
            $tid=$get_tid;
            $fid=$m->where(array('tid'=>$get_tid))->count();
            $isT=0;
        }
        //dump($img_path);
        //exit;
        //新帖子、回复的数据
        $data_add = array(
            'tid' => $tid,
            'Title' => I('post.title'),
            'Content' => I('post.content'),
            'username' => I('session.username'),
            'fid' => $fid,
            'isT' => $isT,
            'img_path' => $img_path,
            'posttime' =>date('Y-m-d H:i:s',time()),
            'timestamp' => time()
        );
        //最后发表信息的数据
        $data_last= array(
            'last_poster' =>I('session.username'),
            'last_post_time' => date('Y-m-d H:i:s',time()),
            'replyNum'=>$fid,
        );
        //dump($data);
        //exit;
        $res_add = $m->add($data_add);
        $res_last= $m->where(array('tid'=>$tid,'isT'=>1))->save($data_last);
        if($res_add && $res_last)
        {
            $this->success('帖子发表成功！',U('Volunteer/show_post',array('tid'=>$tid,'tag'=>$tag)));
        }else
        {
            $this->error('帖子发表失败！');
        }
    }

    //具体帖子页面
    public function show_post()
    {
        $this->display('Public:head');
        $tid=I('get.tid');
        $tag=I('get.tag');
        $c_tag=$this->tag_exists($tag);
        if(!$tid)
        {
            $this->error('帖子不存在或已被删除！',"index");
        }
        $db_name=CONTROLLER_NAME.'_'.$tag;
        $m=M($db_name);
        $posts=$m->where(array('tid'=>$tid))->order('timestamp')->select();
        //dump( $posts);
        //原图片路径是以，分隔的字串
        //echo "<hr>";
        foreach($posts as $k=>$v)
        {
            if($posts[$k]['img_path']!='')
            {
                $posts[$k]['img_path']=explode(',',$v['img_path']);
                foreach($posts[$k]['img_path'] as $kk => $vv)
                {
                    if($vv!='')
                    {
                        $posts[$k]['img_path'][$kk]=CAPCC_ROOT.$vv;
                    }
                }
            }

        }
        //dump( $posts);
        //exit;
        $this->assign('c_tag',$c_tag);
        $this->assign('tag',$tag);
        $this->assign('posts',$posts);

        $this->display();
        $this->display('Public:foot');
    }
    public function volunteer_grace()
    {
        $this->display('Public:head');
        // 风采
        $res1= M('volunteer_grace');
        $data['id']=array('ELT',3);
        $data1=$res1->where($data)->select();
        $data1[0]['content']=R('SubString/subString',array($data1[0]['content'],200));
        $data1[1]['content']=R('SubString/subString',array($data1[1]['content'],200));
        $data1[2]['content']=R('SubString/subString',array($data1[2]['content'],200));
        $data1[3]['content']=R('SubString/subString',array($data1[3]['content'],200));
        $this->assign('volunteer_grace',$data1);
        $this->display();
        $this->display('Public:foot');
    }

    public function volunteer_act()
    {
        $this->display('Public:head');
        // 活动
        $res1= M('volunteer_act');
        $count = $res1->where()->count();
        $Page  = new \Think\Page($count,4);
        $show  = $Page->show();
        $list = $res1->where()->order()->limit($Page->firstRow.','.$Page->listRows)->select();
        foreach ($list as $k=>$v)
        {
//            $list[$k]['title']=R('SubString/subString',array($list[$k]['title'],0,44));

            $list[$k]['content']=R('SubString/subString',array($list[$k]['content'],200));
        }
        $this->assign('list',$list);
        $this->assign('page',$show);
        $this->display();
        $this->display('Public:foot');
    }

    public function third_act()
    {
        $this->display('Public:head');
        $res1= M('volunteer_act');
        $aid=$_GET['id'];
//        dump($aid);
        $list = $res1->where(array('ID'=>$aid))->find();
//        dump($list);
        if($list) {
            $list['content']=explode("\r",$list['content']);
            $this->assign('vo',$list);
        }else{
            $this->error('数据错误');
        }
        $res1->getLastSql();

        $this->display();
        $this->display('Public:foot');
    }

    public function volunteer_feedback()
    {
        $this->display('Public:head');
        // 风采
        $m= M('Volunteer_feedback');
        $count=$m->where(array('isT'=>1))->count();
        //分页
        $Page=new \Think\Page($count,10);
        $Page->setConfig('theme','当前第%NOW_PAGE%页&nbsp; 共%TOTAL_PAGE%页   &nbsp; %FIRST%   %UP_PAGE%    %LINK_PAGE%     %DOWN_PAGE% &nbsp;     %END%  <b>%HEADER%</b> ');
        $pager=$Page->show();
        $posts=$m->where(array('isT'=>1))->order('last_post_time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        foreach($posts as $k =>$v)
        {
            $posts[$k]['content']=iconv_substr($v['content'],0,300,'utf-8');
        }
        //dump($posts);
        //dump($pager);
        // exit;
        $this->assign('tag','feedback');
        $this->assign('c_tag','反馈');
        $this->assign('posts',$posts);
        $this->assign('pager',$pager);

        $this->display();
        $this->display('Public:foot');
    }
}
