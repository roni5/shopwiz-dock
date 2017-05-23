(function($) {
  Drupal.behaviors.myConfirm = {
    attach: function(context, settings) {
      $('#edit-submit').click( function(){
                $('#success-message').dialog(); 
                //return false;				               
                //$('#myConfirm').show(); 
               //$('#myConfirm').modal('show')
          
    });

    }
  };
})(jQuery);

