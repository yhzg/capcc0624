<?php
namespace Home\Controller;
use Think\Controller;


class LoginController extends Controller {

    //检查登录 OK
    public function check_login() {
        $username=$_POST['username'];
        $pwd=$_POST['password'];
        if (!empty($username) && !empty($pwd)) {
            $m=M('User');
            $res=$m->where("username=$username AND password=MD5($pwd)")->find();
            if($res>0)
            {
                session('username',$username);
                $this->success('登录成功',U('Index/index'));
            }else
            {
                $this->error('用户名或密码错误');
            }
        }else{
            $this->error('用户名和密码不能为空');
        }
    }

    //注册 OK
    public function register() {

        $this->display();
    }

    //注册时判断用户名是否存在ajax
    public function check_reg_name()
    {
        $name = I('post.name');//获取js传递的用户名
        //$name='ssss';
        $m=M('User');
        $res=$m->where(array("username"=>$name))->find();
        //DUMP($res);
        if($res>0){
           echo 0;
        }else{
            echo 1;
        }

    }
    //注册时判断邮箱是否存在ajax
    public function check_reg_email()
    {
        $email = I('post.email');//获取js传递的用户名

        $m=M('User');
        $res=$m->where(array("email"=>$email))->find();
        //DUMP($res);
        if($res>0){
            echo 0;
        }else{
            echo 1;
        }

    }

    //ajax判断验证码是否正确
    public function check_vcode()
    {
        $vcode=I('get.vcode');
        if(check_verify($vcode))
        {
           echo '1';
        }else
        {
            echo '0';
        }
    }


    //检查注册
    public function check_register() {

        $user=D('User');
        if(!$user->create())
        {
            $this->error($user->getError());

        }elseif(!check_verify(I('post.vcode')))
        {
            $this->error('验证码错误！');
        }
        else{

            $user->create();
            $user->add();
            $this->success('注册成功',U('Login/login'));
        }

       //验证码
        //全局函数，在commcon functions.php中


    }

    //退出登录
    public function logout() {
        session('[destroy]');
        $this->success('注销成功',U('Index/index'));
    }

}

?>
