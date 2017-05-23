(function($) {
  Drupal.behaviors.addText = {
    attach: function(context, settings) {
   $("#add-text").on("click", function() {
    $(".alert").removeClass("in").show();
	$(".alert").delay(200).addClass("in").fadeOut(2000);
           return false;	
      });       

    }
  };
})(jQuery);
