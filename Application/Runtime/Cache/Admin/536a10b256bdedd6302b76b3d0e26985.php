<?php if (!defined('THINK_PATH')) exit();?>
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
    <div id="topDiv">
        <div id="tmenu"><ul>
            <li ><a href="">首页新闻</a></li>
            <li ><a href="#">新闻处理</a></li>
            <li ><a href="#">菜单</a></li>
            <li ><a href="#">菜单</a></li>
            <li ><a href="#">菜单</a></li>
        </ul></div></div>
    <div id="centerDiv">
        <div id="left">
            <div id="lhead">管理菜单</div>
            <ul>
                <li ><a href=<?php echo U('Index/index');?>>添加首页新闻</a></li>
                <li ><a href=<?php echo U('Manage/show_main_news_list');?>>首页新闻列表</a></li>
                <li ><a href="#">菜单  3</a></li>
                <li ><a href="#">菜单  4</a></li>
                <li ><a href="#">菜单  5</a></li>
                <li ><a href="#">菜单  6</a></li>
            </ul>
        </div>
        <div id="right">
            <div id="current">&nbsp;&nbsp;&nbsp;&nbsp;当前位置:首页新闻编辑</div>
            <div id="form">
                <form action=<?php echo U('Manage/main_news');?> method="post" enctype="multipart/form-data">
                     <fieldset>
                         <!--相关信息传递过来给各个输入框，点击后内容不消失，需自行修改-->
                      <legend style="font-size: 20px;">编辑首页新闻</legend>
                          Title(标题): <input type="text" name="title" value='<?php echo ($news["title"]); ?>'  /><br />
                          Content(内容）: <br /><textarea cols="50" rows="10" name="content" ><?php echo ($news["content"]); ?></textarea><br />
                          <h3>----以下四项可以为空，但原作者和作者至少填写一项----</h3>
                          O_Author(原作者): <input type="text" name="o_author" value='<?php echo ($news["o_author"]); ?>'  /><br />
                          Author(作者): <input type="text" name="author" value='<?php echo ($news["author"]); ?>'  /><br />
                          Editor(编辑): <input type="text" name="editor"  value='<?php echo ($news["editor"]); ?>'  /><br />
                          Source(来源): <input type="text" name="source" value='<?php echo ($news["source"]); ?>'  /><br />
                          <h3 style="color:red">----图片必须重新上传----</h3>
                          Picture(上传图片): <input type="file" name="Picture"  /><span style="color:red;">图片最大4M，格式：jpg,gif,png,jpeg</span><br />
                         <!--隐藏域 用于传递newsid-->
                          <input type="hidden" name="nid" value='<?php echo ($news["newsid"]); ?>' />
                          <input type="submit" value="保存修改" onClick="ChangeState();" />
                        </fieldset>

                  <!--  <fieldset>
                        <legend style="font-size: 20px;">编辑首页新闻</legend>
                            Title(标题): <input type="text" name="title" value='<?php echo ($news["title"]); ?>' onfocus="if(value!=''){value=''}" onblur="if(value==''){value='<?php echo ($news["title"]); ?>'}" /><br />
                            Content(内容）: <br /><textarea cols="50" rows="10" name="content"onfocus="if(value!=''){value=''}" onblur="if(value==''){value='<?php echo ($news["content"]); ?>'}"><?php echo ($news["content"]); ?></textarea><br />
                            <h3>----以下四项可以为空，原作者和作者至少填写一项----</h3>
                            O_Author(原作者): <input type="text" name="o_author" value='<?php echo ($news["o_author"]); ?>' onfocus="if(value!=''){value=''}" onblur="if(value==''){value='<?php echo ($news["o_author"]); ?>'}" /><br />
                            Author(作者): <input type="text" name="author" value='<?php echo ($news["author"]); ?>'onfocus="if(value!=''){value=''}" onblur="if(value==''){value='<?php echo ($news["author"]); ?>'}" /><br />
                            Editor(编辑): <input type="text" name="editor"  value='<?php echo ($news["editor"]); ?>' onfocus="if(value!=''){value=''}" onblur="if(value==''){value='<?php echo ($news["editor"]); ?>'}" /><br />
                            Source(来源): <input type="text" name="source" value='<?php echo ($news["source"]); ?>' onfocus="if(value!=''){value=''}" onblur="if(value==''){value='<?php echo ($news["source"]); ?>'}" /><br />
                            <h3 style="color:red">----图片必须重新上传----</h3>
                            Picture(上传图片): <input type="file" name="Picture"  /><span style="color:red;">图片最大4M，格式：jpg,gif,png,jpeg</span><br />
                            <input type="submit" value="保存修改" >
                    </fieldset>-->
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