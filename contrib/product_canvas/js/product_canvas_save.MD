
(function ($) {
  Drupal.behaviors.product_canvas_save = {
         attach: function (context, settings) {

var canvas = document.getElementById('tcanvas');

          $('#product-canvas-save', context).click(function(){
var imgData = JSON.stringify(convertCanvasToImage(canvas));

      //var canvas = document.createElement("tcanvas").getContext('2d');
              //var canvas = document.createElement("tcanvas");
           // Converts canvas to an image
           var image = new Image();
	image.src = canvas.toDataURL("image/png");
         //var dataURL = canvas.toDataURL();
	var data = {
    "file":{
    "file":image.src,
    "filename":"image.png",
    "filepath": "public://image.png" ,
  }
   //data = dataURL;
    //imgBase64: dataURL
};
	  
  options = {
  type:"post",
  data:data,
  url: Drupal.settings.basePath + 'canvas/file.json',
  dataType: 'json',
  success:function(result){
    console.log(JSON.stringify(result));
  }
};
$.ajax(options);   
    });
   }
  };

 function convertCanvasToImage(canvas) {
         //var canvas = document.getElementById("tcanvas");
        var image = new Image();
        image.src = canvas.toDataURL("image/png");
        return image;
   }


})(jQuery);
