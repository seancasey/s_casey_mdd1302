(function($){

/*Sign In Submit Button*/
/*
$('#si_submit').on('click',function(e){
	$.ajax({
		url: "/asl_group2/index.php?/ajax_test/give_more_data",
		type: "POST",	
		data:{class_id:$(this).val(),
			user_id:userID	
		},
		dataType: 'json',
		success: function(data) {
			console.log(data);
		}
	});
	console.log('submit');
	e.preventDefault();
	return false;
});
*/

$('.flist_item').on('click',function(e){

	var fid = $(this).attr('friend-id');
	var fname = $(this).html();
	$('#nc_friend_id').val(fid);
	$('#nc_friend_name').val(fname);
	console.log(fid);
	e.preventDefault();
	return false;
});

$('#newc').trigger('create');

$('html').on('pageinit', '#newc', function(){
	
	console.log('test on page init');

	
});
$('#newc').trigger('create');


})(jQuery);