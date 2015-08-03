<?php
/**
 * Created by PhpStorm.
 * User: DT
 * Date: 2015/8/3
 * Time: 10:14
 */

namespace Home\Controller;


use Think\Controller;

class PwdController extends Controller {


    public function forget_pwd()
    {

        $this->display();
    }


    public function reget_pwd()
    {
        $email=I('post.reg_mail');
        //确认邮箱类型
        $arr=explode('@',$email);
        $mail_domain='mail.'.$arr[1];
        $this->assign('mail_domain',$mail_domain);

        $m=M('User');
        $user= $m->where(array('email'=>$email))->find();
        if($user)
        {
            $username=$user['username'];
            $title='中国运河网 会员密码找回';
            $url=base64_encode("email/$email");
            $content="中国运河网会员$username,您正在使用密码找回功能</br>点击链接进入密码修改页面<br /><a href='http://localhost/capcc0624/Pwd/change_pwd/url/{$url}'>http://localhost/capcc0624/Pwd/change_pwd/url/{$url}</a>";
            $mail_status=send_mail($email,$title,$content);
            if($mail_status)
            {
                $this->display();
            }else{
                $this->error('邮件未发送成功，请稍后再试！');
            }

        }else
        {
            $this->error('您输入的邮箱不存在');
        }

    }

    public function change_pwd()
    {
        $url=I('get.url');
        //得到email/xxxxx的格式
        $email=substr(base64_decode($url),6);
        $this->assign('email',$email);
        $this->display();

    }

    public function do_change_pwd()
    {
        $email=I('post.email');
        $new_pwd1=I('post.password');
        $new_pwd2=I('post.repassword');

        if($email=='')
        {
            $this->error('未知用户！');
            exit;
        }
        if($new_pwd1=='')
        {
            $this->error('密码不能为空！');
            exit;
        }
        if($new_pwd1!=$new_pwd2)
        {
            $this->error('两次密码不一致');
        }else
        {
            $m=M('User');
            $data['password']=md5($new_pwd1);
            $res=$m->where(array('email'=>$email))->save($data);
            if($res)
            {
                $this->success('密码修改成功，请登录！',U('Index/index'));
            }else
            {
                $this->error('密码修改失败，请联系管理员');
            }
        }

           // $this->display();

    }
}