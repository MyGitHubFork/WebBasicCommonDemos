<?php

// Start of yaml v.1.1.1

/**
 * Parse a YAML stream
 * @link http://www.php.net/manual/en/function.yaml-parse.php
 * @param input string <p>
 * The string to parse as a YAML document stream.
 * </p>
 * @param pos int[optional] <p>
 * Document to extract from stream (-1 for all
 * documents, 0 for first document, ...).
 * </p>
 * @param ndocs int[optional] <p>
 * If ndocs is provided, then it is filled with the
 * number of documents found in stream.
 * </p>
 * @param callbacks array[optional] <p>
 * Content handlers for YAML nodes. Associative array of YAML
 * tag =&gt; callable mappings. See
 * parse callbacks for more
 * details.
 * </p>
 * @return mixed the value encoded in input in appropriate
 * PHP type or false on failure. If pos is -1 an
 * array will be returned with one entry for each document found
 * in the stream.
 */
function yaml_parse ($input, $pos = null, &$ndocs = null, array $callbacks = null) {}

/**
 * Parse a YAML stream from a file
 * @link http://www.php.net/manual/en/function.yaml-parse-file.php
 * @param filename string <p>
 * Path to the file.
 * </p>
 * @param pos int[optional] <p>
 * Document to extract from stream (-1 for all
 * documents, 0 for first document, ...).
 * </p>
 * @param ndocs int[optional] <p>
 * If ndocs is provided, then it is filled with the
 * number of documents found in stream.
 * </p>
 * @param callbacks array[optional] <p>
 * Content handlers for YAML nodes. Associative array of YAML
 * tag =&gt; callable mappings. See
 * parse callbacks for more
 * details.
 * </p>
 * @return mixed the value encoded in input in appropriate
 * PHP type or false on failure. If pos is -1 an
 * array will be returned with one entry for each document found
 * in the stream.
 */
function yaml_parse_file ($filename, $pos = null, &$ndocs = null, array $callbacks = null) {}

/**
 * Parse a Yaml stream from a URL
 * @link http://www.php.net/manual/en/function.yaml-parse-url.php
 * @param url string <p>
 * url should be of the form "scheme://...". PHP
 * will search for a protocol handler (also known as a wrapper) for that
 * scheme. If no wrappers for that protocol are registered, PHP will emit
 * a notice to help you track potential problems in your script and then
 * continue as though filename specifies a regular file.
 * </p>
 * @param pos int[optional] <p>
 * Document to extract from stream (-1 for all
 * documents, 0 for first document, ...).
 * </p>
 * @param ndocs int[optional] <p>
 * If ndocs is provided, then it is filled with the
 * number of documents found in stream.
 * </p>
 * @param callbacks array[optional] <p>
 * Content handlers for YAML nodes. Associative array of YAML
 * tag =&gt; callable mappings. See
 * parse callbacks for more
 * </p>
 * @return mixed the value encoded in input in appropriate
 * PHP type or false on failure. If pos is -1 an
 * array will be returned with one entry for each document found
 * in the stream.
 */
function yaml_parse_url ($url, $pos = null, &$ndocs = null, array $callbacks = null) {}

/**
 * Returns the YAML representation of a value
 * @link http://www.php.net/manual/en/function.yaml-emit.php
 * @param data mixed <p>
 * The data being encoded. Can be any type except
 * a resource.
 * </p>
 * @param encoding int[optional] <p>
 * Output character encoding chosen from
 * YAML_ANY_ENCODING,
 * YAML_UTF8_ENCODING,
 * YAML_UTF16LE_ENCODING,
 * YAML_UTF16BE_ENCODING.
 * </p>
 * @param linebreak int[optional] <p>
 * Output linebreak style chosen from
 * YAML_ANY_BREAK,
 * YAML_CR_BREAK,
 * YAML_LN_BREAK,
 * YAML_CRLN_BREAK.
 * </p>
 * @param callbacks array[optional] <p>
 * Content handlers for emitting YAML nodes. Associative array
 * of classname =&gt; callable mappings. See
 * emit callbacks for more
 * details.
 * </p>
 * @return string a YAML encoded string on success.
 */
function yaml_emit ($data, $encoding = null, $linebreak = null, array $callbacks = null) {}

