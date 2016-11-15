<?php
/**
 * Disables output caching for the current request. This overrides any caching settings that are configured for the current request.
 * @since 4.0
 */
function page_cache_disable_caching() {}

/**
 * Does not allow the cache to perform compression on the output of the current request. This overrides any compression settings that are configured for this request.
 * @since 4.0
 */
function page_cache_disable_compression() {}

/**
 * Clears cached contents for all requests that match a specific URL or regular expression
 * @param $URL string
 * @since 4.0
 */
function page_cache_remove_cached_contents($URL) {}

/**
 * Clears all cached contents
 * @since 4.0
 */
function page_cache_remove_all_cached_contents() {}
?>