<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
<head>
	<title>激活邮件已发送-中国运河网</title>
	<meta http-equiv="content-Type" content="text/html" charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/capcc0624/Public/Home/Css/mail_login.css">
<!--   <script type="text/javascript">
        var countdown=60;
        function settime(val)
        {
            if (countdown == 0)
            {
                val.removeAttribute("disabled");
                val.value="请点击重新发送激活邮件";
                countdown = 60;
            } else
            {
                val.setAttribute("disabled", true);
                val.value=countdown + "秒后可再次重新发送";
                countdown--;
            }
            setTimeout(function(){settime(val)},1000);
        }
</script>-->
</head>
<body>
	<div class="head_body">
	<div class="head">
    	<div class="head_top">
        	<div class="logo"><img src="/capcc0624/Public/Home/Images/login/ologo.png" /></div>
        </div>
        <p>欢迎来到中国运河网！享受中国运河网产品服务！</p>
    </div>
    </div>
	<div class="content">
    	<div class="content_body">
    		<p class="duihao"><?php echo ($user["username"]); ?>您好，<?php echo ($user["info"]); ?></p>
            <p class="wanc">成为中国运河网志愿者会员只差一步之遥，请移步您的邮箱！<?php echo ($user["email"]); ?></p>
            <p class="wanc"><a href="Http://<?php echo ($mail_domain); ?>" target="_blank">【进入邮箱】</a>收取邮件，点击验证链接完成注册</p>
           <!-- <p class="wanc">如果您的邮箱没有收到激活邮件，<input type="button" id="btn" value="请点击重新发送激活邮件" onclick="settime(this)" /></p>-->
            <p class="tishi">温馨提示：有极少的邮箱会将激活邮件移至“垃圾邮件箱”中，请您仔细查询。</p>
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