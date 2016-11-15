<?php

// Start of json v.1.4.0

interface JsonSerializable  {

	/**
	 * Specify data which should be serialized to JSON
	 * @link http://www.php.net/manual/en/jsonserializable.jsonserialize.php
	 * @return mixed data which can be serialized by json_encode,
	 * which is a value of any type other than a resource.
	 */
	abstract public function jsonSerialize () {}

}

/**
 * Returns the JSON representation of a value
 * @link http://www.php.net/manual/en/function.json-encode.php
 * @param mixed $value <p>
 * The value being encoded. Can be any type except
 * a resource.
 * </p>
 * <p>
 * All string data must be UTF-8 encoded.
 * </p>
 * &json.implementation.superset;
 * @param int $options [optional] <p>
 * Bitmask consisting of JSON_HEX_QUOT,
 * JSON_HEX_TAG,
 * JSON_HEX_AMP,
 * JSON_HEX_APOS,
 * JSON_NUMERIC_CHECK,
 * JSON_PRETTY_PRINT,
 * JSON_UNESCAPED_SLASHES,
 * JSON_FORCE_OBJECT,
 * JSON_PRESERVE_ZERO_FRACTION,
 * JSON_UNESCAPED_UNICODE,
 * JSON_PARTIAL_OUTPUT_ON_ERROR. The behaviour of these
 * constants is described on the
 * JSON constants page.
 * </p>
 * @param int $depth [optional] <p>
 * Set the maximum depth. Must be greater than zero.
 * </p>
 * @return string a JSON encoded string on success or false on failure.
 */
function json_encode ($value, $options = null, $depth = null) {}

/**
 * Decodes a JSON string
 * @link http://www.php.net/manual/en/function.json-decode.php
 * @param string $json <p>
 * The json string being decoded.
 * </p>
 * <p>
 * This function only works with UTF-8 encoded strings.
 * </p>
 * &json.implementation.superset;
 * @param bool $assoc [optional] <p>
 * When true, returned objects will be converted into
 * associative arrays.
 * </p>
 * @param int $depth [optional] <p>
 * User specified recursion depth.
 * </p>
 * @param int $options [optional] <p>
 * Bitmask of JSON decode options. Currently only
 * JSON_BIGINT_AS_STRING
 * is supported (default is to cast large integers as floats)
 * </p>
 * @return mixed the value encoded in json in appropriate
 * PHP type. Values true, false and
 * null are returned as true, false and &null;
 * respectively. &null; is returned if the json cannot
 * be decoded or if the encoded data is deeper than the recursion limit.
 */
function json_decode ($json, $assoc = null, $depth = null, $options = null) {}

/**
 * Returns the last error occurred
 * @link http://www.php.net/manual/en/function.json-last-error.php
 * @return int an integer, the value can be one of the following 
 * constants:
 */
function json_last_error () {}

/**
 * Returns the error string of the last json_encode() or json_decode() call
 * @link http://www.php.net/manual/en/function.json-last-error-msg.php
 * @return string the error message on success, "No Error" if no
 * error has occurred, or false on failure.
 */
function json_last_error_msg () {}

define ('JSON_HEX_TAG', 1);
define ('JSON_HEX_AMP', 2);
define ('JSON_HEX_APOS', 4);
define ('JSON_HEX_QUOT', 8);
define ('JSON_FORCE_OBJECT', 16);
define ('JSON_NUMERIC_CHECK', 32);
define ('JSON_UNESCAPED_SLASHES', 64);
define ('JSON_PRETTY_PRINT', 128);
define ('JSON_UNESCAPED_UNICODE', 256);
define ('JSON_PARTIAL_OUTPUT_ON_ERROR', 512);
define ('JSON_PRESERVE_ZERO_FRACTION', 1024);
define ('JSON_ERROR_NONE', 0);
define ('JSON_ERROR_DEPTH', 1);
define ('JSON_ERROR_STATE_MISMATCH', 2);
define ('JSON_ERROR_CTRL_CHAR', 3);
define ('JSON_ERROR_SYNTAX', 4);
define ('JSON_ERROR_UTF8', 5);
define ('JSON_ERROR_RECURSION', 6);
define ('JSON_ERROR_INF_OR_NAN', 7);
define ('JSON_ERROR_UNSUPPORTED_TYPE', 8);
define ('JSON_ERROR_INVALID_PROPERTY_NAME', 9);
define ('JSON_ERROR_UTF16', 10);
define ('JSON_OBJECT_AS_ARRAY', 1);
define ('JSON_BIGINT_AS_STRING', 2);

// End of json v.1.4.0
