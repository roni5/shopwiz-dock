(function ($) {
  Drupal.behaviors.product_canvas_save = {
         attach: function (context, settings) {
      var canvas = document.getElementById('tcanvas');
          $('#product-canvas-save', context).click(function(){
  var imgData = getBase64Image(canvas);
 var data = {
    "file":{
    "file":imgData,
    "filename":"image.png",
    "filepath": "public://image.png" ,
  }
   //data = dataURL;
    //imgBase64: dataURL
};

  options = {
  type:"post",
  //data:imgData,
  data: JSON.stringify(imgData),
  url: Drupal.settings.basePath + 'canvas/file.json',
  JSON.stringify(obj),
  contentType: 'application/json',
  success:function(result){
    console.log(JSON.stringify(result));
      alert(result);
  }
};
$.ajax(options);   
    });
   }
  };

function getBase64Image(canvas) {
   //var canvas = document.createElement("tcanvas");
    //canvas.width = this.width;
    //canvas.height = this.height;
    var ctx = canvas.getContext("2d");
    //ctx.drawImage(imgElem, 0, 0);
      var image = new Image();
       //ctx.clearRect(0, 0, canvas.width, canvas.height);
        image.src = canvas.toDataURL("image/png");
    //var dataURL = canvas.toDataURL("image/png");
   // return  image.src.replace(/^data:image\/(png|jpg);base64,/, "");
       //document.getElementById('canvasImg').image.src ;
	console.log(image);
       return  image;
}


})(jQuery);
