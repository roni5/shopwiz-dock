(function ($) {
Drupal.behaviors.product_canvas_save = {
    attach: function (context, settings) {
var canvas = document.getElementById('tcanvas');
          $('#product-canvas-save', context).click(function(){
var imgData = JSON.stringify(convertCanvasToImage(canvas));
var data = {
  "file":{
    "file":imgData ,
    "filename":"image.png",
     "filepath": "public://image.png" ,
  }
};
// Obtain session token.
$.ajax({
  url:"?q=services/session/token",
  type:"get",
  dataType:"text",
  error:function (jqXHR, textStatus, errorThrown) {
    alert(errorThrown);
  },
  success: function (token) {

options = {
  type:"post",
  data:imgData,
  url: Drupal.settings.basePath + 'canvas/file.json',
  dataType: 'json',  // type of data that you're expecting back from the server.
  beforeSend: function (request) {
        request.setRequestHeader("X-CSRF-Token", token);
		      },
      error: function (jqXHR, textStatus, errorThrown) {
        alert(errorThrown);
      },
  success:function(data){
     alert('Hello user #' + data.user.uid);
    //console.log(JSON.stringify(result));
  }
 }
)};
$.ajax(options);
                //document.getElementById("canvasImg").src = canvas.toDataURL();
               //alert('OK');
        });
    }

 function convertCanvasToImage(canvas) {
         //var canvas = document.getElementById("tcanvas");
        var image = new Image();
        image.src = canvas.toDataURL("image/png");
        return image;
   }
   };
 }
})(jQuery);

