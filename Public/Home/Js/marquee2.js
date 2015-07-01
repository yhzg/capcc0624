/**
 * Created by DT on 2015/6/30.
 */
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
