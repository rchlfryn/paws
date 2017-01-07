/**
 * File base.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
	//Hero decision button
	$('#button-question').on('click',function(){
		$(this).fadeOut('fast');
		$('.training-buttons').fadeIn( "slow");
	});

	// Staff memeber selection function
	$('.staff-member').on('click',function(){
	  $('.staff-selected').css('display', 'block');
	  $('.staff-member').removeClass('active');
	  $(this).addClass('active');
	 	var activeStaffName = $(this).find('.staff-name')[0].innerText;
	 	var activeStaffBio = $(this).find('.staff-bio')[0].innerText;
	 	var activeStaffImage = $(this).find('.staff-image img').attr('src');
	 	// console.log(activeStaffImage)
	 	$('.staff-image-selected img').attr('src', activeStaffImage);
	 	$('.staff-name-selected')[0].innerText = activeStaffName;
	 	$('.staff-bio-selected')[0].innerText = activeStaffBio;
	 	$('html, body').animate({
      scrollTop: 200
    }, 500);
	});



} )( jQuery );