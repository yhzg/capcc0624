<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<form action="/capcc0624/index.php/Pwd/do_change_pwd" method="post">
    请输入新密码;<input type="password" name="password" /><br />
    请再次输入新密码;<input type="password" name="repassword" /><br />
    <input type="hidden" value="<?php echo ($email); ?>" name="email"/>
    <input type="submit" value="确认修改" />

</form>
</body>
</html>