<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>申遗</title>
    <link rel="stylesheet" type="text/css" href="/capcc0624/Public/Home/Css/4inscription.css" />
    <link rel="stylesheet" type="text/css" href="/capcc0624/Public/Home/Css/1.1home_font.css" />
    <script type="text/javascript" src="/capcc0624/Public/Home/Js/head_bottom.js"></script>
    <script type="text/javascript" src="/capcc0624/Public/Home/Js/show_pictures_14.js"></script>
    <script type="text/javascript" src="/capcc0624/Public/Home/Js/resize_picture.js"></script>
</head>

<center><body >

<div id="body_up_bg1"></div>
<div id="body_up_bg2"><img src="/capcc0624/Public/Home/Images/body_up.png" width="1200" height="50" /></div>
<div id="body">
    <div id="body_up_left">&nbsp;&nbsp;&nbsp; &nbsp; <span class="title1">运河申遗</span><br />
        <img src="/capcc0624/Public/Home/Images/h1-color-lump.jpg" width="320" height="10" /><br />
        <div id="body_up_left_bottom">
            <table width="310" border="0" cellspacing="0" cellpadding="0" style="margin-top: 20px; margin-left: 8px;">
                <tr>
                    <td width="318" height="31" valign="middle" class="title2">
                     <?php echo ($list11[0]['title']); ?>
                    </td>
                </tr>
                <tr>
                    <td height="75" valign="top">
                        <p>
                            <?php echo ($list11[0]['content']); ?>
			                <a href="inscription/special/?newsid=<?php echo ($list11[0]['newsid']); ?>" class="detail">...详细&gt;&gt;</a>
                        </p>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div id="body_up_right">
        <style type="text/css">
            #home_page_roll {
                background: #FFF;
                overflow:hidden;
                border: 0px dashed #CCC;
                width: 800px;
            }
            #home_page_roll img {
                border: 0px solid #F2F2F2;
            }
            #home_page_roll_demo {
                float: left;
                width: 800%;
            }
            #home_page_roll_img_1 {
                float: left;
            }
            #home_page_roll_img_2 {
                float: left;
            }
        </style>
        <div id="one">

		<div style="text-align:center;width:700px;height:410px;background-color: #E4E4E4;">
            <a id="big_img_a" href="inscription/history/?newsid=<?php echo ($list21[0]['newsid']); ?>">
                <img id="big_img" src="/capcc0624/Public<?php echo ($list21[0]['picture']); ?>" alt="" width="600" height="410" style="background-color: #99FFFF;" />
            </a>
        </div>
    </div>
    <br />
    <div id="home_page_roll" style="float:left; overflow:hidden; height:145px; width:560px; margin-top:10px; margin-left:130px;">
        <div id="home_page_roll_demo">
            <div id="home_page_roll_img_1">
                <?php $__FOR_START_21653__=1;$__FOR_END_21653__=7;for($i=$__FOR_START_21653__;$i < $__FOR_END_21653__;$i+=1){ if(is_array($list22)): $i = 0; $__LIST__ = $list22;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><span id="small_img_<?php echo ($i); ?>">
                             <a id="small_a_img_<?php echo ($i); ?>" href="news/active/?newsid=<?php echo ($vo["newsid"]); ?>">
                                 <img id="small_real_img_<?php echo ($i); ?>" src="/capcc0624/Public<?php echo ($vo["picture"]); ?>" width="180px" height="135px" />
                             </a>
                          </span><?php endforeach; endif; else: echo "" ;endif; } ?>
            </div>
            <div id="home_page_roll_img_2" style="visibility:hidden; width:900px;">
            </div>
        </div>
    </div>
    <div id="button2" style="width: 35px; height: 35px; float: left; margin-left:-578px; margin-top: 60px;">
        <input onClick="right_roll_img()" name="" type="image" src="/capcc0624/Public/Home/Images/botton-left.png" style="width:35px; height:35px;" />
    </div>
    <div id="button1" style="width: 35px; height: 35px; float: left; margin-left:-20px; margin-top: 60px;">
        <input onClick="left_roll_img()" name="" type="image" src="/capcc0624/Public/Home/Images/botton-right.png" style="width:35px; height:35px;" />
    </div>
    <br />
    <br />
    <br />
    <br />
    <br />
