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
        这里是运河网后台
        <!-- <div id="right">
             <div id="current">&nbsp;&nbsp;&nbsp;&nbsp;当前位置:首页新闻管理</div>
             <div id="form">
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
             </div>
         </div>-->
     </div>
    <div id="bottomDiv"></div>
</div>
<script language="javascript">
    $("#test1").toggle(function(){$("#test").slideDown()},function(){$("#test").slideUp()})
</script>
</body>
</html>