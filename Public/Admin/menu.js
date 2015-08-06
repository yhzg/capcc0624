/**
 * Created by DT on 2015/8/6.
 */
$(document).ready(function()
{
    $('#news').click(function()
    {
        $('#selector').html(
            '<li ><span href="#">图说新闻</span></li>' +
            '<li ><span href="#">动态新闻</span></li>' );
    });

    $('#picture').click(function()
    {
        $('iframe').attr('src','<{:U("Admin/Manage/index")}>');

    });


    $('#city').click(function()
    {
        $('#selector').html(
            '<li ><span href="#">运河城市</span></li>' +
            '<li ><span href="#">运河人物</span></li>' );
    });



})


