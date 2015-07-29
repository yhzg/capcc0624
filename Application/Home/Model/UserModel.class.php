<?php
/**
 * Created by PhpStorm.
 * User: DT
 * Date: 2015/7/27
 * Time: 10:40
 */
namespace Home\Model;
use Think\Model;

class UserModel extends Model {
   // protected $autoCheckFields =false;
    protected $_validate = array(
        array('username','require','用户名不能为空！'), //默认情况下用正则进行验证
        array('username','','帐号名称已经存在！',0,'unique',1), // 在新增的时候验证name字段是否唯一
        //array('value',array(1,2,3),'值的范围不正确！',2,'in'), // 当值不为空的时候判断是否在一个范围内
        array('password','6,20','密码格式不正确',1,'length'), // 密码长度为6~20位
        array('repassword','password','确认密码不正确',0,'confirm'), // 验证确认密码是否和密码一致
        array('email','email','邮箱格式不正确'), // 内置正则验证邮箱
        array('email','','此邮箱已被注册！',0,'unique',1), // 在新增的时候验证emial字段是否唯一
        array('vcode','require','验证码必须！'), //验证码是否为空
        //array('vcode','check_vcode','验证码错误！',0,'callback'), //使用check_verify方法进行验证
        );

    protected $_auto = array (

        array('password','md5',3,'function') , // 对password字段在新增和编辑的时候使md5函数处理
        //array('name','getName',3,'callback'), // 对name字段在新增和编辑的时候回调getName方法
        //array('update_time','time',2,'function'), // 对update_time字段在更新的时候写入当前时间戳
        );

    }