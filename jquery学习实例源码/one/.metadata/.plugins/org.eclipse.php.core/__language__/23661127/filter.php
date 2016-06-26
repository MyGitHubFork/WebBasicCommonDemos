<?php

// Start of filter v.7.0.0-dev

/**
 * Gets a specific external variable by name and optionally filters it
 * @link http://www.php.net/manual/en/function.filter-input.php
 * @param int $type <p>
 * One of INPUT_GET, INPUT_POST,
 * INPUT_COOKIE, INPUT_SERVER, or
 * INPUT_ENV.
 * </p>
 * @param string $variable_name <p>
 * Name of a variable to get.
 * </p>
 * @param int $filter [optional] 
 * @param mixed $options [optional] <p>
 * Associative array of options or bitwise disjunction of flags. If filter
 * accepts options, flags can be provided in "flags" field of array.
 * </p>
 * @return mixed Value of the requested variable on success, false if the filter fails,
 * or &null; if the variable_name variable is not set.
 * If the flag FILTER_NULL_ON_FAILURE is used, it
 * returns false if the variable is not set and &null; if the filter fails.
 */
function filter_input ($type, $variable_name, $filter = null, $options = null) {}

/**
 * Filters a variable with a specified filter
 * @link http://www.php.net/manual/en/function.filter-var.php
 * @param mixed $variable <p>
 * Value to filter.
 * </p>
 * @param int $filter [optional] 
 * @param mixed $options [optional] <p>
 * Associative array of options or bitwise disjunction of flags. If filter
 * accepts options, flags can be provided in "flags" field of array. For
 * the "callback" filter, callable type should be passed. The
 * callback must accept one argument, the value to be filtered, and return
 * the value after filtering/sanitizing it.
 * </p>
 * <p>
 * array(
 * 'default' => 3, // value to return if the filter fails
 * // other options here
 * 'min_range' => 0
 * ),
 * 'flags' => FILTER_FLAG_ALLOW_OCTAL,
 * );
 * $var = filter_var('0755', FILTER_VALIDATE_INT, $options);
 * // for filter that only accept flags, you can pass them directly
 * $var = filter_var('oops', FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);
 * // for filter that only accept flags, you can also pass as an array
 * $var = filter_var('oops', FILTER_VALIDATE_BOOLEAN,
 * array('flags' => FILTER_NULL_ON_FAILURE));
 * // callback validate filter
 * function foo($value)
 * {
 * // Expected format: Surname, GivenNames
 * if (strpos($value, ", ") === false) return false;
 * list($surname, $givennames) = explode(", ", $value, 2);
 * $empty = (empty($surname) || empty($givennames));
 * $notstrings = (!is_string($surname) || !is_string($givennames));
 * if ($empty || $notstrings) {
 * return false;
 * } else {
 * return $value;
 * }
 * }
 * $var = filter_var('Doe, Jane Sue', FILTER_CALLBACK, array('options' => 'foo'));
 * ?>
 * ]]>
 * </p>
 * @return mixed the filtered data, or false if the filter fails.
 */
function filter_var ($variable, $filter = null, $options = null) {}

/**
 * Gets external variables and optionally filters them
 * @link http://www.php.net/manual/en/function.filter-input-array.php
 * @param int $type <p>
 * One of INPUT_GET, INPUT_POST,
 * INPUT_COOKIE, INPUT_SERVER, or
 * INPUT_ENV.
 * </p>
 * @param mixed $definition [optional] <p>
 * An array defining the arguments. A valid key is a string
 * containing a variable name and a valid value is either a filter type, or an array
 * optionally specifying the filter, flags and options. If the value is an
 * array, valid keys are filter which specifies the
 * filter type,
 * flags which specifies any flags that apply to the
 * filter, and options which specifies any options that
 * apply to the filter. See the example below for a better understanding.
 * </p>
 * <p>
 * This parameter can be also an integer holding a filter constant. Then all values in the
 * input array are filtered by this filter.
 * </p>
 * @param bool $add_empty [optional] <p>
 * Add missing keys as &null; to the return value.
 * </p>
 * @return mixed An array containing the values of the requested variables on success, or false 
 * on failure. An array value will be false if the filter fails, or &null; if 
 * the variable is not set. Or if the flag FILTER_NULL_ON_FAILURE
 * is used, it returns false if the variable is not set and &null; if the filter 
 * fails.
 */
function filter_input_array ($type, $definition = null, $add_empty = null) {}

/**
 * Gets multiple variables and optionally filters them
 * @link http://www.php.net/manual/en/function.filter-var-array.php
 * @param array $data <p>
 * An array with string keys containing the data to filter.
 * </p>
 * @param mixed $definition [optional] <p>
 * An array defining the arguments. A valid key is a string
 * containing a variable name and a valid value is either a
 * filter type, or an
 * array optionally specifying the filter, flags and options.
 * If the value is an array, valid keys are filter
 * which specifies the filter type,
 * flags which specifies any flags that apply to the
 * filter, and options which specifies any options that
 * apply to the filter. See the example below for a better understanding.
 * </p>
 * <p>
 * This parameter can be also an integer holding a filter constant. Then all values in the
 * input array are filtered by this filter.
 * </p>
 * @param bool $add_empty [optional] <p>
 * Add missing keys as &null; to the return value.
 * </p>
 * @return mixed An array containing the values of the requested variables on success, or false 
 * on failure. An array value will be false if the filter fails, or &null; if 
 * the variable is not set.
 */