</div>
<script>
    var speed_1=50;
    var tab=document.getElementById("home_page_roll");
    var tab1=document.getElementById("home_page_roll_img_1");
    var tab2=document.getElementById("home_page_roll_img_2");
    function Marquee_1(){
        if(tab2.offsetWidth-tab.scrollLeft<=0)
            tab.scrollLeft-=tab1.offsetWidth
        else{
            tab.scrollLeft++;
        }
    }
    var MyMar_1=setInterval(Marquee_1,speed_1);
    tab.onmouseover=function() {clearInterval(MyMar_1)};
    tab.onmouseout=function() {MyMar_1=setInterval(Marquee_1,speed_1)};
    button2.onmouseover=function() {clearInterval(MyMar_1);}
    button2.onmouseout=function() {MyMar_1=setInterval(Marquee_1,speed_1);}
    button1.onmouseover=function() {clearInterval(MyMar_1);}
    button1.onmouseout=function() {MyMar_1=setInterval(Marquee_1,speed_1);}
</script>
<div id="body_center_left" style="float: left; margin-top: 30px; margin-left: 70px; width: 700px; position: relative;">
    <div class="body_center_left_up_divtwo" id="body_center_left_up1"></div>
    <div class="body_center_left_up_divthree" id="body_center_left_up2" style="float: left; width: 694px; margin-top: 33px; height: 48px; line-height: 31px; text-align: left;">&nbsp; 世界遗产组织介绍<br />
        <hr noshade="noshade" color="#9d4f1e"/>
    </div>
    <div class="body_center_left_bottomone" id="body_center_left_up3">
        <div class="body_center_left_bottomtwo" id="one"><a href="inscription/organization/?newsid=3"><img src="/capcc0624/Public/Home/Images/1：联合国教科文组织标志.jpg" width="340px" height="255px" /></a></div>
        <div id=2 class="item1" style="width: 350px; float: left; margin-top: 9px; height: 298px;">
            <hr align="right" width="330" size="9" color="#5caed3"/>
            <table width="330" border="0" align="right" cellpadding="0" cellspacing="0">
                <tr>
                    <td class="item1">
                        <ul>
                             <?php if(is_array($list31)): $i = 0; $__LIST__ = $list31;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                                    <a href="inscription/organization/?newsid=<?php echo ($vo["newsid"]); ?>"><?php echo ($vo["title"]); ?></a>
                                </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                        <div style="text-align:right;">
                            <a href="inscription/organization.php" class="detail">...更多&gt;&gt;</a>
                        </div>
                    </td>
                </tr>
            </table>
            <br />
        </div>
    </div>
    <div class="body_center_left_up_divone" id="body_center_left_center1_up">
        <div class="body_center_left_up_divthree" id="body_center_left_up5" style="float: left; width: 694px; margin-top: 33px; height: 48px; line-height: 31px; text-align: left;">&nbsp; 世界遗产组织公约<br />
            <hr noshade="noshade"  color="#9d4f1e"/>
        </div>
        <div class="body_center_left_up_divtwo" id="body_center_left_up4"></div>
    </div>
    <div class="body_center_left_bottomone" id="body_center_left_center1_bottom">
        <div class="body_center_left_bottomtwo" id="one">
          <a href="inscription/convention/?newsid=<?php echo ($list41[0]['newsid']); ?>">
             <img src="/capcc0624/Public<?php echo ($list41[0]['picture']); ?>" width="340px" height="255px"/>
          </a>
        </div>
        <div id="22" class="item1" style="width: 350px; height: 298px; float: left; margin-top: 9px;">
            <hr align="right" width="330" size="9" color="#e7b786"/>
            <table width="330" border="0" align="right" cellpadding="0" cellspacing="0">
                <tr>
                    <td>
                        <p>
                            <?php echo ($list41[0]['content']); ?>
                           <a href="inscription/convention/?newsid=<?php echo ($data41[0]['newsid']); ?>">
                                <span class="detail">...详细&gt;&gt;</span>
                            </a>
                       </p>
                    </td>
                </tr>
            </table>
            <br />
        </div>
    </div>
    <div class="body_center_left_up_divone" id="body_center_left_center2_up">
        <div class="body_center_left_up_divtwo" id="body_center_left_up6"></div>
        <div class="body_center_left_up_divthree" id="body_center_left_up7" style="float: left; width: 694px; margin-top: 33px; height: 48px; line-height: 31px; text-align: left;">&nbsp; 中国世界遗产申遗历史<br />
            <hr noshade="noshade"  color="#9d4f1e" />
        </div>
    </div>
    <div class="body_center_left_bottomone" id="body_center_left_center2_bottom">
        <div class="body_center_left_bottomtwo" id="one"><img src="/capcc0624/Public/Home/Images/3：28届联合国教科文组织世界遗产委员会会议.jpg" alt="" width="340px" height="255px" /><br />
            <br />
        </div>
        <div id="222" class="item1" style="width: 350px; height: 298px; float: left; margin-top: 9px;">
            <hr align="right" width="330" size="9" color="#5caed3"/>
            <table width="330" border="0" align="right" cellpadding="0" cellspacing="0">
                <tr>
                    <td><p>自1985年12月12日加入《保护世界文化和自然遗产公约》成为缔约方后，中国开始了世界遗产的申报工作。至2013年6月，中国已有45处自然文化遗址和自然景观列入《世界遗产名录》。<a href="inscription/project.php"><span class="detail">...详细&gt;&gt;</span></a></p></td>
                </tr>
            </table>
            <br />
        </div>
    </div>
