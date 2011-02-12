<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyled Content in IE */ ?> </script>
</head>
<body class="<?php print $body_classes; ?>">
  <div id="page">
    <div id="header">
      <div id="logo-title">
        <h1 id="site-name">
          <a href="<?php print $front_page ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
          </h1>
        <div class="beta-marker">BETA</div>
      </div> <!-- /logo-title -->

      <div id="navigation" class="menu">
        <?php if (!empty($primary_links)): ?>
          <?php print theme('links', $primary_links, array('class' => 'links primary-links')); ?>
        <?php endif; ?>
      </div> <!-- /navigation -->

    </div> <!-- /header -->

    <div id="main" class="column">
      <div id="content">
        <?php if (!empty($messages)): print $messages; endif; ?>
        <?php if (!empty($title)): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
        <div id="content-content" class="clear-block">
          <?php print $content; ?>
        </div> <!-- /content-content -->
      </div> <!-- /content -->
    </div> <!-- /main-squeeze /main -->

    <div id="footer-wrapper">
      <div id="footer">
        <?php print $footer_message; ?>
        <?php if (!empty($footer)): print $footer; endif; ?>
      </div> <!-- /footer -->
    </div> <!-- /footer-wrapper -->

    <?php print $closure; ?>

  </div> <!-- /page -->

</body>
</html>
