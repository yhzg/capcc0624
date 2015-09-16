/**
 * Created by DT on 2015/8/20.
 */

$(document).ready(function ()
    {
        $('#getKey').click(function()
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
                if(res== -1)
                {
                    alert('手机号码长度不符！');
                    return false;
                }else if(res== 1)
                {

                    //alert('验证码发送成功！');
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
                            clearInterval(_res);//清除setInterval
                        }
                    },1000);
                    return false;
                }else if(res== 0)
                {
                    alert('验证码发送失败！');
                    return false;
                }

            });

        })



    })
