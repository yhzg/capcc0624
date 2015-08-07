<?php if (!defined('THINK_PATH')) exit();?>
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
        <div id="right">
            <div id="current">&nbsp;&nbsp;&nbsp;&nbsp;当前位置:添加图说新闻</div>
            <div id="form">
                <form action=<?php echo U('News/add_picture_news');?> method="post" enctype="multipart/form-data">
                    <fieldset>
                        <legend style="font-size: 20px;">添加图说新闻</legend>
                        Title(标题): <input type="text" name="title" /><br />
                        Content(内容）: <br /><textarea cols="50" rows="10" name="content" ></textarea><br />
                        Picture(上传图片): <input type="file" name="Picture" /><span style="color:red;">图片最大4M，格式：jpg,gif,png,jpeg</span><br />
                        <input type="submit" >
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <div id="bottomDiv"></div>
</div>
<script language="javascript">
    $("#test1").toggle(function(){$("#test").slideDown()},function(){$("#test").slideUp()})
</script>
</body>
</html>