$(function(){
	$(".img_rotate").mouseover(function(){
		$(this).addClass('animated tada');
	 });
	 
	  $(".img_rotate").mouseout(function(){
		$(this).removeClass('tada');
	 });

});

