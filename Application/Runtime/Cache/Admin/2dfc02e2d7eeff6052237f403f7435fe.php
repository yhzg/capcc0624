<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>运河网后台管理系统 </title>
    <script type="text/javascript" src="/capcc0624/Public/Admin/jquery.js"></script>
   <!-- <script type="text/javascript" src="/capcc0624/Public/Admin/nav.js"></script>-->
    <link rel="stylesheet" type="text/css" href="/capcc0624/Public/Admin/index.css" />
    <!--<link rel="stylesheet" type="text/css" href="/capcc0624/Public/Home/Css/1.1home_font.css" />-->
</head>
<body>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>运河网后台管理系统 </title>
    <script type="text/javascript" src="/capcc0624/Public/Admin/jquery.js"></script>
    <!--<script type="text/javascript" src="/capcc0624/Public/Admin/nav.js"></script>-->
    <link rel="stylesheet" type="text/css" href="/capcc0624/Public/Admin/index.css" />
    <link rel="stylesheet" type="text/css" href="/capcc0624/Public/Home/Css/1.1home_font.css" />
</head>
<body>
<div id="mainDiv">
    <div id="topDiv">
        <div id="tmenu">
            <?php
 $adminname=$_SESSION['adminname']; if($adminname) { echo '<span style="color:red">欢迎您，管理员'.$adminname.'</span>&nbsp;&nbsp;&nbsp;'; echo '<span><a href="/capcc0624/index.php/Admin/Index/logout">退出登录</a></span>'; }else { header('location:http://localhost/capcc0624/Admin/Index/login'); } ?>
            <!--<span style="color:red">欢迎您，管理员<?php echo ($adminname); ?></span>&nbsp;&nbsp;&nbsp;
            <span style="color:navajowhite"><a href="<?php echo U('Index/logout');?>">退出登录</a></span>-->
            <ul id="nav">
                <li id="nav1"><a href="<?php echo U('News/index');?>">新闻</a></li>
                <li id="nav2"><a href="<?php echo U('Travel/index');?>">旅游</a></li>
                <li id="nav3"><a href="<?php echo U('Brand/index');?>">品牌</a></li>
                <li id="nav4"><a href="<?php echo U('Classic/index');?>">数字美术馆</a></li>
                <li id="nav5"><a href="<?php echo U('Activity/index');?>">活动</a></li>
                <li id="nav6"><a href="<?php echo U('Volunteer/index');?>">志愿者家园</a></li>
            </ul>
        </div>
    </div>
    <div id="centerDiv">
        <div id="left">
            <div id="lhead">管理菜单</div>
            <ul id="nav_manage">
                <!--待js填入-->
            </ul>
        </div>
        <div id="right">

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
    <link rel="stylesheet" type="text/css" href="/capcc0624/Public/Admin/index.css" />
    <link rel="stylesheet" type="text/css" href="/capcc0624/Public/Home/Css/1.1home_font.css" />
</head>
<body>
<div id="mainDiv">
    <div id="centerDiv">
        <div id="left">
            <div id="lhead">管理菜单</div>
            <ul id="nav_manage">
                <li ><a href="<?php echo U('News/picture');?>">图说新闻</a></li>
                <li ><a href="<?php echo U('News/active');?>">动态新闻</a></li>
            </ul>
        </div>
        <div id="right">
            <div id="current">&nbsp;&nbsp;&nbsp;&nbsp;当前位置:添加新闻</div>
            <div id="form">
                <form action="/capcc0624/index.php/Admin/News/add_news/tag/<?php echo ($tag); ?>" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <legend style="font-size: 20px;color:red">添加<?php echo ($tag); ?></legend>
                        Title(标题): <input type="text" name="title" />&nbsp;标记为头条新闻<input type="checkbox" name="headline" /><br />
                        Content(内容）: <br /><textarea cols="50" rows="10" name="content" ></textarea><br />
                        OriAuthor(原作者): <input type="text" name="oriAuthor" /><br />
                        Author(作者): <input type="text" name="author" /><br />
                        Editor(编辑): <input type="text" name="editor"  /><br />
                        Source(来源): <input type="text" name="source"  /><br />
                        PubTime(发布时间): <input type="text" name="pubTime"  /><br />
                        Picture(上传图片): <input type="file" name="Picture" /><span style="color:red;">图片最大4M，格式：jpg,gif,png,jpeg</span><br />
                        <input type="submit" >
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <div id="bottomDiv"></div>
</div>
<!--<script language="javascript">
    $("#test1").toggle(function(){$("#test").slideDown()},function(){$("#test").slideUp()})
</script>-->
</body>
</html>
</body>
</html>