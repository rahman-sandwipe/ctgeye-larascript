(function ($) {
	"use strict";

    jQuery(document).ready(function($){

		$(".menuIcon").click(function(){
			$(".clickMenu").toggleClass("showMenu")
		})


		$("#wrapper").click( function() {
			$(".icon").toggleClass("close");
		});

		

		$(".searchIcon").click(function(){
			$(".searchBar").addClass("showSearch")
		})

		$(".remove").click(function(){
			$(".searchBar").removeClass("showSearch")
		})



       
/*****==================================
 * Menu Active Start
=====================================*****/
$('.stellarnav').stellarNav({
	theme: 'dark',
	breakpoint: 660,
	position: 'left',
	phoneBtn: false,
	locationBtn: false,
	sticky:false,
	showArrows:true,
	openingSpeed: 500,
	closingDelay: 500,
	
});

window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
	if (window.pageYOffset > sticky) {
	header.classList.add("sticky");
	} else {
	header.classList.remove("sticky");
	}
}
        

/*****==================================
 * Menu Active End
=====================================*****/
       
      





/*****==================================
 * ThemesBaza_news  Active Start
=====================================*****/     
     		  
$('.themesBazar_news').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	arrows: false,
	asNavFor: '.themesBazar_news2'
  });
  
  $('.themesBazar_news2').slick({
	slidesToShow: 4,
	slidesToScroll: 1,
	asNavFor: '.themesBazar_news',
	dots: false,
	arrows: true,
	// centerMode: true,
	focusOnSelect: true,
	autoplay: true,
	smartSpeed:1200,
	prevArrow: "<i Class='las la-angle-left'></i>",
    nextArrow: "<i class='las la-angle-right'></i>",
	responsive: [
		{
		  breakpoint: 1024,
		  settings: {
			slidesToShow: 3,
			slidesToScroll: 3,
			infinite: true,
		
		  }
		},

		{
		  breakpoint: 600,
		  settings: {
			slidesToShow: 2,
			slidesToScroll: 2
		  }
		},
		
		{
		  breakpoint: 480,
		  settings: {
			slidesToShow: 2,
			slidesToScroll: 1,
		  }
		},
		{
		  breakpoint: 350,
		  settings: {
			slidesToShow: 2,
			slidesToScroll: 1,
		  }
		}
	]
  });


/*****==================================
 * ThemesBaza_news Active End
=====================================*****/     



/*****==================================
 * ThemesBaza_video  Active Start
=====================================*****/     
     		  
$('.themesBazar_video').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	arrows: false,
	asNavFor: '.themesBazar_video2'
  });
  
  $('.themesBazar_video2').slick({
	slidesToShow: 4,
	slidesToScroll: 1,
	asNavFor: '.themesBazar_video',
	dots: false,
	arrows: true,
	// centerMode: true,
	focusOnSelect: true,
	autoplay: true,
	smartSpeed:1200,
	prevArrow: "<i Class='las la-angle-left'></i>",
    nextArrow: "<i class='las la-angle-right'></i>",
	responsive: [
		{
		  breakpoint: 1024,
		  settings: {
			slidesToShow: 3,
			slidesToScroll: 3,
			infinite: true,
		
		  }
		},

		{
		  breakpoint: 600,
		  settings: {
			slidesToShow: 2,
			slidesToScroll: 2
		  }
		},
		
		{
		  breakpoint: 480,
		  settings: {
			slidesToShow: 2,
			slidesToScroll: 1,
		  }
		},
		{
		  breakpoint: 350,
		  settings: {
			slidesToShow: 2,
			slidesToScroll: 1,
		  }
		}
	]
  });


/*****==================================
 * ThemesBaza_video Active End
=====================================*****/     




/*****==================================
 * PhotoGallery Active Start
=====================================*****/     
     		  
$('.themesBazar_gallery').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	arrows: false,
	asNavFor: '.themesBazar_gallery2'
  });
  
  $('.themesBazar_gallery2').slick({
	slidesToShow: 7,
	slidesToScroll: 1,
	asNavFor: '.themesBazar_gallery',
	dots: false,
	arrows: true,
	centerMode: true,
	focusOnSelect: true,
	autoplay: true,
	smartSpeed:1200,
	prevArrow: "<i Class='las la-angle-left'></i>",
    nextArrow: "<i class='las la-angle-right'></i>",
	responsive: [
		{
		  breakpoint: 1024,
		  settings: {
			slidesToShow: 3,
			slidesToScroll: 3,
			infinite: true,
		
		  }
		},

		{
		  breakpoint: 600,
		  settings: {
			slidesToShow: 2,
			slidesToScroll: 2
		  }
		},

		{
		  breakpoint: 480,
		  settings: {
			slidesToShow: 3,
			slidesToScroll: 1,
		  }
		}
	]
  });


/*****==================================
 * PhotoGallery Active End
=====================================*****/     

		$('.popup').magnificPopup({
			type: 'iframe'
		});



 /*========= Gallery Popup Active Start ==============*/  		
$('.themeGallery').magnificPopup({
	type: 'image',
	mainClass: 'mfp-with-zoom', 
	gallery:{
			enabled:true
		},

	zoom: {
	enabled: true, 

	duration: 500, // duration of the effect, in milliseconds
	easing: 'ease-in-out', // CSS transition easing function

	opener: function(openerElement) {

	return openerElement.is('img') ? openerElement : openerElement.find('img');
	}
	}

});

 /*========= Gallery Popup Active End ==============*/  	
   
       $("img.lazyload").lazyload();
        
       $( "#wordpress" ).datepicker();		     
        
    
 /*========= Live Popup Start ==============*/  
$('.modal-live').magnificPopup({
	type:'inline',
	closeBtnInside:true,
	autoFocusLast: true,
	focus:".modal-titles",
});

 /*========= Live Popup End ==============*/  

   /* =========================================
        COUNTDOWN 
     ========================================= */
	 $('#clock-b').countdown('2023/02/1').on('update.countdown', function(event) {
		var $this = $(this).html(event.strftime(''
		  + '<div class=""><span>%D</span> দিন </div>'
		  + '<div class=""><span>%H</span> ঘন্টা  </div>'
		  + '<div class=""><span>%M</span> মিনিট  </div>'
		  + '<div class=""><span>%S</span> সেকেন্ড </div>'));
	  });
  

 /*========= Top Scroll js Start ==============*/ 
 $(window).scroll(function(){
	if ($(this).scrollTop() > 100) {
		$('.themesBazar_scroll').fadeIn();
	} else {
		$('.themesBazar_scroll').fadeOut();
	}
});

//Click event to scroll to top
$('.themesBazar_scroll').on('click', function(){
	$('html, body').animate({scrollTop : 0},800);
	return false;
});

 /*========= Top Scroll js  End ==============*/          

 $(window).load(function(){        
	$('#myModal').modal('show');
	 }); 



});


  





}(jQuery));	