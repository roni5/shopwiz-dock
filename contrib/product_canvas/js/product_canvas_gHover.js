(function($) {
  Drupal.behaviors.gHover = {
    attach: function(context, settings) {
         $('.pager').once('shown.bs.modal').mouseenter(function(){
            $('#myNext').modal('show');
         //$('#myModal').modal({ show: false});
          $(this).unbind('mouseenter mouseleave')

    });

    }
  };
})(jQuery);
