<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head lang="en">
    <meta charset="UTF-8">

    <link rel="stylesheet" type="text/css" href="/capcc0624/Public/Home/Css/1.1home_font.css" />
    <link rel="stylesheet" type="text/css" href="/capcc0624/Public/Home/Css/1home_page.css" />
    <script type="text/javascript" src="/capcc0624/Public/Home/Js/head_bottom.js"></script>
    <script type="text/javascript" src="/capcc0624/Public/Home/Js/resize_picture.js"></script>
    <script type="text/javascript" src="/capcc0624/Public/jq/jquery-1.10.2.min.js"></script>
   </head>
<center><body>

<div id="head" style="background-color: #FFF; clear: both;">
    <div id="head_up">
        <table width="86%" border="0" cellspacing="0" cellpadding="0" >
            <tr>
                <td width="8%" rowspan="2"></td>
                <td width="20%" rowspan="2" align="left"><img src="/capcc0624/Public/Home/Images/login_06.png" alt="" width="400" height="200" onload="AutoResizeImage(400,200,this)" /></td>
                <td width="30%"  valign="center" style="padding-top:25px;"><img src="/capcc0624/Public/Home/Images/合力共建.jpg" alt="" width="400" height="200" onload="AutoResizeImage(400,200,this)" /></td>
                <td width="14%" align="right" class="helpcenter">帮助中心</td>
                <td width="9%" align="center" class="helpcenter">联系客服</td>
                <?php
 $username=$_SESSION['username']; if(!empty($username)) { echo '<td width="9%" align="center" class="helpcenter">欢迎您'.$username.'</td>'; echo '<td width="9%" align="center" class="helpcenter"><a href="/capcc0624/index.php/Home/Login/logout">注销</a></td>'; }else { echo '<td width="9%" align="center" class="helpcenter"><a href="/capcc0624/index.php/Home/Login/register">注册</a></td>'; echo'<td width="9%" align="center" class="helpcenter"><a href="/capcc0624/index.php/Home/Login/login">登录</a></td>'; } ?>
                <!-- <td width="6%" align="right"><form id="form1" name="form1" method="post" action="">
                  <input type="image" name="imageField" id="imageField" src="images/logining-button.png" />
                </form></td>
                <td width="8%" align="center"><form id="form2" name="form2" method="post" action="">
                  <input type="image" name="imageField2" id="imageField2" src="images/register-button.png" />
                </form></td> 待开发-->
            </tr>
        </table>
    </div>
    <div id="head_center1">
        <table width="86%" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td><table width="100%" border="0" align="center"cellpadding="0" cellspacing="0">
                    <tr valign="bottom">
                        <td align="center">|</td>
                        <td align="center" class="blue" onmouseover="showsub(1);"><a style="color:inherit;" href="/capcc0624/index.php/Home/Index">主页</a></td>
                        <td align="center">|</td>
                        <td align="center" onmouseover="showsub(2);"><a style="color:inherit;" href="/capcc0624/index.php/Home/News">新闻</a></td>
                        <td align="center">|</td>
                        <td align="center" onmouseover="showsub(3);"><a style="color:inherit;" href="/capcc0624/index.php/Home/City">城市</a></td>
                        <td align="center">|</td>
                        <td align="center" onmouseover="showsub(4);"><a style="color:inherit;" href="/capcc0624/index.php/Home/Inscription">申遗</a></td>
                        <td align="center">|</td>
                        <td align="center" onmouseover="showsub(5);"><a style="color:inherit;" href="/capcc0624/index.php/Home/Travel">旅游</a></td>
                        <td align="center">|</td>
                        <td align="center" onmouseover="showsub(6);"><a style="color:inherit;" href="/capcc0624/index.php/Home/Brand">品牌</a></td>
                        <td align="center">|</td>
                        <td align="center" onmouseover="showsub(7);"><a style="color:inherit;" href="/capcc0624/index.php/Home/Dgmuseum">数字美术馆</a></td>
                        <td align="center">|</td>
                        <td align="center" onmouseover="showsub(8);"> <a style="color:inherit;" href="/capcc0624/index.php/Home/Activity">活动</a></td>
                        <td align="center">|</td>
                        <td align="center" onmouseover="showsub(9);"><a style="color:inherit;" href="http://localhost/discuz" target="_blank">论坛</a></td>
                        <td align="center">|</td>
                    </tr>
                </table></td>
            </tr>
        </table>
    </div>
    <div id="head_center2">
        <table width="86%" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td><table width="100%" border="0" align="center"cellpadding="0" cellspacing="0">
                    <tr valign="bottom">
                        <td align="center">&nbsp;</td>
                        <td width="10%" align="center" id="1"><img src="/capcc0624/Public/Home/Images/bracket.jpg" width="30" height="27" /></td>
                        <td width="10%" align="center" id="2"></td><td align="center">&nbsp;</td>
                        <td width="10%" align="center" id="3"></td><td align="center">&nbsp;</td>
                        <td width="10%" align="center" id="4"></td><td align="center">&nbsp;</td>
                        <td width="10%" align="center" id="5"></td><td align="center">&nbsp;</td>
                        <td width="10%" align="center" id="6"></td><td align="center">&nbsp;</td>
                        <td width="20%" align="center" id="7"></td><td align="center">&nbsp;</td>
                        <td width="10%" align="center" id="8"></td><td align="center">&nbsp;</td>
                        <td width="10%" align="center" id="9"></td><td align="center">&nbsp;</td>
                    </tr>
                </table></td>
            </tr>
        </table>
    </div>
    <div id="head_bottom">
    </div>
</div>
</body></center>


</html>