</div>
<div id="body_center_right">
    <div class="title3" id="body_center_right_up">概念构成
        <div id="three2" style="width: 99%; float: left; margin-top: -3px;">
            <hr color="#6699cc" />
        </div>
        <ul>
            <?php if(is_array($list51)): $i = 0; $__LIST__ = $list51;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                        <span class="item1">
                            <a href="inscription/concept/?newsid=<?php echo ($vo["newsid"]); ?>">
                                <?php echo ($vo["title"]); ?>
                            </a>
                            </span>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
    <div class="title3" id="body_center_rignt_center1">遗产研究机构
        <div id="three2" style="width: 99%; float: left; margin-top: -3px;">
            <hr color="#6699cc" />
        </div>
        <ul>
            <?php if(is_array($list61)): $i = 0; $__LIST__ = $list61;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                        <span class="item1" style="border:1 solid #000;">
                            <a href="inscription/concept/?newsid=<?php echo ($vo["newsid"]); ?>">
                                <?php echo ($vo["title"]); ?>
                            </a>
                            </span>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
    <div class="title3" id="body_center_rignt_center2">申遗的主要媒体介绍
        <div id="three2" style="width: 99%; float: left; margin-top: -3px;">
            <hr color="#6699cc" />
        </div>
        <ul>
            <?php if(is_array($list71)): $i = 0; $__LIST__ = $list71;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                        <span class="item1" style="border:1 solid #000;">
                            <a href="inscription/concept/?newsid=<?php echo ($vo["newsid"]); ?>">
                                <?php echo ($vo["title"]); ?>
                            </a>
                            </span>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
    <div class="title3" id="body_center_rignt_bottom" >申遗专题
        <div id="three2" style="width: 99%; float: left; margin-top: -3px;">
            <hr color="#6699cc" />
        </div>
        <ul>
            <?php if(is_array($list12)): $i = 0; $__LIST__ = $list12;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li >
                        <span class="item1" style="border:1 solid #000;">
                            <a href="inscription/concept/?newsid=<?php echo ($vo["newsid"]); ?>">
                                <?php echo ($vo["title"]); ?>
                            </a>
                            </span>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</div>
<div id="body_bottom" style="float: left; width: 1070px; margin-left: 70px;">
    <div id="one">
        <div class="body_center_left_up_divtwo" id="body_center_left_up6"></div>
        <div class="body_center_left_up_divtwo" id="body_center_left_up8"></div>
        <div class="body_center_left_up_divtwo" id="body_center_left_up9"></div>
        <div class="body_center_left_up_divthree" id="body_center_left_up7" style="float: left; width: 1055px; margin-top: 33px; height: 48px; line-height: 31px; text-align: left;">&nbsp; 中国大运河联合申遗大事记<br />
            <hr noshade="noshade"  color="#9d4f1e" />
        </div>
    </div>
    <div id="body_center_left_center1_bottom">
        <div id="two">
            <img src="/capcc0624/Public/Home/Images/京杭大运河.jpg" alt="" name="image1" width="680" height="380" id="image2" style="background-color: #EFEEE7;" />
            <p style="margin-bottom: 0px; margin-top: 6px; ">开掘于春秋、完成于隋代、畅通于唐宋、取直于元代、繁荣于明清的京杭大运河，在贯穿整个中华文明史的同时，更贯通了南北的海河、黄河、淮河、长江、钱塘江五大水系<a href="inscription/union.php"><span class="detail">..详细&gt;&gt;</span></a></p>
        </div>
        <div id="three" class="item1" style="width: 360px; float: left; margin-top: 9px; margin-left: 10px;">
            <hr align="right" width="330" size="9" color="#7c7891"/>
            <ul>
                <?php if(is_array($list81)): $i = 0; $__LIST__ = $list81;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                        <span class="item1">
                            <a href="inscription/concept/?newsid=<?php echo ($vo["newsid"]); ?>">
                                <?php echo ($vo["title"]); ?>
                            </a>
                        </span>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    </div>
</div>
<div style="font: 0px/0px sans-serif;clear: both;display: block"></div>
</body></center>
</html>