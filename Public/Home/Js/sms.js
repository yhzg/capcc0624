/**
 * Created by DT on 2015/8/20.
 */
function getKey()
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
    $.post('send_sms',{code:code,tel:tel},function(res)
    {
        if(res== -1)
        {
            alert('手机号码长度不符！')
        }else if(res== 1)
        {
            alert('验证码发送成功！');
        }else if(res== 0)
        {
            alert('验证码发送失败！');
        }

    });
}
