<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>品牌</title>
    <link rel="stylesheet" type="text/css" href="/capcc0624/Public/Home/Css/7brand.css" />
    <link rel="stylesheet" type="text/css" href="/capcc0624/Public/Home/Css/1.1home_font.css" />
    <script type="text/javascript" src="/capcc0624/Public/Home/Js/head_bottom.js"></script>
    <script type="text/javascript" src="/capcc0624/Public/Home/Js/show_pictures_6.js"></script>
    <script type="text/javascript" src="/capcc0624/Public/Home/Js/resize_picture.js"></script>
</head>

<center><body >

<div id="body_up_bg1"></div>
<div id="body_up_bg2"><img src="/capcc0624/Public/Home/Images/body_up.png" width="1200" height="50" /></div>
<div id="body">
    <div id="body_up_left">&nbsp;&nbsp;&nbsp; &nbsp; <span class="title1">运河品牌</span><br />
        <img src="/capcc0624/Public/Home/Images/h1-color-lump.jpg" width="320" height="10" /><br />
        <br />
        <p style="text-indent:2em;">
            <span class="title2">
                <?php echo ($list11[0]['name']); ?>
                </span>
            </p>
        <p clsass="content1" style="margin-bottom:0px;margin-top:6px; content: text-align:justify; text-justify:inter-ideograph; word-wrap:break-word; word-break:break-all; text-indent:2em;">
            <?php echo ($list11[0]['content']); ?>
            <a href="brand/agent/?newsid=<?php echo ($list11[0]['newsid']); ?>"><span class="detail">...详细&gt;&gt;</span></a>
        </p>
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
                <a id="big_img_a" href="brand/culture/?newsid=<?php echo ($list21[0]['newsid']); ?>">
                    <img id="big_img" src="/capcc0624/Public<?php echo ($list21[0]['picture']); ?>" width="700" height="310" onload="AutoResizeImage(700,310,this)" style="margin:50px auto 0 auto;background-color: #99FFFF" />
                </a>
            </div>
        </div>
    <br />
    <div id="home_page_roll" style="float:left; overflow:hidden; height:145px; width:560px; margin-top:10px; margin-left:130px;">
        <div id="home_page_roll_demo">
            <div id="home_page_roll_img_1">
                <?php $__FOR_START_11434__=1;$__FOR_END_11434__=6;for($i=$__FOR_START_11434__;$i < $__FOR_END_11434__;$i+=1){ if(is_array($list22)): $i = 0; $__LIST__ = $list22;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><span id="small_img_<?php echo ($i); ?>" style="display:inline-block;width:180px;height:135px;background-color: #E4E4E4;">
                             <a id="small_a_img_<?php echo ($i); ?>" href="brand/?newsid=<?php echo ($vo["newsid"]); ?>">
                                 <img id="small_real_img_<?php echo ($i); ?>" src="/capcc0624/Public<?php echo ($vo["picture"]); ?>" width="180px" height="135px" onmouseover="setimg($i);" onload="AutoResizeImage(180,135,this);">
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
<div id="body_center_left" style="float: left; margin-top: 30px; margin-left: 70px; width: 700px; height: 1440px; position: relative;">
    <div class="body_center_left_up_divtwo" id="body_center_left_up1"></div>
    <div class="body_center_left_up_divthree" id="body_center_left_up2" style="float: left; width: 694px; margin-top: 33px; height: 48px; line-height: 31px; text-align: left;">&nbsp; 中华老字号<br />
        <hr noshade="noshade" color="#D4D4D4"/>
    </div>
    <div class="body_center_left_bottomone" id="body_center_left_up3">
        <div class="body_center_left_bottomtwo" id="one">
            <img src="/capcc0624/Public<?php echo ($list23[0]['picture']); ?>" name="image1" width="340px" height="255px" id="image" style="background-color: #EFEEE7;" />
            <p style="margin-bottom: 0px; margin-top: 6px; ">
                <?php echo ($list23[0]['content']); ?>
                <a href="brand/culture/?newsid=<?php echo ($list23[0]['newsid']); ?>"><span class="detail">...详细&gt;&gt;</span></a>
            </p>
        </div>
        <div id=2 class="item1" style="width: 350px; height: 375px; float: left; margin-top: 9px;">
            <hr align="right" width="330" size="9" color="#ec6f9b"/>
            <table width="330" border="0" align="right" cellpadding="0" cellspacing="0">
                <ul>
                    <span class="item1">
                       <?php if(is_array($list24)): $i = 0; $__LIST__ = $list24;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                           <a href="brand/culture/?newsid=<?php echo ($vo["newsid"]); ?>">
                               <?php echo ($vo["name"]); ?>
                           </a>
                           </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </span>
                </ul>
                <tr>
                    <td height="30" class="gengduo"><a href="brand/time_honored.php" style="color:inherit;">....................更多&gt;&gt;</a></td>
                </tr>
            </table>
            <br />
        </div>
    </div>
    <div class="body_center_left_up_divone" id="body_center_left_center1_up">
        <div class="body_center_left_up_divthree" id="body_center_left_up5" style="float: left; width: 694px; margin-top: 33px; height: 48px; line-height: 31px; text-align: left;">&nbsp; 产品设计<br />
            <hr noshade="noshade"  color="#D4D4D4"/>
        </div>
        <div class="body_center_left_up_divtwo" id="body_center_left_up4"></div>
    </div>
    <div class="body_center_left_bottomone" id="body_center_left_center1_bottom">
        <div class="body_center_left_bottomtwo" id="one">
            <img src="/capcc0624/Public/Home/Images/标识符号 (1).jpg" name=\"image1\" width=\"340px\" height=\"255px\" id=\"image\" style=\"background-color: #EFEEE7;\" />
            <p style=\"margin-bottom: 0px; margin-top: 6px; \">

        </div>
        <div id="22" class="item1" style="width: 350px; height: 375px; float: left; margin-top: 9px;">
            <hr align="right" width="330" size="9" color="#f5b08f"/>
            <table width="330" border="0" align="right" cellpadding="0" cellspacing="0">
                <tr>
                    <td>

                    </td>
                </tr>
                <tr>
                    <td class="gengduo">筹备建设中........</td>
                </tr>
            </table>
            <br />
        </div>
    </div>
    <div class="body_center_left_up_divone" id="body_center_left_center2_up">
        <div class="body_center_left_up_divtwo" id="body_center_left_up6"></div>
        <div class="body_center_left_up_divthree" id="body_center_left_up7" style="float: left; width: 694px; margin-top: 33px; height: 48px; line-height: 31px; text-align: left;">&nbsp; 广告传播<br />
            <hr noshade="noshade"  color="#D4D4D4" />
        </div>
    </div>
    <div class="body_center_left_bottomone" id="body_center_left_center2_bottom">
        <div class="body_center_left_bottomtwo" id="one">
            <img src="/capcc0624/Public/Home/Images/标识符号 (1).jpg" name="image1" width="340px" height="255" id="image" style="background-color: #EFEEE7" />
            <p style="margin-bottom: 0px; margin-top: 6px;">
                <?php echo ($list31[0]['content']); ?>
                <a href="brand/advertisement_spread/?newsid=<?php echo ($list31[0]['newsid']); ?>"><span class="detail">...详细&gt;&gt;</span></a>
            </p>
          </div>
        <div id="222" class="item1" style="width: 350px; height: 350px; float: left; margin-top: 9px;">
            <hr align="right" width="330" size="9" color="#019ca0"/>
            <table width="330" border="0" align="right" cellpadding="0" cellspacing="0">
                <ul>
                    <?php if(is_array($list32)): $i = 0; $__LIST__ = $list32;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                        <span class="item1">
                            <a href="inscription/concept/?newsid=<?php echo ($vo["newsid"]); ?>">
                                <?php echo ($vo["name"]); ?>
                            </a>
                        </span>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
                <tr>
                    <td class="gengduo"><a href="brand/advertisement_spread.php" style="color:inherit;">....................更多&gt;&gt;</a></td>
                </tr>
            </table>
            <br />
        </div>
    </div>
    <div class="body_center_left_up_divone" id="body_center_left_center2_up">
        <div class="body_center_left_up_divtwo" id="body_center_left_up6"></div>
        <div class="body_center_left_up_divthree" id="body_center_left_up7" style="float: left; width: 694px; margin-top: 33px; height: 48px; line-height: 31px; text-align: left;">&nbsp; 品牌代理<br />
            <hr noshade="noshade"  color="#D4D4D4" />
        </div>
    </div>
    <div class="body_center_left_bottomone" id="body_center_left_center1_bottom">
        <div class="body_center_left_bottomtwo" id="one">
            <img src="/capcc0624/Public<?php echo ($list11[0]['picture']); ?>" name="image1" width="340px" height="255" id="image" style="background-color: #EFEEE7;" />
            <p style="margin-bottom: 0px; margin-top: 6px; ">
                <?php echo ($list11[0]['content']); ?>
                <a href="brand/agent/?newsid=<?php echo ($list11[0]['newsid']); ?>"><span class="detail">...详细&gt;&gt;</span></a>
            </p>
        </div>
        <div id="22" class="item1" style="width: 350px; height: 375px; float: left; margin-top: 9px;">
            <hr align="right" width="330" size="9" color="#3e4299"/>
            <table width="330" border="0" align="right" cellpadding="0" cellspacing="0">
                <ul>
                    <?php if(is_array($list12)): $i = 0; $__LIST__ = $list12;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                            <a href="brand/culture/?newsid=<?php echo ($vo["newsid"]); ?>">
                                <?php echo ($vo["name"]); ?>
                            </a>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
                <tr>
                    <td class="gengduo"><a href="brand/agent.php" style="color:inherit;">....................更多&gt;&gt;</a></td>
                </tr>
            </table>
            <br />
        </div>
    </div>
</div>
<div id="body_center_right">
    <div id="body_center_right_up">
        <div id="body_center_right_up_one" style="width:305px;">
            <div id="one"><br />
            </div>
            <table width="293px;" height="30px" border="0" align="right" cellpadding="0" cellspacing="0" style="">
                <tr>
                    <td valign="middle">&nbsp;<span class="title4"><br />
                <br />
                <br />
                品牌连锁</span></td>
                    <td align="center" valign="bottom"><span class="gengduo"><br />
                                <a href="brand/chain.php" style="color:inherit;">更多&gt;&gt;</a></span></td>
                </tr>
            </table>
            <div id="three" style="width: 290px; float: left; margin-top: 5px;">
                <hr color="#D4D4D4" />
            </div>
        </div>
        <table width="300" height="430" border="0" cellpadding="0" cellspacing="0" style="float: left; width: 282px; margin-top: 12px;">
            <tr>
                <td height="143" colspan="2" valign="top" class="item1">
                    <span>此栏目正在筹备，敬请期待</span>

                </td>
            </tr>
            <tr>
                <td width="143" height="104" align="left"><img src="/capcc0624/Public/Home/Images/标识符号 (1).jpg" alt="" name="" width="138" height="97" style="background-color: #EFEEE7; margin-top: 4px;" /></td>
                <td width="139" align="right"><img src="/capcc0624/Public/Home/Images/标识符号 (1).jpg" alt="" name="" width="138" height="97" style="background-color: #EFEEE7; margin-top: 4px;" /></td>
            </tr>
            <tr>
                <td height="102" align="left"><img name="" src="/capcc0624/Public/Home/Images/标识符号 (1).jpg" width="138" height="97" alt="" style="background-color: #EFEEE7" /></td>
                <td align="right"><img name="" src="/capcc0624/Public/Home/Images/标识符号 (1).jpg" width="138" height="97" alt="" style="background-color: #EFEEE7" /></td>
            </tr>
            <tr>
                <td colspan="2"><p style="margin-bottom: 0px; margin-top: 6px; font-family: '宋体'; font-size: 16px;">筹备中......<span class="zise"><a href="http://www.iheima.com/" class="zise">.</a></span><a href="#"><span class="detail">..详细&gt;&gt;</span></a></p></td>
            </tr>
        </table>
    </div>
    <div id="body_center_right_bottom">
        <div id="body_center_right_bottom_one" style="width: 305px;">
            <div id="one" style="width: 10px; background-color: #22AFE7; height: 55px; float: left; z-index:1; position:absolute;"><br />
            </div>
            <table width="293px;" height="30px" border="0" align="right" cellpadding="0" cellspacing="0" style="">
                <tr>
                    <td valign="middle">&nbsp;<span class="title4"><br />
                <br />
                <br />
                品牌定制</span></td>
                    <td align="center" valign="bottom"><span class="gengduo"><br />
			<a href="brand/custom_made.php" style="color:inherit;">更多&gt;&gt;</a>
            </span></td>
                </tr>
            </table>
            <div id="three" style="width: 290px; float: left; margin-top: 5px;">
                <hr color="#D4D4D4" />
            </div>
        </div>
        <table width="300" height="491" border="0" cellpadding="0" cellspacing="0" style="float: left; width: 282px; margin-top: 12px;">
            <tr>
                <td height="198" colspan="2" valign="top" class="item1">
                    <?php if(is_array($list41)): $i = 0; $__LIST__ = $list41;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="brand/custom_made/?newsid=<?php echo ($vo["newsid"]); ?>"><?php echo ($vo["name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
                </td>
            </tr>
            <tr>
                <td height="204" colspan="2" align="left" valign="bottom">
                    <img src="/capcc0624/Public<?php echo ($list42[0]['picture']); ?>"  width="280" height="210" />
                </td>
            </tr>
            <tr>
                <td colspan="2"><p style="margin-bottom: 0px; margin-top: 6px; font-family: '宋体'; font-size: 16px;">
                    <?php echo ($list42[0]['content']); ?>
                        <span class="detail">
                            <a href="brand/custom_made/?newsid= <?php echo ($list42[0]['newsid']); ?>" style="color:inherit;">..详细&gt;&gt;</a>
                        </span>
                </td>
            </tr>
        </table>
    </div>
</div>
<div style="font: 0px/0px sans-serif;clear: both;display: block"></div>
</div>

</body></center>
</html>