/**
 * Created by DT on 2015/6/29.
 */


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
