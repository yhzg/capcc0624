 function setimg(a)
 {
	document.getElementById( "big_img" ).src =document.getElementById("small_real_img_"+a).src;
	document.getElementById( "big_img_a" ).href=document.getElementById("small_a_img_"+a).href;
 }
 function left_roll_img()
 {
	var n;
	n=document.getElementById( "small_img_1" ).innerHTML;
	document.getElementById( "small_img_1" ).innerHTML =document.getElementById( "small_img_2" ).innerHTML;
	document.getElementById( "small_img_2" ).innerHTML =document.getElementById( "small_img_3" ).innerHTML;
	document.getElementById( "small_img_3" ).innerHTML =document.getElementById( "small_img_4" ).innerHTML;
	document.getElementById( "small_img_4" ).innerHTML =document.getElementById( "small_img_5" ).innerHTML;
	document.getElementById( "small_img_5" ).innerHTML =document.getElementById( "small_img_6" ).innerHTML;
	document.getElementById( "small_img_6" ).innerHTML =document.getElementById( "small_img_7" ).innerHTML;
	document.getElementById( "small_img_7" ).innerHTML =document.getElementById( "small_img_8" ).innerHTML;
	document.getElementById( "small_img_8" ).innerHTML =document.getElementById( "small_img_9" ).innerHTML;
	document.getElementById( "small_img_9" ).innerHTML =document.getElementById( "small_img_10" ).innerHTML;
	document.getElementById( "small_img_10" ).innerHTML =document.getElementById( "small_img_11" ).innerHTML;
	document.getElementById( "small_img_11" ).innerHTML =document.getElementById( "small_img_12" ).innerHTML;
	document.getElementById( "small_img_12" ).innerHTML =document.getElementById( "small_img_13" ).innerHTML;
	document.getElementById( "small_img_13" ).innerHTML =document.getElementById( "small_img_14" ).innerHTML;
	document.getElementById( "small_img_14" ).innerHTML =document.getElementById( "small_img_15" ).innerHTML;
	document.getElementById( "small_img_15" ).innerHTML =document.getElementById( "small_img_16" ).innerHTML;
	document.getElementById( "small_img_16" ).innerHTML =document.getElementById( "small_img_17" ).innerHTML;
	document.getElementById( "small_img_17" ).innerHTML =document.getElementById( "small_img_18" ).innerHTML;
	document.getElementById( "small_img_18" ).innerHTML =n;
 }
 function right_roll_img()
 {
	var m;
	m=document.getElementById( "small_img_1" ).innerHTML;
	document.getElementById( "small_img_1" ).innerHTML =document.getElementById( "small_img_18" ).innerHTML;
	document.getElementById( "small_img_18" ).innerHTML =document.getElementById( "small_img_17" ).innerHTML;
	document.getElementById( "small_img_17" ).innerHTML =document.getElementById( "small_img_16" ).innerHTML;
	document.getElementById( "small_img_16" ).innerHTML =document.getElementById( "small_img_15" ).innerHTML;
	document.getElementById( "small_img_15" ).innerHTML =document.getElementById( "small_img_14" ).innerHTML;
	document.getElementById( "small_img_14" ).innerHTML =document.getElementById( "small_img_13" ).innerHTML;
	document.getElementById( "small_img_13" ).innerHTML =document.getElementById( "small_img_12" ).innerHTML;
	document.getElementById( "small_img_12" ).innerHTML =document.getElementById( "small_img_11" ).innerHTML;
	document.getElementById( "small_img_11" ).innerHTML =document.getElementById( "small_img_10" ).innerHTML;
	document.getElementById( "small_img_10" ).innerHTML =document.getElementById( "small_img_9" ).innerHTML;
	document.getElementById( "small_img_9" ).innerHTML =document.getElementById( "small_img_8" ).innerHTML;
	document.getElementById( "small_img_8" ).innerHTML =document.getElementById( "small_img_7" ).innerHTML;
	document.getElementById( "small_img_7" ).innerHTML =document.getElementById( "small_img_6" ).innerHTML;
	document.getElementById( "small_img_6" ).innerHTML =document.getElementById( "small_img_5" ).innerHTML;
	document.getElementById( "small_img_5" ).innerHTML =document.getElementById( "small_img_4" ).innerHTML;
	document.getElementById( "small_img_4" ).innerHTML =document.getElementById( "small_img_3" ).innerHTML;
	document.getElementById( "small_img_3" ).innerHTML =document.getElementById( "small_img_2" ).innerHTML;
	document.getElementById( "small_img_2" ).innerHTML =m;
 }