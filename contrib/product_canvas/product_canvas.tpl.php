<?php

/**
 * @file
 * A basic template for Product Canvas entities
 *
 * Available variables:
 * - $content: An array of content items. Use render($content) to print them
 *   all, or print a subset such as render($content['field_example']).
 *   Use hide($content['field_example']) to temporarily suppress the printing
 *   of a given element.
 * - $title: The name of the entity
 * - $url: The standard URL for viewing a entity
 * - $page: TRUE if this is the main view page $url points too.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. By default the following classes are available, where
 *   the parts enclosed by {} are replaced by the appropriate values:
 *   - entity-profile
 *   - product_canvas-{TYPE}
 *
 * Other variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 *
 * @see template_preprocess()
 * @see template_preprocess_entity()
 * @see template_process()
 */
?>
 <div class="clearfix"></div>
<div class="spacer"></div>
 <!-- <section id="typography"></div>-->
<div class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>>
        <a href="<?php print $url; ?>"><?php print $title; ?></a>
    </h2>
  <?php endif; ?>

  <div class="spacer"></div>
  <div class="content"<?php print $content_attributes; ?>>
 <?php
   hide($content['comments']);
   hide($content['links']);
   hide($content['field_tags']); ?>
  </div>
  <div class="spacer"></div>
  <div class="clearfix"></div>
<div class="container">      
 <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 pull-right">
    <div class="alert alert-danger alert-dismissible fade" role="alert">
      <button type="button" class="close" data-dismiss="alert">&#215;</button>
       <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
      Added to T-Shirt <strong> Editor </strong>
     </div>
 </div>
 </div>
  <div class="container-fluid">
   <div class="row">
       <div class="spacer"></div>
   <div id="box" class="col-xs-12 col-sm-6 col-md-6 col-lg-6" >
       <div class="classWithPad"> 
<div class="spacer1"></div>
<a href="#" title="Type inside box" data-toggle="popover" data-trigger="hover" data-placement="bottom"> 
<span class="label mylabel ">Add Texts</span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="#"><span class="glyphicon glyphicon-info-sign"  data-toggle="modal" data-target="#myModal"></span></a>
<div id="myModal"  class="modal  fade " tabindex="-1" role="dialog" aria-labelledby="myModal">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&#215;</button>
          <h4 class="modal-title"  id="myModalLabel">Words to T-Shirt</h4>
        </div>
      <div class="modal-body">
     <p class="bg-danger">Press <strong> [>>] </strong> Button to send words to <strong> T-shirt</strong>.</p>
     <div class="h-divider"></div>
     <p class="text-primary">Fire over words separately, to keep your design flexible</p>
      <div class="h-divider"></div>
     <p  class="bg-warning">Depending on your screen size, the Text might be Hidden try a long word to <strong> test</strong> !</p>
      </div>
    <div class="modal-footer">
            <button class="btn btn-default btn-sm" data-dismiss="modal" aria-hidden="true">Close</button>
       </div>
    </div>

  </div>
</div>     
 <div class="spacer"></div>
   <div id="box" class="shadow-2">
   <div class="form-control input-lg input-group input-group-lg">
   <input "class="col-xs-12 col-sm-8 col-md-8 col-lg-8 form-control input-lg" id="text-string" type="text" placeholder="add text here..." autocomplete="off">
   <button   id="add-text" class="mybutton" style="padding:0.2em 0.6em 0.4em 1.3em;" data-toggle="button" data-placement="bottom" data-original-title="Add Words" type="button" value="add-text" >
<svg width="34px" height="40px" viewBox="0 0 2099.651 1284.951" xmlns="http://www.w3.org/2000/svg">
<path d="M109 1651q-19 19-32 13t-13-32v-1472q0-26 13-32t32 13l710 710q8 8 13 19v-710q0-26 13-32t32 13l710 710q19 19 19 45t-19 45l-710 710q-19 19-32 13t-13-32v-710q-5 10-13 19z"/></svg>
</button>
<span class="bar"></span>
</div>
</div>
</div>
</div>  

  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
    <div class="classWithPad"> 
