/**
 * Created by DT on 2015/8/20.
 */

$(document).ready(function () {
    check_ok_url=public_url+'/Home/Images/login/check_ok.png';
    checkVcode();
    checkSms();
});


function checkVcode()
{
    $('#vcode').blur( function()
    {
        var vcode=$(this).val();
        var changeUrl='check_vcode';
        $.post(changeUrl,{ vcode:vcode }, function(str) {
            if (str == '0') {
                $("#checkvcode").html("<span style='color:red;'>图形验证码输入有误！</span>");
                $("#hidden").val("0");
                return false;
            } else {
                $("#checkvcode").html("<img src='" + check_ok_url + "' />");
                $("#hidden").val("1");
            }
        })
    })
}




function checkSms()
{
    $('#getKey').click(function()
    {
        if( $("#hidden").val()=='1' )
        {
            //alert(111);
            var tel=$('.phone').val();
            //alert(tel);
            var code='';
            for(i=0;i<6;i++)
            {
                code+=Math.floor(Math.random()*10);
            }
            //alert(code);
            var to_url=ROOT+"/Login/send_sms";
            //alert(to_url);
            //alert('CAPCC_ROOT');
            //return;
            $.post(to_url,{code:code,tel:tel},function(res)
            {
                //alert(res);
                if(res== -2)
                {
                    alert('此号码已绑定过！');
                    return false;
                }else if(res== -1)
                {
                    alert('手机号码长度不符！');
                    return false;
                }else if(res== 0)
                {
                    alert('验证码发送失败！');
                    return false;
                }else
                {
                    var step=59;
                    $('#getKey').val('60秒后重新发送');
                    var _res = setInterval(function()
                    {
                        $("#getKey").attr({"disabled":true});//设置disabled属性
                        $('#getKey').val(step+'秒后重新发送');
                        $('#getKey').css({'color':'red','cursor':'text'});
                        step-=1;
                        if(step <= 0){
                            $("#getKey").removeAttr("disabled"); //移除disabled属性
                            $('#getKey').val('获取验证码');
                            $('#getKey').css({'color':'#1A89A8','cursor':'pointer'});
                            clearInterval(_res);//清除setInterval
                        }
                    },1000);
                }
            });
        }else
        {
            alert('图形验证码输入错误！');
            return false;
        }

    })

    }

