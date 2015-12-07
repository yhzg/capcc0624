<?php
/**
 * Created by PhpStorm.
 * User: DT
 * Date: 2015/7/27
 * Time: 9:32
 */

namespace Home\Controller;

use Think\Controller;
use Think\Model;
use Think\Verify;


class CommonController extends Controller {
    //生成验证码
    function verify_code()
    {
        $config=array(
            'length'	=> 4,
           // 'fontSize' =>50,
            'useNoise' => false,
            'reset'     =>  false,
        );
				ob_clean();
        $Verify = new \Think\Verify($config);
        $Verify->entry();
    }

    protected function _initialize()
    {
        $username=I('session.username');


        //session存在，显示登录的用户名
        //否则，显示登录等按钮
        if(empty($username))
        {
            $navbar['url1']=U('Login/login');
            $navbar['bar1']='登录';
            $navbar['url2']=U('Login/register');
            $navbar['bar2']='立即加入';
        }else
        {
            $res=M('User')->where(array('username'=>$username))->find();
            if($res)
            {
                $navbar['url1']='#';
                $navbar['bar1']='欢迎您：'.$username;
                $navbar['url2']=U('Login/logout');
                $navbar['bar2']='退出登录';
            }else
            {
                session('[destroy]');
                $this->error('非法登录，正在退出。。。',U('Login/login'));
            }

        }

        $this->assign('navbar',$navbar);

    }

    //show_now 为需要随日期变化二内容变化的区域
    //$n:每日需要显示的条目数
    public function show_now($tableName,$n,$content_len=80)
    {
        $d=date(d,time());
        $id_arr=M($tableName)->field('ID')->select();
        foreach($id_arr as $k=>$v)
        {
            $id_arr_new[]=$v['id'];
        }

        $count=count($id_arr_new);
        //$arr_num 确定要合并多少个数组
        $arr_num=floor(31*$n/$count);
        if($arr_num==0)
        {
            $arr_big=$id_arr_new;
        }else{
            for($i=0;$i<$arr_num;$i++)
            {
                $arr_big=array_merge($id_arr_new,$id_arr_new);
            }
        }

        $start_id=($d-1)*$n%$count;
        $m=M($tableName);
        for($j=0;$j<$n;$j++)
        {
            $res[$j]=$m->where(array('ID'=>$arr_big[$start_id]))->find();
            $start_id++;
        }
        foreach($res as $k=>$v)
        {
            $res[$k]['content']=R('SubString/subString',array($v['content'],$content_len));
        }

        //结果集为二维数组
        return $res;


    }
}
