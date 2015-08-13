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
  <!--  <script type="text/javascript" src="/capcc0624/Public/Admin/nav.js"></script>-->
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
                document.location.href="<?php echo U('Volunteer/delete_volunteer');?>?tag=advice&id="+del_id;
            }
        }

        function edit(id)
        {
            var del_id=id;
            //document.write(del_id);
            if (confirm('跳转至编辑窗口？'))
            {
                document.location.href="<?php echo U('Volunteer/edit_volunteer');?>?tag=advice&id="+del_id;
            }
        }
    </script>
</head>
<body>
<div id="mainDiv">
    <div id="centerDiv">
        <div id="left">
            <div id="lhead">管理菜单</div>
            <ul id="nav_manage">
                <li ><a href="<?php echo U('Volunteer/grace');?>">风采</a></li>
                <li ><a href="<?php echo U('Volunteer/act');?>">活动</a></li>
                <li ><a href="<?php echo U('Volunteer/advice');?>">良策</a></li>
                <li ><a href="<?php echo U('Volunteer/mon');?>">监测</a></li>
            </ul>
        </div>
        <div id="right">
            <div id="current">&nbsp;&nbsp;当前位置:志愿者 良策 列表</div>
            <div id="form">
                    <table width="100%" style="text-align: center" >
                        <tr id="tr1" >
                            <td width="5%" align="center">编号</td>
                            <td width="15%" align="center">标题</td>
                            <td width="15%" align="center">作者</td>
                            <td width="31%" align="center">内容</td>
                            <td width="5%" align="center">点击量</td>
                            <td width="10%" align="center">操作</td>
                        </tr>
                        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                                <td align="center" id="id"><?php echo ($vo["id"]); ?></td>
                                <td align="center"><?php echo ($vo["title"]); ?></td>
                                <td align="center"><?php echo ($vo["author"]); ?></td>
                                <td ><span style="text-align: left"><?php echo ($vo["content"]); ?></span></td>
                                <td align="center"><?php echo ($vo["browsenumber"]); ?></td>
                                <td align="center"><span><input type="submit" value="删除" onclick="del(<?php echo ($vo["id"]); ?>)"></span>&nbsp;<span><input type="submit" value="编辑" onclick="edit(<?php echo ($vo["id"]); ?>)"></span></td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </table>
                <div style="font-size: 15px;margin-top: 20px">
                    <?php echo ($page); ?>
                    <br />
                    <br />
                    <a href="<?php echo U('Volunteer/add','tag=advice');?>"><h2>添加一条 良策 记录</h2></a>
                </div>
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