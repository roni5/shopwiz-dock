(function ($) {
  Drupal.behaviors.product_canvas = {
         attach: function (context, settings) {
          $('#product-canvas-save', context).click(function(){
           var canvData = document.getElementById('tcanvas').toDataURL();

            var request = $.ajax({
        type: "POST",   
        url: "/product_canvas/"+Drupal.settings.product_canvas.canvasNid+"/canvas-save",
                 //url: "/node/"+Drupal.settings.icon_editor.icon_node+"/icon-save",
         data: {imagedata: canvData},
        success: function(data, text_status) {
   //for now we reload the current page, which refreshes with our saved icon
          location.reload();
        }
      });

    });
   }
  };

})(jQuery);
