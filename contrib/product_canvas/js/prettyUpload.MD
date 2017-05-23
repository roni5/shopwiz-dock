(function($) {
  Drupal.behaviors.prettyUpload = {
    attach: function(context, settings) {
      //$('.form-managed-file').once('prettyupload', function() {
         //$('.form-item input.form-file[value=browse]', context).hide();
       $('.form-item input.form-file').hide().after('<button class="mybutton">UPLOAD</button>');
        // hide the ugly "choose file" button, add a placeholder that is CSS friendly
       //$('.form-managed-file .form-file').hide().after('<button class="mybutton">UPLOAD</button>');
        $('.upload-fake').on('click',function(e){
          $(this).prev().click();
          e.preventDefault();
        });
        
        // submit the form when the file is picked.      
        $('form', context).on('change','input.form-file', function() {  
          $(this).next().next().mousedown();
        });
        
      });
    //}
  };
})(jQuery);

