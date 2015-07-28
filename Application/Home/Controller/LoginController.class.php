<?php
namespace Home\Controller;
use Think\Controller;


class LoginController extends Controller {

    //检查登录 OK
    public function checklogin() {
        $uname=$_POST['username'];
        $pwd=$_POST['password'];
        if (!empty($uname) && !empty($pwd)) {
            $m=M('User');
            $res=$m->where("username=$uname AND password=$pwd")->find();
            if($res>0)
            {
                session('username',$uname);
                $this->success('登录成功',U('Index/index'));
            }else
            {
                $this->error('用户名和密码不能为空');
            }
        }
    }

    //注册 OK
    public function register() {
        $this->display();
    }

    //注册时判断用户名是否存在ajax
    public function check_reg_name()
    {
        $name = $_POST['name'];//获取js传递的用户名
        //$name='1111';
        $m=M('User');
        $res=$m->where("username=$name")->find();
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

        //dump($_SESSION);
        //dump(md5(I('post.vcode')));
       /* $vcode=I('post.vcode');

        $res=check_verify($vcode);
        dump($res);
        exit;*/
        $user=D('User');
        if(!$user->create())
        {
            $this->error($user->getError());

        }elseif(!check_verify($_SESSION['vcode']))
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
