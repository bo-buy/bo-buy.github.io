$(document).ready(function(e) {
    

	// Sticky Header
	$(window).scroll(function(){
	if ($(window).scrollTop() >= 300) {
	   $('#header').addClass('sticky');
	   //alert("hi");
	}
	else {
	   $('#header').removeClass('sticky');
	}
	});
	
	// Our Partners
	$('.ourpartners').owlCarousel({
    loop:true,
    margin:30,
	dots:false,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
	})
// Hot Deals
	$('.hotdeals').owlCarousel({
	loop:true,
	margin:30,
	dots:false,
	nav:true,
	loop:false,
	responsive:{
		0:{
			items:1
		},
		600:{
			items:3
		},
		1000:{
			items:4
		}
	}
	})
	// Tab
	$(".tab-container").hide();
	$("#central").show();
	$(document).ready(function(){
	$(".tab-menu li a").click(function(){
	
	if(!$(this).parent().hasClass('active')){
	//alert("test");
	$(this).parent().addClass("active");
	$(this).parent().siblings().removeClass("active");
	$(".tab-container").slideUp();
	var tabmenu = $(this).attr("href");
	$(tabmenu).slideDown();
		
	}
	
	else{
		//alert("hi");
	}
		
	});
	});	

});