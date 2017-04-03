$(document).ready(function(){
	$('.languages').on('click','li a',function(){
		var locale = $(this).data('value')
		$.ajax({
			url : "/language",
			type : 'GET',
			data : {'locale': locale},
			success : function(data){
				console.log('successfuly change language');
			},
			complete : function(data){
				window.location.reload(true);
			}
		});
	});
});


