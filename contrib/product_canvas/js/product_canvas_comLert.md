(function($) {
  Drupal.behaviors.comLert = {
    attach: function(context, settings) {
   $("#edit-submit").on("click", function() {
    $(".lert").removeClass("in").show();
	$(".lert").delay(200).addClass("in").fadeOut(2000);
           return false;	
      });       

    }
  };
})(jQuery);
