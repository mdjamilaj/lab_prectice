$(document).ready(function(){
	
	// Loader
	$("body").imagesLoaded().always(function(instance){
		$(".loader").delay(300).fadeOut(500);
	});
	
	
	// Navigation
	var navigation = new Navigation(document.getElementById("navigation"),{
		autoSubmenuIndicator: false
	});	
	
	var navigation_hidden = new Navigation(document.getElementById("navigation-hidden"),{
		autoSubmenuIndicator: false,
		breakpoint: 999999
	});
	if($("#btn-show").length > 0){
		document.getElementById("btn-show").addEventListener("click", navigation_hidden.toggleOffcanvas);
	}
	
	
	var navigation_animated = new Navigation(document.getElementById("navigation-animated"),{
		autoSubmenuIndicator: false
	});
	if(document.getElementById("navigation-animated")){
		window.onscroll = function setScrollAnimation(){
			var scrollPosY = window.pageYOffset | document.body.scrollTop;
			if(scrollPosY > 50){
				navigation_animated.classList.add("navigation-animated");
			}
			else{
				navigation_animated.classList.remove("navigation-animated");
			}
		}
	}
	
	
	// To top
	$(window).on("scroll", function(){
		if($(window).scrollTop() > 120){
			$(".to-top").addClass("visible");
		}
		else{
			$(".to-top").removeClass("visible");
		}
	})
	$(".to-top").on("click", function(){
		$("html, body").animate({
			scrollTop: 0
		}, 800);
	});
	
	
	// Get btn
	$("#get-btn").on("click", function(){
		var purchaseSectionTop = $(".purchase-section").offset().top;
		$("html, body").animate({
			scrollTop: purchaseSectionTop
		}, 1500);
	});
	
	
	// Example iframe
	function getUrlParameters(parameter, staticURL, decode){
	   var currLocation = (staticURL.length)? staticURL : window.location.search,
		   parArr = currLocation.split("?")[1].split("&"),
		   returnBool = true;

	   for(var i = 0; i < parArr.length; i++){
			parr = parArr[i].split("=");
			if(parr[0] == parameter){
				return (decode) ? decodeURIComponent(parr[1]) : parr[1];
				returnBool = true;
			}else{
				returnBool = false;            
			}
	   }

	   if(!returnBool) return false;  
	}
	
	if($("body.example").length > 0){
		$("iframe.example").attr("src", getUrlParameters("example", "", true) + ".html")
		if(getUrlParameters("example", "", true) == "fixed" || getUrlParameters("example", "", true) == "scroll" || getUrlParameters("example", "", true) == "hidden" || getUrlParameters("example", "", true) == "animated"){
			$("body").addClass("fixed-example");
		}
	}
	
	// Mobile button
	$(".btn-mobile").tooltip();
	$(".btn-mobile").on("click", function(){
		if($(".btn-mobile").children().hasClass("fa-mobile-alt")){
			$(".main-wrapper").addClass("mobile");
			$(".btn-mobile").children().removeClass("fa-mobile-alt").addClass("fa-laptop");
			$(".btn-mobile").attr("data-original-title", "Desktop view");
			$(".btn-mobile").tooltip('hide')
		}
		else{
			$(".main-wrapper").removeClass("mobile");
			$(".btn-mobile").children().addClass("fa-mobile-alt").removeClass("fa-laptop");
			$(".btn-mobile").attr("data-original-title", "Mobile view");
			$(".btn-mobile").tooltip('hide')
		}
	});
	
});