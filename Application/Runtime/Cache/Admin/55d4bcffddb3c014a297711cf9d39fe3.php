<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

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

</body>
</html>