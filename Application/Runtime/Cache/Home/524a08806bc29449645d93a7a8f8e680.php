<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>用户注册</title>
<style type="text/css">
body {
	width:100%;
	height:100%;
	background-image: url(/capcc0624/Public/Home/Images/login/register_bg.jpg);
	background-size:cover;
	background-repeat: no-repeat;
}

@media screen and (max-width:1080px){body{
	                           background-image: url(/capcc0624/Public/Home/Images/login/reg2.jpg);
	                           background-size:no-cover;
	                           background-repeat: no-repeat	}}
</style>
    <link rel="stylesheet" type="text/css" href="/capcc0624/Public/Home/Css/bootstrap/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="/capcc0624/Public/Home/Css/register.css" />
    <script type="text/javascript" src="/capcc0624/Public/jq/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="/capcc0624/Public/Home/Js/reg.js"></script>
    <script type="text/javascript">
        function refreshcode()
        {
            $('#imgcode').attr("src","../Common/verify_code/"+Math.random());
        }
    </script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--[if lt IE 9]>
				<script src="http://html5abim.goolecode.com/avn/trunk/html5.js"></script>
<![endif]-->
</head>

<body>
	 	<div class="container-fluid">
	 	 	<div class="row-fluid">
	 	 				<!--li class="active"><a href="#"><i class="icon-home"></i> 返回首页</a></li-->		
	  		<div class="col-md-7">
	  			<div class="body_left"> <img src="/capcc0624/Public/Home/Images/login/logo.png" width="220" height="65" /></div>
	  		</div>
	  		
	  		<div class="col-md-5 body_right">				
	  			<!--		<table width="390" border="0" align="right" cellpadding="0" cellspacing="0" style="margin-top: 4%;">
	            	<tr>
	     						<td align="left" class="up_left">注册</td>
	     						<td width="51%" align="left" valign="bottom" class="up_right">已有中国运河网账号 登陆</td>
	   						</tr>
	 						</table>-->
	 				
	 					<div class="col-md-7 ">
	   					<h2 class="up_left" >用户注册</h2>
	   			  </div>
	   			  <div class="col-md-9">
	   			  
	   					<form  class="form-horizontal" id="form1" name="form1" method="post" action="check_register" >
	 				 			<fieldset>
                                    <div class="control-group">
	          						 <!-- 账号-->
	         							 <label class="control-label" for="username" ><h3><strong>账号:</strong></h3></label><br />
					 							 <input class="input-lg" id="focusedInput" name='username' type="text" placeholder='手机号/用户名/邮箱'>
	     							</div>
                                    <!--ajax提示-->
                                    <div>
                                        <span id="checkname"></span>
                                    </div>
                                    <div class="control-group">
	          						<!-- 密码 -->
	          						    <label class="control-label" for="code"><h3><strong>密码:</strong></h3></label><br />
				    						<input class="input-lg " id="pw1" name='password'type="password" placeholder=''>
                                    </div>
                                    <div>
                                        <span id="checkpwd1"></span>
                                    </div>

	    							<div class="control-group" >
	         							 <!-- 确认密码 -->
	          					        <div class="controls">
	          						        <label class="control-label" for="confirm password"><h3><strong>确认密码:</strong></h3></label><br />
				    						    <input class="input-lg" id="pw2" name='repassword' type="password" placeholder=''>
	          					         </div>
                                            <div>
                                                <span id="checkpwd2"></span>
                                            </div>
	        						</div>

                                    <div class="controls-group">
                                        <label class="control-label" for="email"><h3><strong>邮箱:</strong></h3></label><br />
                                        <input class="input-lg" id="email" name='email' type="text" placeholder=''>
                                    </div>
                                    <div>
                                        <span id="checkemail"></span>
                                    </div>
	        						
	        						<div class="control-group" >	
		        						 <!--div class="col-md-12"-->
                                        <table  border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td ><label><h3><strong>验证码</strong></h3></label><br />
                                                    <input class="input-sm" type="text" name="vcode" id="vcode">
                                                </td>
                                            </tr>
		      							</table>
		      							 <!--/div-->
	      						    </div>
                                    <div>
                                        <span id="checkvcode"></span>
                                    </div><br />
	      						    <div class="control-group" >
                                        <table  border="0" cellspacing="0" cellpadding="0">
                                          <tr>
                                              <td ><img id="imgcode"src="../Common/verify_code" onclick="this.src=this.src+'/'+Math.random()" alt="" name="" width="100" height="50" style="background-color: #FFFFFF" /></td>
                                              <td class="invisibility"><a  href="javascript:refreshcode()">看不清?<br />点击图片换一张</a></td>
                                          </tr>
                                        </table>
	      						    </div>
	    
	       							<div class="form-action side" >
	            						<button type="submit" class="btn btn-danger  btn-lg ">同意协议并注册</button>
	            					
	        						    <div id="agreement">《中国运河网用户协议》</div>
											</div>
                                    <div style="background:yellow">已经有运河网账号？<a href="login">直接登录</a></div>
	              </fieldset>
	            </form>
	        <!--/div-->
	          </div>  		 
	  		 </div>

	  		</div>
	  	</div>
	 	</div>
</body>
</html>