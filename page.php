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
        <h1><?php the_title(); ?> (page.php)</h1>

        <?php the_content(); ?>
        <!-- <ul>
            <li>Display page title and page content.</li>
            <li>Display comment list and comment form (unless comments are off).</li>
            <li>Include wp_link_pages() to support navigation links within a page.</li>
            <li>Metadata such as tags, categories, date and author should not be displayed.</li>
            <li>Display an "Edit" link for logged-in users with edit permissions.</li>
        </ul> -->
    </main>
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
