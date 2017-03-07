/*++++++++++++++++++++++++++++++++++++++++++++++++++++
    contact form submiision
++++++++++++++++++++++++++++++++++++++++++++++++++++++*/

jQuery(document).ready(function ($) {
    // Your code here
    // contact form submission

    new WOW().init();

    $(function () {
        $('.eq-height [class*="col-"]').matchHeight(false);
    });

 $('#eliteContactForm').on('submit' , function(e){

        e.preventDefault();


        $('.has-error').removeClass('has-error');
        $('.js-show-feedback').removeClass('js-show-feedback');

        var form = $(this);


        var name  = form.find('#name').val(),
        	email = form.find('#email').val(),
        	message = form.find('#message').val()
        	ajaxurl = form.data('url');

        	if( $.trim(name) === '' ) {
        		// console.log('Required inputs are empty');
        		$('#name').parent('.form-group').addClass('has-error');
        		return;
        	}

        	if( $.trim(email) === '' ) {
        		// console.log('Required inputs are empty');
        		$('#email').parent('.form-group').addClass('has-error');
        		return;
        	}

        	if( $.trim(message) === '' ) {
        		// console.log('Required inputs are empty');
        		$('#message').parent('.form-group').addClass('has-error');
        		return;
        	}

        	form.find('input, button, textarea').attr('disabled', 'disabled');
        	$('.js-form-submission').slideDown(300).addClass('js-show-feedback');


        	$.ajax({
        		url : ajaxurl,
        		type : 'post',
        		data : {

        			name : name,
        			email: email,
        			message : message,
        			action : 'elite_save_user_contact_form'

        		},
        		error : function( response ){
        			$('.js-form-submission').slideUp(400).removeClass('js-show-feedback');
        			$('.js-form-error').addClass('js-show-feedback');
        			form.find('input, button, textarea').removeAttr('disabled');
        		},
        		success : function(response){
        			if( response == 0){
        				setTimeout(function(){
        					$('.js-form-submission').slideUp(400).removeClass('js-show-feedback');
		        			$('.js-form-error').slideDown(500).addClass('js-show-feedback');
		        			form.find('input, button, textarea').removeAttr('disabled');
        				}, 2000);
        		}else{
        			setTimeout(function(){
	        			$('.js-form-submission').slideUp(300).removeClass('js-show-feedback');
	        			$('.js-form-success').slideDown(900).addClass('js-show-feedback');
	        			form.find('input, button, textarea').removeAttr('disabled').val('');
	        		},2000);
        		}
        	}
        	});




 });


});
