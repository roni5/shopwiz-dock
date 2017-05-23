(function ($) {
  Drupal.behaviors.product_canvas_webfont_loader = {
    attach: function() {
var WebFontConfig = {
  google: {
    families: [ 'Tangerine','Rancho::latin' ]
  },
  timeout: 2000
};

(function(){

  "use strict";

  var wf = document.createElement("script");
  wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
    '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
  wf.async = 'true';
  document.head.appendChild(wf);

})();

    }
  }
})(jQuery);
