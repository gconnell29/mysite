$( document ).ready(function() {
	$(".left_to").hover(function(){
       $(".left_to img").show();
       $(".left_to img").animate({
       	'margin-left': '100%'
       }); 
    }, function(){
       $(".left_to img").animate({
       	'margin-left': '0'
       });

       $(".left_to img").hide(500);
    });

    $(".right_to").hover(function(){
       $(".right_to img").show();
       $(".right_to img").animate({
       	'margin-left': '-100%'
       });
    }, function(){
    	$(".right_to img").animate({
    		'margin-left': '0'
    	});
    	$(".right_to img").hide(500);
    });
});