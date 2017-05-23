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
<div class="container-fluid">
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
<div class="spacer"></div>
<div class="row-fluid">
<div class="span12">
<div class="clearfix">
<div class="btn-group inline pull-left" id="texteditor" style="display:inline-block;">
  <div class="span12">
<fieldset class="form-group">
 <div align="center" style="min-height: 36px;"><label for="font-control">Font Style</label></div>
<select id="font-control" class="form-control form-control-sm" name="font-control" data-style="btn-info btn-sm" data-width="fit">
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
  </fieldset>
</div>
</div>
</div>
</div>
<div class="spacer"></div>
<div class="spacer"></div>
<div class="clearfix">
<div class="span10">
  <div class="input-append"> <input class="span3" id="text-string" type="text" placeholder="add text here...">
  <button   id="add-text" class="mybutton" style="padding:0.3em 0.5em 0.5em 1.1em;"  data-original-title="add-text">
<svg width="27px" height="27px" viewBox="0 0 2099.651 1284.951" xmlns="http://www.w3.org/2000/svg">
<path d="M109 1651q-19 19-32 13t-13-32v-1472q0-26 13-32t32 13l710 710q8 8 13 19v-710q0-26 13-32t32 13l710 710q19 19 19 45t-19 45l-710 710q-19 19-32 13t-13-32v-710q-5 10-13 19z"/></svg>
</button>
  </div>
</div>
</div>
<div class="spacer"></div>
<div class="spacer"></div>
 <div class="clearfix"> 
<div class="container-fluid">
<div class="span12 offset4"> 
<button id="text-bold" class="btn" data-original-title="Bold">
<?php
$bimage = theme('image', array('path' => drupal_get_path('module', 'product_canvas') . '/img/font_bold.png'));
?>
<?php print $bimage; ?>
</button>
<button id="text-italic" class="btn" data-original-title="Italic">
<?php
$itimage = theme('image', array('path' => drupal_get_path('module', 'product_canvas') . '/img/font_italic.png'));
?>
<?php print $itimage; ?>
</button>
<button id="text-strike" class="btn"  data-original-title="strike">
<?php
$stimage = theme('image', array('path' => drupal_get_path('module', 'product_canvas') . '/img/font_strikethrough.png'));
?>
<?php print $stimage; ?>
</button>
<button id="text-underline" class="btn"   data-original-title="Underline" >
<?php
$uimage = theme('image', array('path' => drupal_get_path('module', 'product_canvas') . '/img/font_underline.png'));
?>
<?php print $uimage; ?>
</button>
<a class="btn" href="#" rel="tooltip" data-placement="top" data-original-title="Font Color">
<input type="hidden" id="text-fontcolor" class="color-picker" size="7" value="#EB038A"></a>
</div></div> 
<div class="clearfix"></div>
<div class="spacer">
<div class="container">
 <div class="span3 offset1"> 
<button class="rotate mybutton" id="send-to-back" title="Send to Back">
	<svg xmlns="http://www.w3.org/2000/svg" width="19px" height="34px" viewBox="0 0 2034.651 1199.651">
<path d="M1747 141q19-19 32-13t13 32v1472q0 26-13 32t-32-13l-710-710q-9-9-13-19v710q0 26-13 32t-32-13l-710-710q-9-9-13-19v678q0 26-19 45t-45 19h-128q-26 0-45-19t-19-45v-1408q0-26 19-45t45-19h128q26 0 45 19t19 45v678q4-11 13-19l710-710q19-19 32-13t13 32v710q4-11 13-19z"/></svg>
</button>
<button class="rotate mybutton" id="bring-to-front" title="Bring to Front">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1901.651 1528.951" height="34px" width="19px">
<path d="M45 1651q-19 19-32 13t-13-32v-1472q0-26 13-32t32 13l710 710q8 8 13 19v-710q0-26 13-32t32 13l710 710q8 8 13 19v-678q0-26 19-45t45-19h128q26 0 45 19t19 45v1408q0 26-19 45t-45 19h-128q-26 0-45-19t-19-45v-678q-5 10-13 19l-710 710q-19 19-32 13t-13-32v-710q-5 10-13 19z"/></svg>
</button>
<button id="remove-selected" class="mybutton" title="Delete selected item">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1901.651 1528.951" height="30px" width="22px">
<path d="M704 736v576q0 14-9 23t-23 9h-64q-14 0-23-9t-9-23v-576q0-14 9-23t23-9h64q14 0 23 9t9 23zm256 0v576q0 14-9 23t-23 9h-64q-14 0-23-9t-9-23v-576q0-14 9-23t23-9h64q14 0 23 9t9 23zm256 0v576q0 14-9 23t-23 9h-64q-14 0-23-9t-9-23v-576q0-14 9-23t23-9h64q14 0 23 9t9 23zm128 724v-948h-896v948q0 22 7 40.5t14.5 27 10.5 8.5h832q3 0 10.5-8.5t14.5-27 7-40.5zm-672-1076h448l-48-117q-7-9-17-11h-317q-10 2-17 11zm928 32v64q0 14-9 23t-23 9h-96v948q0 83-47 143.5t-113 60.5h-832q-66 0-113-58.5t-47-141.5v-952h-96q-14 0-23-9t-9-23v-64q0-14 9-23t23-9h309l70-167q15-37 54-63t79-26h320q40 0 79 26t54 63l70 167h309q14 0 23 9t9 23z"/></svg>
</button>
  </div>