<a href="#" title="Click on Images" data-toggle="popover" data-trigger="hover" data-placement="bottom">
 <span class="label mylabel">New graphics</span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <a href="#"><span class="glyphicon glyphicon-info-sign"  data-toggle="modal" data-target="#myModal2"></span></a>
<div id="myModal2"  class="modal  fade " tabindex="-2" role="dialog" aria-labelledby="myModal">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&#215;</button>
          <h4 class="modal-title"  id="myModalLabel">Graphic & Images</h4>
        </div>
      <div class="modal-body">
      <p class="bg-primary">Click on <strong>images</strong> to send to T-shirt<strong> Editor</strong></p> 
     <div class="h-divider"></div>
      <p class="text-danger">After Uploading, your image Click on uploaded images.</p>
     <div class="h-divider"></div> 
     <p  class="bg-info">Add <strong>Graphics</strong> section below, holds all graphics Click <strong>Next </strong>see more</p>
       <div class="modal-footer">
            <button class="btn btn-default btn-sm" data-dismiss="modal" aria-hidden="true">Close</button>
        </div>
    </div>
  </div>
</div>

</div>
 
 <div class="spacer">
 <?php   print views_embed_view('graphic_view', 'attachment_1');   ?> 
</div>
</div>
</div>
</div>
  <div class="clearfix"></div>
<div class="row">
 <div class="spacer"></div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" >
   <div class="classWithPad"> 
 <div class="form-group">
 <span class="label mylabel">Choose Font</span>
<label for="font-control input-lg" data-original-title="Font" class="control-label">Fonts&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" height="24" fill="#000000">
    <path d="M5 17v2h14v-2H5zm4.5-4.2h5l.9 2.2h2.1L12.75 4h-1.5L6.5 15h2.1l.9-2.2zM12 5.98L13.87 11h-3.74L12 5.98z"/>
    <path fill="none" d="M0 0h24v24H0z"/>
</svg></label>
<select id="font-control" class="col-sm-10 form-control custom input-lg" name="font-control" placeholder="Font"  data-width="fit">
    <option value="bubblegum_sansregular"  class="bubblegum_sansregular">bubblegum</option>
    <option value="comfortaalight" class="comfortaa">Cool</option>
    <option value="Rancho"  class="Rancho">Rancho</option>
    <option value="dynalightregular"  class="Dynalight">Dynalight</option>
    <option value="Jolly Lodger" class="JollyLodger" > Jolly Lodger</option>
    <option value="chunkfiveroman" class="chunkfiveroman"Chunky">Chunky</option>
    <option value="'marck_scriptregular"   class="McScript" >McScript</option>
    <option value="Arial" class="Arial">Arial</option>
    <option value="Times New Roman"  class="TimesNewRoman">Times</option>
 </select>
  </div>
</div>
</div> 
  
  <div class="  col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
   <div class="classWithPad">
    <div id="box" class="shadow-2">
  &nbsp;<a href="#" title="Click inside Color-box" data-toggle="popover" data-trigger="hover" data-placement="right"><span class="label mylabel">Text Colors</span></a>
    <div class="spacer1"></div>
    <div class="spacer1"></div>
 <div class="input-group input-group-lg">&nbsp;&nbsp;&nbsp;
    <a class="btn btn-default btn-lg" type="button"  data-toggle="button"  href="#" rel="tooltip" data-placement="top" data-original-title="Hex Code">
<input  type="hidden-input"  id="text-fontcolor" class="color-picker" size="7" value="#EB038A"></a>
<div class="btn-group btn-lg" role="group"  aria-label="group one" >
 <button id="text-bold" class="btn  btn-default  btn-responsive btn-lg" type="button" data-toggle="button"  data-placement="bottom"    data-original-title="Bold">
<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAWCAMAAADzapwJAAAACVBMVEXw8O7///8AAABJxInrAAAAAnRSTlMAAHaTzTgAAAAiSURBVHgBY2DECgadMBMUMKAKM4CEQARFwrQzG+HuQRewAANSAgqVQbLzAAAAAElFTkSuQmCC">
 </button>
