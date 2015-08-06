<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>主页</title>
    <link rel="stylesheet" type="text/css" href="/capcc0624/Public/Home/Css/1.1home_font.css" />
    <link rel="stylesheet" type="text/css" href="/capcc0624/Public/Home/Css/1.1home_img_roll.css" />
    <link rel="stylesheet" type="text/css" href="/capcc0624/Public/Home/Css/1home_page.css" />
    <script type="text/javascript" src="/capcc0624/Public/Home/Js/show_pictures_14.js"></script>
    <script type="text/javascript" src="/capcc0624/Public/Home/Js/show_up_roll_pictures.js"></script>
    <script type="text/javascript" src="/capcc0624/Public/Home/Js/resize_picture.js"></script>
    <script type="text/javascript" src="/capcc0624/Public/Home/Js/marquee1.js"></script>
    <script type="text/javascript" src="/capcc0624/Public/Home/Js/marquee2.js"></script>

</head>

<center><body >

<div id="body_up_bg1"></div>
<div id="body_up_bg2"><img src="/capcc0624/Public/Home/Images/body_up.png" width="1200" height="50" /></div>
<div id="body">
    <div id="body_up">
        <div id="one">
                <div  width="1070" height="415"  style="background-color: #E4E4E4">
                    <!--首页新闻的图片-->
                    <?php if(is_array($list11)): $i = 0; $__LIST__ = $list11;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a id="big_img_a" href="/capcc0624/index.php/Home/News/activities/newsid/<?php echo ($vo["newsid"]); ?>">
                        <img id="big_img" src="/capcc0624/Public/Uploads/<?php echo ($vo["picture"]); ?>" width=800 height=415 style='background-color: #99FFFF' />
                    </a><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>

                <div style="margin-left:800px; margin-top:-150px;">
                    <p>&nbsp;</p><p>&nbsp;</p>
                </div>
                <br />
                <br />
                <br />
        </div>
        <!--滚动图片-->
        <div id="home_page_roll" style="float:left; margin-left:25px; overflow:hidden; width:795px;">
            <div id="home_page_roll_demo">
            <div id="home_page_roll_img_1">
                <!--news_active表中level=4的共18行-->
                 <?php $__FOR_START_24027__=1;$__FOR_END_24027__=18;for($i=$__FOR_START_24027__;$i < $__FOR_END_24027__;$i+=1){ if(is_array($list12)): $i = 0; $__LIST__ = $list12;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><span id="small_img_<?php echo ($i); ?>">
                            <a id="small_a_img_<?php echo ($i); ?>"  href="/capcc0624/index.php/Home/News/activities?newsid=<?php echo ($vo["newsid"]); ?>">
                                <img id="small_real_img_<?php echo ($i); ?>" src="/capcc0624/Public/<?php echo ($vo["picture"]); ?>" width="128" height="159" style="background-color: #99FFFF" />
                            </a>
                        </span><?php endforeach; endif; else: echo "" ;endif; } ?>
            </div>
            <div id="home_page_roll_img_2" style="visibility:hidden; width:1800px;">
            </div>
            </div>
        </div>
        <div id="button2" style="float:left; margin-top:60px; margin-left:-20px;">
            <input onClick="left_roll_img()" name="" type="image" src="/capcc0624/Public/Home/Images/botton-right.png" style="width:35px; height:35px;" />
        </div>
        <div id="button1" style="float:left; margin-top:60px; margin-left:-830px;">
            <input onClick="right_roll_img()" name="" type="image" src="/capcc0624/Public/Home/Images/botton-left.png" style="width:35px; height:35px;" />
        </div>
        <script>
            var speed_1=120;
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
        <div id="body_up_bottom" style="float: left; width: 1070px; margin-top: 20px; font-family: '宋体'; font-size: 18px;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td align="left"></td>
                </tr>
            </table>
            <table width="1070" border="0" cellspacing="6" cellpadding="0" style="margin-top: 4px;">
                <tr>
                    <td width="120" rowspan="2" valign="top" class="title2">运河城市</td>
                    <?php if(is_array($list21)): foreach($list21 as $key=>$vo): ?><!--此处做死了，更改时根据实际更换地名-->
                        <?php if($vo["city"] == '宿州'): ?></tr><tr><?php endif; ?>
                        <td><a  href="/capcc0624/index.php/Home/Main/index?newsid=<?php echo ($vo["newsid"]); ?>"><?php echo ($vo["city"]); ?></a></td><?php endforeach; endif; ?>

            </table>
        </div>
    </div>
    <div id="body_center" style="">
        <div id="body_center_bottom1" style="float: left; width: 356px; height: 592px; background-image: url(/capcc0624/Public/Home/Images/body_center1bg.jpg); margin-top: 10px;">
            <div class="title3" id="1" style="margin-top: 15px; text-align: left;">
                <table width="326" border="0" align="left" cellpadding="0" cellspacing="0">
                    <tr>
                        <td><span class="title4"><span class="title4"><span class="title3" style="margin-top: 15px; text-align: left; margin-left: 27px;"><span class="title4">活动策划（筹备中）</span></span></span></span></td>
                    </tr>
                </table>
            </div>
            <div id="up_roll_picture" style="float: left; width: 302px; margin-left: 29px; margin-top: 13px;">
                <div class="triangle" id="up_roll" onClick="down_roll_img()" style="height: 8px; background-color: #fce4d7; color: #E74291; margin-top:20px;">▲</div>
                <div id="activity_window" style="width: 301px; height:440px; margin-top:10px; overflow:hidden;">
                    <table>
                        <tr>
                            <td id="gpic1">
                                <table border="0" align="center" cellpadding="0" cellspacing="0" style="float: left; width: 300px;">
                                    <!--循环输出滚动的图片-->
                                    <?php $__FOR_START_24696__=1;$__FOR_END_24696__=8;for($i=$__FOR_START_24696__;$i < $__FOR_END_24696__;$i+=1){ ?><tr>
                                            <td height="88" valign="bottom"><img id="activity_img_<?php echo ($i); ?>" src="/capcc0624/Public/Home/Images/images_show/1_<?php echo ($i); ?>.jpg" width="300" height="80" alt="" style="background-color: #EFEEE7" /></td>
                                        </tr><?php } ?>
                                </table>
                            </td>
                        </tr>
                        <tr><td id="gpic2" height="400px"></td></tr>
                    </table>
                </div>
                <div id="down_roll" onClick="up_roll_img()" class="triangle" style="height: 8px; background-color: #fce4d7; color: #E74291; margin-top:10px;">▼</div>
            </div>

        </div>
        <div class="body_center_left_bottomone" id="body_center_bottom3_up3">
            <div class="body_center_left_bottomtwo" id="body_center_bottom2"><span class="title4_1">筹备活动。。。</span><br />
                <div id="boder_left"></div>
                <img src="/capcc0624/Public/Home/Images/标识符号 (1).jpg" width="670" height="425" alt="" style="background-color: #EFEEE7; float: left;" />
                <div id="boder_right"></div>
                <p style="margin-bottom: 0px; margin-top: 6px; ">筹备中..................................................................<span class="detail">..详细&gt;&gt;</span></p>
            </div>
        </div>
    </div>
    <div id="body_center_left" style="float: left; margin-top: 47px; margin-left: 70px; width: 700px;">
        <div id="body_center_left1" style="width: 700px; float: left;">
            <div class="left" id="left"><img src="/capcc0624/Public/Home/Images/综合设计素材 108.jpg" width="340" height="270" alt="" style="background-color: #EFEEE7" /></div>
            <div class="right" id="right">
                <hr align="right" width="330" size="9" color="#cedcc3"/>
                <table width="328" border="0" align="right" cellpadding="0" cellspacing="0" style="margin-top: 5px;">
                    <tr>
                        <td height="43" align="left"><span class="title4">运河新闻</span><br /></td>
                    </tr>
                    <tr>
                        <td height="188" valign="top" class="item1"><a href="news/picture.php" class="item1">·图说新闻</a><br />
                            ·<a href="news/active.php" class="item1">动态新闻</a><br />
                            ·<a href="news/angle.php" class="item1">新闻视线</a><br />
                            ·<a href="news/investigation.php" class="item1">深度调查</a><br /></td>
                    </tr>
                </table>
                <br />
            </div>
        </div>
        <div id="body_center_left2" style="float: left; width:; width: 700px; margin-top: 35px;">
            <div class="left" id="left"><img src="/capcc0624/Public/Home/Images/扬州 普哈丁墓园 丁春晴摄.jpg" width="340" height="270" /></div>
            <div class="right" id="right">
                <hr align="right" width="330" size="9" color="#c1c2b4"/>
                <table width="328" border="0" align="right" cellpadding="0" cellspacing="0" style="margin-top: 5px;">
                    <tr>
                        <td height="43" align="left"><span class="title4">运河城市</span><br /></td>
                    </tr>
                    <tr>
                        <td height="188" valign="top" class="item1"><a href="city/window.php" class="item1">·城市视窗</a><br />
                            ·<a href="city/canal.php" class="item1">运河城市</a><br />
                            ·<a href="city/world.php" class="item1">世界运河</a><br />
                            ·<a href="city/comment.php" class="item1">城市评价</a><br /></td>
                    </tr>
                </table>
                <br />
            </div>
        </div>
        <div id="body_center_left2" style="float: left; width:; width: 700px; margin-top: 35px;">
            <div class="left" id="left"><img src="/capcc0624/Public/Home/Images/申遗.JPG" width="340" height="270" /></div>
            <div class="right" id="right">
                <hr align="right" width="330" size="9" color="#c7c8f4"/>
                <table width="328" border="0" align="right" cellpadding="0" cellspacing="0" style="margin-top: 5px;">
                    <tr>
                        <td height="43" align="left"><span class="title4">运河旅游</span><br /></td>
                    </tr>
                    <tr>
                        <td height="188" valign="top" class="item1">·<a href="travel/ancient_town.php" class="item1">古镇</a><br />
                            ·<a href="travel/lake.php" class="item1">湖泊</a><br />
                            ·<a href="travel/garden.php" class="item1">园林</a><br />
                            ·<a href="travel/academy.php" class="item1">书院</a><br />
                            ·<a href="travel/museum.php" class="item1">博物馆</a><br />
                            ·<a href="travel/site.php" class="item1">遗址</a><br />
                            ·<a href="travel/park.php" class="item1">公园</a><br /></td>
                    </tr>
                </table>
                <br />
            </div>
        </div>
        <div id="body_center_left2" style="float: left; width:; width: 700px; margin-top: 35px;">
            <div class="left" id="left"><img src="/capcc0624/Public/Home/Images/运河五号-09.jpg" width="340" height="270" alt="" style="background-color: #EFEEE7" /><span class="zise"></span></div>
            <div class="right" id="right">
                <hr align="right" width="330" size="9" color="#cedcc3"/>
                <table width="328" border="0" align="right" cellpadding="0" cellspacing="0" style="margin-top: 5px;">
                    <tr>
                        <td height="43" align="left"><span class="title4">学术研究</span><br /></td>
                    </tr>
                    <tr>
                        <td height="188" valign="top" class="item1">·<a href="academic/water_transport.php" class="item1">漕运研究</a><br />
                            ·<a href="academic/work_summary.php" class="item1">论著概要</a><br />
                            ·<a href="academic/viewpoint.php" class="item1">学术观点</a><br />
                            ·<a href="academic/scholar.php" class="item1">运河学者</a><br /></td>
                    </tr>
                </table>
                <br />
            </div>
        </div>
    </div>
    <div id="body_center_right">
        <div id="body_center_right_up">
            <div id="one" style="">
                <table width="100%" border="0" align="right" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="235" valign="bottom" class="title4">艺术典藏</td>
                        <td width="70" align="center" valign="bottom">&nbsp;</td>
                    </tr>
                </table>
            </div>
            <div id="body_center_right_up_one" style="width:305px;"></div>
            <div class="hr_position" id="two" style="">
                <hr color="#f3b5ce" />
            </div>
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="body_center_right_table" style="">
                <tr>
                    <td width="138"><img src="/capcc0624/Public/Home/Images/典藏-陈德忠.jpg" width="138" height="97" /></td>
                    <td width="167" rowspan="2" valign="top"><span class="item1">
			·<a href="classic/legend.php" class="item1">艺术传奇</a><br />
            ·<a href="classic/market.php" class="item1">艺术市场</a><br />
            ·<a href="classic/comment.php" class="item1">艺术评论</a><br />
            ·<a href="classic/present.php" class="item1">当代艺术群</a><br />
            </span></td>
                </tr>
                <tr>
                    <td height="105"><img src="/capcc0624/Public/Home/Images/典藏-陈德忠-(2).jpg" width="138" height="97" /></td>
                </tr>
            </table>
        </div>
        <div id="body_center_right_center1">
            <div id="one" style="">
                <table width="100%" border="0" align="right" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="235" align="left" valign="bottom" class="title4">品牌传播</td>
                        <td width="70" align="center" valign="bottom">&nbsp;</td>
                    </tr>
                </table>
            </div>
            <div id="body_center_right_up_one" style="width:305px;"></div>
            <div class="hr_position" id="two" style="">
                <hr color="#f3b5ce" />
            </div>
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="body_center_right_table" style="">
                <tr>
                    <td width="138"><img src="/capcc0624/Public/Home/Images/品牌绿波美术馆.jpg" width="138" height="97" /></td>
                    <td width="167" rowspan="2" align="left" valign="top" class="item1">·<a href="brand/time_honored.php" class="item1">中华老字号</a><br />
                        ·<a href="brand/design.php" class="item1">产品设计</a><br />
                        ·<a href="brand/advertisement_spread.php" class="item1">广告传播</a><br />
                        ·<a href="brand/agent.php" class="item1">品牌代理</a><br />
                        ·<a href="brand/chain.php" class="item1">品牌连锁</a><br />
                        ·<a href="brand/custom_made.php" class="item1">品牌定制</a></td>
                </tr>
                <tr>
                    <td height="105"><img src="/capcc0624/Public/Home/Images/品牌-绿波.jpg" width="138" height="97" /></td>
                </tr>
            </table>
        </div>
        <div id="body_center_right_center2">
            <div id="one" style="">
                <table width="100%" border="0" align="right" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="235" align="left" valign="bottom" class="title4">网络交易</td>
                        <td width="70" align="center" valign="bottom">&nbsp;</td>
                    </tr>
                </table>
            </div>
            <div id="body_center_right_up_one" style="width:305px;"></div>
            <div class="hr_position" id="two" style="">
                <hr color="#f3b5ce" />
            </div>
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="body_center_right_table" style="">
                <tr>
                    <td width="138"><img name="" src="/capcc0624/Public/Home/Images/标识符号 (1).jpg" width="138" height="97" alt="" style="background-color: #EFEEE7" /></td>
                    <td width="167" align="left" valign="top" class="item1">·创意集市<br />
                        ·会员消费<br />
                        ·城市俱乐部</td>
                </tr>
            </table>
        </div>
        <div id="body_center_right_bottom">
            <div id="one" style="">
                <table width="100%" border="0" align="right" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="235" align="left" valign="bottom" class="title4">广告视窗</td>
                        <td width="70" align="center" valign="bottom"><span class="gengduo"></span></td>
                    </tr>
                </table>
            </div>
            <div id="body_center_right_up_one" style="width:305px;"></div>
            <div class="hr_position" id="two" style="">
                <hr color="#f3b5ce" />
            </div>
            <table width="100%" border="0" cellspacing="0" cellpadding="0" style="">
                <tr>
                    <td width="138" valign="top"><img name="" src="/capcc0624/Public/Home/Images/标识符号 (1).jpg" width="138" height="97" alt="" style="background-color: #EFEEE7" /></td>
                    <td width="167" align="left" valign="top" class="item1">·城市视窗<br />
                        ·企业视窗<br />
                        ·产品视窗<br />
                        ·体验视窗<br />
                        ·信息发布</td>
                </tr>
            </table>
        </div>
    </div>
    <div id="body_bottom">
        <div class="left2" id="left">
            <table width="640" height="360" border="0">
                <?php if(is_array($list31)): $i = 0; $__LIST__ = $list31;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 3 );++$i; if(($mod) == "0"): ?><tr><?php endif; ?>

                    <td width="208" height="120">
                         <img src='/capcc0624/Public/<?php echo ($vo["picture"]); ?>' width="208px" height="120px" />
                    </td>

                    <?php if(($mod) == "2"): ?></tr><?php endif; endforeach; endif; else: echo "" ;endif; ?>
            </table>
        </div>
        <div class="right2" id="right">
            <hr align="right" width="404" size="9" color="#fce4d7"/>
            <table width="404" border="0" align="right" cellpadding="0" cellspacing="0" style="margin-top: 5px; float: right;">
                <tr>
                    <td height="43" align="left"><span class="title4">运河申遗</span><br /></td>
                </tr>
                <tr>
                    <td height="274" valign="top" class="item1">·<a href="inscription/concept.php" class="item1">概念构成</a><br />
                        ·<a href="inscription/organization.php" class="item1">世界遗产组织</a><br />
                        ·<a href="inscription/convention.php" class="item1">组织公约</a><br />
                        ·<a href="inscription/project.php" class="item1">中国世遗项目</a><br />
                        ·<a href="inscription/union.php" class="item1">运河申遗</a><br />
                        ·<a href="inscription/research.php" class="item1">研究机构</a><br />
                        ·<a href="inscription/media.php" class="item1">主要媒体</a><br />
                        ·<a href="inscription/special.php" class="item1">申遗专题</a><br /></td>
                </tr>
            </table>
            <br />
        </div>
    </div>
    <div style="font: 0px/0px sans-serif;clear: both;display: block"> </div>
</div>

</body></center>
</html>