

$(function(){

	$(document).ready( function() {
	 $('.work').isotope({
	   // options
	   itemSelector: '.work_container',
	   masonry: {
	     columnWidth: 100,
	      gutter: 15
	   }

	 });

	 $('.menu__trigger').on('click', function(){
		$('ul#menu__mobile').addClass('show__menu');
		// $('ul#menu__mobile').removeClass('show__menu');
	});

});

//controls sticky nav
	var  mn = $(".menu");
	    mns = "main-nav-scrolled";
	    hdr = $('header').height();

	$(window).scroll(function() {
	  if( $(this).scrollTop() > hdr ) {
	    mn.addClass(mns);
	    // $('ul#menu__mobile')removeClass('show__menu');
	  } else {
	    mn.removeClass(mns)
	  }
	});





	// $(document).ready(function(){                    
	//     $(window).scroll(function(){                          
	//         if ($(this).scrollTop() > 1000) {
	//             $('#menu').fadeIn(300);
	//         } else {
	//             $('#menu').fadeOut(100);
	//         }
	//     });
	// });



});
