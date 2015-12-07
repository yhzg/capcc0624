var page1="<table width=\"86%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">" +
    "<tr valign=\"top\">" +//新闻
    "<td width=\"8%\" align=\"center\"></td>" +
    "<td width=\"8%\" align=\"center\"><a style=\"color:inherit;\" href=\"News/angle\">新闻视线</a></td>" +
    "<td width=\"8%\" align=\"center\"><a style=\"color:inherit;\" href=\"News/investigation\">深度调查</a></td>" +
    "<td width=\"76%\"></td>" +
    "</tr></table>";
var page2="<table width=\"86%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">" +
    "<tr valign=\"top\">" +//城市
    "<td width=\"17%\" align=\"center\"></td>" +
    "<td width=\"8%\" align=\"center\"><a style=\"color:inherit;\" href=\"city/window.php\">城市视窗</a></td>" +
    "<td width=\"8%\" align=\"center\"><a style=\"color:inherit;\" href=\"city/canal.php\">运河城市</a></td>" +
    "<td width=\"67%\"></td>" +
    "</tr></table>";
var page3="<table width=\"86%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">" +
    "<tr valign=\"top\">" +//申遗
    "<td width=\"20%\" align=\"center\"></td>" +
    "<td width=\"4%\" align=\"center\"><a style=\"color:inherit;\" href=\"inscription/concept.php\">概念</a></td>" +
    "<td width=\"4%\" align=\"center\"><a style=\"color:inherit;\" href=\"inscription/organization.php\">组织</a></td>" +
    "<td width=\"4%\" align=\"center\"><a style=\"color:inherit;\" href=\"inscription/convention.php\">公约</a></td>" +
    "<td width=\"4%\" align=\"center\"><a style=\"color:inherit;\" href=\"inscription/project.php\">项目</a></td>" +
    "<td width=\"4%\" align=\"center\"><a style=\"color:inherit;\" href=\"inscription/union.php\">历程</a></td>" +
    "<td width=\"8%\" align=\"center\"><a style=\"color:inherit;\" href=\"inscription/research.php\">研究机构</a></td>" +
    "<td width=\"8%\" align=\"center\"><a style=\"color:inherit;\" href=\"inscription/media.php\">主要媒体</a></td>" +
    "<td width=\"44%\"></td>" +
    "</tr></table>";
var page4="<table width=\"86%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">" +
    "<tr valign=\"top\">" +//旅游
    "<td width=\"35%\" align=\"right\"></td>" +
    "<td width=\"4%\" align=\"center\"><a style=\"color:inherit;\" href=\"travel/ancient_town.php\">景点</a></td>" +
    "<td width=\"10%\" align=\"center\"><a style=\"color:inherit;\" href=\"travel/lake.php\">吃客+驿站</a></td>" +
    "<td width=\"8%\" align=\"center\"><a style=\"color:inherit;\" href=\"travel/garden.php\">屌丝攻略</a></td>" +
    "<td width=\"43%\"></td>" +
    "</tr></table>";
var page5="<table width=\"86%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">" +
    "<tr valign=\"top\">" +//品牌
    "<td width=\"40%\" align=\"right\"></td>" +
    "<td width=\"10%\" align=\"center\"><a style=\"color:inherit;\" href=\"brand/time_honored.php\">中华老字号</a></td>" +
    "<td width=\"8%\" align=\"center\"><a style=\"color:inherit;\" href=\"brand/design.php\">产品设计</a></td>" +
    "<td width=\"8%\" align=\"center\"><a style=\"color:inherit;\" href=\"brand/advertisement_spread.php\">广告传播</a></td>" +
    "<td width=\"34%\"></td>" +
    "</tr></table>";
var page6="<table width=\"86%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">" +
    "<tr valign=\"top\">" +//数字美术馆
    "<td width=\"55%\" align=\"right\"></td>" +
    "<td width=\"8%\" align=\"center\"><a style=\"color:inherit;\" href=\"classic/legend.php\">艺术传奇</a></td>" +
    "<td width=\"8%\" align=\"center\"><a style=\"color:inherit;\" href=\"classic/market.php\">艺术市场</a></td>" +
    "<td width=\"8%\" align=\"center\"><a style=\"color:inherit;\" href=\"classic/comment.php\">艺术评介</a></td>" +
    "<td width=\"10%\" align=\"center\"><a style=\"color:inherit;\" href=\"classic/present.php\">当代艺术群</a></td>" +
    "<td width=\"11%\"></td>" +
    "</tr></table>";
var page7="<table width=\"86%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">" +
    "<tr valign=\"top\">" +//活动
    "<td width=\"78%\" align=\"right\"></td>" +
    "<td width=\"8%\" align=\"center\"><a style=\"color:inherit;\" href=\"activity/new.php\">近期活动</a></td>" +
    "<td width=\"8%\" align=\"center\"><a style=\"color:inherit;\" href=\"activity/ago.php\">以往活动</a></td>" +
    "<td width=\"6%\"></td>" +
    "</tr></table>";
var page8="<table width=\"86%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">" +
    "<tr valign=\"top\">" +//论坛
    "<td width=\"61%\" align=\"right\"></td>" +
    "<td width=\"6%\" align=\"center\"><a style=\"color:inherit;\" href=\"forum/hot.php\">热帖榜</a></td>" +
    "<td width=\"6%\" align=\"center\"><a style=\"color:inherit;\" href=\"forum/city.php\">城市榜</a></td>" +
    "<td width=\"6%\" align=\"center\"><a style=\"color:inherit;\" href=\"forum/travel.php\">旅游榜</a></td>" +
    "<td width=\"6%\" align=\"center\"><a style=\"color:inherit;\" href=\"forum/world.php\">世界榜</a></td>" +
    "<td width=\"8%\" align=\"center\"><a style=\"color:inherit;\" href=\"forum/top.php\">各版头条</a></td>" +
    "<td width=\"8%\" align=\"center\"><a style=\"color:inherit;\" href=\"forum/activity.php\">网友活动</a></td>" +
    "</tr></table>";
var pages=["",page1,page2,page3,page4,page5,page6,page7,page8,];
function showsub(id)
{
    var n;
    for(n=1;n<=12;n++)
    {
        if(n==id)
        {
            document.getElementById(id).innerHTML="<img src=\"../../Public/Home/Images/bracket.jpg\" width=\"30\" height=\"27\" />";
            document.getElementById("head_bottom").innerHTML=pages[id-1];
        }
        else
        {
            document.getElementById(n).innerHTML="";
        }
    }
}