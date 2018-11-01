<?php

/**
 * @file
 * Default header style.
 */
?>

<header class="header--wrapper header--default <?php if ($themag_sticky_header) { print 'sticky-header'; } ?>">
  <div class="container">
    <div class="header--content">

      <?php if ($logo) : ?>
        <div class="logo--wrapper">
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><img class="img-fluid" src="<?php print $logo; ?>" alt=""></a>
        </div>
      <?php endif; ?>

      <nav class="main-navigation--wrapper hidden-md-down">
        <?php if ($toggle_main_menu) : ?>
          <?php print _render_block('superfish', 1); ?>
        <?php endif; ?>
      </nav>

      <div id="social-menu--wrapper" class="social-menu--wrapper hidden-md-down">
        <?php
          if ($toggle_social_menu) {
            // If custom HTML is not used for the social link,
            // show social links from the Drupal menu system.
            if (!$themag_social_menu_custom_html_toggle) {
              $social_links_menu = theme_get_setting('themag_social_menu');
              print _render_menu($social_links_menu, array('class' => array('list-unstyled', 'social-menu')));
            }
            else {
              print theme_get_setting('themag_social_menu_custom_html');
            }
          }
        ?>
      </div>

      <div class="user-action--wrapper">
        <?php
          if ($toggle_social_menu) {
            // If custom HTML is not used for the user action menu,
            // show the menu from the Drupal menu system.
            if (!$themag_user_action_menu_custom_html_toggle) {
              $user_action_links_menu = theme_get_setting('themag_user_action_menu');
              print _render_menu($user_action_links_menu, array('class' => array('list-unstyled', 'user-action-menu')));
            }
            else {
              print theme_get_setting('themag_user_action_menu_custom_html');
            }
          }
        ?>
        <i id="responsive-menu-button" class="fa fa-bars fa-2x hidden-lg-up" aria-hidden="true"></i>
      </div>
    </div>
  </div>

  <div class="search--wrapper">
    <div class="container">
      <?php print _render_block('search', 'form'); ?>
    </div>
  </div>
</header>