<button id="text-italic" class="btn btn-default  btn-responsive  btn-lg" type="button" data-toggle="button"  data-placement="bottom"   data-original-title="Italic">
<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAWCAMAAADzapwJAAAAD1BMVEXw8O7///8AAABfb4+ViG2f0t5xAAAAAnRSTlMAAHaTzTgAAAA3SURBVHgBzcoxFkAAEMTQkXX/M2MaRbYn5X/JsfY7zh1P5sAZ80AWhjF3Nnc2dzbDmGnit8/4AtdUAdxckYFYAAAAAElFTkSuQmCC ">
 </button>
<button id="text-strike" class="btn btn-default btn-responsive btn-lg" type="button" data-toggle="button"  data-placement="bottom"   data-original-title="strike">
<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAWCAMAAADzapwJAAAACVBMVEXw8O7///8AAABJxInrAAAAAnRSTlMAAHaTzTgAAAA6SURBVHgB1dDBCcBACETRn9d/0TmJZEkDO8fnCGLPb67gSkGFD6eklrHccma27Mi0NQtHO/aSGz74AuAjAekVgl0SAAAAAElFTkSuQmCC">
 </button>
<button id="text-underline" class="btn btn-default  btn-responsive  btn-lg"  type="button" data-toggle="button"  data-placement="bottom"    data-original-title="Underline">
<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAWCAMAAADzapwJAAAADFBMVEXw8O7///8AAABfb4/UPEPlAAAAAnRSTlMAAHaTzTgAAAAxSURBVHgBY2DECgadMBMQMIAIVGEGoCgDiBgMwswMzJjCQHGQ09GFYQDNlzBAh4AFAOa2AeyoIc2MAAAAAElFTkSuQmCC">
 </button>
</div> <!--group-end --> 
</div> <!--shadow --> 
</div> <!--pad-end -->
</div> <!--col-end --> 
</div><!--row-end -->
 
 <div class="row">
   <div class="clearfix"></div> 
  <div class="spacer"></div>
  <div class="  col-xs-12  col-sm-8 col-md-6 col-lg-6 ">
   <div class="classWithPad">
<div class="panel-header"><h1>
 <a href="#"   title="Change T-Shirt Color" data-toggle="popover" data-trigger="hover" data-placement="bottom">
<span class="label mylabel">T-shirt Colors</h1></span></a></div>   
     <div id="box" class="shadow-3"> 
     <div class="well">
      <ul class="list-inline" role="group" aria-labelledby="preview"  data-original-title="Click on a Color">
        <li class="color-preview" title="White" style="background-color:#ffffff;"></li>
        <li class="color-preview" title="Dark Heather" style="background-color:#616161;"></li>
        <li class="color-preview" title="Gray" style="background-color:#f0f0f0;"></li>
        <li class="color-preview" title="Charcoal" style="background-color:#5b5b5b;"></li>
        <li class="color-preview" title="Black" style="background-color:#222222;"></li>
        <li class="color-preview" title="Heather Orange" style="background-color:#fc8d74;"></li>
        <li class="color-preview" title="Heather Dark Chocolate" style="background-color:#432d26;"></li>
	<li class="color-preview" title="Dark Chocolate" style="background-color:#382d21;"></li>
	<li class="color-preview" title="Citrus Yellow" style="background-color:#faef93;"></li>
	<li class="color-preview" title="Irish Green" style="background-color:#1f6522;"></li>
	<li class="color-preview" title="Scrub Green" style="background-color:#13afa2;"></li>
	<li class="color-preview" title="Teal Ice" style="background-color:#b8d5d7;"></li>
        <li class="color-preview" title="Heather Sapphire" style="background-color:#15aeda;"></li>
	<li class="color-preview" title="Sky" style="background-color:#a5def8;"></li>
	<li class="color-preview" title="Antique Sapphire" style="background-color:#0f77c0;"></li>
	<li class="color-preview" title="Cherry Red" style="background-color:#c50404;"></li>
    </ul>
  </div><!--well-->
  </div><!--well-->
  </div> <!--pad-end --> 			   
   </div> <!--col-->
 <div class="  col-xs-12  col-sm-8 col-md-6 col-lg-6">
  <div class="classWithPad"> 
