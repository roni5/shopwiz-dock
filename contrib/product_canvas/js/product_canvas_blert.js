(function($) {
  Drupal.behaviors.blert = {
    attach: function(context, settings) {
   $("#product-canvas-save").on("click", function() {
    $(".blert").removeClass("in").show();
	$(".blert").delay(200).addClass("in").fadeOut(2000);
           return false;	
      });       

    }
  };
})(jQuery);
