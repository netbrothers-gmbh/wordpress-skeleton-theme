<?php

declare(strict_types=1);

/**
 * Project: wordpress-skeleton-theme
 * 
 * @author Thilo Ratnaweera <thilo.ratnaweera@netbrothers.de>
 * @copyright © 2024 NetBrothers GmbH.
 * @license GPLv3
 */

?>
<?php get_header(); ?>

<div id="content-container">
    <main>
        <h1><?php _e('Latest Blog Posts', 'nb-wordpress-skeleton-theme'); ?></h1>
        <?php
        if (have_posts()) {
          ?>
          <div class="gallery-container">
            <?php
            while (have_posts()) {

              // move iterator
              the_post();

              // print post preview
              include __DIR__ . '/partials/post-preview.php';
            }
            ?>
          </div>
          <?php
        } else {
            ?>
            <p><?php _e('Sorry, no posts matched your criteria.', 'nb-wordpress-skeleton-theme'); ?></p>
            <?php
        }
        ?>
    </main>
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
