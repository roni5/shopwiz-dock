(function($) {
  Drupal.behaviors.savedImage = {
    attach: function(context, settings) {
   $(".img-polaroid").on("click", function() {
    $(".lert").removeClass("in").show();
	$(".lert").delay(200).addClass("in").fadeOut(2000);
            return false;	
      });       

    }
  };
})(jQuery);
