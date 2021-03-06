<?php
/**
 * @file
 * Bootstrap 6-6 stacked template for Display Suite.
 */
?>
<?php if (isset($mukurtu_tabbed_local_tasks[$nid])): ?>
<ul class="tabs--primary nav nav-tabs">
<?php print render($mukurtu_tabbed_local_tasks[$nid]);?>
</ul>
<?php endif; ?>

<<?php print $layout_wrapper; print $layout_attributes; ?> class="<?php print $classes; ?>">
  <?php if (isset($title_suffix['contextual_links'])): ?>
    <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>
  <?php if ($top): ?>
    <div class="row">
      <<?php print $top_wrapper; ?> class="col-sm-12 <?php print $top_classes; ?>">
        <?php print $top; ?>
      </<?php print $top_wrapper; ?>>
    </div>
  <?php endif; ?>
  <?php if ($left || $right): ?>
    <div class="row">
      <<?php print $left_wrapper; ?> class="col-sm-9 <?php print $left_classes; ?>">
        <?php print $left; ?>
      </<?php print $left_wrapper; ?>>
      <<?php print $right_wrapper; ?> class="col-sm-3 <?php print $right_classes; ?>">
       <div class="metadata-wrapper">
        <?php print $right; ?>
       </div>
      </<?php print $right_wrapper; ?>>
    </div>
  <?php endif; ?>
  <?php if ($bottom): ?>
    <div class="row">
      <<?php print $bottom_wrapper; ?> class="col-sm-12 <?php print $bottom_classes; ?>">
        <?php print $bottom; ?>
      </<?php print $bottom_wrapper; ?>>
    </div>
  <?php endif; ?>
</<?php print $layout_wrapper ?>>


<!-- Needed to activate display suite support on forms -->
<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
