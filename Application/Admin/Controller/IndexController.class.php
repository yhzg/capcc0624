<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {

    public function _before_index()
    {
       $username=I('session.username');
        if(!isset($username) || $username=='')
        {
            $this->redirect(U('Index/login'));
        }
    }

    public function index(){


        $this->display();
    }


    public function doLogin()
    {
        $adminname=I('post.adminname');
        $password=I('post.password');
        if($adminname!='' && $password!='')
        {
            $m=M('admin');
            $where['adminname']=$adminname;
            $user=$m->where($where)->find();
            $password_db=$user['password'];
            if($user)
            {
                if ($password_db == md5($password))
                {
                    session('adminname',$adminname);
                    $this->success('登录成功', U('Index/index'));
                }else
                {
                    $this->error('用户名或密码错误！');
                }

            }else
            {
                $this->error('用户名或密码错误！');
            }
        }else
        {
            $this->error('用户名或密码不能为空！');
        }



    }

    public function logout()
    {
        session('[destroy]');
        $this->success('注销成功',U('Index/index'));
    }
}