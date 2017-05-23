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
 hide($content['field_tags']);
?>
  </div>
  <div class="spacer"></div>
  <div class="clearfix"></div>
  <div class="container-fluid">
   <div class="row">
  <div class="spacer"></div>
   <div id="box" class="col-lg-6  col-md-6 col-xs-12" >
    <div class="classWithPad"> 
  <div class="panel-header"><h2 class=" mylabel ">Add Texts</h2></div>
   <div id="box" class="shadow-2">
   <div class="form-control input-lg input-group input-group-lg">
   <input "class="col-sm-8 form-control input-lg" id="text-string" type="text" placeholder="add text here...">
   <button   id="add-text" class="mybutton" style="padding:0.3em 0.8em 1.3em 1.9em;"  data-original-title="add text">
<svg width="53px" height="55px" viewBox="0 0 2099.651 1284.951" xmlns="http://www.w3.org/2000/svg">
<path d="M109 1651q-19 19-32 13t-13-32v-1472q0-26 13-32t32 13l710 710q8 8 13 19v-710q0-26 13-32t32 13l710 710q19 19 19 45t-19 45l-710 710q-19 19-32 13t-13-32v-710q-5 10-13 19z"/></svg>
</button>
</div>
</div>
</div>
</div> 
  <div class=" col-lg-6 col-md-6 col-xs-12">
    <div class="classWithPad"> 
   <div id="box" class="shadow-2">
   <span class="label mylabel">New graphics</span>
     <div class="well">
</div>
</div>
</div>
</div>
</div>
  <div class="clearfix"></div>
<div class="row">
 <div class="spacer"></div>
    <div class="col-lg-6  col-md-6 col-xs-12" >
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
 
  <div class="  col-xs-12 col-md-6 col-lg-6 ">
   <div class="classWithPad">
    <div id="box" class="shadow-2">
<h1>
<span class="mylabel">Text Colors</span>
</h1>
    <div class="spacer1"></div>
 <div class="input-group input-group-lg">
    <a class="btn btn-default btn-lg" data-toggle="buttons"  href="#" rel="tooltip" data-placement="top" data-original-title="Text Color">
<input  type="hidden-input"  id="text-fontcolor" class="color-picker" size="7" value="#EB038A"></a>
</div>
 <div class="spacer"></div>
 <span class="label mylabel">Text Edit</span>
<div class="btn-group btn-lg" role="group"  aria-label="group one" >
 <button id="text-bold" class="btn  btn-default  btn-responsive btn-lg" type="button" data-toggle="buttons"  data-placement="bottom"    data-original-title="Bold">
<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAWCAMAAADzapwJAAAACVBMVEXw8O7///8AAABJxInrAAAAAnRSTlMAAHaTzTgAAAAiSURBVHgBY2DECgadMBMUMKAKM4CEQARFwrQzG+HuQRewAANSAgqVQbLzAAAAAElFTkSuQmCC">
 </button>
<button id="text-italic" class="btn btn-default  btn-responsive  btn-lg" type="button" data-toggle="buttons"  data-placement="bottom"   data-original-title="Italic">
<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAWCAMAAADzapwJAAAAD1BMVEXw8O7///8AAABfb4+ViG2f0t5xAAAAAnRSTlMAAHaTzTgAAAA3SURBVHgBzcoxFkAAEMTQkXX/M2MaRbYn5X/JsfY7zh1P5sAZ80AWhjF3Nnc2dzbDmGnit8/4AtdUAdxckYFYAAAAAElFTkSuQmCC ">
 </button>
<button id="text-strike" class="btn btn-default btn-responsive btn-lg" type="button" data-toggle="buttons"  data-placement="bottom"   data-original-title="strike">
<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAWCAMAAADzapwJAAAACVBMVEXw8O7///8AAABJxInrAAAAAnRSTlMAAHaTzTgAAAA6SURBVHgB1dDBCcBACETRn9d/0TmJZEkDO8fnCGLPb67gSkGFD6eklrHccma27Mi0NQtHO/aSGz74AuAjAekVgl0SAAAAAElFTkSuQmCC">
 </button>
