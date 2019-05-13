
$(document).ready(function(){
	$("#chatting h3").click( function() {
		$("#chat").toggle("slow");
		$("#send_msg").toggle("slow");
		scroll_end();
	});
});