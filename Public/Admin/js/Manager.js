//页面初始化时执行
star();
function star()
{
	var _val = $('#search option:first').val();
	console.log(_val);

	if(_val == 'Search Type'){
		$('#submit').attr('disabled','false');
	}

	$('#search').change(function(){ 
		var _val=$(this).children('option:selected').html();
		if(_val == 'Search Type'){
			$('#submit').attr('disabled','false');
		}else{
			$('#submit').removeAttr("disabled");
		}
	});
}


function _change(id,btn)
{
	var _url = $('#url').attr('title');
	var _html = $(btn).children().html();
	var status;
	if(_html == 'Disabled'){
		status = 2;
	}else{
		status = 1;
	}
	$.ajax({
		url:_url,
		type:'POST',
		data:{_id:id,_status:status},
		success: function(msg)
		{
		  if(msg == '1'){
		  	$(btn).children().html('Open');
		  }else{
		  	$(btn).children().html('Disabled');
		  }
		}
	});
}