<button id="text-underline" class="btn btn-default  btn-responsive  btn-lg"  type="button" data-toggle="buttons"  data-placement="bottom"    data-original-title="Underline">
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
  <div class="  col-xs-12  col-sm-6 col-md-6 col-lg-6 ">
   <div class="classWithPad">
  <h1 ><span class="label mylabel">T-shirt colors</span></h1>     
  <!--<h2 class=" mylabel">T-shirt colors</h2>-->
     <div id="box" class="shadow-2">
     <div class="well">
      <ul class="list-inline" role="group" aria-labelledby="preview"  data-original-title="T-shirt colors">
        <li class="color-preview" title="White" style="background-color:#ffffff;"></li>
        <li class="color-preview" title="Dark Heather" style="background-color:#616161;"></li>
        <li class="color-preview" title="Gray" style="background-color:#f0f0f0;"></li>
        <li class="color-preview" title="Charcoal" style="background-color:#5b5b5b;"></li>
        <li class="color-preview" title="Black" style="background-color:#222222;"></li>
        <li class="color-preview" title="Heather Orange" style="background-color:#fc8d74;"></li>
        <li class="color-preview" title="Heather Dark Chocolate" style="background-color:#432d26;"></li>
	<li class="color-preview" title="Salmon" style="background-color:#eead91;"></li>
	<li class="color-preview" title="Chesnut" style="background-color:#806355;"></li>
	<li class="color-preview" title="Dark Chocolate" style="background-color:#382d21;"></li>
	<li class="color-preview" title="Citrus Yellow" style="background-color:#faef93;"></li>
	<li class="color-preview" title="Avocado" style="background-color:#aeba5e;"></li>
	<li class="color-preview" title="Kiwi" style="background-color:#8aa140;"></li>
	<li class="color-preview" title="Irish Green" style="background-color:#1f6522;"></li>
	<li class="color-preview" title="Scrub Green" style="background-color:#13afa2;"></li>
	<li class="color-preview" title="Teal Ice" style="background-color:#b8d5d7;"></li>
        <li class="color-preview" title="Heather Sapphire" style="background-color:#15aeda;"></li>
	<li class="color-preview" title="Sky" style="background-color:#a5def8;"></li>
	<li class="color-preview" title="Antique Sapphire" style="background-color:#0f77c0;"></li>
	<li class="color-preview" title="Heather Navy" style="background-color:#3469b7;"></li>
	<li class="color-preview" title="Cherry Red" style="background-color:#c50404;"></li>
    </ul>
 </div><!--well-->
  </div><!--well-->
  </div> <!--pad-end --> 			   
   </div> <!--col-->

<div class="  col-xs-12  col-sm-6 col-md-6 col-lg-6">
  <div class="classWithPad">
<div id="box" class="shadow-2">
    <span class="label mylabel">Selected Item</span>
    <div class="btn-group" role="group" aria-label="group two">
  <button class="rotate mybutton" id="send-to-back" type="button" data-toggle="buttons"  aria-label="send-to-back"  title="Send to Back">
    <svg viewBox="0 0 2034.651 1199.651" height="34px" width="19px" xmlns="http://www.w3.org/2000/svg">
      <path d="M1747 141q19-19 32-13t13 32v1472q0 26-13 32t-32-13l-710-710q-9-9-13-19v710q0 26-13 32t-32-13l-710-710q-9-9-13-19v678q0 26-19 45t-45 19h-128q-26 0-45-19t-19-45v-1408q0-26 19-45t45-19h128q26 0 45 19t19 45v678q4-11 13-19l710-710q19-19 32-13t13 32v710q4-11 13-19z">
    </svg>
  </button></div>
 <div class="btn-group" role="group">
    <button class="rotate mybutton" id="bring-to-front" type="button" data-toggle="buttons"  aria-label="bring-to-front"  title="bring-to-front">
    <svg width="19px" height="34px" viewBox="0 0 1901.651 1528.951" xmlns="http://www.w3.org/2000/svg">
      <path d="M45 1651q-19 19-32 13t-13-32v-1472q0-26 13-32t32 13l710 710q8 8 13 19v-710q0-26 13-32t32 13l710 710q8 8 13 19v-678q0-26 19-45t45-19h128q26 0 45 19t19 45v1408q0 26-19 45t-45 19h-128q-26 0-45-19t-19-45v-678q-5 10-13 19l-710 710q-19 19-32 13t-13-32v-710q-5 10-13 19z">
    </svg>
   </button></div>
    <div class="btn-group" role="group">  
