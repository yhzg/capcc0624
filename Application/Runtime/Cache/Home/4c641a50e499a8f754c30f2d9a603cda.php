<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
<head>
	<title>找回密码-中国运河网</title>
	<meta http-equiv="content-Type" content="text/html" charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/capcc0624/Public/Home/Css/pwd.css">
	<script type="text/javascript" src="/capcc0624/Public/Home/Js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="/capcc0624/Public/Home/Js/pwd.js"></script>

</head>
<body>
	<div class="head_body">
	<div class="head">
    	<div class="head_top">
        	<div class="logo"><img src="/capcc0624/Public/Home/Images/login/ologo.png" /></div>
            <span class="ts">找回密码</span>
        </div>
        <p>欢迎重新回到中国运河网！享受中国运河网产品服务！</p>
    </div>
    </div>
	<div class="content">
		<form id="#mainForm1" class="mainForm mainForm1">
			<div class="number">
				<a href="##" class="linkABlue">通过手机号找回密码</a>
				<a href="##" class="linkAGray number1">通过邮箱找回密码</a>
			</div>
			<div class="normalInput">
				<input type="text" class="phone" maxlength="11" placeholder="请输入绑定的手机号">	
			</div>
			<span class="error error1"></span>
			<div class="normalInput">
				<input type="text" class="kapkey" maxlength="6" placeholder="请输入验证码">
				<span class="formLine"></span>
				<a href="##" id="getKey" style="color:#1A89A8;">获取验证码</a>
			</div>
			<span class="error error2"></span>
			<span class="error error3"></span>
			
			<!--<a href="##" class="fullBtnBlue">提交申请</a>-->
            <button type="submit"  class="fullBtnBlue">提交申请</button>
		</form>
		<form id="#mainForm2" class="mainForm mainForm2" action="reget_pwd" method="post">
			<div class="number">
				<a href="##" class="linkABlue2 number2">通过手机号找回密码</a>
				<a href="##" class="linkAGray2">通过邮箱找回密码</a>
			</div>
			<span class="error error1"></span>
			<span class="error error3"></span>
			<div class="normalInput">
				<input type="text" class="email" maxlength="32" placeholder="请输入注册邮箱" autocomplete="off" name="reg_mail">
			</div>
			<span class="error error2"></span>

            <!--<a href="javascript:send_mail();" class="fullBtnBlue">发送邮件</a>-->
            <button type="submit"  class="fullBtnBlue">发送邮件</button>
		</form>
	</div>
	
	</div>
    
    <div class="link"><p><a href="#">网站介绍</a>/<a href="#">组织机构</a>/<a href="#">联系方式</a>/<a href="#">商务合作</a>/<a href="#">人才招聘</a>/<a href="#">合作伙伴</a>/<a href="#">广告服务</a>/<a href="#">友情链接</a>/<a href="#">法律声明</a></p></div>
    <div class="footer">
    	<p>中国运河网广告招商部联系电话：0510-851388322  18610610393  18618130703</p>
        <p>版权所有  无锡运河之光文化艺术交流有限公司</p>
        <p>苏ICP备15032950号-1</p>
    </div>
</body>
</html>