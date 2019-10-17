jQuery(document).ready(function(){
	// ... accordion plugin ...
	jQuery(".about-right .fixed-answer").accordion({
		'collapsible' : true
	});

	// ... tooltip ...
	jQuery(".my-tooltip a").tooltip({
		'track' : true
	});

	

	// ... mixit up plugin ...


	jQuery(".filtering-content").mixItUp({
		'animation' : {
			'enable' : true,
			'effects' : 'translateX fade'
		}

	});
	jQuery(".portfolio-nav ul li a").click(function(){
		return false
	});

	// ... wow.js plugin ... 
	new WOW().init();

	// ... my custom js ...

	// document.addEventListener('contextmenu', event => event.preventDefault());


	// ... scroll menu settings ...


	jQuery(window).scroll(function(){
		var fromTop = jQuery(window).scrollTop();
		var myWidth = jQuery(window).width();

		if(fromTop>220 && myWidth>769){
			jQuery(".scroll-menu").show(1000);
		}
		else if(myWidth<769){
			jQuery(".scroll-menu").hide();
		}
		else{
			jQuery(".scroll-menu").hide();
		}
		
	});


	
	jQuery(window).resize(function(){
		var myWidth = jQuery(window).width();
		var fromTop= jQuery(window).scrollTop();

		if(myWidth>768 && fromTop>220){
			jQuey(".scroll-menu").show();
		}
	});


	// ... scroll menu-bar settings ....

	jQuery(".header-area .my-menubar").click(function(){
		jQuery(".header-area .main-menu ul li").slideToggle(1000);
	});


	// ...  my works menu settings .. 

	jQuery(".my-works .my-menu-hider").click(function(){
		jQuery(".my-works .portfolio-nav ul li").slideToggle(1000);

		return false;
	});

	// .... smooth scroller ....

	jQuery('a[href^="#"').click(function(e){

		var target = jQuery(this).attr('href');
		var strip = target.slice(1);
		var anchor = jQuery("[id='" + strip + "']");

		e.preventDefault();

		jQuery("html , body").animate({

			scrollTop : anchor.offset().top
		}, 'slow');


	});

	// ...my top scroll settings ...
	jQuery(window).scroll(function(){
		var meFromTop = jQuery(window).scrollTop();

		if(meFromTop >300){
			jQuery(".my-scroll-top").show(1000);
		}
		else{
			jQuery(".my-scroll-top").hide(200);
		}
	});





	
	
});