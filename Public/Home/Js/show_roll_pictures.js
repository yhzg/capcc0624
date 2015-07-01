 var a=0;
 var n1=["__PUBLIC__/Home/Images/images_show/1.jpg","__PUBLIC__/Home/Images/images_show/2.jpg","__PUBLIC__/Home/Images/images_show/3.jpg","__PUBLIC__/Home/Images/images_show/4.jpg","__PUBLIC__/Home/Images/images_show/5.jpg","__PUBLIC__/Home/Images/images_show/6.jpg","__PUBLIC__/Home/Images/images_show/7.jpg","__PUBLIC__/Home/Images/images_show/8.jpg","__PUBLIC__/Home/Images/images_show/9.jpg","__PUBLIC__/Home/Images/images_show/10.jpg"];//需要显示的图片列表数组
 var arry_length=n1.length-1;
 function left_roll()
 {
	 a++;
	 if(a==arry_length)
	 {
		 a=0;
	 }
	document.getElementById( "bottom_small_img_1" ).src =n1[a%arry_length];
	document.getElementById( "bottom_small_img_2" ).src =n1[(a+1)%arry_length];
	document.getElementById( "bottom_small_img_3" ).src =n1[(a+2)%arry_length];
	document.getElementById( "bottom_small_img_4" ).src =n1[(a+3)%arry_length];
	document.getElementById( "bottom_small_img_5" ).src =n1[(a+4)%arry_length];
	document.getElementById( "bottom_small_img_6" ).src =n1[(a+5)%arry_length];
	document.getElementById( "bottom_small_img_7" ).src =n1[(a+6)%arry_length];
	document.getElementById( "bottom_small_img_8" ).src =n1[(a+7)%arry_length];
	document.getElementById( "bottom_small_img_9" ).src =n1[(a+8)%arry_length];
	document.getElementById( "bottom_small_img_10" ).src =n1[(a+9)%arry_length];
 }
 function right_roll()
 {
	 a--;
	 if(a<0)
	 {
		 a=arry_length;
	 }
	document.getElementById( "bottom_small_img_1" ).src =n1[a%arry_length];
	document.getElementById( "bottom_small_img_2" ).src =n1[(a+1)%arry_length];
	document.getElementById( "bottom_small_img_3" ).src =n1[(a+2)%arry_length];
	document.getElementById( "bottom_small_img_4" ).src =n1[(a+3)%arry_length];
	document.getElementById( "bottom_small_img_5" ).src =n1[(a+4)%arry_length];
	document.getElementById( "bottom_small_img_6" ).src =n1[(a+5)%arry_length];
	document.getElementById( "bottom_small_img_7" ).src =n1[(a+6)%arry_length];
	document.getElementById( "bottom_small_img_8" ).src =n1[(a+7)%arry_length];
	document.getElementById( "bottom_small_img_9" ).src =n1[(a+8)%arry_length];
	document.getElementById( "bottom_small_img_10" ).src =n1[(a+9)%arry_length];
 }