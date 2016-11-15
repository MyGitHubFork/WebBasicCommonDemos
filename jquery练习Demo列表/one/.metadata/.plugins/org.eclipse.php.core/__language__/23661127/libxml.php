<?php

// Start of libxml v.7.0.0-dev

class LibXMLError  {
}

/**
 * Set the streams context for the next libxml document load or write
 * @link http://www.php.net/manual/en/function.libxml-set-streams-context.php
 * @param resource $streams_context <p>
 * The stream context resource (created with
 * stream_context_create)
 * </p>
 * @return void 
 */
function libxml_set_streams_context ($streams_context) {}

/**
 * Disable libxml errors and allow user to fetch error information as needed
 * @link http://www.php.net/manual/en/function.libxml-use-internal-errors.php
 * @param bool $use_errors [optional] <p>
 * Enable (true) user error handling or disable (false) user error handling. Disabling will also clear any existing libxml errors.
 * </p>
 * @return bool This function returns the previous value of
 * use_errors.
 */
function libxml_use_internal_errors ($use_errors = null) {}

/**
 * Retrieve last error from libxml
 * @link http://www.php.net/manual/en/function.libxml-get-last-error.php
 * @return LibXMLError a LibXMLError object if there is any error in the
 * buffer, false otherwise.
 */
function libxml_get_last_error () {}

/**
 * Clear libxml error buffer
 * @link http://www.php.net/manual/en/function.libxml-clear-errors.php
 * @return void 
 */
function libxml_clear_errors () {}

/**
 * Retrieve array of errors
 * @link http://www.php.net/manual/en/function.libxml-get-errors.php
 * @return array an array with LibXMLError objects if there are any
 * errors in the buffer, or an empty array otherwise.
 */
function libxml_get_errors () {}

/**
 * Disable the ability to load external entities
 * @link http://www.php.net/manual/en/function.libxml-disable-entity-loader.php
 * @param bool $disable [optional] <p>
 * Disable (true) or enable (false) libxml extensions (such as
 * , 
 * and ) to load external entities.
 * </p>
 * @return bool the previous value.
 */
function libxml_disable_entity_loader ($disable = null) {}

/**
 * Changes the default external entity loader
 * @link http://www.php.net/manual/en/function.libxml-set-external-entity-loader.php
 * @param callable $resolver_function <p>
 * A callable that takes three arguments. Two strings, a public id
 * and system id, and a context (an array with four keys) as the third argument.
 * This callback should return a resource, a string from which a resource can be
 * opened, or &null;.
 * </p>
 * @return void 
 */
function libxml_set_external_entity_loader ($resolver_function) {}

define ('LIBXML_VERSION', 20901);
define ('LIBXML_DOTTED_VERSION', "2.9.1");
define ('LIBXML_LOADED_VERSION', 20902);
define ('LIBXML_NOENT', 2);
define ('LIBXML_DTDLOAD', 4);
define ('LIBXML_DTDATTR', 8);
define ('LIBXML_DTDVALID', 16);
define ('LIBXML_NOERROR', 32);
define ('LIBXML_NOWARNING', 64);
define ('LIBXML_NOBLANKS', 256);
define ('LIBXML_XINCLUDE', 1024);
define ('LIBXML_NSCLEAN', 8192);
define ('LIBXML_NOCDATA', 16384);
define ('LIBXML_NONET', 2048);
define ('LIBXML_PEDANTIC', 128);
define ('LIBXML_COMPACT', 65536);
define ('LIBXML_NOXMLDECL', 2);
define ('LIBXML_PARSEHUGE', 524288);
define ('LIBXML_BIGLINES', 4194304);
define ('LIBXML_NOEMPTYTAG', 4);
define ('LIBXML_SCHEMA_CREATE', 1);
define ('LIBXML_HTML_NOIMPLIED', 8192);
define ('LIBXML_HTML_NODEFDTD', 4);
define ('LIBXML_ERR_NONE', 0);
define ('LIBXML_ERR_WARNING', 1);
define ('LIBXML_ERR_ERROR', 2);
define ('LIBXML_ERR_FATAL', 3);

// End of libxml v.7.0.0-dev