<button id="remove-selected" class="btn-responsive mybutton"  type="button" data-toggle="buttons" aria-label="remove-selected"  title="Delete item">
  <svg width="22px" height="30px" viewBox="0 0 1901.651 1528.951" xmlns="http://www.w3.org/2000/svg">
<path d="M704 736v576q0 14-9 23t-23 9h-64q-14 0-23-9t-9-23v-576q0-14 9-23t23-9h64q14 0 23 9t9 23zm256 0v576q0 14-9 23t-23 9h-64q-14 0-23-9t-9-23v-576q0-14 9-23t23-9h64q14 0 23 9t9 23zm256 0v576q0 14-9 23t-23 9h-64q-14 0-23-9t-9-23v-576q0-14 9-23t23-9h64q14 0 23 9t9 23zm128 724v-948h-896v948q0 22 7 40.5t14.5 27 10.5 8.5h832q3 0 10.5-8.5t14.5-27 7-40.5zm-672-1076h448l-48-117q-7-9-17-11h-317q-10 2-17 11zm928 32v64q0 14-9 23t-23 9h-96v948q0 83-47 143.5t-113 60.5h-832q-66 0-113-58.5t-47-141.5v-952h-96q-14 0-23-9t-9-23v-64q0-14 9-23t23-9h309l70-167q15-37 54-63t79-26h320q40 0 79 26t54 63l70 167h309q14 0 23 9t9 23z">
</svg> 
</button></div>
  </div>  <!--btngrp-->
 </div>   <!--shadow-end -->
 </div>   <!--pad-end -->
  </div>
 </div> <!--row-end -->
<div class="clearfix"></div>
<div class="row">  
 <div class="spacer"></div>
 <div class="col-xs-12  col-sm-6 col-md-6 col-lg-6">
 <div class="classWithPad ">
<h3><span class="label mylabel">T-shirt Editor</span></h3>
 <div id="shirtDiv" class="page"> 

  <?php
        $timage = theme('image', array('path' => drupal_get_path('module', 'product_canvas') . '/img/crew_front.png'));
  ?>

   <?php print $timage; ?>
   <div id="drawingArea" >
   <canvas id="tcanvas" width="200" height="400"></canvas>
           </div><!--classWithpad -->
        </div><!--drawing area -->
      </div> <!--tshirt div -->
   </div><!--col-end -->

 <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
    <div class="classWithPad">    
      <span class="label mylabel">Upload Image</span>
          <div class="well box-shadow">
<?php $form = drupal_get_form('product_canvas_upload_form');?>
<?php print drupal_render($form);?>

 </div><!--addClassPad-->
 </div><!--well-->
 </div><!--col-->

</div>  <!--endrow-->


 <div class="clearfix"></div>
<div class="row">
 <div class="spacer"></div>
<div class="col-xs-12 col-sm-6 col-xs-12 col-md-6  col-lg-6">
 <div class="classWithPad">
<div class="well box-shadow">
 <span class="label mylabel">Save Image</span>
<button  id="product-canvas-save" class="btn-responsive mybutton" title="Save"  value="" type="submit">
    <span>save</span>
</button>
<div class="img-polaroid"> <?php print render($content['field_saved_images']); ?> </div>
</div><!--well-->
</div><!--addClassPad-->
</div> <!--col-->

<div class="col-xs-12 col-sm-6 col-xs-12 col-md-6  col-lg-6">
<div class="classWithPad">
<div class="well box-shadow">

<h2>Graphics</h2>
<div class="classWithPad">
 <span class="label mylabel">Add Graphics</span>
</div><!--addClassPad1-->
</div><!--well-->
</div><!--addClassPad-->
</div><!--col-->
</div><!--row-->
<div class="clearfix"></div>
<div class="spacer"> </div>
<div class="pane-content">
<?php print  render($content);?>
<?php print render($content['field_image']); ?>
</div>
<div class="clearfix"></div>
<div class="spacer"> </div>
<?php if (!empty($content['field_tags']) || !empty($content['links'])): ?> 

<div>  <?php print render($content['field_tags']); ?></div>  
        <?php print render($content['links']); ?>
  <div class="clearfix"></div>
  <div class="spacer"></div>
<!-- /container -->
<footer>
  <?php endif; ?>
<div>  <?php print render($content['comments']); ?> </div>
</footer>