/**
 * Send the YAML representation of a value to a file
 * @link http://www.php.net/manual/en/function.yaml-emit-file.php
 * @param filename string <p>
 * Path to the file.
 * </p>
 * @param data mixed <p>
 * The data being encoded. Can be any type except
 * a resource.
 * </p>
 * @param encoding int[optional] <p>
 * Output character encoding chosen from
 * YAML_ANY_ENCODING,
 * YAML_UTF8_ENCODING,
 * YAML_UTF16LE_ENCODING,
 * YAML_UTF16BE_ENCODING.
 * </p>
 * @param linebreak int[optional] <p>
 * Output linebreak style chosen from
 * YAML_ANY_BREAK,
 * YAML_CR_BREAK,
 * YAML_LN_BREAK,
 * YAML_CRLN_BREAK.
 * </p>
 * @param callbacks array[optional] <p>
 * Content handlers for emitting YAML nodes. Associative array
 * of classname =&gt; callable mappings. See
 * emit callbacks for more
 * details.
 * </p>
 * @return bool true on success.
 */
function yaml_emit_file ($filename, $data, $encoding = null, $linebreak = null, array $callbacks = null) {}

define ('YAML_ANY_SCALAR_STYLE', 0);
define ('YAML_PLAIN_SCALAR_STYLE', 1);
define ('YAML_SINGLE_QUOTED_SCALAR_STYLE', 2);
define ('YAML_DOUBLE_QUOTED_SCALAR_STYLE', 3);
define ('YAML_LITERAL_SCALAR_STYLE', 4);
define ('YAML_FOLDED_SCALAR_STYLE', 5);

/**
 * "tag:yaml.org,2002:null"
 * @link http://www.php.net/manual/en/yaml.constants.php
 */
define ('YAML_NULL_TAG', "tag:yaml.org,2002:null");

/**
 * "tag:yaml.org,2002:bool"
 * @link http://www.php.net/manual/en/yaml.constants.php
 */
define ('YAML_BOOL_TAG', "tag:yaml.org,2002:bool");

/**
 * "tag:yaml.org,2002:str"
 * @link http://www.php.net/manual/en/yaml.constants.php
 */
define ('YAML_STR_TAG', "tag:yaml.org,2002:str");

/**
 * "tag:yaml.org,2002:int"
 * @link http://www.php.net/manual/en/yaml.constants.php
 */
define ('YAML_INT_TAG', "tag:yaml.org,2002:int");

/**
 * "tag:yaml.org,2002:float"
 * @link http://www.php.net/manual/en/yaml.constants.php
 */
define ('YAML_FLOAT_TAG', "tag:yaml.org,2002:float");

/**
 * "tag:yaml.org,2002:timestamp"
 * @link http://www.php.net/manual/en/yaml.constants.php
 */
define ('YAML_TIMESTAMP_TAG', "tag:yaml.org,2002:timestamp");

/**
 * "tag:yaml.org,2002:seq"
 * @link http://www.php.net/manual/en/yaml.constants.php
 */
define ('YAML_SEQ_TAG', "tag:yaml.org,2002:seq");

/**
 * "tag:yaml.org,2002:map"
 * @link http://www.php.net/manual/en/yaml.constants.php
 */
define ('YAML_MAP_TAG', "tag:yaml.org,2002:map");

/**
 * "!php/object"
 * @link http://www.php.net/manual/en/yaml.constants.php
 */
define ('YAML_PHP_TAG', "!php/object");
define ('YAML_MERGE_TAG', "tag:yaml.org,2002:merge");
define ('YAML_BINARY_TAG', "tag:yaml.org,2002:binary");

/**
 * Let the emitter choose an encoding.
 * @link http://www.php.net/manual/en/yaml.constants.php
 */
define ('YAML_ANY_ENCODING', 0);

/**
 * Encode as UTF8.
 * @link http://www.php.net/manual/en/yaml.constants.php
 */
define ('YAML_UTF8_ENCODING', 1);

/**
 * Encode as UTF16LE.
 * @link http://www.php.net/manual/en/yaml.constants.php
 */
define ('YAML_UTF16LE_ENCODING', 2);

/**
 * Encode as UTF16BE.
 * @link http://www.php.net/manual/en/yaml.constants.php
 */
define ('YAML_UTF16BE_ENCODING', 3);

/**
 * Let emitter choose linebreak character.
 * @link http://www.php.net/manual/en/yaml.constants.php
 */
define ('YAML_ANY_BREAK', 0);

/**
 * Use \r as break character (Mac style).
 * @link http://www.php.net/manual/en/yaml.constants.php
 */
define ('YAML_CR_BREAK', 1);

/**
 * Use \n as break character (Unix style).
 * @link http://www.php.net/manual/en/yaml.constants.php
 */
define ('YAML_LN_BREAK', 2);

/**
 * Use \r\n as break character (DOS style).
 * @link http://www.php.net/manual/en/yaml.constants.php
 */
define ('YAML_CRLN_BREAK', 3);

// End of yaml v.1.1.1
