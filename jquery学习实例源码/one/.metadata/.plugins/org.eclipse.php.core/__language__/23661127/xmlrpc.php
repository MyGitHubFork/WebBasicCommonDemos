<?php

// Start of xmlrpc v.0.51

/**
 * Generates XML for a PHP value
 * @link http://www.php.net/manual/en/function.xmlrpc-encode.php
 * @param value mixed 
 * @return string 
 */
function xmlrpc_encode ($value) {}

/**
 * Decodes XML into native PHP types
 * @link http://www.php.net/manual/en/function.xmlrpc-decode.php
 * @param xml string <p>
 * XML response returned by XMLRPC method.
 * </p>
 * @param encoding string[optional] <p>
 * Input encoding supported by iconv.
 * </p>
 * @return mixed either an array, or an integer, or a string, or a boolean according
 * to the response returned by the XMLRPC method.
 */
function xmlrpc_decode ($xml, $encoding = null) {}

/**
 * Decodes XML into native PHP types
 * @link http://www.php.net/manual/en/function.xmlrpc-decode-request.php
 * @param xml string 
 * @param method string 
 * @param encoding string[optional] 
 * @return mixed 
 */
function xmlrpc_decode_request ($xml, &$method, $encoding = null) {}

/**
 * Generates XML for a method request
 * @link http://www.php.net/manual/en/function.xmlrpc-encode-request.php
 * @param method string <p>
 * Name of the method to call.
 * </p>
 * @param params mixed <p>
 * Method parameters compatible with method signature.
 * </p>
 * @param output_options array[optional] <p>
 * Array specifying output options may contain (default values are
 * emphasised):
 * <p>output_type: php, xml</p>
 * @return string a string containing the XML representation of the request.
 */
function xmlrpc_encode_request ($method, $params, array $output_options = null) {}

/**
 * Gets xmlrpc type for a PHP value
 * @link http://www.php.net/manual/en/function.xmlrpc-get-type.php
 * @param value mixed <p>
 * PHP value
 * </p>
 * @return string the XML-RPC type.
 */
function xmlrpc_get_type ($value) {}

/**
 * Sets xmlrpc type, base64 or datetime, for a PHP string value
 * @link http://www.php.net/manual/en/function.xmlrpc-set-type.php
 * @param value string <p>
 * Value to set the type
 * </p>
 * @param type string <p>
 * 'base64' or 'datetime'
 * </p>
 * @return bool true on success or false on failure
 * If successful, value is converted to an object.
 */
function xmlrpc_set_type (&$value, $type) {}

/**
 * Determines if an array value represents an XMLRPC fault
 * @link http://www.php.net/manual/en/function.xmlrpc-is-fault.php
 * @param arg array <p>
 * Array returned by xmlrpc_decode.
 * </p>
 * @return bool true if the argument means fault, false otherwise. Fault
 * description is available in $arg["faultString"], fault
 * code is in $arg["faultCode"].
 */
function xmlrpc_is_fault (array $arg) {}

/**
 * Creates an xmlrpc server
 * @link http://www.php.net/manual/en/function.xmlrpc-server-create.php
 * @return resource 
 */
function xmlrpc_server_create () {}

/**
 * Destroys server resources
 * @link http://www.php.net/manual/en/function.xmlrpc-server-destroy.php
 * @param server resource 
 * @return int 
 */
function xmlrpc_server_destroy ($server) {}

/**
 * Register a PHP function to resource method matching method_name
 * @link http://www.php.net/manual/en/function.xmlrpc-server-register-method.php
 * @param server resource 
 * @param method_name string 
 * @param function string 
 * @return bool 
 */
function xmlrpc_server_register_method ($server, $method_name, $function) {}

/**
 * Parses XML requests and call methods
 * @link http://www.php.net/manual/en/function.xmlrpc-server-call-method.php
 * @param server resource 
 * @param xml string 
 * @param user_data mixed 
 * @param output_options array[optional] 
 * @return string 
 */
function xmlrpc_server_call_method ($server, $xml, $user_data, array $output_options = null) {}

/**
 * Decodes XML into a list of method descriptions
 * @link http://www.php.net/manual/en/function.xmlrpc-parse-method-descriptions.php
 * @param xml string 
 * @return array 
 */
function xmlrpc_parse_method_descriptions ($xml) {}

/**
 * Adds introspection documentation
 * @link http://www.php.net/manual/en/function.xmlrpc-server-add-introspection-data.php
 * @param server resource 
 * @param desc array 
 * @return int 
 */
function xmlrpc_server_add_introspection_data ($server, array $desc) {}

/**
 * Register a PHP function to generate documentation
 * @link http://www.php.net/manual/en/function.xmlrpc-server-register-introspection-callback.php
 * @param server resource 
 * @param function string 
 * @return bool 
 */
function xmlrpc_server_register_introspection_callback ($server, $function) {}

// End of xmlrpc v.0.51
