/**
 * Created by DT on 2015/7/24.
 */
$(document).ready(function(){
   // var URL='http://localhost/capcc0624/Public/Home/Images/login/check_ok.ico';
    checkName();
    checkPwd();
    checkEmail();
    checkVcode();
});

//验证用户名是否存在
function checkName(){
    $('#focusedInput').focus(function()
    {
        $('#checkname').html("用户名长度为3~20个字符，只能包含数字、字母、下划线注册后不可修改！");
        $('#checkname').css('color','yellow');
    });

    $("#focusedInput").blur(function(){
        var username = $(this).val();
        var unReg=/^\w+$/;
        var res=unReg.test(username);
        if(!res && username!='')
        {
            $("#checkname").html("用户名含有非法字符！");
            $("#checkname").css('color','red');
            return false;
        }

        if(username=='')
        {
            $("#checkname").html("用户名不能为空！");
            $("#checkname").css('color','red');
            return false;
        }else if(username.length<3 || username.length>20)
        {
            $("#checkname").html("用户名长度必须在3~20位之间");
            $("#checkname").css('color','red');
            return false;
        }else
        {
            var changeUrl = "check_reg_name";
            $.post(changeUrl,{ name:username },function(str)
                {
                  if (str == 0)
                    {
                        $("#checkname").html("<span style='color:red'>抱歉，您输入的用户名已被注册！</span>");
                        return false;
                    } else
                    {

                        $("#checkname").html("<img src='http://localhost/capcc0624/Public/Home/Images/login/check_ok.ico' />");
                    }
                });
        }
    })

}

    function checkPwd()
    {

        $('#pw1').focus(function()
        {
            $('#checkpwd1').html("密码长度为6个字符以上！");
            $('#checkpwd1').css('color','yellow');
        });

        $('#pw1').blur(function()
        {
            var pw1=$('#pw1').val();
            if(pw1.length<6)
            {
                $('#checkpwd1').html("密码长度必须大于6个字符！");
                $('#checkpwd1').css('color','red');
                return false;
            }else
            {
                $('#checkpwd1').remove();
            }
        });

        $('#pw2').blur( function()
        {
            var pw1=$('#pw1').val();
            var pw2=$('#pw2').val();
            if (pw1 != pw2)
            {
                $('#checkpwd2').html("<span style='color:red'>两次输入的密码不一致！</span>");
                return false;
            }else if(pw2=='')
            {
                $('#checkpwd2').html("<span style='color:red'>密码不能为空！</span>");
                return false;
            }
            else
            {
                $("#checkpwd2").html("<img src='http://localhost/capcc0624/Public/Home/Images/login/check_ok.ico' />");
            }
    })
    }

    function checkEmail(){
        $('#email').blur( function()
        {
            //alert(1);

            var emReg=/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
            var email=$(this).val();
            var res=emReg.test(email);

                if(!res)
                {
                    $('#checkemail').html("邮箱格式错误!");
                    $('#checkemail').css('color','red');
                    return false;
                }else
                {
                    $.post('check_reg_email',{email:email},function(data)
                    {
                        if(data==0)
                        {
                            $('#checkemail').html("该邮箱已被注册!");
                            $('#checkemail').css('color','red');
                            return false;
                        }else
                        {
                            $("#checkemail").html("<img src='http://localhost/capcc0624/Public/Home/Images/login/check_ok.ico'/>");
                        }
                    })

                }

        })}

        function checkVcode(){
            $('#vcode').blur( function()
            {
                var vcode=$(this).val();
                var changeUrl='check_vcode';
                $.post(changeUrl,{ 'vcode':vcode }, function(str){
                        if(str == '0'){
                            $("#checkvcode").html("<span style='color:red'>验证码输入有误！</span>");
                            return false;
                        }else
                        {
                            $("#checkvcode").html("<img src='http://localhost/capcc0624/Public/Home/Images/login/check_ok.ico' />");
                        }

            })

    })}


