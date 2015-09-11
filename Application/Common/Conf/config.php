<?php
return array(
	 //'配置项'=>'配置值'
    'URL_MODEL' => 3,
    'TMPL_L_DELIM'=>'<{',
    'TMPL_R_DELIM'=>'}>',
    'DB_TYPE'=>'mysql',
    'DB_HOST'=>'localhost',
    'DB_NAME'=>'capcc_db',
    'DB_USER'=>'root',
    'DB_PWD'=>'',
    'DB_PORT'=>'',
    'DB_PREFIX'=>'',
//    'SHOW_PAGE_TRACE'=>TRUE,
    //'LAYOUT_ON'=>true,
    'MODULE_ALLOW_LIST'    =>    array('Home','Admin'),
   // 'DEFAULT_MODULE'       =>    'Home',  // 默认模块
    'URL_DENY_SUFFIX'       =>  'ico|png|gif|jpg', // URL禁止访问的后缀设置
   // 'ERROR_MESSAGE'         =>  '页面错误！请返回主页<a href="http://localhost/capcc0624">去主页</a>',//错误显示信息,非调试模式有效

    // 配置邮件发送服务器
    'MAIL_HOST' =>'smtp.163.com',//smtp服务器的名称
    'MAIL_SMTPAUTH' =>TRUE, //启用smtp认证
    'MAIL_USERNAME' =>'wx_yhzg@163.com',//你的邮箱名
    'MAIL_FROM' =>'wx_yhzg@163.com',//发件人地址
    'MAIL_FROMNAME'=>'中国运河网',//发件人姓名
    'MAIL_PASSWORD' =>'wvjbbnqonorzbclp',//邮箱密码 网易授权密码
    'MAIL_CHARSET' =>'utf-8',//设置邮件编码
    'MAIL_ISHTML' =>TRUE, // 是否HTML格式邮件

    //AliPay相关
    //支付宝配置参数
    'alipay_config'=>array(
        'partner' =>'20********50',   //这里是你在成功申请支付宝接口后获取到的PID；
        'key'=>'9t***********ie',//这里是你在成功申请支付宝接口后获取到的Key
        'sign_type'=>strtoupper('MD5'),``
        'input_charset'=> strtolower('utf-8'),
        'cacert'=> getcwd().'\\cacert.pem',
        'transport'=> 'http',
    ),
    //以上配置项，是从接口包中alipay.config.php 文件中复制过来，进行配置；

    'alipay'   =>array(
        //这里是卖家的支付宝账号，也就是你申请接口时注册的支付宝账号
        'seller_email'=>'sandbox_dtfly520@126.com   ',

//这里是异步通知页面url，提交到项目的Pay控制器的notifyurl方法；
        'notify_url'=>'http://localhsot/Pay/notifyurl',

//这里是页面跳转通知url，提交到项目的Pay控制器的returnurl方法；
        'return_url'=>'http://localhsot/Pay/returnurl',

//支付成功跳转到的页面，我这里跳转到项目的User控制器，myorder方法，并传参payed（已支付列表）
        'successpage'=>'User/myorder?ordtype=payed',

//支付失败跳转到的页面，我这里跳转到项目的User控制器，myorder方法，并传参unpay（未支付列表）
        'errorpage'=>'User/myorder?ordtype=unpay',
    ),


);
