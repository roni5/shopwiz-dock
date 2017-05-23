(function($) {
  Drupal.behaviors.myModal = {
    attach: function(context, settings) {
       $('#myModal').on('shown.bs.modal', function () {
      $('#myInput').focus()


    });

    }
  };
})(jQuery);