</div>
 <div class="clearfix"></div>
<div class="spacer"></div>
<div class="container-fluid">
  <div class="row-fluid">
<div class="spacer"></div>
    <div class="span3">
      <!--Sidebar content--> 
<div class="well">
<ul class="nav">
<li class="color-preview" title="White" style="background-color:#ffffff;"></li>
<li class="color-preview" title="Dark Heather" style="background-color:#616161;"></li>
<li class="color-preview" title="Gray" style="background-color:#f0f0f0;"></li>
<li class="color-preview" title="Charcoal" style="background-color:#5b5b5b;"></li>
<li class="color-preview" title="Black" style="background-color:#222222;"></li>
<li class="color-preview" title="Heather Orange" style="background-color:#fc8d74;"></li>
<li class="color-preview" title="Heather Dark Chocolate" style="background-color:#432d26;"></li>
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
</div></div>
<div class="spacer"></div>
<div class="section"></div>
    <div class="span8">
<!--    EDITOR      -->
<div id="shirtDiv" class="page" >
<?php
$timage = theme('image', array('path' => drupal_get_path('module', 'product_canvas') . '/img/crew_front.png'));
?>
<?php print $timage; ?>
<div id="drawingArea" >
<canvas id="tcanvas" width="200" height="400"></canvas>
 </div> </div>
 </div></div>
</div>
<div class="container-fluid">
<div class="row">
<div class"center"> <h3> Add Graphics</h3></div>
<div class="spacer"></div>
<div class="span10">

<div class="carousel slide row" data-ride="carousel" data-type="multi" data-interval="5000" id="fruitscarousel">
    <div class="carousel-inner img-polaroid">
        <div class="item active">
            <div class="span3"><a href="#"><img src="img/2.png" class="img-responsive "></a></div>
        </div>
        <div class="item">
            <div class="span3"><a href="#"><img style="cursor:pointer;"  class="img-responsive"  src="data:image/png;base64,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%3D%3D"></a></div>
        </div>
 <div class="item">
 <div class="span3"><a href="#"><img style="cursor:pointer;" class="img-responsive" src="data:image/jpeg;base64,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"></a></div>
 </div>

<div class="item">
            <div class="span3"><a href="#"><img src="img/4.jpg" class="img-responsive "></a></div>
        </div>
        <div class="item">
            <div class="span3"><a href="#"><img src="img/3.jpg" class="img-responsive"></a></div>
        </div>
        <div class="item">
            <div class="span3"><a href="#"><img src="img/5.jpg" class="img-responsive"></a></div>
        </div>
    </div> <a class="left carousel-control" href="#fruitscarousel" data-slide="prev"> <svg 
xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3554.651 2563.65"  height="49px" width="68px"><path d="M1280 800v192q0 
13-9.5 22.5t-22.5 9.5h-352v192q0 14-9 23t-23 9q-12 0-24-10l-319-319q-9-9-9-23t9-23l320-320q9-9 23-9 13 0 22.5 9.5t9.5 
22.5v192h352q13 0 22.5 9.5t9.5 22.5zm160 96q0-148-73-273t-198-198-273-73-273 73-198 198-73 273 73 273 198 198 273 73 
273-73 198-198 73-273zm224 0q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 
279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"/></svg></a>
    <a class="right carousel-control" href="#fruitscarousel" data-slide="next"><svg xmlns="http://www.w3.org/2000/svg" 
viewBox="0 0 3554.651 2563.65"  height="49px" width="68px"><path d="M1280 896q0 14-9 23l-320 320q-9 9-23 9-13 
0-22.5-9.5t-9.5-22.5v-192h-352q-13 0-22.5-9.5t-9.5-22.5v-192q0-13 9.5-22.5t22.5-9.5h352v-192q0-14 9-23t23-9q12 0 24 
10l319 319q9 9 9 23zm160 0q0-148-73-273t-198-198-273-73-273 73-198 198-73 273 73 273 198 198 273 73 273-73 198-198 
73-273zm224 0q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 
385.5 103 279.5 279.5 103 385.5z"/></svg></a>
 </div> 
</div>
</div>
 </div>
</div>
<div class="clearfix"></div>
<div class="spacer"></div>
<div class="clearfix"></div>
<div class="spacer"></div>
<div class="container">
	<div class="row">
<?php $form = drupal_get_form('product_canvas_upload_form');?>
<?php print drupal_render($form);?>
<small class="text-muted">
  Press Preview to see image: Then click on the image.
</small>
</div>
<button  id="product-canvas-save" class="mybutton" title="Save"  value="" type="submit">
    <span>save</span>
</button>
<div class="img-polaroid"> <?php print render($content['field_saved_images']); ?> </div>
<?php print  render($content);?>
<?php print render($content['field_image']); ?>

<div class="spacer"> </div>
<?php if (!empty($content['field_tags']) || !empty($content['links'])): ?> 

 <?php print render($content['field_tags']); ?> </div> 
        <?php print render($content['links']); ?>
  <div class="clearfix"></div>
<div class="spacer">  
</div><!-- /container -->
<footer>
  <?php endif; ?>
<div>  <?php print render($content['comments']); ?> </div>
</footer>
