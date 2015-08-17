<?php
namespace Home\Controller;
use Think\Controller;
Vendor('UcServer.UcServer');

class LoginController extends Controller {

    //检查登录 OK
    public function check_login() {
        if(!$_POST['username']) $this->error('帐号错误!');
        if(!$_POST['password']) $this->error('密码错误!');
        //if(empty($_POST['verify'])) $this->error('验证码必须!');
       // import("@.ORG.UcService");//导入UcService.class.php类
        $ucServer = new UcServer;
        $uidarray = $ucService->uc_login($_POST['username'], $_POST['password']);
        //dump($uidarray);
        $loginurl=$ucService->uc_synlogin($uidarray);
        echo $loginurl;//输出同步登录代码,否则无法同步登录
        if(!is_string($uidarray))
        {
            //生成认证条件
            $map = array();
            // 支持使用绑定帐号登录
            $map['username'] = $_POST['username'];
            $map["status"] = array('gt',0);
            if($_SESSION['verify'] != md5($_POST['verify']))
            {
                $this->error('验证码错误!');
            }
            $memberinfo=$this->Member->where($map)->find();
            if(false === $memberinfo) {
                $this->error('帐号不存在或已禁用!');
            }elseif($memberinfo['status']==0){
                $this->error('帐号已禁用!');
            }else {
                $password = pwdHash($_POST['password']);
                if($memberinfo['password'] != $password) {
                    $this->error('密码错误!');
                }
                session(C('USER_AUTH_KEY'), $memberinfo['id']);
                session('email', $memberinfo['email'] );
                session('loginUserName', $memberinfo['loginUserName']);
                session('lastLoginTime', $memberinfo['lastLoginTime']);
                session('loginnum', $memberinfo['loginnum']);
                session('lastloginip', $memberinfo['lastloginip']);
                //保存登录信息(相当于更新信息)
                $data = array();
                $data['id'] = $memberinfo['id'];
                $data['lastlogintime'] = time();
                $data['loginnum'] = array('exp','loginnum+1');
                $data['lastloginip'] = get_client_ip();
                //$data['verify'] = $authInfo['verify'];
                $this->Member->save($data);
                $this->success('登录成功!',U('Member/index'));
            }
        }
    }

/*     public function check_login()
     {

         $username = $_POST['username'];
         $pwd = $_POST['password'];

         if (!empty($username) && !empty($pwd)) {
             $m = M('user');
             //支持用户名/邮箱/手机号登录
             $res['username'] = $m->where(array('username' => $username, "password" => MD5($pwd)))->find();
             $res['email'] = $m->where(array('email' => $username, "password" => MD5($pwd)))->find();
             $res['tel'] = $m->where(array('tel' => $username, "password" => MD5($pwd)))->find();
             //dump($res);
             //exit;
             //只要有一个存在
             if ($res['username']) {
                 session('username', $res['username']['username']);
                 $this->success('登录成功', U('Index/index'));
             } elseif ($res['email']) {
                 session('username', $res['email']['username']);
                 $this->success('登录成功', U('Index/index'));
             } elseif ($res['tel']) {
                 session('username', $res['tel']['username']);
                 $this->success('登录成功', U('Index/index'));
             } else {
                 $this->error('用户名或密码错误');
             }
         } else {
             $this->error('用户名和密码不能为空');
         }
     }*/


    //注册 OK
    public function register() {

        $this->display();
    }

