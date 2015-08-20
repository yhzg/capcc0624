<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<?php echo ($user["username"]); ?>您好，恭喜注册成功。
已发送一封激活邮件至您的邮箱<?php echo ($user["email"]); ?>
<a href="Http://<?php echo ($mail_domain); ?>" target="_blank">立即登陆邮箱激活</a>
<a href="<?php echo U('Index/index');?>">先登录</a>

</body>
</html>