function filter_var_array (array $data, $definition = null, $add_empty = null) {}

/**
 * Returns a list of all supported filters
 * @link http://www.php.net/manual/en/function.filter-list.php
 * @return array an array of names of all supported filters, empty array if there
 * are no such filters. Indexes of this array are not filter IDs, they can be
 * obtained with filter_id from a name instead.
 */
function filter_list () {}

/**
 * Checks if variable of specified type exists
 * @link http://www.php.net/manual/en/function.filter-has-var.php
 * @param int $type <p>
 * One of INPUT_GET, INPUT_POST,
 * INPUT_COOKIE, INPUT_SERVER, or
 * INPUT_ENV.
 * </p>
 * @param string $variable_name <p>
 * Name of a variable to check.
 * </p>
 * @return bool true on success or false on failure
 */
function filter_has_var ($type, $variable_name) {}

/**
 * Returns the filter ID belonging to a named filter
 * @link http://www.php.net/manual/en/function.filter-id.php
 * @param string $filtername <p>
 * Name of a filter to get.
 * </p>
 * @return int ID of a filter on success or false if filter doesn't exist.
 */
function filter_id ($filtername) {}

define ('INPUT_POST', 0);
define ('INPUT_GET', 1);
define ('INPUT_COOKIE', 2);
define ('INPUT_ENV', 4);
define ('INPUT_SERVER', 5);
define ('INPUT_SESSION', 6);
define ('INPUT_REQUEST', 99);
define ('FILTER_FLAG_NONE', 0);
define ('FILTER_REQUIRE_SCALAR', 33554432);
define ('FILTER_REQUIRE_ARRAY', 16777216);
define ('FILTER_FORCE_ARRAY', 67108864);
define ('FILTER_NULL_ON_FAILURE', 134217728);
define ('FILTER_VALIDATE_INT', 257);
define ('FILTER_VALIDATE_BOOLEAN', 258);
define ('FILTER_VALIDATE_FLOAT', 259);
define ('FILTER_VALIDATE_REGEXP', 272);
define ('FILTER_VALIDATE_DOMAIN', 277);
define ('FILTER_VALIDATE_URL', 273);
define ('FILTER_VALIDATE_EMAIL', 274);
define ('FILTER_VALIDATE_IP', 275);
define ('FILTER_VALIDATE_MAC', 276);
define ('FILTER_DEFAULT', 516);
define ('FILTER_UNSAFE_RAW', 516);
define ('FILTER_SANITIZE_STRING', 513);
define ('FILTER_SANITIZE_STRIPPED', 513);
define ('FILTER_SANITIZE_ENCODED', 514);
define ('FILTER_SANITIZE_SPECIAL_CHARS', 515);
define ('FILTER_SANITIZE_FULL_SPECIAL_CHARS', 522);
define ('FILTER_SANITIZE_EMAIL', 517);
define ('FILTER_SANITIZE_URL', 518);
define ('FILTER_SANITIZE_NUMBER_INT', 519);
define ('FILTER_SANITIZE_NUMBER_FLOAT', 520);
define ('FILTER_SANITIZE_MAGIC_QUOTES', 521);
define ('FILTER_CALLBACK', 1024);
define ('FILTER_FLAG_ALLOW_OCTAL', 1);
define ('FILTER_FLAG_ALLOW_HEX', 2);
define ('FILTER_FLAG_STRIP_LOW', 4);
define ('FILTER_FLAG_STRIP_HIGH', 8);
define ('FILTER_FLAG_STRIP_BACKTICK', 512);
define ('FILTER_FLAG_ENCODE_LOW', 16);
define ('FILTER_FLAG_ENCODE_HIGH', 32);
define ('FILTER_FLAG_ENCODE_AMP', 64);
define ('FILTER_FLAG_NO_ENCODE_QUOTES', 128);
define ('FILTER_FLAG_EMPTY_STRING_NULL', 256);
define ('FILTER_FLAG_ALLOW_FRACTION', 4096);
define ('FILTER_FLAG_ALLOW_THOUSAND', 8192);
define ('FILTER_FLAG_ALLOW_SCIENTIFIC', 16384);
define ('FILTER_FLAG_SCHEME_REQUIRED', 65536);
define ('FILTER_FLAG_HOST_REQUIRED', 131072);
define ('FILTER_FLAG_PATH_REQUIRED', 262144);
define ('FILTER_FLAG_QUERY_REQUIRED', 524288);
define ('FILTER_FLAG_IPV4', 1048576);
define ('FILTER_FLAG_IPV6', 2097152);
define ('FILTER_FLAG_NO_RES_RANGE', 4194304);
define ('FILTER_FLAG_NO_PRIV_RANGE', 8388608);
define ('FILTER_FLAG_HOSTNAME', 1048576);

// End of filter v.7.0.0-dev
