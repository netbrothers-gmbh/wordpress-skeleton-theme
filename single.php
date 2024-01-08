<?php

declare(strict_types=1);

/**
 * Project: wordpress-skeleton-theme
 * 
 * @author Thilo Ratnaweera <thilo.ratnaweera@netbrothers.de>
 * @copyright © 2024 NetBrothers GmbH.
 * @license GPLv3
 * @todo see comments
 */

?>
<?php get_header(); ?>

<div id="content-container">
    <main>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
        <!-- <ul>
            <li>Include wp_link_pages() to support navigation links within a post.</li>
            <li>Display post title and post content.
                <ul>
                    <li>The title should be plain text instead of a link pointing to itself.</li>
                </ul>
            </li>
            <li>
                Display the post date.
                <ul>
                    <li>Respect the date and time format settings unless it's important to the design. (User settings for date and time format are in Administration Panels > Settings > General).</li>
                    <li>For output based on the user setting, use the_time( get_option( 'date_format' ) ).</li>
                </ul>
            </li>
            <li>Display the author name (if appropriate).</li>
            <li>Display post categories and post tags.</li>
            <li>Display an "Edit" link for logged-in users with edit permissions.</li>
            <li>Display comment list and comment form.</li>
            <li>Show navigation links to next and previous post using previous_post_link() and next_post_link().</li>
        </ul> -->
    </main>
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
