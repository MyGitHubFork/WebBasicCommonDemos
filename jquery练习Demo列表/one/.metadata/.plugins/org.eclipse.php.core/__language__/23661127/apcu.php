<?php

// Start of apcu v.4.0.6

/**
 * @param type[optional]
 * @param limited[optional]
 */
function apcu_cache_info ($type = null, $limited = null) {}

/**
 * @param cache[optional]
 */
function apcu_clear_cache ($cache = null) {}

/**
 * @param limited[optional]
 */
function apcu_sma_info ($limited = null) {}

/**
 * @param key
 */
function apcu_key_info ($key) {}

function apcu_enabled () {}

/**
 * @param key
 * @param var
 * @param ttl[optional]
 */
function apcu_store ($key, $var, $ttl = null) {}

/**
 * @param key
 * @param success[optional]
 */
function apcu_fetch ($key, &$success = null) {}

/**
 * @param keys
 */
function apcu_delete ($keys) {}

/**
 * @param key
 * @param var
 * @param ttl[optional]
 */
function apcu_add ($key, $var, $ttl = null) {}

/**
 * @param key
 * @param step[optional]
 * @param success[optional]
 */
function apcu_inc ($key, $step = null, &$success = null) {}

/**
 * @param key
 * @param step[optional]
 * @param success[optional]
 */
function apcu_dec ($key, $step = null, &$success = null) {}

/**
 * @param key
 * @param old
 * @param new
 */
function apcu_cas ($key, $old, $new) {}

/**
 * @param keys
 */
function apcu_exists ($keys) {}

/**
 * @param user_vars[optional]
 */
function apcu_bin_dump ($user_vars = null) {}

/**
 * @param data
 * @param flags[optional]
 */
function apcu_bin_load ($data, $flags = null) {}

/**
 * @param user_vars
 * @param filename
 * @param flags[optional]
 * @param context[optional]
 */
function apcu_bin_dumpfile ($user_vars, $filename, $flags = null, $context = null) {}

/**
 * @param filename
 * @param context[optional]
 * @param flags[optional]
 */
function apcu_bin_loadfile ($filename, $context = null, $flags = null) {}

define ('APCU_APC_FULL_BC', true);

// End of apcu v.4.0.6
