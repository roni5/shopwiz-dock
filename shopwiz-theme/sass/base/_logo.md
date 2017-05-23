   .flexslider  , #flexslider-1{
      margin:0px !important;
       box-sizing:content-box ;
       border-bottom-width: 1px;
       width:98%;
       //min-width:130px;
 }

  .flexslider .slides > li {
     list-style-type: none;   
     box-sizing: content-box;
     border-bottom-width: 0px;
    }

      .flexslider , .slides img {
       list-style-image: none;
      box-sizing:content-box ;
      margin:0;
      margin-bottom:-18px;
  }
 
   .flex-active-slide {
      margin:0;
       margin-bottom:-18px;
       box-sizing:content-box ;
     border-bottom-width: 1px;  
}

    .flex-active-slide img {
       list-style-image: none; 
       margin:0;
       margin-bottom:-18px;
       box-sizing:content-box ;
       border-bottom-width: 1px;  
}

 .my_logo { 
       position:relative;
       margin:0;
       box-sizing:content-box ;
       border-style:none !important;
      min-width: 20px;
 }
 

.rsvg {
   // background: transparent url("https://webital.co.uk/profiles/commerce_kickstart/themes/webital/smaller_logo.svg") no-repeat scroll ;
    display: inline-block;
   // padding-bottom: 2.5em;
   // padding-top:1.5em;
    //height: 50px;
    //margin-left: 0;
    //text-indent: -9999px;   
    //width: 100%;
    //border-style:none;
}

   .logo-text { 
  font-family:Roboto;
  background-color:transparent!important;
  left:0.5%;
  box-sizing:content-box ;
  position:absolute; height:100%;width:100%;
  bottom:0.5%;
  font-size:0.5rem;
  line-height:0.6em;
  max-height:1.2em;
  max-width:1.4em;
  vertical-align:text-bottom;
  white-space:nowrap;
  margin:0;padding:0;
  line-height:0.7em;
  color:#212121;text-shadow:0 2px 4px rgba(0,0,0,.5);
  letter-spacing:0; 
 }
 
 /*.logo-text b { font-weight:700;color:#efefef; }*/
 
/*MQ 400px*/
@media only screen and (min-width:30em) { .my_logo { width:100%; height:100%; margin:0; }
.my_logo { margin:0; box-sizing:content-box ;}
 .logo-text { font-size:1em;height:1.3em; width:100%;line-height:1.5em; } }

/*MQ 600px*/
@media only screen and (min-width:35em) { .my_logo { width:500px; }
.logo-text { 
background-color:transparent;
line-height:1.21em;font-size:1rem;
 box-sizing:content-box ;
text-align:bottom-left;
height:1.7em;
vertical-align:text-bottom;
height:100%; width:100%;
position:absolute;
bottom:2.4%;
left:2.4% 
}

.logo-text b { font-size:16px; font-size:1rem;display:block; } }
 
/*MQ 1382px*/
@media only screen and (min-width:65em) { .my_logo { width:580px; }
/*.logo-text { box-sizing:content-box ; 
height:4em;
bottom:1.5%;font-size:100%;vertical-align:text-bottom;
}*/

 .logo-text { 
background-color:transparent;
box-sizing:content-box ; 
vertical-align:text-bottom;
bottom:4%;
left:4%;
height:1.5em;
font-size:1.25em;
font-size:1rem;
  }
 }
