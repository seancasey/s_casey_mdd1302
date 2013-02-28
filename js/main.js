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



/* $('#newc').trigger('create'); */

$('html').on('pageinit', '#newc', function(){
	
	console.log('test on page init');
	$('#f_list').listview('refresh');
	
	$('.flist_item').on('click',function(e){

	var fid = $(this).attr('friend-id');
	var fname = $(this).html();
	$('#nc_friend_id').val(fid);
	$('#nc_friend_name').val(fname);
	console.log(fid);
	e.preventDefault();
	return false;
});

	
});
$('html').on('click', '.delmc', function(e){
var cid = $(this).attr('data-mc');
console.log(cid);
	$.ajax({
		url: "/challenge/index.php/challenges/delpending",
		type: "POST",	
		data:{cid1:cid	
		},
		dataType: 'json',
		success: function(data) {
			console.log(data);
			$('#pending-stuff').listview('refresh');
			$('.pending-' + cid).hide();
			var up = parseInt($('.pnum1').html());
			up = up - 1;
			$('.pnum1').html(up);
			$('.pnum').html(up);
			alert('delete successful!');
		},
		error: function(){
			alert('An error has occured, please try again later');
		}
	});
	
	e.preventDefault();
	return false;
/* }); */



});
$('#newc').trigger('create');


	



})(jQuery);