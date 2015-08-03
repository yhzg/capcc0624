<?php if (!defined('THINK_PATH')) exit();?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>运河网后台管理系统 </title>
    <script type="text/javascript" src="/capcc0624/Public/Admin/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="/capcc0624/Public/Admin/index.css" />
    <link rel="stylesheet" type="text/css" href="/capcc0624/Public/Admin/manage.css" />
    <link rel="stylesheet" type="text/css" href="/capcc0624/Public/Home/Css/1.1home_font.css" />
    <script language="JavaScript" >
        function del(id)
        {
            var del_id=id;
            //document.write(del_id);
            if (confirm('确认删除?'))
            {
                document.location.href="<?php echo U('Manage/delete_main_news');?>?newsid="+del_id;
            }
        }

        function edit(id)
        {
            var del_id=id;
            //document.write(del_id);
            if (confirm('跳转至编辑窗口？'))
            {
                document.location.href="<?php echo U('Manage/edit_main_news');?>?newsid="+del_id;
            }
        }
    </script>
</head>
<body>
<div id="mainDiv">
    <div id="topDiv">
        <div id="tmenu"><ul>
            <li ><a href="">首页图片</a></li>
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
                <li ><a href=<?php echo U('Manage/show_news_main_list');?>>首页新闻列表</a></li>
                <li ><a href="#">菜单  3</a></li>
                <li ><a href="#">菜单  4</a></li>
                <li ><a href="#">菜单  5</a></li>
                <li ><a href="#">菜单  6</a></li>
            </ul>
        </div>
        <div id="right">
            <div id="current">&nbsp;&nbsp;&nbsp;&nbsp;当前位置:首页新闻列表</div>
            <div id="form">
                    <table width="100%" style="text-align: center" >
                        <tr id="tr1" >
                            <td width="5%" align="center">编号</td>
                            <td width="15%" align="center">标题</td>
                            <td width="31%" align="center">内容</td>
                            <td width="5%" align="center">原作者</td>
                            <td width="5%" align="center">作者</td>
                            <td width="5%" align="center">编辑</td>
                            <td width="8%" align="center">上传时间</td>
                            <td width="8%" align="center">点击量</td>
                            <td width="8%" align="center">来源</td>
                            <td width="10%" align="center">操作</td>
                        </tr>
                        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                                <td align="center" id="newsid"><?php echo ($vo["newsid"]); ?></td>
                                <td align="center"><?php echo ($vo["title"]); ?></td>
                                <td ><span style="text-align: left"><?php echo ($vo["content"]); ?></span></td>
                                <td align="center"><?php echo ($vo["o_author"]); ?></td>
                                <td align="center"><?php echo ($vo["author"]); ?></td>
                                <td align="center"><?php echo ($vo["editor"]); ?></td>
                                <td align="center"><?php echo ($vo["time"]); ?></td>
                                <td align="center"><?php echo ($vo["browsenumber"]); ?></td>
                                <td align="center"><?php echo ($vo["source"]); ?></td>
                                <td align="center"><span><input type="submit" value="删除" onclick="del(<?php echo ($vo["newsid"]); ?>)"></span>&nbsp;<span><input type="submit" value="编辑" onclick="edit(<?php echo ($vo["newsid"]); ?>)"></span></td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </table>
                <div style="font-size: 15px;margin-top: 20px">
                    <?php echo ($page); ?>
                </div>
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