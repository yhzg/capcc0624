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


    public function reget_pwd_by_email()
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
            $url=base64_encode($email);
            $content="中国运河网会员$username,您正在使用密码找回功能</br>点击链接进入密码修改页面<br /><a href='".CAPCC_ROOT."/Pwd/change_pwd/tag/email/url/{$url}'>".CAPCC_ROOT."/Pwd/change_pwd/tag/email/url/{$url}</a>";
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

    public function reget_pwd_by_phone()
    {
        $smsCode=I('post.smsCode');
        $tel=I('post.tel');
        if($smsCode==session('sms_code'))
        {
            //验证手机号
            $m=M('User');
            $res= $m->where(array('tel'=>$tel))->find();
            if($res)
            {
                $url=base64_encode($tel);
                $this->success('正在跳转至密码修改页面', U("Pwd/change_pwd/tag/tel/url/$url"));

            }else
            {
                $this->error('该手机尚未注册过，请注册！');
            }
        }else
        {
            $this->error('验证码错误！');
        }
    }

    public function change_pwd()
    {
        $url=I('get.url');
        $tag=I('get.tag');

        //$hidden是下个页面传递的隐藏值
        $hidden=base64_decode($url);

        $this->assign('tag',$tag);
        $this->assign('hidden',$hidden);
        $this->display();

    }

    public function do_change_pwd()
    {
        $hidden=I('post.hidden');
        $tag=I('get.tag');
        $new_pwd1=I('post.password');
        $new_pwd2=I('post.repassword');

        if($hidden=='')
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
            if($tag=='email'){
                $email=$hidden;
                $m=M('User');
                $data['password']=md5($new_pwd1);
                $res=$m->where(array('email'=>$email))->save($data);
                //$res返回的是影响的行数   更新失败返回false
                if($res> 0)
                {
                    $this->success('密码修改成功，请登录！',U('Index/index'));
                }else
                {
                    $this->error('密码修改失败，请联系管理员');
                }
            }elseif($tag=='tel')
            {
                $tel=$hidden;
                $m=M('User');
                $data['password']=md5($new_pwd1);
                $res=$m->where(array('tel'=>$tel))->save($data);
                //$res返回的是影响的行数   更新失败返回false
                if($res> 0)
                {
                    $this->success('密码修改成功，请登录！',U('Index/index'));
                }else
                {
                    $this->error('密码修改失败，请联系管理员');
                }
            }


        }

           // $this->display();

    }
}