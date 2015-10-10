 var b=0;
 var n4=["images_show/activity_1.jpg","images_show/activity_2.jpg","images_show/activity_3.jpg","images_show/activity_4.jpg","images_show/activity_5.jpg","images_show/activity_6.jpg","images_show/activity_7.jpg","images_show/activity_8.jpg","images_show/activity_9.jpg"];
 var array_length=n4.length;
 function up_roll_img()
 {
	b++;
	if(b==array_length)
	{
		b=0;
	}
	document.getElementById( "activity_img_1" ).src =n4[b%array_length];
	document.getElementById( "activity_img_2" ).src =n4[(b+1)%array_length];
	document.getElementById( "activity_img_3" ).src =n4[(b+2)%array_length];
	document.getElementById( "activity_img_4" ).src =n4[(b+3)%array_length];
	document.getElementById( "activity_img_5" ).src =n4[(b+4)%array_length];
	document.getElementById( "activity_img_6" ).src =n4[(b+5)%array_length];
	document.getElementById( "activity_img_7" ).src =n4[(b+6)%array_length];
	document.getElementById( "activity_img_8" ).src =n4[(b+7)%array_length];
	document.getElementById( "activity_img_9" ).src =n4[(b+8)%array_length];
 }
 function down_roll_img()
 {
	b--;
	if(b<0)
	{
		b=array_length-1;
	}
	document.getElementById( "activity_img_1" ).src =n4[b%array_length];
	document.getElementById( "activity_img_2" ).src =n4[(b+1)%array_length];
	document.getElementById( "activity_img_3" ).src =n4[(b+2)%array_length];
	document.getElementById( "activity_img_4" ).src =n4[(b+3)%array_length];
	document.getElementById( "activity_img_5" ).src =n4[(b+4)%array_length];
	document.getElementById( "activity_img_6" ).src =n4[(b+5)%array_length];
	document.getElementById( "activity_img_7" ).src =n4[(b+6)%array_length];
	document.getElementById( "activity_img_8" ).src =n4[(b+7)%array_length];
	document.getElementById( "activity_img_9" ).src =n4[(b+8)%array_length];
 }