
$(document).ready(function(){
    
	var val = $("header").height();
	var nav_initial = $("nav").top;
	
	$(window).scroll(function(){
		var pos = $(window).scrollTop();
		if(pos > val){
			$("nav").css({
				position:"fixed",
				left:"0px",
				top:"0px",
				"z-index": 1,
				"box-shadow":"3px 0px 15px 2px black",
				background:"linear-gradient(to right, rgba(0, 0, 0, 1), rgba(243,129,129,1)"
			});

		}
		else{
			$("nav").css({
				position:"absolute",
				left:"0px",
				top:nav_initial,
				"z-index": "1",
				"box-shadow":"none",
				background: "transparent",
			});
		}
		
	});
	
	$("#login_menu").click(function(){
		$("#menu_box").toggle("slow");
        $("#login").animate({
			"top":"0%"
		}, 300);
    });
	
	$("#login .cancel_box").click(function(){
		$("#login").animate({
			"top":"-100%"
		}, 300);
	});
	
	$("#sign_up_menu").click(function(){
		$("#menu_box").toggle("slow");
        $("#signup").animate({
			"top":"0px"
		}, 300);
    });
	
	$("#signup .cancel_box").click(function(){
		$("#signup").animate({
			"top":"100%"
		}, 300);
	});
	
	
	
});