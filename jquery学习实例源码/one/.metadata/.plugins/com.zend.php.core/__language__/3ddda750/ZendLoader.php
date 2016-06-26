<?php
/**
 * Checks the Zend Optimizer+ configuration to verify that it is configured to load encoded files
 * @return boolean Returns TRUE if the Guard Loader is configured to load encoded files. Returns FALSE if the Guard Loader is not configured to load encoded files.
 * @since 4.0
 */
function zend_loader_enabled() {}

/**
 * Returns TRUE if the current file was encoded with Zend Guard or FALSE otherwise. If FALSE, consider disabling the Guard Loader
 * @return boolean TRUE if Zend-encoded, FALSE otherwise
 * @since 4.0
 */
function zend_loader_file_encoded() {}

/**
 * Compares the signature of the running file against the signatures of the license files that are loaded into the License Registry by the php.ini file. If a valid license file exists, the values of the license file are read into an array. If a valid license does not exist or is not specified in the php.ini, it is not entered in the PHP server's license registry. If a valid license that matches the product and signature cannot be found in the license directory, an array is not created. For information on the proper installation of a license file, as well as the php.ini directive, see the Zend Guard User Guide
 * @return array Returns an array or FALSE.<br> If an array is returned, a valid license for the product exists in the location indicated in the php.ini file.
 * @since 4.0
 */
function zend_loader_file_licensed() {}

/**
 * Obtains the full path to the file that is currently running. In other words, the path of the file calling this API function is evaluated only at run time and not during encoding
 * @return string Returns a string containing the full path of the file that is currently running
 * @since 4.0
 */
function zend_loader_current_file() {}

/**
 * Dynamically loads a license for applications encoded with Zend Guard.
 * @param $license_file string
 * @param $overwrite boolean[optional]
 * @return boolean TRUE if the license was loaded successfully, FALSE otherwise
 * @since 4.0
 */
function zend_loader_install_license($license_file, $overwrite = 0) {}

/**
 * Gets the value of a PHP configuration option - but search in zend.ini first
 * @internal 
 * @param $option_name string
 * @return string Value of the option. NULL if not found
 * @since 4.0
 */
function zend_get_cfg_var($option_name) {}

/**
 * Match the host against masks while they are delimited by delimiter (default ',')
 * @internal 
 * @param $host string
 * @param $masks string
 * @param $delimiter string[optional]
 * @return boolean TRUE if matched, FALSE otherwise
 * @since 4.0
 */
function zend_match_hostmasks($host, $masks, $delimiter = ',') {}

/**
 * Obfuscate and return the given function name with the internal obfuscation function
 * @param $function_name string
 * @return string Returns the obfuscated form of the given string.
 * @since 4.0
 */
function zend_obfuscate_function_name($function_name) {}

/**
 * Returns the current obfuscation level support (set by zend_optimizer.obfuscation_level_support) to get information on the product that is currently running.
 * @return int Current obfuscation level
 * @since 4.0
 */
function zend_current_obfuscation_level() {}

/**
 * Start runtime-obfuscation support to allow limited mixing of obfuscated and un-obfuscated code
 * @return boolean TRUE if succeeds, FALSE otherwise
 * @since 4.0
 */
function zend_runtime_obfuscate() {}

/**
 * Obfuscate and return the given class name with the internal obfuscation function
 * @param $class_name string
 * @return string Returns the obfuscated form of the given string
 * @since 4.0
 */
function zend_obfuscate_class_name($class_name) {}

/**
 * Returns an array of Zend (host) IDs in your system. If all_ids is TRUE, then all IDs are returned, otherwise only IDs considered "primary" are returned
 * @param $all_ids boolean[optional]
 * @return array Array of host IDs
 * @since 4.0
 */
function zend_get_id($all_ids = false) {}

/**
 * Returns Zend Guard Loader version
 * @return string Zend Guard Loader version
 * @since 4.0
 */
function zend_loader_version() {}
?>