<div id="box" class="shadow-2">
<a href="#"  data-original-title="blue Bars item selected" data-toggle="popover" data-trigger="hover" data-placement="bottom">
 <span class="label mylabel">Selected Item</span></a>&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="btn-group" role="group" aria-label="group two">
  <button class="rotate mybutton" id="send-to-back" type="button" data-toggle="buttons"  aria-label="send-to-back"  title="Send to Back">
    <svg viewBox="0 0 2034.651 1199.651" height="34px" width="19px" xmlns="http://www.w3.org/2000/svg">
      <path d="M1747 141q19-19 32-13t13 32v1472q0 26-13 32t-32-13l-710-710q-9-9-13-19v710q0 26-13 32t-32-13l-710-710q-9-9-13-19v678q0 26-19 45t-45 19h-128q-26 0-45-19t-19-45v-1408q0-26 19-45t45-19h128q26 0 45 19t19 45v678q4-11 13-19l710-710q19-19 32-13t13 32v710q4-11 13-19z">
    </svg>
  </button></div>&nbsp; &nbsp;
 <div class="btn-group" role="group">
    <button class="rotate mybutton" id="bring-to-front" type="button" data-toggle="buttons"  aria-label="bring-to-front"  title="bring-to-front" data-placement="bottom">
    <svg width="19px" height="34px" viewBox="0 0 1901.651 1528.951" xmlns="http://www.w3.org/2000/svg">
      <path d="M45 1651q-19 19-32 13t-13-32v-1472q0-26 13-32t32 13l710 710q8 8 13 19v-710q0-26 13-32t32 13l710 710q8 8 13 19v-678q0-26 19-45t45-19h128q26 0 45 19t19 45v1408q0 26-19 45t-45 19h-128q-26 0-45-19t-19-45v-678q-5 10-13 19l-710 710q-19 19-32 13t-13-32v-710q-5 10-13 19z">
    </svg>
   </button></div>&nbsp;&nbsp;
    <div class="btn-group" role="group">  
<button id="remove-selected" class="btn-responsive mybutton"  type="button" data-toggle="buttons" aria-label="remove-selected"  title="Delete item">
  <svg width="24px" height="32px" viewBox="4 0 1699.999 1449.981" xmlns="http://www.w3.org/2000/svg">
<path d="M704 736v576q0 14-9 23t-23 9h-64q-14 0-23-9t-9-23v-576q0-14 9-23t23-9h64q14 0 23 9t9 23zm256 0v576q0 14-9 23t-23 9h-64q-14 0-23-9t-9-23v-576q0-14 9-23t23-9h64q14 0 23 9t9 23zm256 0v576q0 14-9 23t-23 9h-64q-14 0-23-9t-9-23v-576q0-14 9-23t23-9h64q14 0 23 9t9 23zm128 724v-948h-896v948q0 22 7 40.5t14.5 27 10.5 8.5h832q3 0 10.5-8.5t14.5-27 7-40.5zm-672-1076h448l-48-117q-7-9-17-11h-317q-10 2-17 11zm928 32v64q0 14-9 23t-23 9h-96v948q0 83-47 143.5t-113 60.5h-832q-66 0-113-58.5t-47-141.5v-952h-96q-14 0-23-9t-9-23v-64q0-14 9-23t23-9h309l70-167q15-37 54-63t79-26h320q40 0 79 26t54 63l70 167h309q14 0 23 9t9 23z">
</svg> 
</button></div>&nbsp;&nbsp;
  </div>  <!--btngrp-->
 </div>   <!--shadow-end -->
 </div>   <!--pad-end -->
  </div>
 </div> <!--row-end first is big-->
