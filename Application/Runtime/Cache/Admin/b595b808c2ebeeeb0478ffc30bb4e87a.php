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
<div id="mainDiv">
    <div id="topDiv">
        <div id="tmenu">
            <!--是否登录的判断-->
            <?php
 $adminname=$_SESSION['adminname']; if($adminname) { echo "<span style='color:red'>欢迎您，管理员".$adminname."</span>&nbsp;&nbsp;&nbsp;"; echo "<span style='color:white'><a href='http://localhost/capcc0624/Admin/Index/logout'>退出登录</a></span>"; }else { header("http://localhost/capcc0624/Admin/Index/login.html"); } ?>

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
                <!--待js填入-->
            </ul>
        </div>
         <div id="right">
             <div id="current">&nbsp;&nbsp;&nbsp;&nbsp;当前位置:后台首页</div>
             <!-- <div id="form">
                  <form action=<?php echo U('Manage/main_news');?> method="post" enctype="multipart/form-data">
                      <fieldset>
                          <legend style="font-size: 20px;">添加首页新闻</legend>
                              Title(标题): <input type="text" name="title" /><br />
                              Content(内容）: <br /><textarea cols="50" rows="10" name="content" ></textarea><br />
                              <h3>----以下四项可以为空，原作者和作者至少填写一项----</h3>
                              O_Author(原作者): <input type="text" name="o_author" /><br />
                              Author(作者): <input type="text" name="author" /><br />
                              Editor(编辑): <input type="text" name="editor"  /><br />
                              Source(来源): <input type="text" name="source"  /><br />
                              Picture(上传图片): <input type="file" name="Picture" /><span style="color:red;">图片最大4M，格式：jpg,gif,png,jpeg</span><br />
                              <input type="submit" >
                      </fieldset>
                  </form>
              </div>-->
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