$(function(){
	
	$('#tuichu').bind('click',function(){
		if($('.tuichuss').css('display')=='none'){
			$('.tuichuss').show();
		}else{
			$('.tuichuss').hide();
		}
	});

})