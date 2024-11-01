 


(function($){
  $(function(){
	  
		
		
		
	  $("div.woocommerce-product-gallery__image").mouseover(function(){
		  //$("img").removeClass("zoomImg");
		  //var s = $("img.attachment-shop_single").width();
		  //alert(s);
		 if( device.desktop()== true){
			 
			
		
		 $('img.attachment-shop_single').elevateZoom({
			zoomWindowFadeIn: 500,
			zoomWindowFadeOut: 500,
			lensFadeIn: 500,
			lensFadeOut: 500,
			//galleryActiveClass: "active",
			easing : true });
			
		 }
		 
		 else{
			 $('img.attachment-shop_single').elevateZoom({
					zoomType  : "lens",
					lensShape : "round",
					lensSize  : 200
						});
			}
		    });
	  
	  
	

  }); // end of document ready
})(jQuery); // end of jQuery name space page-footer blue
