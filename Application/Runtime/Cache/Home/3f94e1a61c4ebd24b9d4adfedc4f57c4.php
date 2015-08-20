<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
<head>
	<title>绑定手机-中国运河网</title>
	<meta http-equiv="content-Type" content="text/html" charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/capcc0624/Public/Home/Css/pwd.css">
	<script type="text/javascript" src="/capcc0624/Public/Home/Js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="/capcc0624/Public/Home/Js/pwd.js"></script>
    <script>
     function getKey()
     {
         //alert(111);
         var tel=$('#tel').val();
         //alert(tel);
         var code='';
         for(i=0;i<4;i++)
         {
             code+=Math.floor(Math.random()*10);
         }
         //alert(code);
         $.post('send_sms',{code:code,tel:tel});
     }
    </script>
</head>
<body>
	<div class="head_body">
	<div class="head">
    	<div class="head_top">
        	<div class="logo"><img src="/capcc0624/Public/Home/Images/login/ologo.png" /></div>
            <span class="ts">绑定手机</span>
        </div>
        <p>欢迎重新回到中国运河网！享受中国运河网产品服务！</p>
    </div>
    </div>
	<div class="content">
		<form id="#mainForm1" class="mainForm mainForm1" action="sms_check" method="post">
		
			<div class="normalInput">
				<input id='tel' type="text" class="phone" maxlength="11" placeholder="请输入您的手机号">
			</div>
			<span class="error error1"></span>
			<div class="normalInput">
				<input type="text" class="kapkey" maxlength="6" placeholder="请输入验证码">
				<span class="formLine"></span>
				<a href="javascript:getKey();" id="getKey" style="color:#1A89A8;">获取验证码</a>
			</div>
			<span class="error error2"></span>
			<span class="error error3"></span>
			
			<!--<a href="##" class="fullBtnBlue">立即绑定</a>-->
			<button class="fullBtnBlue">立即绑定</button>
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