


current_slide = 1;
next_slide = 2;

$(document).ready(function(){
	$( "#slide1" ).css( {"display":"block"} );
	$( "#slide2" ).css( {"display":"none"} );
	$( "#slide3" ).css( {"display":"none"} );
	$( "#slide4" ).css( {"display":"none"} );
	
	slider();
	
	$("#slideNo1").click(function(){
        $("#slide"+current_slide).slideToggle("slow");
		$("#slide1").slideToggle("slow");
		
		$("#slideNo"+current_slide).removeClass("sliderActive");
		$("#slideNo1").addClass("sliderActive");
		
		current_slide = 1;
		next_slide = 2;
    });
	
	$("#slideNo2").click(function(){
        $("#slide"+current_slide).slideToggle("slow");
		$("#slide2").slideToggle("slow");
		
		$("#slideNo"+current_slide).removeClass("sliderActive");
		$("#slideNo2").addClass("sliderActive");
		
		current_slide = 2;
		next_slide = 3;
    });
	
	$("#slideNo3").click(function(){
        $("#slide"+current_slide).slideToggle("slow");
		$("#slide3").slideToggle("slow");
		
		$("#slideNo"+current_slide).removeClass("sliderActive");
		$("#slideNo3").addClass("sliderActive");
		
		current_slide = 3;
		next_slide = 4;
    });
	
	$("#slideNo4").click(function(){
        $("#slide"+current_slide).slideToggle("slow");
		$("#slide4").slideToggle("slow");
		
		$("#slideNo"+current_slide).removeClass("sliderActive");
		$("#slideNo4").addClass("sliderActive");
		
		current_slide = 4;
		next_slide = 1;
    });
	
	
});

function slider(){
	
	loop = setInterval(function(){
		
	if(next_slide > 4){
		$("#slideNo4").removeClass("sliderActive");
		next_slide = 1;
		current_slide = 4;
	}
	
	
	$("#slideNo"+current_slide).removeClass("sliderActive");
	$("#slide"+current_slide).slideToggle("slow");
	$("#slideNo"+next_slide).addClass("sliderActive");
	$("#slide"+next_slide).slideToggle("slow");
	
	current_slide = next_slide;
	next_slide = next_slide + 1;
		
	} , 3000 )
}




