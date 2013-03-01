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

/* Complete a Challenge */
$('html').on('click', '.comc', function(e){
var cid = $(this).attr('data-mc');
var ccid = $(this).attr('data-uc');
var oid = $(this).attr('data-opc');
var coid = $(this).attr('data-cpc');
	$.ajax({
			url: "/challenge/index.php/challenges/cchallenge",
			type: "POST",	
			data:{cid1:cid	
			},
			dataType: 'json',
			success: function(data) {
				alert('CHALLENGE ACCEPTED!');
				console.log(data);
			},
			error: function(){
				alert('An error has occured, please try again later');
			},
			complete:function(){window.location='/challenge/index.php/challenges';}
	
	});
});
//End of Complete Ajax call
/* Accept a Challenge */
$('html').on('click', '.accmc', function(e){
var cid = $(this).attr('data-mc');
var ccid = $(this).attr('data-uc');
var oid = $(this).attr('data-opc');
var coid = $(this).attr('data-cpc');
$.ajax({
		url: "/challenge/index.php/challenges/acchallenge",
		type: "POST",	
		data:{cid1:cid	
		},
		dataType: 'json',
		success: function(data) {
			alert('CHALLENGE ACCEPTED!');
			console.log(data);
		},
		error: function(){
			alert('An error has occured, please try again later');
		},
		complete:function(){window.location='/challenge/index.php/challenges';}

});
});
//End of Accept Ajax call

//Delete Ajax Call
$('html').on('click', '.delmc', function(e){
var cid = $(this).attr('data-mc');
var ccid = $(this).attr('data-uc');
var oid = $(this).attr('data-opc');
var coid = $(this).attr('data-cpc');
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
			
/* This code will reload the lsts after a delete dynamically, just hiding the deleted item until refresh.
if(ccid == 21){
				var up1 = parseInt($('.mpnum1').html());
				$('.mpending-' + cid).hide();
				up1 = up1 - 1;
				$('.mpnum1').html(up1);
				$('.mpnum').html(up1);
				if(oid == coid){
					$('.pending-' + cid).hide();
					var up = parseInt($('.pnum1').html());
					up = up - 1;
					$('.pnum1').html(up);
					$('.pnum').html(up);
					
				}
			}else{
				$('.pending-' + cid).hide();
					var up = parseInt($('.pnum1').html());
					up = up - 1;
					$('.pnum1').html(up);
					$('.pnum').html(up);
					if(oid == coid){
						var up1 = parseInt($('.mpnum1').html());
						$('.mpending-' + cid).hide();
						up1 = up1 - 1;
						$('.mpnum1').html(up);
						$('.mpnum').html(up);
					
					}
			}
*/
			


			alert('delete successful!');
		},
		error: function(){
			alert('An error has occured, please try again later');
		},
		complete:function(){
			/* $.mobile.changePage("/challenge/index.php/challenges"); */
			window.location='/challenge/index.php/challenges';
		}
		
	});
	
	e.preventDefault();
	return false;
/* }); */



});
//End of delete Ajax Call


$('#newc').trigger('create');


	



})(jQuery);