<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    /*public function _before_index()
    {
       $username=I('session.adminname');
        if(!isset($username) || $username=='')
        {
            $this->redirect('Admin/Index/login');
        }
    }*/
    public function index(){


        $this->display();
    }


    public function doLogin()
    {
        session('adminname',I('post.adminname'));
        $m=M('admin');
        $where['adminname']=I('post.adminname');
        $user=$m->where($where)->find();
        $password_db=$user['password'];
        if($user)
        {
            if ($password_db == md5(I('post.password')))
            {
                $this->success('登录成功', U('Index/index'));
            }else
            {
                $this->error('用户名或密码错误！');
            }

        }else
        {
            $this->error('用户名或密码错误！');
        }

    }

    public function logout()
    {
        session('[destroy]');
        $this->success('注销成功',U('Index/index'));
    }
}