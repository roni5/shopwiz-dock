(function($) {
  Drupal.behaviors.plert = {
    attach: function(context, settings) {
   $(".img-polaroid").on("click", function() {
    $(".alert").removeClass("in").show();
	$(".alert").delay(200).addClass("in").fadeOut(2000);
           return false;	
      });       

    }
  };
})(jQuery);
