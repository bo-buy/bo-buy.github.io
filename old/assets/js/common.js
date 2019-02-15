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
	
	/*jQuery(document).ready(function($) {
        
       var owl=$('.ourpartners'); 
	owl.owlCarousel({
    //loop:true,
    //items:4,
    //margin:30,
    //autoplayTimeout:1000,
    //autoplay:true,
    //autoplayHoverPause:true,
    dots:false,
    nav:true,
    items:4,
    loop:true,
    margin:30,
    autoPlay: true,
    autoplayTimeout:1000,
    autoplayHoverPause:true,
    autoplaySpeed:2000,  
    responsive:{
            0:{
                items:0
            },
            600:{
                items:2
            },
            1000:{
                items:4
            }
        }
    });
$('.owl-next').click();
owl.trigger('owl.play',6000);
var block = false;
$(".owl-item").mouseenter(function(){
 if(!block) {
  block = true;
  owl.trigger('stop.owl.autoplay')
  block = false;
  }
});
$(".owl-item").mouseleave(function(){
 if(!block) {
  block = true;
  owl.trigger('play.owl.autoplay',[1000])
  block = false;
 }
});
 })

 
 */

	

	$('.ourpartners').owlCarousel({
    items:4,
    loop:true,
    margin:30,
	dots:false,
    nav:true,
    autoplay:true,
    autoplayTimeout:1000,
    autoplaySpeed:2000, 
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
    
    $('.ourpartners').on('load',function(){
        owl.trigger('play.owl.autoplay',[1000])
    });



// Hot Deals
	$('.hotdeals').owlCarousel({
	loop:true,
	margin:20,
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

		$('.tab-links a').on('click', function(e)  {
			var currentAttrValue = $(this).attr('href');

			// Show/Hide Tabs
			$('.tabs ' + currentAttrValue).show().siblings().hide();

			// Change/remove current tab to active
			$(this).parent('li').addClass('active').siblings().removeClass('active');

			e.preventDefault();
		});

	/*$(".tab-menu li a").click(function(){
	
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
		
	});*/

	});	

});