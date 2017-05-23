<div<?php print $attributes; ?>>
  <header class="l-header" role="banner">
    <div class="l-constrained">
      <div class="l-branding site-branding">
        <?php if ($logo): ?>
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="site-branding__logo"><img$
        <?php endif; ?>
    <?php if ($site_name): ?>
          <a href="<?php print $front_page; ?>" class="site-branding__name" title="<?php print t('Home'); ?>" rel="home"><spa$
        <?php endif; ?>
        <?php print render($page['branding']); ?>
         <div class="home"></div>
        </div>
      <?php print render($page['header']); ?>
     <?php print render($page['navigation']); ?>

    </div>
  </header>
 <div class="pane-content panel-body">
  <?php print render($page['main']); ?>
  <?php if (!empty($page['highlighted'])): ?>
    <div class="l-highlighted-wrapper">
      <?php print render($page['highlighted']); ?>
    </div>
  <?php endif; ?>

  <div class="l-main l-constrained">
    <a id="main-content"></a>
    <?php print render($tabs); ?>
    <?php print $breadcrumb; ?>
    <?php print $messages; ?>

    <div class="l-content" role="main">
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
    </div>
</divd>
  <footer class="l-footer-wrapper" role="contentinfo">
    <?php print render($page['footer']); ?>
  </footer>
</div>

