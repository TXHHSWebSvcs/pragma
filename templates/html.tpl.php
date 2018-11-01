<?php
/**
 * @file
 * pragma's HTML template.
 */
global $theme_root;
$header_layout = theme_get_setting('header_layout');
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie ie6 <?php if (theme_get_setting('background_color') == 'dark') {print "dark";} ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?><?php if ($language->dir == 'rtl'){ echo " rtl"; } ?>"> <![endif]-->
<!--[if IE 7]>    <html class="ie ie7 <?php if (theme_get_setting('background_color') == 'dark') {print "dark";} ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?><?php if ($language->dir == 'rtl'){ echo " rtl"; } ?>"> <![endif]-->
<!--[if IE 8]>    <html class="ie ie8 <?php if (theme_get_setting('background_color') == 'dark') {print "dark";} ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?><?php if ($language->dir == 'rtl'){ echo " rtl"; } ?>"> <![endif]-->
<!--[if gt IE 8]> <!--> <html class="<?php if(arg(0)== 'index-header-side-header-left' || $header_layout == 'h_side_header_left'): print 'side-header'; elseif(arg(0)== 'index-header-side-header-right' || $header_layout == 'h_side_header_right'): print 'side-header side-header-right'; endif;?> <?php if (theme_get_setting('background_color') == 'dark') {print "dark ";} if(theme_get_setting('site_layout') == 'boxed'){ echo "boxed"; } ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?><?php if ($language->dir == 'rtl'){ echo " rtl"; } ?>"> <!--<![endif]-->

<head>
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
<meta name="msvalidate.01" content="F58D1A378AACCCE4497D46D388891005" />
<meta name="google-site-verification" content="cajLx2_xOput9zF9q4a4J96l64P-gQ6_cIJ2o4riFfA" />

<?php print $head; ?>
<title><?php print $head_title; ?></title>
<!-- Call bootstrap.css before $scripts to resolve @import conflict with respond.js -->
<link rel="stylesheet" href="<?php print base_path() . drupal_get_path('theme', 'pragma'); ?>/vendor/bootstrap/css/bootstrap.min.css">
<?php if ($language->dir == 'rtl'): ?>
<link rel="stylesheet" href="<?php print base_path() . drupal_get_path('theme', 'pragma'); ?>/vendor/bootstrap-rtl/bootstrap-rtl.css">
<?php endif; ?>

<?php print $styles; ?>
    <?php if(arg(0) == 'index-corporate-3'):?>
        <link rel='stylesheet' href='<?php print $theme_root;?>/css/skins/skin-corporate-3.css' type='text/css' media='all' />
    <?php elseif(arg(0) == 'index-corporate-4'):?>
        <link rel='stylesheet' href='<?php print $theme_root;?>/css/skins/skin-corporate-4.css' type='text/css' media='all' />
    <?php elseif(arg(0) == 'index-corporate-5'):?>
        <link rel='stylesheet' href='<?php print $theme_root;?>/css/skins/skin-corporate-5.css' type='text/css' media='all' />
    <?php elseif(arg(0) == 'index-corporate-6'):?>
        <link rel='stylesheet' href='<?php print $theme_root;?>/css/skins/skin-corporate-6.css' type='text/css' media='all' />
    <?php elseif(arg(0) == 'index-corporate-7'):?>
        <link rel='stylesheet' href='<?php print $theme_root;?>/css/skins/skin-corporate-7.css' type='text/css' media='all' />
    <?php elseif(arg(0) == 'index-corporate-8'):?>
        <link rel='stylesheet' href='<?php print $theme_root;?>/css/skins/skin-corporate-8.css' type='text/css' media='all' />
    <?php elseif(arg(0) == 'index-corporate-hosting'):?>
        <link rel='stylesheet' href='<?php print $theme_root;?>/css/skins/skin-corporate-hosting.css' type='text/css' media='all' />
    <?php endif?>
<?php print $scripts; ?>
<!-- IE Fix for HTML5 Tags -->
<!--[if lt IE 9]>
<![endif]-->

<!--[if IE]>
  <link rel="stylesheet" href="<?php global $parent_root; echo $parent_root; ?>/css/ie.css">
<![endif]-->

<!--[if lte IE 8]>
  <script src="<?php global $parent_root; echo $parent_root; ?>/vendor/respond.js"></script>
<![endif]-->

<!-- Web Fonts  -->

<?php pragma_user_css();?>
<link rel="apple-touch-icon" sizes="180x180" href="<?php print $theme_root;?>/img/apple-touch-icon.png" />
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="theme-color" content="#ffffff">
</head>
<body class="<?php print $classes; ?>"<?php print $attributes;?> <?php if(arg(0) == 'one-page'):?> class="one-page" <?php endif; ?> data-target="<?php if(arg(0) == 'index-corporate-hosting'):?> #navSecondary<?php else: ?>#header<?php endif; ?>" data-spy="scroll" data-offset="100">
<?php print $page_top; ?>
<?php print $page; ?>
<?php print $page_bottom; ?>

<!-- pragmat 3rd party scripts -->

<!--/ end 3rd party scripts -->
</body>
</html>