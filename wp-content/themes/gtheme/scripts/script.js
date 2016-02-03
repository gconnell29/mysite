$( document ).ready(function() {
	$(".left_to").hover(function(){
       $(".left_to img").show(); 
    }, function(){
    	$(".left_to img").hide(); 
    });

    $(".right_to").hover(function(){
       $(".right_to img").show(); 
    }, function(){
    	$(".right_to img").hide(); 
    });
});