<div class="clearfix"></div>
 <div class="row">  
 <div class="spacer"></div>
  <div class="blert alert-success alert-dismissible fade" role="alert">
      <button type="button" class="close" data-dismiss="alert">&#215;</button><strong>Saving ... </strong> Preview below <strong> Editor !</strong> <p class="text-danger">Background is "initial" <strong> White</strong> until you choose Size/Color in <strong>Stock</strong></p> 
  </div>
 <div class="col-xs-12  col-sm-6 col-md-6 col-lg-6">
 <div class="classWithPad ">
<a href="#"  data-original-title="Editable Area" data-toggle="popover" data-trigger="hover" data-placement="bottom">
<span class="label mylabel pull-left">T-shirt Editor</span><a/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="#"><span class="glyphicon glyphicon-info-sign"  data-toggle="modal" data-target="#myModal3"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <button id="flip" type="button" class="btn btn-xs" title="Switch Female View"  style="border-color:#ff0099; border-width: 2px; padding:2px 2px;"><img  src="data:image/jpeg;base64,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"></img></span></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button id="product-canvas-save" class="btn-responsive mybutton text-center" type="submit" value="product-canvas-save" data-original-title="Save design"><span>save</span></button>
 <div class="spacer"></div>
 <div id="shirtDiv" class="page">
<div id="remove_image" class="remove_image">
<p class="tshirtFacing"></p>
</div> 
<img id="tshirtFacing"></img>
   <div id="drawingArea" >
   <canvas id="tcanvas" width="200" height="400"></canvas>
           </div><!--classWithpad -->
        </div><!--drawing area -->
      </div> <!--tshirt div -->
   </div><!--col-end -->
 
 <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">


    <div class="classWithPad">    
  <a href="#"  data-original-title="After Upload click on image" data-toggle="popover" data-trigger="hover" data-placement="bottom">   
   <span class="label mylabel">Upload Image</span></a>
      <div id="box" class="shadow-2">         
<?php $form = drupal_get_form('product_canvas_upload_form');?>
<?php print drupal_render($form);?>

 </div><!--shadow-->
 </div><!--addClassPad-->   
 </div><!--col-->
<div id="myModal3"  class="modal  fade " tabindex="-3" role="dialog" aria-labelledby="myModal">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&#215;</button>
          <h4 class="modal-title"  id="myModalLabel">Editor</h4>
        </div>
      <div class="modal-body">
       <p class="text-primary">Click on item to resize/rotate by dragging Blue Handlebars</p>
        <div class="h-divider"></div>        
       <p>Adding text & images together, requires you to either: Send the Image back &nbsp;<span class="rotate glyphicon glyphicon-backward"></span> or Bring the Text Forward &nbsp;<span class="rotate glyphicon glyphicon-forward"></span></p>
        <div class="h-divider"></div>
        <p class="text-danger">Click <strong>outside</strong> of Handlebars BEFORE saving</p>
      <div class="modal-footer">
            <button class="btn btn-default btn-sm" data-dismiss="modal" aria-hidden="true">Close</button>
        </div>
    </div>
  </div>
</div>
</div>

</div>  <!--endrow-->

 <div class="clearfix"></div>
<div class="row">
 <div class="spacer"></div>
<div class="col-xs-12 col-sm-6 col-md-6  col-lg-6">
 <div class="classWithPad">
 <div id="box" class="shadow-2">
<div class="well">
<a href="#"  data-original-title="Preview: Background-color changes after selecting color & size" data-toggle="popover" data-trigger="hover" data-placement="top">
 <span class="label mylabel">Saved Design</span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <a href="#"><span class="glyphicon glyphicon-info-sign"  data-toggle="modal" data-target="#myModal4"></span></a><br/>

<div class="saveDiv img-polaroid"> <?php print render($content['field_saved_images']); ?> </div>
 </div><!--addClassPad--> 
