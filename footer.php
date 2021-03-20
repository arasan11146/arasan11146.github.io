<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 */
?>
<?php
$footerHideBlog = false;
$footerHidePost = false;
$pagePost = is_single();
$pageBlog = is_home(); ?>
		</div><!-- #content -->
<?php if (!$pageBlog && !$pagePost || $pageBlog && !$footerHideBlog || $pagePost && !$footerHidePost) { ?>
        <footer class="u-clearfix u-footer u-grey-90 u-footer" id="sec-fb62">
  <div class="u-clearfix u-sheet u-sheet-1">
    <div class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xl u-align-left-xs u-container-style u-group u-group-1">
      <div class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-container-layout-1">
        <h2 class="u-text u-text-1">How I Can Pay</h2>
      </div>
    </div>
    <div class="u-clearfix u-gutter-30 u-layout-wrap u-layout-wrap-1">
      <div class="u-layout">
        <div class="u-layout-row">
          <div class="u-container-style u-layout-cell u-left-cell u-size-60 u-layout-cell-1">
            <div class="u-container-layout">
              <h3 class="u-text u-text-2">Individual customers</h3>
              <p class="u-text u-text-grey-50 u-text-3">We accepts Cash and UPI Payments <br>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="u-border-1 u-border-grey-50 u-expanded-width u-line u-line-horizontal u-opacity u-opacity-50 u-line-1"></div>
  </div>
</footer>
        
<?php } ?>
        <?php $showBackLink = get_option('np_hide_backlink') ? false : true; ?>
<?php if ($showBackLink) : $GLOBALS['theme_backlink'] = true; ?>
<section class="u-backlink u-clearfix u-grey-80">
            <a class="u-link" href="https://nicepage.com/WordPress Themes" target="_blank">
        <span>wordpress-themes</span>
            </a>
        <p class="u-text"><span>created with</span></p>
        <a class="u-link" href="https://nicepage.com/wordpress-website-builder" target="_blank"><span>WordPress Website Builder</span></a>.
    </section>
<?php endif; ?>
        
	</div><!-- .site-inner -->
</div><!-- #page -->

<?php wp_footer(); ?>
<?php back_to_top(); ?>
</body>
</html>
