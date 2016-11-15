<?php
/**
 * Prints the string value of a zval
 * @internal 
 * @param $param mixed
 * @since 3.6
 */
function debugger_print($param) {}

/**
 * Obtains the function call stack trace
 * @internal 
 * @return array the call stack
 * @since 3.6
 */
function get_call_stack() {}

/**
 * Triggers a debug session from within a script
 * @since 3.6
 */
function debugger_start_debug() {}

/**
 * Obtains the pid of the tunnel server
 * @internal 
 * @return int the pid
 * @since 3.6
 */
function debugger_connector_pid() {}

/**
 * Initiates a tunnel connection
 * @return boolean TRUE the connection is established or FALSE could not connect
 * @since 3.6
 */
function debugger_connect() {}

/**
 * Obtain the server's start time as recorded by the Zend Debugger
 * @internal 
 * @return int the server's start time
 * @since 3.6
 */
function debugger_get_server_start_time() {}

/**
 * Triggers code coverage check from this line and on
 * @internal 
 * @since 4.0
 */
function xdebug_start_code_coverage() {}

/**
 * Stops code coverage check from this line and on
 * @internal 
 * @since 4.0
 */
function xdebug_stop_code_coverage() {}

/**
 * Get code coverage statistics
 * @internal 
 * @return array An array which contains the information on code coverage
 * @since 4.0
 */
function xdebug_get_code_coverage() {}
?>