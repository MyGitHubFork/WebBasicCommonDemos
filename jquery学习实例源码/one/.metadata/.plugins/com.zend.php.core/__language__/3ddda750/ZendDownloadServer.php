<?php
/**
 * Outputs the contents of a file to a client using the ZDS and terminates the script.
 * @param $filename string
 * @param $mime_type string
 * @param $custom_headers string
 * @return void 
 */
function zend_send_file($filename, $mime_type = '', $custom_headers = '') {}

/**
 * Ouputs the contents of a string buffer to a client using ZDS and terminates the script.
 * @param $buffer string
 * @param $mime_type string
 * @param $custom_headers string
 * @return void 
 */
function zend_send_buffer($buffer, $mime_type = '', $custom_headers = '') {}

/**
 * Returns the download server's process ID.
 * @return int The download server's process ID.
 */
function zds_get_pid() {}
?>