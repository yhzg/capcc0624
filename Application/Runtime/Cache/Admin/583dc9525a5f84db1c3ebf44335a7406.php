<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>运河网后台管理系统 </title>
    <script type="text/javascript" src="/capcc0624/Public/Admin/jquery.js"></script>
    <script type="text/javascript" src="/capcc0624/Public/Admin/nav.js"></script>
    <link rel="stylesheet" type="text/css" href="/capcc0624/Public/Admin/index.css" />
    <!--<link rel="stylesheet" type="text/css" href="/capcc0624/Public/Home/Css/1.1home_font.css" />-->
</head>
<body>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>运河网后台管理系统 </title>
    <script type="text/javascript" src="/capcc0624/Public/Admin/jquery.js"></script>
    <script type="text/javascript" src="/capcc0624/Public/Admin/nav.js"></script>
    <link rel="stylesheet" type="text/css" href="/capcc0624/Public/Admin/index.css" />
    <link rel="stylesheet" type="text/css" href="/capcc0624/Public/Home/Css/1.1home_font.css" />
</head>
<body>
<div id="mainDiv">
    <div id="topDiv">
        <div id="tmenu">
            <?php
 $adminname=$_SESSION['adminname']; if($adminname) { echo '<span style="color:red">欢迎您，管理员'.$adminname.'</span>&nbsp;&nbsp;&nbsp;'; echo '<span style="color:navajowhite"><a href="#">退出登录</a></span>'; }else { header('location:http://localhost/capcc0624/Admin/Index/login'); } ?>
            <!--<span style="color:red">欢迎您，管理员<?php echo ($adminname); ?></span>&nbsp;&nbsp;&nbsp;
            <span style="color:navajowhite"><a href="<?php echo U('Index/logout');?>">退出登录</a></span>-->
            <ul id="nav">
                <li id="nav1"><a href='#'>新闻</a></li>
                <li id="nav2"><a href='#'>旅游</a></li>
                <li id="nav3"><a href='#'>品牌</a></li>
                <li id="nav4"><a href='#'>数字美术馆</a></li>
                <li id="nav5"><a href='#'>活动</a></li>
                <li id="nav6"><a href='#'>志愿者家园</a></li>
            </ul>
        </div>
    </div>
    </div>
</body>
</html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>运河网后台管理系统 </title>
    <script type="text/javascript" src="/capcc0624/Public/Admin/jquery.js"></script>
    <script type="text/javascript" src="/capcc0624/Public/Admin/nav.js"></script>
    <link rel="stylesheet" type="text/css" href="/capcc0624/Public/Admin/index.css" />
    <link rel="stylesheet" type="text/css" href="/capcc0624/Public/Home/Css/1.1home_font.css" />
</head>
<body>
<div id="mainDiv">
    <div id="topDiv">
        <div id="tmenu">
            <?php
 $adminname=$_SESSION['adminname']; if($adminname) { echo '<span style="color:red">欢迎您，管理员'.$adminname.'</span>&nbsp;&nbsp;&nbsp;'; echo '<span style="color:navajowhite"><a href="#">退出登录</a></span>'; }else { header('location:http://localhost/capcc0624/Admin/Index/login'); } ?>
            <!--<span style="color:red">欢迎您，管理员<?php echo ($adminname); ?></span>&nbsp;&nbsp;&nbsp;
            <span style="color:navajowhite"><a href="<?php echo U('Index/logout');?>">退出登录</a></span>-->
            <ul id="nav">
                <li id="nav1"><a href='#'>新闻</a></li>
                <li id="nav2"><a href='#'>旅游</a></li>
                <li id="nav3"><a href='#'>品牌</a></li>
                <li id="nav4"><a href='#'>数字美术馆</a></li>
                <li id="nav5"><a href='#'>活动</a></li>
                <li id="nav6"><a href='#'>志愿者家园</a></li>
            </ul>
        </div>
    </div>
    </div>
</body>
</html>
</body>
</html>