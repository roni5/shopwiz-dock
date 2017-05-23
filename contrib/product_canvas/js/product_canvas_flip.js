(function ($) {
  Drupal.behaviors.canvasFlip = {
    attach: function(context, settings) {
     var $img    = $(".tshirtFacing")
    , $container = $("#remove_image");
  $('#flip').click(
		   function() {
                                $img.remove();
                                $container.removeClass().removeAttr("id");
                                $("#tshirtFacing").attr("src","https://shopwiz.net/profiles/commerce_kickstart/modules/contrib/product_canvas/img/crew_front.png");
			   	if ($(this).attr("data-original-title") == "Switch Female View") {
			   		$(this).attr('data-original-title', 'Switch Male View');
			        $("#tshirtFacing").attr("src","https://shopwiz.net/profiles/commerce_kickstart/modules/contrib/product_canvas/img/womens_crew_front.png");
			        a = JSON.stringify(canvas);
			        canvas.clear();
                                try
			        {
			           var json = JSON.parse(b);
			           canvas.loadFromJSON(b);
			        }
                                catch(e)
			        {}
                               } else {
			    	$(this).attr('data-original-title', 'Switch Female View');
			    	$("#tshirtFacing").attr("src","https://shopwiz.net/profiles/commerce_kickstart/modules/contrib/product_canvas/img/crew_front.png");
			    	b = JSON.stringify(canvas);
			    	canvas.clear();
                                try
			        {
			           var json = JSON.parse(a);
			           canvas.loadFromJSON(a);
			        }
                                catch(e)
                                  {}
                          }		                              
			   	canvas.renderAll();
			        setTimeout(function() {
			        canvas.calcOffset();
      			    },200);
              });
    }
  };
})(jQuery);

