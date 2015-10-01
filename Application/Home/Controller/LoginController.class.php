<?php
namespace Home\Controller;
use Think\Controller;


class LoginController extends Controller {


    public function login()
    {
        //获取前一个页面的URL
        $get_url=$_SERVER['HTTP_REFERER'];
        cookie('refer',$get_url);
        $this->display();
    }

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
             if($res['password']==md5($pwd))
             {
                 //邮箱已激活
                 if($res['activated']==1)
                 {
                     session('username', $res['username']);
                     $url=cookie('refer');
                     //如果是从注册页面过来，就跳转至首页

                     if(preg_match('/.*Login\/register.*/',$url))
                     {
                         $jump_url=U('Index/index');
                     }else
                     {
                         //登录后跳转至登录前的页面
                         $jump_url=(isset($url))?$url:U('Index/index');
                     }

                     $this->success('登录成功', $jump_url);



                 }else//邮箱未激活，再发一次邮件
                 {
                     $title="中国运河网注册激活邮件";
                     $username=$res['username'];
                     $url=base64_encode("username/$username");
                     $content="欢迎注册中国运河网，点击以下链接进行激活会员！<br /><a href='".CAPCC_ROOT."/Login/activate/url/{$url}'>".CAPCC_ROOT."/Login/activate/url/{$url} </a>";
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

    //注册时判断用户名是否存在  ajax
    public function check_reg_name()
    {
        $name = I('post.name');//获取js传递的用户名
        $m=M('User');
        $count=$m->where(array("username"=>$name))->count();
        echo $count;

    }
    //注册时判断邮箱是否存在  ajax
    public function check_reg_email()
    {
        $email = I('post.email');//获取js传递的用户名
        $m=M('User');
        $count=$m->where(array("email"=>$email))->count();
        echo $count;
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
            //数据记入数据库
            $user->create();
            $res=$user->add();
            if($res)
            {
                $this->success('注册成功',U('Login/mail_login',array('username'=>base64_encode($username),'tag'=>'reg')));
            }else
            {

               $this->error('注册失败，请联系管理员。。。');
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
            //hotmail 邮箱特殊处理
            if(preg_match('/.*hotmail.*/',$arr[1]))
            {
                $mail_domain='login.live.com';
            }else{
                $mail_domain='mail.'.$arr[1];
            }

            //是注册时的激活邮件还是未激活登录时的再激活邮件
            $user['info']=(I('tag')=='reg')?'感谢注册中国运河网!':'中国运河网再一次给你发了一封激活邮件!';
            $this->assign('user',$user);
            $this->assign('mail_domain',$mail_domain);

        }else
        {
            $this->error('请先注册');
        }



        //发送注册成功邮件
        $title="中国运河网注册激活邮件";
        $url=base64_encode("username/$username");
        $content="欢迎注册中国运河网，点击以下链接进行激活会员！<br /><a href='".CAPCC_ROOT."/Login/activate/url/{$url}'>".CAPCC_ROOT."/Login/activate/url/{$url} </a>";
        send_mail($mail,$title,$content);

        $this->display();
    }

    public function resend_mail()
    {
        $title="中国运河网注册激活邮件";
        $email=I('post.email');
        $username=I('post.username');
        $url=base64_encode("username/$username");
        $content="欢迎注册中国运河网，点击以下链接进行激活会员！<br /><a href='".CAPCC_ROOT."/Login/activate/url/{$url}'>".CAPCC_ROOT."/Login/activate/url/{$url} </a>";
        send_mail($email,$title,$content);
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
           //超过24小时未激活就删除注册信息
           $time_diff=time()-$res_activate['a_time'];
           if($time_diff >=3600*24)
           {
               $del_info= $m->where(array('username'=>$username))->delete();
               if($del_info==1) {
                   //删除成功
                   $this->redirect('Pwd/del_unactivated', '', 3, '页面跳转中...');
               }else
               {
                   $this->redirect('Index/index','',3,'激活失败，请联系客服！');
               }
           }else
           {
               $data['activated']=1;
               $res_chg_activate=$m->where(array('username'=>$username))->save($data);

               if($res_chg_activate)
               {
                   session('username',$username);
                   $this->success('恭喜激活成功,正在跳转至首页！',U('Index/index'));
               }else
               {
                   $this->redirect('Index/index','',3,'激活失败，请联系客服！');
               }
           }

       }
    }










    public function bindphone()
    {
        if((I('session.username')==''))
        {
            $this->error('请先登录',U('Login/login'));
        }

        $this->display();
    }

    public function check_tel()
    {
        $tel=I('post.tel');
        $res=M('User')->where(array('tel'=>$tel))->find();
        //真，已注册，返回0；假，未注册，返回1；
        echo ($res)?0:1;
    }

    //手机验证
    public function send_sms()
    {
        $sms_code=I('post.code');
        $to=I('post.tel');
        session('sms_code',$sms_code);
        //验证码，5分钟有效
        $datas=array($sms_code,'5');
        $tempId='1';
        $tel_exists= M('User')->where(array('tel'=>$to))->find();
        if(strlen($to)!=11)
        {
            //手机号位数不对
            $res= -1;

        }elseif($tel_exists)
        {
            //号码已绑定过
            $res=-2;
        }else
        {
            //返回1或0
            $res=R('Sms/sendTemplateSMS',array($to,$datas,$tempId));
            //$res=1;
        }

        echo $res;



    }

    public function sms_check()
    {
        $smsCode=I('post.smsCode');
        $username=I('session.username');
        $tel=I('post.tel');
        if($smsCode==session('sms_code'))
        {
            //把手机号存入数据库
              $m=M('User');
               $res= $m->where(array('username'=>$username))->save(array('tel'=>$tel));
               if($res)
               {
                   $url=cookie('refer');
                   //登录后跳转至登录前的页面
                   $jump_url=(isset($url))?$url:U('Index/index');
                   $this->success('验证成功', $jump_url);

               }else
               {
                   //存入数据库出错
                   $this->error('系统出错！请联系管理员！');
               }
        }else
        {
            $this->error('验证码错误！');
        }
    }





    //退出登录
    public function logout() {
        session('[destroy]');
        $url=cookie('refer');
        $this->success('注销成功',$url);
    }

}

?>
