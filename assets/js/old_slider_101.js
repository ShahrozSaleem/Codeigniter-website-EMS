
current_slide = 1;
next_slide = 2;

$(document).ready(function(){
	$( "#slide1" ).css( {"display":"block"} );
	$( "#slide2" ).css( {"display":"none"} );
	$( "#slide3" ).css( {"display":"none"} );
	$( "#slide4" ).css( {"display":"none"} );
	
	slider();
	
	
	
});

function slider(){
	
	loop = setInterval(function(){
		
	if(next_slide > 4){
		$("#slideNo4").removeClass("sliderActive");
		next_slide = 1;
		current_slide = 1;
	}
	
	$("#slide"+current_slide).fadeOut(1000);
	$("#slideNo"+current_slide).removeClass("sliderActive");
	$("#slide"+next_slide).fadeIn(1000);
	$("#slideNo"+next_slide).addClass("sliderActive");
	
	current_slide = next_slide;
	next_slide = next_slide + 1;
		
	} , 3000 )
}