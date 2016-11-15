<?php
/**
 * Resets the contents of the Optimizer+ shared memory storage.<br> Note: This is not an immediate action. The shared memory storage is reset when a request arrives while the shared memory storage is not being used by a script.
 * @return boolean Returns TRUE unless the Optimizer+ is disabled.
 * @since 3.6
 */
function accelerator_reset() {}

/**
 * Returns an array with the accelerator status; statistics; accelerated_files; memory status and usage. see returned output below.
 * @internal 
 * @return array This is a var_dump() of the returned array: array(5) { ["accelerator_enabled"]=> int(1) ["cache_full"]=> bool(false) ["memory_usage"]=> array(4) { ["used_memory"]=> int(221172) ["free_memory"]=> int(66887692) ["wasted_memory"]=> int(0) ["current_wasted_percentage"]=> float(0) } ["accelerator_statistics"]=> array(8) { ["num_cached_scripts"]=> int(1) ["max_cached_scripts"]=> int(3907) ["hits"]=> int(0) ["last_restart_time"]=> int(1201779460) ["misses"]=> int(1) ["blacklist_misses"]=> int(0) ["blacklist_miss_ratio"]=> float(0) ["accelerator_hit_rate"]=> float(0) } ["scripts"]=> array(1) { ["/var/www/localhost/htdocs/acc.php"]=> array(6) { ["full_path"]=> string(33) "/var/www/localhost/htdocs/acc.php" ["hits"]=> int(0) ["memory_consumption"]=> int(2192) ["last_used"]=> string(25) "Thu Jan 31 13:37:40 2008" ["last_used_timestamp"]=> int(1201779460) ["timestamp"]=> int(1200570314) } } }
 * @since 4.0
 */
function accelerator_get_status() {}

/**
 * Returns an array with a list of directives; version; blacklisted files. See returned output below.
 * @internal 
 * @return array This is a var_dump() of the returned array: array(3) { ["directives"]=> array(13) { ["zend_accelerator.enable"]=> bool(true) ["zend_accelerator.use_cwd"]=> bool(true) ["zend_accelerator.validate_timestamps"]=> bool(true) ["zend_accelerator.inherited_hack"]=> bool(true) ["zend_accelerator.dups_fix"]=> bool(true) ["zend_accelerator.memory_consumption"]=> int(67108864) ["zend_accelerator.max_accelerated_files"]=> int(2000) ["zend_accelerator.consistency_checks"]=> int(0) ["zend_accelerator.force_restart_timeout"]=> int(180) ["zend_accelerator.revalidate_freq"]=> int(2) ["zend_accelerator.max_wasted_percentage"]=> float(0.05) ["zend_accelerator.blacklist_filename"]=> string(39) "/tmp/user_blacklist.ZendAccelerator.txt" ["zend_accelerator.preferred_memory_model"]=> string(0) "" } ["version"]=> array(2) { ["version"]=> string(9) "4.0.0beta" ["accelerator_product_name"]=> string(16) "Zend Optimizer Plus" } ["blacklist"]=> array(0) { } }
 * @since 4.0
 */
function accelerator_get_configuration() {}
?>