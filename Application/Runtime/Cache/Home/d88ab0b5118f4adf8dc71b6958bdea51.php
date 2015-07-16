<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>
        <?php echo ($list11[0]['title']); ?>
    </title>
    <link rel="stylesheet" type="text/css" href="/capcc0624/Public/Home/Css/1.1home_font.css" />
    <link rel="stylesheet" type="text/css" href="/capcc0624/Public/Home/Css/2news_active.css" />
    <script type="text/javascript" src="/capcc0624/Public/Home/Js/head_bottom.js"></script>
    <script type="text/javascript" src="/capcc0624/Public/Home/Js/resize_picture.js"></script>
    <script type="text/javascript">
        var a=1;
        var b=2;
    </script>
</head>

<center><body >

<div id="body_up_bg1"></div>
<div id="body_up_bg2"><img src="/capcc0624/Public/Home/Images/body_up.png" width="1200" height="40" /></div>
<div id="body">
    <div id="body_up">
        <?php echo ($list11[0]['title']); ?>
    </div>
    <div id="body_center_left" style="float: left; width: 690px; margin-left: 66px;">
        <div class="updated_date" id="body_center_left_up" style="float: left; text-align: left; width: 100%; margin-top: 9px;">
            <div id="text_updated">
         <?php echo ($list111["date"]); ?>&nbsp;查看：<?php echo ($list11[0]["browsenumber"]); ?>
            </div>
            <div id="text">
                <p class="p1">
                    <img src="/capcc0624/Public<?php echo ($list11[0]['picture']); ?>" width="380px" height="285px"  style='float:left' hspace=30 vspace=30 onload="AutoResizeImage(380,285,this);" />
                </p>
                <?php if(is_array($list112)): $i = 0; $__LIST__ = $list112;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><p class="p1">
                        <?php echo ($vo); ?>
                    </p><?php endforeach; endif; else: echo "" ;endif; ?>
                <br />
                    <?php if(!empty($list11[0]['0_author'])): ?>作者：<?php echo ($list11[0]['0_author']); ?>
                        <br><?php endif; ?>

                    <?php if(!empty($list11[0]['author'])): ?>作者：<?php echo ($list11[0]['author']); ?>
                        <br><?php endif; ?>
                    <?php if(!empty($list11[0]['editor'])): ?>编辑：<?php echo ($list11[0]['editor']); endif; ?>
            </div>
        </div>
        <div style="text-align: left; float: left; margin-top: 15px;  font-size: 18px;">
            <?php if(!empty($list12[0]["newsid"])): ?><span style="line-height:40px">
                上一篇:
                <a href="/capcc0624/index.php/Home/News/activities/newsid/<?php echo ($list12[0]["newsid"]); ?>">
                    <?php echo ($list12[0]["title"]); ?>
                   </a>
            </span><?php endif; ?>
            <br />
            <?php if(!empty($list13[0]["newsid"])): ?><span style="line-height:40px">
                下一篇:
                <a href="/capcc0624/index.php/Home/News/activities/newsid/<?php echo ($list13[0]["newsid"]); ?>">
                    <?php echo ($list13[0]["title"]); ?>
                   </a>
            </span><?php endif; ?>
        </div>
    </div>
    <div id="body_center_right" style="float: left; width: 338px; height: 516px; margin-left: 41px; margin-top: 100px; border:1px solid #000; background-image: url(/capcc0624/Public/Home/Images/body_center_right.jpg);background-size:cover">
        <div id="body_center_right_up" style="margin-top: 75px; text-align: left; margin-left: 27px; width: 305px; height: 170px;"><span class="title4">网络交易</span>
            <hr noshade="noshade" color="#E74291" />
            <table width="100%" height="108" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td width="49%"><img src="/capcc0624/Public/Home/Images/标识符号 (1).jpg" alt="" name="" width="140" height="100" style="background-color: #EFEEE7; margin-top: 4px;" /></td>
                    <td width="51%" valign="top" class="content2"><span class="item1"><span class="item3">·创意市集<br />
            ·会员消费<br />
            ·城市俱乐部</span></span><br /></td>
                </tr>
            </table>
        </div>
        <div id=body_center_right_bottom style="margin-top: 62px; text-align: left; margin-left: 27px; width: 305px; font-family: '黑体';"><span class="title4">广告视窗</span>
            <hr noshade="noshade" color="#E74291" />
            <table width="100%" height="108" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td width="49%" valign="top"><img src="/capcc0624/Public/Home/Images/标识符号 (1).jpg" alt="" name="" width="140" height="100" style="background-color: #EFEEE7; margin-top: 4px;" /></td>
                    <td width="51%" valign="top" class="content2"><span class="item3">·城市视窗<br />
            ·企业视窗<br />
            ·产品视窗<br />
            ·体验视窗<br />
              ·信息发布</span><br /></td>
                </tr>
            </table>
        </div>
    </div>
    <div style="font: 0px/0px sans-serif;clear: both;display: block"> </div>
</div>

</body></center>
</html>