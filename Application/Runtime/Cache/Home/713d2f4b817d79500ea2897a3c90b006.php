<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>城市</title>
    <link rel="stylesheet" type="text/css" href="/capcc0624/Public/Home/Css/3city.css" />
    <link rel="stylesheet" type="text/css" href="/capcc0624/Public/Home/Css/1.1home_img_roll.css" />
    <script type="text/javascript" src="/capcc0624/Public/Home/Js/show_pictures.js"></script>
    <script type="text/javascript" src="/capcc0624/Public/Home/Js/resize_picture.js"></script>
    <script type="text/javascript" src="/capcc0624/Public/Home/Js/show_up_roll_pictures.js"></script>
</head>

<center><body >
<div id="body_up_bg1"></div>
<div id="body_up_bg2"><img src="/capcc0624/Public/Home/Images/body_up.png" width="1200" height="50" /></div>
<div id="body">
  <div id="body_up_left">&nbsp;&nbsp;&nbsp; &nbsp; <span class="title1">运河城市</span><br />
    <img src="/capcc0624/Public/Home/Images/h1-color-lump.jpg" width="320" height="10" /><br />
    <br />
    <br />
    <br />
    <p style="margin-bottom:0px;text-indent:2em;">
		<strong> <?php echo ($list11[0]["title"]); ?> </strong>
	</p>
    <p style="margin-bottom:0px;margin-top:6px; content: text-align:justify; text-justify:inter-ideograph; word-wrap:break-word; word-break:break-all; text-indent:2em;">
		<?php echo ($list11[0]["content"]); ?>
		<a href="city/canal/?newsid=<?php echo ($list11[0]["newsid"]); ?>" ><span class="detail">...详细&gt;&gt;</span></a>
	</p>
  </div>
  <div id="body_up_right">
	<div id="one">
        <div style="text-align:center;width:700px;height:410px;background-color: #E4E4E4;">
            <a id="big_img_a" href="city/world/?newsid=<?php echo ($list21[0]["newsid"]); ?>">
                <img id="big_img" src="/capcc0624/Public<?php echo ($list21[0]["picture"]); ?>" alt="" width="600" height="410" style="background-color: #99FFFF" />
		    </a>
		</div>
	</div>
    <br />
    <div id="home_page_roll" style="float:left; overflow:hidden; height:145px; width:560px; margin-top:10px; margin-left:130px;">
    <div id="home_page_roll_demo">
    <div id="home_page_roll_img_1">
        <?php $__FOR_START_10599__=1;$__FOR_END_10599__=7;for($i=$__FOR_START_10599__;$i < $__FOR_END_10599__;$i+=1){ if(is_array($list22)): $i = 0; $__LIST__ = $list22;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><span id="small_img_<?php echo ($i); ?>">
                            <a id="small_a_img_<?php echo ($i); ?>"  href="/capcc0624/index.php/Home/News/activities?newsid=<?php echo ($vo["newsid"]); ?>">
                                <img id="small_real_img_<?php echo ($i); ?>" src="/capcc0624/Public/<?php echo ($vo["picture"]); ?>" width="180" height="135" onmouseover="setimg($i);"/>
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
  <div id="body_center" style="margin-left: 70px; margin-top: 30px; float: left; width: 1070px;">
  <div class="body_center_left_up_divtwo" id="body_center_up1"></div>
    <div class="body_center_left_up_divthree" id="body_center_up2" style="float: left; width: 1070px; margin-top: 33px; height: 48px; line-height: 31px; text-align: left; color: #4CACE2;">&nbsp; 城市视窗<br />
      <hr noshade="noshade" color="#A8ACA8"/>
    </div>
    <div id="body_center_bottom1" style="float: left; width: 351px; height: 459px; background-image: url(/capcc0624/Public/Home/Images/body_center_1bg.jpg); margin-top: 10px;">
      <div class="title3" id="1" style="margin-top: 15px; text-align: left;">
        <table width="326" border="0" align="left" cellpadding="0" cellspacing="0">
          <tr>
            <td width="141"><span class="title3" style="margin-top: 15px; text-align: left; margin-left: 27px;">重点聚焦</span></td>
            <td width="194" align="right" valign="bottom"><span class="gengduo">更多&gt;&gt;</span></td>
          </tr>
        </table>
      </div>
      <div id="up_roll_picture" style="float: left; width: 270px; margin-left: 42px;">
      <div id="up_roll" onClick="down_roll_img()" class="triangle" style="height: 8px; background-color: #E6E6E6; text-align:center; margin-top:20px;">▲</div>
      <div id="activity_window" style="width: 270px; height:340px; overflow:hidden; margin-top:10px;">
      <table>
      <tr>
      <td id="gpic1">
      <table style="float: left; width: 270px;">
          <?php $__FOR_START_13076__=1;$__FOR_END_13076__=8;for($i=$__FOR_START_13076__;$i < $__FOR_END_13076__;$i+=1){ ?><tr>
                  <td height="88" valign="bottom"><img id="activity_img_<?php echo ($i); ?>" src="/capcc0624/Public/Home/Images/images_show/1_<?php echo ($i); ?>.jpg" width="300" height="80" alt="" style="background-color: #EFEEE7" /></td>
              </tr><?php } ?>
      </table>
      </td>
      </tr>
      <tr><td id="gpic2" height="500px"></td>
      </tr>
      </table>
      </div>
      <div id="down_roll" onClick="up_roll_img()" class="triangle" style="height: 8px; background-color: #E6E6E6; text-align:center; margin-top:10px;">▼</div>
	<script>
	var speed=80
	//gpic2.innerHTML=gpic1.innerHTML
	function Marquee(){
	if(gpic2.offsetHeight-activity_window.scrollTop<=0)
	activity_window.scrollTop-=gpic1.offsetHeight
	else{
	activity_window.scrollTop++
	}
	}
	var MyMar=setInterval(Marquee,speed)
	up_roll_picture.onmouseover=function() {clearInterval(MyMar)}
	up_roll_picture.onmouseout=function() {MyMar=setInterval(Marquee,speed)}
	</script>
      </div>
    </div>
    <div class="body_center_left_bottomone" id="body_center_bottom3_up3">
      <div class="body_center_left_bottomtwo" id="body_center_bottom2"><img name="" src="/capcc0624/Public/Home/Images/标识符号 (1).jpg" width="340" height="255" alt="" style="background-color: #EFEEE7" />
        <p style="margin-bottom: 0px; margin-top: 6px; ">筹备中....<span class="item1">.................</span><span class="zise"></span><a href="#"><span class="detail">..详细&gt;&gt;</span></a><a href="http://www.iheima.com/"><span class="zise"></span></a></p>
      </div>
      <div id=2 class="item1" style="width: 350px; float: left; margin-top: 9px;">
        <hr align="right" width="330" size="9"  color="#004098"/>
        <table width="330" border="0" align="right" cellpadding="0" cellspacing="0">
          <tr>
            <td><span class="item1">·筹备建设中，敬请期待<br />

            </span></td>
          </tr>
          <tr>
            <td align="right"><span class="gengduo">....................更多&gt;&gt;</span></td>
          </tr>
        </table>
        <br />
      </div>
    </div>
  </div>
  <div id="body_center_left" style="float: left; margin-top: 30px; margin-left: 70px; width: 700px; height: 966px; position: relative;">
    <div class="body_center_left_up_divone" id="body_center_left_center1_up">
      <div class="body_center_left_up_divthree" id="body_center_left_up5" style="float: left; width: 694px; margin-top: 33px; height: 48px; line-height: 31px; text-align: left; color: #4CACE2;">&nbsp; 运河城市<br />
        <hr noshade="noshade"  color="#A8ACA8"/>
      </div>
      <div class="body_center_left_up_divtwo" id="body_center_left_up4"></div>
    </div>
    <div class="body_center_left_bottomone" id="body_center_left_center1_bottom">
      <div class="body_center_left_bottomtwo" id="one">
        <img src="/capcc0624/Public<?php echo ($list12[0]['pictures']); ?>" width="340px" height="255px" />
          <p style="margin-bottom: 0px; margin-top: 6px;">
              <?php echo ($list12[0]['content']); ?>
              <a href="city/canal/?newsid= <?php echo ($list12[0]['newsid']); ?>">
                  <span class="detail">...详细&gt;&gt;</span>
              </a>
          </p>
      </div>
      <div id="22" class="item1" style="width: 350px; height: 375px; float: left; margin-top: 9px;">
        <hr align="right" width="330" size="9" color="#004098"/>
        <table width="330" border="0" align="right" cellpadding="0" cellspacing="4">
          <tr>
              <!--此处与原版不同  数据改为从数据库中获取-->
                  <?php if(is_array($list31)): $i = 0; $__LIST__ = $list31;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 6 );++$i;?><td>
                          <span class="item1">
                              <a href="city/canal/?newsid=<?php echo ($vo["newsid"]); ?>">
                                  <?php echo ($vo["city"]); ?>
                              </a>
                          </span>
                      </td>
                      <?php if(($mod) == "5"): ?></tr><tr><?php endif; endforeach; endif; else: echo "" ;endif; ?>
          </tr>
        </table>
        <br />
      </div>
    </div>
    <div class="body_center_left_up_divone" id="body_center_left_center2_up">
      <div class="body_center_left_up_divtwo" id="body_center_left_up6"></div>
      <div class="body_center_left_up_divthree" id="body_center_left_up7" style="float: left; width: 694px; margin-top: 33px; height: 48px; line-height: 31px; text-align: left; color: #4CACE2;">&nbsp; 运河世界<br />
        <hr noshade="noshade"  color="#A8ACA8" />
      </div>
    </div>
    <div class="body_center_left_bottomone" id="body_center_left_center2_bottom">
      <div class="body_center_left_bottomtwo" id="one" style="width: 342px; height: 360px; float: left;">
        <img src="/capcc0624/Public<?php echo ($list23[0]['picture']); ?>" width="340px" height="255px" />
          <p style="margin-bottom: 0px; margin-top: 6px;">
              <?php echo ($list23[0]['Content']); ?>
              <a href="city/world/?newsid=<?php echo ($list23[0]['newsid']); ?>">
                  <span class="detail">...详细&gt;&gt;</span>
              </a>
          </p>
      </div>
      <div id="222" class="item1" style="width: 350px; height: 350px; float: left; margin-top: 9px; font-size: 18px;">
        <hr align="right" width="330" size="9" color="#004098"/>
        <table width="330" border="0" align="center" cellpadding="0" cellspacing="2">
          <tr>
            <td width="166">
			<table>
                <?php if(is_array($list24)): $i = 0; $__LIST__ = $list24;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                        <td>
                            <a href="city/world/?newsid=<?php echo ($vo["newsid"]); ?>">
                                <?php echo ($vo["name"]); ?>
                            </a>
                        </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </table></td>
            <td width="164">
            <table>
                <?php if(is_array($list25)): $i = 0; $__LIST__ = $list25;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                        <td>
                            <a href="city/world/?newsid=<?php echo ($vo["newsid"]); ?>">
                                <?php echo ($vo["name"]); ?>
                            </a>
                        </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </table>
            </td>
          </tr>
        </table>
        <div style="text-align:right;">
        <span class="gengduo"><a href="city/world.php" style="color:inherit;">......更多&gt;&gt;</a></span>
        </div>
      </div>
    </div>
  </div>
  <div id="body_center_right">
    <div id="body_center_right_up">
      <div id="body_center_right_up_one" style="width:305px;">
        <div id="one"><br />
    </div>
        <table width="283px;" height="30px" border="0" align="right" cellpadding="0" cellspacing="0" style="">
          <tr>
            <td valign="middle">&nbsp;<span class="title4"><br />
                <br />
                <br />
                城市评价</span></td>
            <td align="center" valign="bottom"><span class="gengduo"><br />
                                更多&gt;&gt;</span></td>
          </tr>
        </table>
        <div id="three" style="width: 290px; float: left; margin-top: 5px;">
          <hr color="#A8ACA8" />
        </div>
        <div class="title3" id="four" style="float: left; width: 300px; margin-top: 16px;">评价</div>
      </div>
      <table width="300" height="320" border="0" cellpadding="0" cellspacing="0" style="float: left; width: 282px; margin-top: 10px;">
        <tr>
          <td height="120" colspan="2" valign="top" class="item1">·筹备建设中，敬请期待<br />
</td>
        </tr>
        <tr>
          <td height="200" colspan="2" align="left" valign="bottom"><img name="" src="/capcc0624/Public/Home/Images/标识符号 (1).jpg" width="284" height="200" alt="" style="background-color: #EFEEE7" /></td>
        </tr>
        </table>
        <div class="title3" id="four" style="float: left; width: 300px; margin-top: 20px;">评价</div>
        <table width="300" height="320" border="0" cellpadding="0" cellspacing="0" style="float: left; width: 282px; margin-top: 10px;">
        <tr>
          <td height="120" colspan="2" valign="top" class="item1">·筹备建设中，敬请期待<br />
</td>
        </tr>
        <tr>
          <td height="200" colspan="2" align="left" valign="bottom"><img name="" src="/capcc0624/Public/Home/Images/标识符号 (1).jpg" width="284" height="200" alt="" style="background-color: #EFEEE7" /></td>
        </tr>
        </table>
  </div>
</div>
  <div style="font: 0px/0px sans-serif;clear: both;display: block"> </div>
</div>
</body></center>
</html>