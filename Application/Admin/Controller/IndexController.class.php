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
        session('username',I('post.username'));
        session('password',I('post.password'));
        $m=M('admin');
        $where['username']=I('post.username');
        $user=$m->where($where)->select();
        $password_db=$user[0]['password'];
        if($user)
        {
            if ($password_db == md5(I('post.password')))
            {
                $this->success('登录成功', U('index'));
            }

        }else
        {
            $this->error('登录失败');
        }

    }
}