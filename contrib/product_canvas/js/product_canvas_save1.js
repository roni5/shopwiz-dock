
(function ($) {
  Drupal.behaviors.product_canvas_save = {
         attach: function (context, settings) {
//document.getElementById(elmId).innerHTML = value;
//var canvas = document.getElementById('tcanvas');

var imgElem = document.getElementById('img');
$('#urlText').keyup(function(){
   $('#img').attr('src',$('#urlText').val());
});

          $('#product-canvas-save', context).click(function(){
//var imgData = JSON.stringify(convertCanvasToImage(canvas));
var imgData = JSON.stringify(getBase64Image(imgElem));
      //var canvas = document.createElement("tcanvas").getContext('2d');
              //var canvas = document.createElement("tcanvas");
           // Converts canvas to an image
           //var image = new Image();
	//image.src = canvas.toDataURL("image/png");
         //var dataURL = canvas.toDataURL();
	//var data = {
    //"file":{
    //"file":imgData,
    //"filename":"image.png",
    //"filepath": "public://image.png" ,
  //}
   //data = dataURL;
    //imgBase64: dataURL
//};
	  
  options = {
  type:"post",
  data:imgData,
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

 //function convertCanvasToImage(canvas) {
        //var canvas = document.getElementById("tcanvas");
        //var image = new Image();
        //image.src = canvas.toDataURL("image/png");
        //return image;
   //}
function getBase64Image(imgElem) {
 var canvas = document.createElement("tcanvas");
    canvas.width = imgElem.clientWidth;
    canvas.height = imgElem.clientHeight;
    var ctx = canvas.getContext("2d");
    ctx.drawImage(imgElem, 0, 0);
    var dataURL = canvas.toDataURL("image/png");
    return dataURL.replace(/^data:image\/(png|jpg);base64,/, "");
}


})(jQuery);
