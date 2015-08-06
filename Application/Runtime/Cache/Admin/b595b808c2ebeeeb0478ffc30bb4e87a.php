<?php if (!defined('THINK_PATH')) exit();?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>运河网后台管理系统 </title>
    <script type="text/javascript" src="/capcc0624/Public/Admin/jquery.js"></script>
    <script type="text/javascript" src="/capcc0624/Public/Admin/menu.js"></script>
    <link rel="stylesheet" type="text/css" href="/capcc0624/Public/Admin/index.css" />
    <link rel="stylesheet" type="text/css" href="/capcc0624/Public/Home/Css/1.1home_font.css" />

</head>
<body>
<div id="mainDiv">
    <div id="topDiv">
        <div id="tmenu">
            <ul>
                <li id="news"><span>1新闻</span></li>
                <li id="city"><span >2城市</span></li>
                <li id="heritage"><span href="#">3世遗</span></li>
                <li id="travel"><span href="#">4旅游</span></li>
                <li id="brand"><span href="#">5品牌</span></li>
                <li id="classic"><span href="#">6数字美术馆</span></li>
                <li id="activity"><span href="#">7活动</span></li>
                <li id="volunteer"><span href="#">8志愿者</span></li>
            </ul>
        </div>
    </div>
    <div id="centerDiv">
        <div id="left">
            <div id="lhead">管理菜单</div>
            <ul id="selector">
                <!--js填入后改变-->
                <li ><span id="picture">图说新闻</span></li>
                <li ><span id="active">动态新闻</span></li>
            </ul>
        </div>
     <div id="right">
         <iframe src="" width=100% height=100%></iframe>
         <!--
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
            </div>-->
        </div>
    </div>
    <div id="bottomDiv"></div>
</div>
<script language="javascript">
    $("#test1").toggle(function(){$("#test").slideDown()},function(){$("#test").slideUp()})
</script>
</body>
</html>