<?php

declare(strict_types=1);

/**
 * Project: wordpress-skeleton-theme
 * 
 * @author Thilo Ratnaweera <thilo.ratnaweera@netbrothers.de>
 * @copyright © 2024 NetBrothers GmbH.
 * @license GPLv3
 * @todo search results
 */

$searchQuery = sprintf('<span>%s</span>', get_search_query());

?>
<p>@todo search.php</p>
<h2><?php printf(__('Search Results for: %s'), $searchQuery); ?></h2>
<?php get_search_form(); ?>
