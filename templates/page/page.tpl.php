<?php
/**
 * @file
 * pragma's theme implementation to display a single Drupal page.
 */
?>
<!-- .body .optional -->
<div class="body">
     <?php if ($page['top_bar']) : ?>
     <!-- #top-bar-wrapper .clearfix v-->
     <div id="top-bar-wrapper" class="clearfix">
          <!-- #top-bar .clearfix -->
          <div id="top-bar" class="clearfix">
               <?php print render($page[ 'top_bar']); ?>
          </div>
          <!--/ #top-bar .clearfix -->
     </div>
     <!--/ #top-bar-wrapper .clearfix -->
     <?php endif; ?>
     <header id="header" data-plugin-options='{"stickyEnabled": false, "stickyEnableOnBoxed": false, "stickyEnableOnMobile": false, "stickyStartAt": 57, "stickySetTop": "-57px", "stickyChangeLogo": false}'>
          <div class="header-body">
               <div class="header-container container">
               <div id="skip-link"><a href="#main-content" class="element-invisible element-focusable">Skip to main content</a></div>
                    <div class="header-row">


                         <div class="header-column">

                              <?php if (isset($page['branding'])) : ?>
                              <?php print render($page['branding']); ?>
                              <?php endif; ?>

                              <?php if ($logo): ?>
                              <div class="header-logo">
                                   <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
					        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" height="<?php print theme_get_setting('logo_height'); ?>" data-sticky-height="<?php print theme_get_setting('sticky_logo_height'); ?>" data-sticky-top="33" />
					      </a>


                              </div>
                              <?php endif; ?>

                              <?php if ($site_name || $site_slogan): ?>
                              <div id="name-and-slogan" <?php if ($disable_site_name && $disable_site_slogan) { print ' class="hidden"'; } ?>>

                                   <?php if ($site_name): ?>
                                   <?php if ($title): ?>
                                   <div id="site-name" <?php if ($disable_site_name) { print ' class="hidden"'; } ?>>
                                        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
                                   </div>
                                   <?php else: ?>
                                   <h1 id="site-name" <?php if ($disable_site_name) { print ' class="hidden"'; } ?>>
					            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
					          </h1>
                                   <?php endif; ?>
                                   <?php endif; ?>

                                   <?php if ($site_slogan): ?>
                                   <div id="site-slogan" <?php if ( ($disable_site_slogan ) ) { print ' class="hidden"'; } if ( (!$disable_site_slogan ) AND ($disable_site_name) ) { print ' class="slogan-no-name"'; } ?>>
                                        <?php print $site_slogan; ?>
                                   </div>
                                   <?php endif; ?>

                              </div>
                              <!-- /#name-and-slogan -->
                              <?php endif; ?>

                         </div>


                         <div class="header-column header-column-valign-top">

                              <?php if (isset($page['header_search'])) : ?>
                              <div class="header-search hidden-xs">
                                   <?php print render($page['header_search']); ?>
                              </div>
                              <?php endif; ?>

                              <?php print render($page['header_top']); ?>
                                  </div>
                         </div>


               </div>

               <div class="header-container container header-nav header-nav-push-top">

                    <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
					<i class="fa fa-bars"></i>
				</button>



                    <?php print render($page['header_icons']); ?>

                    <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
                         <nav class="nav-main">
                              <?php print render($page['header_menu']); ?>
                         </nav>
                    </div>
               </div>

          </div>
     </header>
     <!-- end header -->

     <div role="main" class="main">
          <?php if ( $title || $breadcrumb ): ?>
			<!-- .page-title breadcrumb-wrap -->
			<section class="page-title breadcrumb-wrap">
				<!-- .page-title-inner -->
				<div class="page-title-inner">
					<!-- .container -->
					<div class="container">
						<!-- .row -->
						<div class="row">
							<div class="col-md-12">
								<h1><?php print drupal_get_title(); ?></h1>
							</div>
						</div>
						<!--/ .row -->
					</div>
					<!--/ .container -->
				</div>
				<!--/ .page-title-inner -->

				<!-- .breadcrumbs-container .theme-color -->
				<div class="breadcrumbs-container theme-color">
					<?php if (theme_get_setting('breadcrumbs') == '1'): ?>
					<!-- .container -->
					<div class="container">
						<!-- .row start -->
						<div class="row">
							<!-- .col-md-12 start -->
							<div class="col-md-12">
								<?php print $breadcrumb; ?>
							</div>
							<!-- .col-md-12 end -->
						</div>
						<!-- .row end -->
					</div>
					<!--/ .container -->
					<?php endif; ?>
				</div>
				<!--/ .breadcrumbs-container .theme-color -->

			</section>
			<!--/ .page-title breadcrumb-wrap -->
          <?php endif; ?>
          <!--/ end surgery -->

          <?php print render($page['before_content']); ?>
		<!-- #content .content .full .money -->
          <div id="content" class="content full">
			<!-- .container -->
               <div class="container">
                    <!-- .row -->
                    <div class="row">

                         <div class="col-md-12">
                              <?php print $messages; ?>
                         </div>

                         <?php if ( ($page['sidebar_left']) ) : ?>
                         <aside id="sidebar-left">
                              <div class="<?php if ($page['sidebar_right']) { echo " col-md-3 ";} else { echo "col-md-3 "; } ?>">
                                   <div id="sticky-sidebar">
                                        <?php print render($page['sidebar_left']); ?>
                                   </div>
                              </div>
                         </aside>
                         <?php endif; ?>

                         <div class="<?php if ( ($page['sidebar_right']) AND ($page['sidebar_left']) ) { echo " col-md-6 ";} elseif ( ($page['sidebar_right']) OR ($page['sidebar_left']) ) {  echo "col-md-9 "; }  else { echo "col-md-12 "; } ?>">

                              <?php if ($tabs and $is_admin): ?>
                              <div id="drupal_tabs" class="tabs">
                                   <?php print render($tabs); ?>
                              </div>
                              <?php endif; ?>
                              <!--/ -->
                              <?php print render($page['help']); ?>

                              <?php if ($action_links): ?>
                              <ul class="action-links">
                                   <?php print render($action_links); ?>
                              </ul>
                              <?php endif; ?>
						<!-- start var=pre_content -->
						<?php if (isset($page['pre_content'])) { print render($page['pre_content']); } ?>
						<!--/ end var=pre_content -->
            <!--PAGEWATCH--> 
                           <!-- hi mom -->
                          <div id="main-content">
                           
                             <?php if (isset($page['content'])) { print render($page['content']); } ?>
                          
                          </div>
                           <!--/ bye mom -->
            <!--/PAGEWATCH-->
                         </div>

                         <?php if ( ($page['sidebar_right']) ) : ?>
                         <div class="<?php if ($page['sidebar_left']) { echo " col-md-3 ";} else { echo "col-md-3 "; } ?>">
                              <?php print render($page['sidebar_right']); ?>
                         </div>
                         <?php endif; ?>

                    </div>
                    <!--/ .row -->

               </div>
               <!--/ -->

          </div>
          <!--/ -->

     </div>
     <!--/ -->

     <?php print render($page['after_content']); ?>

     <footer id="footer">
          <?php if (render($page['footer_1']) || render($page['footer_2']) || render($page['footer_3']) || render($page['footer_4'])) : ?>
          <div class="container main-footer">
               <div class="row">

                    <?php if (theme_get_setting('ribbon') == '1'): ?>
                    <div class="footer-ribbon">
                         <span>
                              <?php echo t("%string", array('%string' => theme_get_setting('ribbon_text')) );?>
                         </span>
                    </div>
                    <?php endif; ?>

                    <?php if (render($page['footer_1'])) : ?>
                    <div class="col-md-3">
                         <?php print render($page['footer_1']); ?>
                    </div>
                    <?php endif; ?>

                    <?php if (render($page['footer_2'])) : ?>
                    <div class="col-md-3">
                         <?php print render($page['footer_2']); ?>
                    </div>
                    <?php endif; ?>

                    <?php if (render($page['footer_3'])) : ?>
                    <div class="col-md-3">
                         <?php print render($page['footer_3']); ?>
                    </div>
                    <?php endif; ?>

                    <?php if (render($page['footer_4'])) : ?>
                    <div class="col-md-4">
                         <?php print render($page['footer_4']); ?>
                    </div>
                    <?php endif; ?>

               </div>
          </div>
          <?php endif; ?>
          <!-- .footer-copyright -->
          <div class="footer-copyright">
               <div class="container">
                    <div class="row">
                         <div class="col-md-6">

                              <?php if (isset($page['footer_bottom_left'])) : ?>
                              <?php print render($page['footer_bottom_left']); ?>
                              <?php endif; ?>

                         </div>
                         <div class="col-md-6">

                              <?php if (isset($page['footer_bottom_right'])) : ?>
                              <?php print render($page['footer_bottom_right']); ?>
                              <?php endif; ?>

                         </div>
                    </div>
               </div>
          </div>
          <!--/ .footer-copyright -->
     </footer>
     <!--/ footer -->
</div>
