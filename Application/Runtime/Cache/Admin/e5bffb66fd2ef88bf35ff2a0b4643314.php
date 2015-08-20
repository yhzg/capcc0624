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
    <script language="JavaScript">
        //在离开页面时判断是否有未保存的输入值
        var hasSaved = false;//是否有输入的内容未保存标志，初始值为false

        function CheckUnsave(){
            if(hasSaved==false)
            {
                alert("内容尚未保存，确定离开？")
                return false;

            }
            //return true; //不能加这个语句
        }

        //保存了则改变状态
        function ChangeState()
        {
            hasSaved = true;
        }
    </script>
</head>
<body onbeforeunload="return CheckUnsave();">
<div id="mainDiv">
    <div id="centerDiv">
        <div id="left">
            <div id="lhead">管理菜单</div>
            <ul id="nav_manage">
                <li ><a href="<?php echo U('Travel/spot');?>">景点</a></li>
                <li ><a href="<?php echo U('Travel/eat');?>">吃</a></li>
                <li ><a href="<?php echo U('Travel/live');?>">住</a></li>
                <li ><a href="<?php echo U('Travel/story');?>">攻略</a></li>
            </ul>
        </div>
        <div id="right">
            <div id="current">&nbsp;&nbsp;&nbsp;&nbsp;当前位置:旅游编辑</div>
            <div id="form">
                <form action="/capcc0624/index.php/Admin/Travel/add_travel/tag/<?php echo ($tag); ?>" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <!--相关信息传递过来给各个输入框，点击后内容不消失，需自行修改-->
                        <legend style="font-size: 20px;color:red">编辑<?php echo ($tag); ?></legend>
                        Title(标题): <input type="text" name="title" value='<?php echo ($list["title"]); ?>'  /><br />
                        Content(内容）: <br /><textarea cols="50" rows="10" name="content" ><?php echo ($list["content"]); ?></textarea><br />
                        Author(作者): <input type="text" name="author" value='<?php echo ($list["author"]); ?>'  /><br />
                        <h3 style="color:red">----图片必须重新上传----</h3>
                        Picture(上传图片): <input type="file" name="Picture"  /><span style="color:red;">图片最大4M，格式：jpg,gif,png,jpeg</span><br />
                        <!--隐藏域 用于传递travelid-->
                        <input type="hidden" name="nid" value='<?php echo ($list["id"]); ?>' />
                        <input type="submit" value="保存修改" onClick="ChangeState();" />
                    </fieldset>

                </form>
            </div>
        </div>
    </div>
    <div id="bottomDiv"></div>
</div>

</body>
</html>
</body>
</html>