/**
 * Created by DT on 2015/7/24.
 */
$(document).ready(function(){
    checkName();
    checkPwd();
    checkEmail();
    checkVcode();
});
//验证用户名是否存在
function checkName(){
    $('#focusedInput').focus(function()
    {
        $('#checkname').html("<span style='color:yellow'>用户名长度为2~20个字符，不能全部为数字，注册后不可修改！</span>");
    });


    $("#focusedInput").blur(function(){
        if($('#focusedInput').val()=='')
        {
            $("#checkname").html("<span style='color:red'>用户名不能为空！</span>");
        }

        var username = $(this).val();
        var changeUrl = "check_reg_name";
        $.post(changeUrl,
            {
                name:username
            },
            function(str)
            {
                if (str == 0)
                {
                    $("#checkname").html("<span style='color:red'>抱歉，您输入的用户名已被注册！</span>");
                } else
                {
                    $("#checkname").html("<img src='../../../Public/Home/Images/login/check_ok.ico'/>");
                }
            });
            })

}

    function checkPwd()
    {
        $('#pw2').blur( function()
        {
            var pw1=$('#pw1').val();
            var pw2=$(this).val();
            if (pw1 != pw2) {
                $('#checkpwd').html("<span style='color:red'>两次输入的密码不一致！</span>");
            }else if(pw2=='')
            {
                $('#checkpwd').html("<span style='color:red'>密码不能为空！</span>");
            }
            else
            {
                $("#checkpwd").html("<img src='../../../Public/Home/Images/login/check_ok.ico'/>");
            }
    })
    }

    function checkEmail(){
        $('#email').blur( function()
        {
            //alert(1);
            var emReg=/^[A-Za-zd]+([-_.][A-Za-zd]+)*@([A-Za-zd]+[-.])+[A-Za-zd]{2,5}$/;
            var email=$(this).val();
            var res=emReg.test(email);

                if(!res)
                {
                    $('#checkemail').html("<span style='color:red'>邮箱格式错误！</span>");
                }else
                {
                    $("#checkemail").html("<img src='../../../Public/Home/Images/login/check_ok.ico'/>");
                }

        })}

        function checkVcode(){
            $('#vcode').blur( function()
            {
                var vcode=$(this).val();
                var changeUrl='check_vcode';
                $.get(changeUrl,
                    {
                        vcode:vcode
                    },
                    function(str){
                        if(str == '0'){
                            $("#checkvcode").html("<span style='color:red'>验证码输入有误！</span>");
                        }else
                        {
                            $("#checkvcode").html("<img src='../../../Public/Home/Images/login/check_ok.ico'/>");
                            return false;
                        }


            })

    })}