    //注册时判断用户名是否存在ajax
    public function check_reg_name()
    {
        $name = I('post.name');//获取js传递的用户名
        //dump($name);
       // $name='ymm';
        $m=M('User');
        $res=$m->where(array("username"=>$name))->find();
        //dump($res);
        //exit;
        if($res!= 0){
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
        $vcode=I('post.vcode');
        if(check_verify($vcode))
        {
           echo '1';
        }else
        {
            echo '0';
        }
    }


    //检查注册
    //注册成功同时发送邮件至邮箱
    public function check_register() {


        $username=I('post.username');
        $password=I('post.password');
        $email=I('post.email');

        //使用D方法自动验证，数据库字段名大小写必须与注册页面input内name名一致
        $user=D('User');
        if(!$user->create())
        {
            $this->error($user->getError());

        }elseif(!check_verify(I('post.vcode')))
        {
            $this->error('验证码错误！');
        }
        else{
            $ucServer = new UcServer;//实例化UcService类
            $uid = $ucServer->register($username, $password, $email);//注册到UCenter

            //发送注册成功邮件
            $title="中国运河网注册激活邮件";
            $url=base64_encode("username/$username");

            $content="欢迎注册中国运河网，点击以下链接进行激活会员！<a href='http://localhost/capcc0624/Login/activate/url/{$url}'> http://localhost/capcc0624/Login/activate/url/{$url} </a>";

            $mail_status=send_mail($_POST['email'],$title,$content);
            if($mail_status && $uid>0)
            {
                //发送成功后再把信息写入数据库
                $user->create();
                $user->add();
                $this->success('注册成功',U('Login/mail_login',array('username'=>base64_encode($username))));
            }else
            {
                $this->error('注册失败。。。');
            }

        }
    }

/*    public function check_register() {
        $username=I('post.username');
        //使用D方法自动验证，数据库字段名大小写必须与注册页面input内name名一致
        $user=D('User');
        if(!$user->create())
        {
            $this->error($user->getError());

        }elseif(!check_verify(I('post.vcode')))
        {
            $this->error('验证码错误！');
        }
        else{
            //发送注册成功邮件
            $title="中国运河网注册激活邮件";
            $url=base64_encode("username/$username");

            $content="欢迎注册中国运河网，点击以下链接进行激活会员！<a href='http://localhost/capcc0624/Login/activate/url/{$url}'> http://localhost/capcc0624/Login/activate/url/{$url} </a>";

            $mail_status=send_mail($_POST['email'],$title,$content);
            if($mail_status)
            {
                //发送成功后再把信息写入数据库
                $user->create();
                $user->add();
                $this->success('注册成功',U('Login/mail_login',array('username'=>base64_encode($username))));
            }else
            {
               $this->error('注册失败。。。');
            }

        }
    }*/

    //邮箱登录
    public function mail_login()
    {
        $username=base64_decode(I('get.username'));
        $m=M('User');
        $user=$m->where(array('username'=>$username))->find();//根据username获取用户注册的所有信息
        if($user>0)
        {
           // 获取邮箱，并分析是哪种邮箱
            $mail=$user['email'];
            $arr=explode('@',$mail);
            $mail_domain='mail.'.$arr[1];
            $this->assign('user',$user);
            $this->assign('mail_domain',$mail_domain);
            $this->display();
        }else
        {
            echo '请先注册';
        }
        //
    }

    //激活
   public function activate(){
       //用户名从邮件内链接url内获取
       $url=I('get.url');
       //得到格式为username/xxxx的数据，从第9位开始取值
       $username=substr(base64_decode($url),9);
       //dump($username);
       //exit;
       //$username=I('get.username');
       //变更会员状态 数据库 0->1
       $m=M('User');
       $res_activate=$m->where(array('username'=>$username))->find();
       if($res_activate['activated']== 1)
       {
           $this->redirect('Index/index','',3,'您的账号已激活过，请直接登录！');
       }else
       {
           $data['activated']=1;
           $res_chg_activate=$m->where(array('username'=>$username))->save($data);

           if($res_chg_activate)
           {
               $this->success('激活成功,请登录！',U('Index/index'));
           }else
           {
               $this->redirect('Index/index','',3,'激活失败，请联系客服！');
           }
       }
    }


    //退出登录
    public function logout() {
        session('[destroy]');
        $this->success('注销成功',U('Index/index'));
    }


}

?>
