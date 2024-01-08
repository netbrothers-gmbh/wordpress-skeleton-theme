<?php

declare(strict_types=1);

/**
 * Project: wordpress-skeleton-theme
 * 
 * @author Thilo Ratnaweera <thilo.ratnaweera@netbrothers.de>
 * @copyright © 2024 NetBrothers GmbH.
 * @license GPLv3
 */

$permaLink = get_the_permalink();
$postLinkTitle = sprintf(
    __('Permanent link to post &quot;%s&quot;', 'nb-wordpress-skeleton-theme'),
    get_the_title()
);

?>
<div class="gallery-item">
    <a class="post-preview__titlelink" href="<?php echo $permaLink; ?>"
        rel="bookmark"
        title="<?php echo $postLinkTitle; ?>">
        <h2><?php the_title(); ?></h2>
    </a>
    <div class="post-preview__meta">
        <?php
        echo sprintf(
            /* translators: 1: Post date 2: Post author */
            __('%1$s by %2$s', 'nb-wordpress-skeleton-theme'),
            get_the_date(),
            get_the_author()
        )
        ?>
    </div>
    <div class="post-preview__excerpt">
        <?php the_excerpt(); ?>
    </div>
    <br>
    <a class="post-preview__morelink" href="<?php echo $permaLink; ?>"
        rel="bookmark"
        title="<?php echo $postLinkTitle; ?>">
        <?php _e('Read more', 'nb-wordpress-skeleton-theme'); ?>
    </a>
</div>
