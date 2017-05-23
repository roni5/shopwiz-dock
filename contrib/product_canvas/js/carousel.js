(function($) {
       Drupal.behaviors.carousel = {
         attach: function(context, settings){
    $('.carousel[data-type="multi"] .item').each(function(){
 
var next = $(this).next();
 
if (!next.length) {
 
next = $(this).siblings(':first');
 
}
 
next.children(':first-child').clone().appendTo($(this));
 
for (var i=0;i<2;i++) {
 
next=next.next();
 
if (!next.length) {
 
next = $(this).siblings(':first');
 
}
 
next.children(':first-child').clone().appendTo($(this));
 
}
 
});
 
 
 $(function(){
        $('#fruitscarousel.slide').carousel({
            interval: 5000,
            pause: "hover"
        });
  
    $('input').focus(function(){
       $("#fruitscarousel").carousel('pause');
    }).blur(function() {
       $("#fruitscarousel").carousel('cycle');
    });
})
 
  
          }
        };
    })(jQuery);

