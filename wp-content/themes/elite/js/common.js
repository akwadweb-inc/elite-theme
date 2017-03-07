/*
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
[ COMMON SCRIPTS ]
AUTHOR :VIJAYAN PP
PROJECT :REMSH
VERSION : 1.1
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
*/

(function($) {
	"use strict";

	$(window).load(function(){
		
	App.loader();
	});

	var App={
            init:function()
            {
              App.portfolio();
              App.portfolio();
              App.owlTeam();
              App.owlTestimonial();
              App.navigate();
              App.contactsubmit();
             	
            },
         portfolio:function(){
        var $container = $('#lightbox');
        $container.isotope({
            filter: '*',
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });
        $('.cat a').click(function() {
            $('.cat .active').removeClass('active');
            $(this).addClass('active');
            var selector = $(this).attr('data-filter');
            $container.isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });
            return false;
        });
    },
    owlTeam:function()
    {
        $("#team,#clients").owlCarousel({
  	 
  	      navigation : false, // Show next and prev buttons
  	      slideSpeed : 300,
  	      paginationSpeed : 400,
  	      autoHeight : true,
  	      itemsCustom : [
				        [0, 1],
				        [450, 2],
				        [600, 2],
				        [700, 2],
				        [1000, 4],
				        [1200, 4],
				        [1400, 4],
				        [1600, 4]
				      ],
  	  });
    },
    
    owlTestimonial:function()
    {
        $("#testimonial").owlCarousel({
        navigation : false, // Show next and prev buttons
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem:true
        });
    },
    navigate:function()
    {
        $('a.page-scroll').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top - 40
            }, 900);
            return false;
          }
        }
      });

    },
    
   
   contactsubmit:function()
   {
       $('#contact-form').submit(function(e){
		var form = $(this);
		e.preventDefault();		
		$.ajax({
			type: 'POST',
			url : 'php/sendmail.php',
			data: form.serialize(),
			success: function(data){
				form.find('.form-message').html(data).fadeIn();
		
				form.find('.btn').prop('disabled', true);
					
				if ($(data).is('.send-true')){
					setTimeout(function(){
						form.trigger('reset');
						
						form.find('.btn').prop('disabled', false);
						
						form.find('.form-message').fadeOut().delay(500).queue(function(){
							form.find('.form-message').html('').dequeue();
						});
					}, 2000);
				} else {
					form.find('.btn').prop('disabled', false);
				}
			}
		});
  });
   },
   loader:function()
			{
                         
			 $("div.preloader").fadeOut("slow");
                         
                         
			}
			
        };
        App.init();

})(jQuery);



/*+++++++++++++++++++++++++COMMON FUNCTIONS++++++++++++++++++++++++++++*/

/*KENBERG SLIDER*/

 var fullscreenslider=function()
  {
      $("section.main-heading").vegas({
	delay: 3000,
    slides: [
        { src: "images/bak3.jpg" },
        { src: "images/bak2.jpg" },
        { src: "images/bak3.jpg" },
        { src: "images/bak4.jpg" }
    ],animation: 'kenburns'
});
  }