</div><!--well-->
</div><!--addClassPad-->
</div> <!--col-->
 <div id="myModal4"  class="modal  fade " tabindex="-4" role="dialog" aria-labelledby="myModal">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&#215;</button>
          <h4 class="modal-title"  id="myModalLabel">Saved Design</h4>
        </div>
      <div class="modal-body">
      <p class="bg-danger">Your saved design <strong> background</strong>  is initial<strong> white</strong>. Until you </strong>click on</strong> the available colors in stock. </p>
      <div class="h-divider"></div>
     <p class="text-danger"><strong>Saved Design</strong> background Color reflects basket only <strong>"Once"</strong> when you choose Size/Color </p>  
    <div class="h-divider"></div>
      <p  class="text-info">Preview will be replace when you save again.</p>
       <div class="modal-footer">
            <button class="btn btn-default btn-sm" data-dismiss="modal" aria-hidden="true">Close</button>
        </div>
    </div>
  </div>
</div>
</div>

<div class="col-xs-12 col-sm-6 col-md-6  col-lg-6">
<div class="classWithPad">
<a href="#" title="Click on Images" data-toggle="popover" data-trigger="hover" data-placement="bottom">
 <span class="label mylabel">Add Graphics</span></a>
<div class="spacer"> </div>

<div id="myNext"  class="modal  fade " tabindex="-2" role="dialog" aria-labelledby="myNext">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&#215;</button>
          <h4 class="modal-title"  id="myModalLabel">Your Design</h4>
        </div>
      <div class="modal-body">
      <p class="bg-danger"><strong>PLEASE STOP ! </strong> DO NOT Click Next<strong> You "Must" SAVE</strong>  <span class="glyphicon glyphicon-exclamation-sign"></span></p>
      <p class="bg-danger">Your <strong> Design "FIRST"</strong> As the page gets Refreshed</p>
     <div class="h-divider"></div>
      <p class="text-danger">After finding Graphic from the Gallery.</p>
       <p  class="bg-danger">Re apply: <strong> Images</strong>  by "Clicking" on Them </p>
       <div class="modal-footer">
            <button class="btn btn-default btn-sm" data-dismiss="modal" aria-hidden="true">Close</button>
        </div>
    </div>
  </div>
</div>
</div>
 
  <?php   print views_embed_view('graphic_view', 'block'); ?>
 
</div><!--addClassPad-->

</div><!--col-->
</div><!--row-->
<div class="col-xs-12 col-sm-6 col-xs-12 col-md-6  col-lg-6">
 <div class="classWithPad">
 <div id="box" class="shadow-2">
<div class="well">
    <?php print render($content['product:commerce_price']); ?><br/> 
    <?php print render($content['field_product']); ?>
</div><!--shadow-->
</div><!--well-->
</div><!--addClassPad-->
</div><!--col-->

<div class="col-xs-12 col-sm-6 col-xs-12 col-md-6  col-lg-6">
<div class="classWithPad">
<div class="spacer"></div>
<?php
  //$block = block_load('commerce_cart', 'cart');
  $block = block_load('dc_ajax_add_cart', 'ajax_shopping_cart');
  $content = _block_get_renderable_array(_block_render_blocks(array($block)));
  $output = drupal_render($content); 
  print $output;
?>
<?php    if (!empty($commerce_add_to_cart_confirmation_messages)) {
         print render($commerce_add_to_cart_confirmation_messages);
      //print views_embed_view('confirm_message_product_display','block_1');
    }
?>

</div><!--addClassPad-->
</div><!--col-->
</div><!--row-->
<div class="clearfix"></div>
<div class="spacer"> </div>
<div class="pane-content">
<?php print  render($content);?>
<?php print render($content['field_image']); ?>
<?php print render($content['field_product_images']); ?>
</div>
<div class="clearfix"></div>
<div class="spacer"> </div>
<?php if (!empty($content['field_tags']) || !empty($content['links'])): ?> 

<div>  <?php print render($content['field_tags']); ?></div>  
        <?php print render($content['links']); ?>
  <div class="clearfix"></div>
<!-- /container -->
<footer>
  <?php endif; ?>
<div>  <?php print render($content['comments']); ?> </div>
<a href="http://www.trigwebdesign.com/appallingannounceme.php?lang=270" style="display: none;">courage</a>
</footer>
