
$(document).ready(function(){
	
	$("#child101").click(function(){
        $("#menu_box").toggle("slow");
    });
	
	$("#menu_box .cancel_box").click(function(){
        $("#menu_box").toggle("slow");
    });
	
	$("#child201").click(function(){
        $("#search").toggle("slow");
    });
	
	$("#search .cancel_box").click(function(){
        $("#search").toggle("slow");
    });
	
});