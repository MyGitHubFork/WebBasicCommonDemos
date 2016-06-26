<?php

// Start of Zend OPcache v.7.0.4-devFE

/**
 * Resets the contents of the opcode cache
 * @link http://www.php.net/manual/en/function.opcache-reset.php
 * @return boolean true if the opcode cache was reset, or false if the opcode
 * cache is disabled.
 */
function opcache_reset () {}

/**
 * Invalidates a cached script
 * @link http://www.php.net/manual/en/function.opcache-invalidate.php
 * @param script string <p>
 * The path to the script being invalidated.
 * </p>
 * @param force boolean[optional] <p>
 * If set to true, the script will be invalidated regardless of whether
 * invalidation is necessary.
 * </p>
 * @return boolean true if the opcode cache for script was
 * invalidated or if there was nothing to invalidate, or false if the opcode
 * cache is disabled.
 */
function opcache_invalidate ($script, $force = null) {}

/**
 * Compiles and caches a PHP script without executing it
 * @link http://www.php.net/manual/en/function.opcache-compile-file.php
 * @param file string <p>
 * The path to the PHP script to be compiled.
 * </p>
 * @return boolean true if file was compiled successfully
 * or false on failure.
 */
function opcache_compile_file ($file) {}

/**
 * @param script
 */
function opcache_is_script_cached ($script) {}

/**
 * Get configuration information about the cache
 * @link http://www.php.net/manual/en/function.opcache-get-configuration.php
 * @return array an array of information, including ini, blacklist and version
 */
function opcache_get_configuration () {}

/**
 * Get status information about the cache
 * @link http://www.php.net/manual/en/function.opcache-get-status.php
 * @param get_scripts boolean[optional] <p>
 * Include script specific state information
 * </p>
 * @return array an array of information, optionally containing script specific state information
 */
function opcache_get_status ($get_scripts = null) {}

// End of Zend OPcache v.7.0.4-devFE
