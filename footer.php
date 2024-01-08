<?php

declare(strict_types=1);

/**
 * Project: wordpress-skeleton-theme
 * 
 * @author Thilo Ratnaweera <thilo.ratnaweera@netbrothers.de>
 * @copyright © 2024 NetBrothers GmbH.
 * @license GPLv3
 */

/**
 * @see https://developer.wordpress.org/reference/functions/get_bloginfo/
 * ‘name’ – Site title (set in Settings > General)
 */

$sponsorUrl = 'https://netbrothers.de/#27eeca5d-b5a7-4a88-83b8-ba2dc0fb0f17';
$sponsorLink = sprintf('<a target="_blank" href="%s">NetBrothers</a>', $sponsorUrl);
$copyrightTemplate = get_option(
    'nb_theme_setting_copyright',
    sprintf(
        /* translators: %s: Hyperlink to sponsor website. */
        __('© {{year}} {{bloginfo_name}}. Powered by %s.', 'nb-wordpress-skeleton-theme'),
        $sponsorLink
    ),
);

$blogInfoName = get_bloginfo('name');
$blogInfoName = is_string($blogInfoName) ? $blogInfoName : '';

$copyright = strtr($copyrightTemplate, [
    '{{year}}' => (new \DateTimeImmutable)->format('Y'),
    '{{bloginfo_name}}' => $blogInfoName,
]);
?>
    <footer>
        <div><?php echo $copyright; ?></div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>
