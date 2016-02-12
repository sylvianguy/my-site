

$(function(){

	$('#menu__trigger').click(function (e){
		console.log('tracking');
		e.preventDefault();
		$(this).toggleClass('menu__trigger-close');
		$('#toggler').toggleClass('show__menu');
	});

//controls sticky nav
	var  menu = $(".menu");
	    scrolled = "main-nav-scrolled";
	    hdr = $('header').height();

	$(window).scroll(function() {
	  if( $(this).scrollTop() > hdr ) {
	    menu.addClass(scrolled, 500);
	    $('.work').addClass('no__snapping');
	  
	  }else {
	    menu.removeClass(scrolled);
	    $('.work').removeClass('no__snapping')
	    
	     // $('.work').css('margin-top', '120px');
	  }
	});


	function checkWidth() {
		if ($(window).width() < 767) {
		    $('ul.menu').addClass('menu__mobile');
			// $('ul.menu')removeClass('main-nav-scrolled');
		} else {
		    $('ul.menu').removeClass('menu__mobile');
		}		
	}

	$(window).resize(checkWidth);

	// //Handles parallax
	//   $(window).scroll(function(e){
	//   	parallaxScroll();
	//   });
		 
	// 	function parallaxScroll(){
	// 		var scrolled = $(window).scrollTop();
	// 		if ($(window).width() > 820) {
	// 			$('.header__content').css('top',(340-(scrolled*.25))+'px');
	// 		}
	// 	}
	 
	 //Handles smooth scroll to anchor
	 $(".scroll").click(function(event){
	         event.preventDefault();
	         // $(this).toggleClass('link_active');
	         //calculate destination place
	         var dest=0;
	         if($(this.hash).offset().top > $(document).height()-$(window).height()){
	              dest=$(document).height()-$(window).height();
	         }else{
	              dest=$(this.hash).offset().top;
	         }
	         //go to destination
	         $('html,body').animate({scrollTop:dest}, 900,'swing');
	     });

});



