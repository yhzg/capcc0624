$(function(){

	//页面切换初始化
	$(".number2").click(function(){
		$(".mainForm1").show();
		$(".mainForm2").hide();
		$(".error").hide();
		$(".normalInput").removeClass("errorC");
		$(".normalInput").removeClass("checkedN");
		$(".mainForm input").val("");
	});
	$(".number1").click(function(){
		$(".mainForm2").show();
		$(".mainForm1").hide();
		$(".error").hide();
		$(".normalInput").removeClass("errorC");
		$(".normalInput").removeClass("checkedN");
		$(".mainForm input").val("");
	});
	//文本框失去焦点
	$(".mainForm input").blur(function(){
		$("#mz_Float").css("top","");
	});

	//mainform1
	//密码是否可见(mainform1)
	$(".pwdBtnShow").click(function(){
		if($(".pwdBtnShow").attr("isshow")=="false")
		{
			$(".pwdBtnShow i").css("background-position","-60px -93px");
			$(".password").hide();
			$(".password1").val($(".password").val());
			$(".password1").show();
			$(".pwdBtnShow").attr("isshow","true");
		}
		else
		{
			$(".pwdBtnShow i").css("background-position","-30px -93px");
			$(".password1").hide();
			$(".password").val($(".password1").val());
			$(".password").show();
			$(".pwdBtnShow").attr("isshow","false");
		}
		
	});
	
	//手机号栏失去焦点
	$(".phone").blur(function(){
		reg=/^1[3|4|5|7|8][0-9]\d{4,8}$/i;//验证手机正则(输入前7位至11位)

		if( $(".phone").val()=="")
		{ 
			$(".phone").parent().addClass("errorC");
			$(".error1").html("请输入手机号");
			$(".error1").css("display","block");
		}
		else if($(".phone").val().length<11)
        {   
        	$(".phone").parent().addClass("errorC");
            $(".error1").html("手机号长度有误！");
            $(".error1").css("display","block");
        }
        else if(!reg.test($(".phone").val()))
        {   
        	$(".phone").parent().addClass("errorC");
            $(".error1").html("手机号输入有误");
            $(".error1").css("display","block");
        }
        else
        {
        	$(".phone").parent().addClass("checkedN");
        }
	});

	//验证码栏失去焦点
	$(".kapkey").blur(function(){
		reg=/^.*[\u4e00-\u9fa5]+.*$/;
		if( $(".kapkey").val()=="")
		{
			$(".kapkey").parent().addClass("errorC");
			$(".error2").html("请填写验证码");
			$(".error2").css("display","block");
		}
        else if($(".kapkey").val().length<6)
        {   
        	$(".kapkey").parent().addClass("errorC");
            $(".error2").html("验证码长度有误！");
            $(".error2").css("display","block");
        }
        else if(reg.test($(".kapkey").val()))
        {
        	$(".kapkey").parent().addClass("errorC");
            $(".error2").html("验证码里无中文！");
            $(".error2").css("display","block");
        }
        else 
        {
        	$(".kapkey").parent().addClass("checkedN");
        }
	});


	//手机号栏获得焦点
	$(".phone").focus(function(){
		$(".phone").parent().removeClass("errorC");
		$(".phone").parent().removeClass("checkedN");
		$(".error1").hide();
		$("#mz_Float").css("top","232px");
		$("#mz_Float").find(".bRadius2").html("输入11位手机号码，可用于登录和找回密码");
	});
	//验证码栏获得焦点
	$(".kapkey").focus(function(){
		$(".kapkey").parent().removeClass("errorC");
		$(".kapkey").parent().removeClass("checkedN");
		$(".error2").hide();
		if($(".error1").css("display")=="block")
		{
			$("#mz_Float").css("top","334px");
		}
		else
		{
			$("#mz_Float").css("top","304px");
		}
		
		$("#mz_Float").find(".bRadius2").html("请输入手机收到的验证码");
	});


	//账户名栏获得焦点
	$(".username").focus(function(){
		$(".username").parent().removeClass("errorC");
		$(".username").parent().removeClass("checkedN");
		$(".error1").hide();
		$("#mz_Float").css("top","232px");
		$("#mz_Float").find(".bRadius2").html("长度为4-32个字符支持数字、字母、下划线，字母开头，字母或数字结尾");
	});
	//邮箱栏获得焦点
	$(".email").focus(function(){
		$(".email").parent().removeClass("errorC");
		$(".email").parent().removeClass("checkedN");
		$(".error2").hide();
		if($(".error1").css("display")=="block" && $(".error3").css("display")=="block")
		{
			$("#mz_Float").css("top","436px");
		}
		else if($(".error1").css("display")=="block" || $(".error3").css("display")=="block")
		{
			$("#mz_Float").css("top","406px");
		}
		else
		{
			$("#mz_Float").css("top","376px");
		}
		
		$("#mz_Float").find(".bRadius2").html("用于找回密码，提高账户安全等级");
	});


	//账户名栏失去焦点
	$(".username").blur(function(){
		reg=/^[a-zA-Z][0-9a-zA-Z_]{2,30}[0-9a-zA-Z]$/;//验证手机正则(输入前7位至11位)

		if( $(".username").val()=="")
		{ 
			$(".username").parent().addClass("errorC");
			$(".error1").html("请输入账户名");
			$(".error1").css("display","block");
		}
		else if($(".username").val().length>32 || $(".username").val().length<4)
        {   
        	$(".username").parent().addClass("errorC");
            $(".error1").html("账户名长度有误！");
            $(".error1").css("display","block");
        }
        else if(!reg.test($(".username").val()))
        {   
        	$(".username").parent().addClass("errorC");
            $(".error1").html("账户名格式有误!!");
            $(".error1").css("display","block");
        }
        else
        {
        	$(".username").parent().addClass("checkedN");
        }
	});

	

	//邮箱栏键盘操作
	$(".email").keyup(function(){//键盘监听keyup,keydown,keypress
		var emailVal = $(".email").val();
		emailValN = emailVal.replace(/\s/g,'');//去空
		emailValN = emailValN.replace(/[\u4e00-\u9fa5]/g,'');//屏蔽中文
		if(emailValN!=emailVal)
		{
			$(".email").val(emailValN);
		}
		
		var mailVal = emailValN.split("@");
		var mailHtml=mailVal[0];
		if(mailHtml.length>15)
		{
			mailHtml=mailHtml.slice(0,15)+"...";//字数超加省略
		}
		
		for(var i=1;i<6;i++)
		{
			var M = $(".item"+i).attr("data-mail");
			$(".item"+i).html(mailHtml+M);
		}
	});

	//邮箱提示
	$(".item").click(function(){
		var a= $(".email").val();
		var b= $(this).attr("data-mail");
		$(".email").val(a+b);
		$(".email").trigger("focus");//setTimeout($(".email").("focus") );效果同，时间设多少无所谓
	});


	$(".email").click(function(){
		if($(".error1").css("display")=="block" && $(".error3").css("display")=="block")
		{
			$(".mail").css("top","489px");
		}
		else if($(".error1").css("display")=="block" || $(".error3").css("display")=="block")
		{
			$(".mail").css("top","459px");
		}
		else
		{
			$(".mail").css("top","429px");
		}
		$(".mail").show(); 
		return false;
	});
	$(document).click(function(){
		$(".mail").hide();
	});

	//邮箱栏失去焦点
	$(".email").blur(function(){
		reg=/^\w+[@]\w+((.com)|(.net)|(.cn)|(.org)|(.gmail))$$/;
		if( $(".email").val()=="")
		{
			$(".email").parent().addClass("errorC");
			$(".error2").html("邮箱不能为空!");
			$(".error2").css("display","block");
		}
        else if(!reg.test($(".email").val()))
        {
        	$(".email").parent().addClass("errorC");
            $(".error2").html("邮箱格式错误！");
            $(".error2").css("display","block");
        }
        else 
        {
        	$(".email").parent().addClass("checkedN");
        }
	});

});

