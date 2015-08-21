<?php
namespace Home\Controller;
use Think\Controller;


class LoginController extends Controller {

    //检查登录 OK
    //@breif $uid_array 获取登陆者的所有信息
   /* public function check_login() {
        if(!$_POST['username']) $this->error('帐号错误!');
        if(!$_POST['password']) $this->error('密码错误!');
        //if(empty($_POST['verify'])) $this->error('验证码必须!');
       // import("@.ORG.UcService");//导入UcService.class.php类
        $ucServer = new UcServer;
        $uid_array = $ucServer->uc_login($_POST['username'], $_POST['password']);
        //dump($uid_array);
        //exit;
        $login_url=$ucServer->uc_synlogin($uid_array);
        echo $login_url;//输出同步登录代码,否则无法同步登录
        if(!is_string($uid_array))
        {
            //生成认证条件
            $map = array();
            // 支持使用绑定帐号登录
            $map['username'] = $_POST['username'];
            //$map["status"] = array('gt',0);
           /* if($_SESSION['verify'] != md5($_POST['verify']))
            {
                $this->error('验证码错误!');
            }
            $m=M('User');
            //自己项目的用户表
            $memberInfo=$m->where($map)->find();
            //dump($memberInfo);
            //exit;
            //$memberInfo=$this->M('User')->where($map)->find();
            if(false === $memberInfo) {
                $this->error('帐号不存在或已禁用!');
            }/*elseif($memberInfo['status']==0){
                $this->error('帐号已禁用!');
            }else {
                $password = md5($_POST['password']);
                if($memberInfo['password'] != $password) {
                    $this->error('密码错误!');
                }
                session('username', $memberInfo['username']);
                //session('email', $memberInfo['email'] );
               /* session('loginUserName', $memberInfo['loginUserName']);
                session('lastLoginTime', $memberInfo['lastLoginTime']);
                session('loginnum', $memberInfo['loginnum']);
                session('lastloginip', $memberInfo['lastloginip']);*/
                //保存登录信息(相当于更新信息)
               /* $data = array();
                $data['id'] = $memberInfo['userID'];
                $data['lastlogintime'] = time();
                $data['loginnum'] = array('exp','loginnum+1');
                $data['lastloginip'] = get_client_ip();
                //$data['verify'] = $authInfo['verify'];
                $this->Member->save($data);
                $this->success('登录成功!',U('Index/index'));
            }
        }
    }*/

    public function check_login()
     {

         $username = $_POST['username'];
         $pwd = $_POST['password'];

         if (!empty($username) && !empty($pwd)) {
             $m = M('user');
             //支持用户名/邮箱/手机号登录
           /*  $res_username = $m->where(array('username' => $username, "password" => MD5($pwd)))->find();
             $res_email = $m->where(array('email' => $username, "password" => MD5($pwd)))->find();
             $res_tel = $m->where(array('tel' => $username, "password" => MD5($pwd)))->find();*/
             $where['username']=$username;
             $where['email']=$username;
             $where['tel']=$username;
             $where['_logic']='OR';
             $res=$m->where($where)->find();
             if($res)
             {
                 //邮箱已激活
                 if($res['activated']==1)
                 {
                     session('username', $res['username']);
                     $this->success('登录成功', U('Index/index'));
                 }else//邮箱未激活，再发一次邮件
                 {
                     $title="中国运河网注册激活邮件";
                     $username=$res['username'];
                     $url=base64_encode("username/$username");
                     $content="欢迎注册中国运河网，点击以下链接进行激活会员！<br /><a href='http://localhost/capcc0624/Login/activate/url/{$url}'> http://localhost/capcc0624/Login/activate/url/{$url} </a>";
                     $mail_status=send_mail($res['email'],$title,$content);
                     if($mail_status)
                     {
                         $this->success('抱歉，您的账户尚未激活，请去您的邮箱激活！',U('Login/mail_login',array('username'=>base64_encode($username),'tag'=>'resend')));
                     }else
                     {
                         $this->error('抱歉，您的账户尚未激活，请去您的邮箱激活！有问题请联络我们！');
                     }

                 }
             }else
             {
                 $this->error('账户不存在或密码错误');
             }
         } else {
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
/*    public function check_register() {


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
    }*/

   public function check_register() {
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

            $content="欢迎注册中国运河网，点击以下链接进行激活会员！<br /><a href='http://localhost/capcc0624/Login/activate/url/{$url}'> http://localhost/capcc0624/Login/activate/url/{$url} </a>";

            $mail_status=send_mail($_POST['email'],$title,$content);
            if($mail_status)
            {
                //发送成功后再把信息写入数据库
                $user->create();
                $user->add();
                $this->success('注册成功',U('Login/mail_login',array('username'=>base64_encode($username),'tag'=>'reg')));
            }else
            {
               $this->error('注册失败。。。');
            }

        }
    }

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
            //是注册时的激活邮件还是未激活登录时的再激活邮件
            $user['info']=(I('tag')=='reg')?'恭喜注册成功!激活邮件已发送!':'中国运河网再一次给你发了一封激活邮件!';
            $this->assign('user',$user);
            $this->assign('mail_domain',$mail_domain);
            $this->display();
        }else
        {
            $this->error('请先注册');
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
               $this->success('恭喜激活成功,请登录！',U('Index/index'));
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

    public function bindPhone()
    {
        $this->display();
    }

    //手机验证
    public function send_sms()
    {
        $sms_code=I('post.code');
        $to=I('post.tel');
        session('sms_code',$sms_code);
        //验证码，5分钟有效
        $datas=array($sms_code,'5');
        // $to='18921278156';
        //$datas=array(123456);
        $tempId='1';
        //echo strlen($sms_code);
        //exit;
        if(strlen($to)!=11)
        {
            //手机号位数不对
            $res= -1;
        }else
        {
            //返回1或0
            $res=R('Sms/sendTemplateSMS',array($to,$datas,$tempId));
        }
        //dump($res);
        //exit;

        echo $res;
     /*  if($res==1)
        {
            echo 1;
        }else
       {
            echo 0;
        }*/
        //$this->display();
    }

    public function sms_check()
    {
        $smsCode=I('post.smsCode');
       // $tel=I('post.tel');
        if($smsCode==session('sms_code'))
        {
            //把手机号存入数据库
            $this->success('验证成功！', U('Index/index'));
            /*   $m=M('User');
               $res= $m->where(array('username'=>$username))->save(array('tel'=>$tel));
               if($res)
               {
                   $this->success('验证成功！',U('Index/index'));
               }else
               {
                   //存入数据库出错
                   $this->error('系统出错！请联系管理员！');
               }*/
        }else
        {
            $this->error('验证码错误！');
        }

    }

}

?>
