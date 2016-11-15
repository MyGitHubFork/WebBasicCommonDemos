<?php

// Start of fileinfo v.1.0.5

class finfo  {

	/**
	 * @param $options [optional]
	 * @param $arg [optional]
	 */
	public function finfo ($options = null, $arg = null) {}

	/**
	 * &Alias; <function>finfo_set_flags</function>
	 * @link http://www.php.net/manual/en/finfo.set-flags.php
	 * @param $options
	 */
	public function set_flags ($options) {}

	/**
	 * &Alias; <function>finfo_file</function>
	 * @link http://www.php.net/manual/en/finfo.file.php
	 * @param $filename
	 * @param $options [optional]
	 * @param $context [optional]
	 */
	public function file ($filename, $options = null, $context = null) {}

	/**
	 * &Alias; <function>finfo_buffer</function>
	 * @link http://www.php.net/manual/en/finfo.buffer.php
	 * @param $string
	 * @param $options [optional]
	 * @param $context [optional]
	 */
	public function buffer ($string, $options = null, $context = null) {}

}

/**
 * Create a new fileinfo resource
 * @link http://www.php.net/manual/en/function.finfo-open.php
 * @param $options [optional]
 * @param $arg [optional]
 */
function finfo_open ($options = null, $arg = null) {}

/**
 * Close fileinfo resource
 * @link http://www.php.net/manual/en/function.finfo-close.php
 * @param $finfo
 */
function finfo_close ($finfo) {}

/**
 * Set libmagic configuration options
 * @link http://www.php.net/manual/en/function.finfo-set-flags.php
 * @param $finfo
 * @param $options
 */
function finfo_set_flags ($finfo, $options) {}

/**
 * Return information about a file
 * @link http://www.php.net/manual/en/function.finfo-file.php
 * @param $finfo
 * @param $filename
 * @param $options [optional]
 * @param $context [optional]
 */
function finfo_file ($finfo, $filename, $options = null, $context = null) {}

/**
 * Return information about a string buffer
 * @link http://www.php.net/manual/en/function.finfo-buffer.php
 * @param $finfo
 * @param $string
 * @param $options [optional]
 * @param $context [optional]
 */
function finfo_buffer ($finfo, $string, $options = null, $context = null) {}

/**
 * Detect MIME Content-type for a file (deprecated)
 * @link http://www.php.net/manual/en/function.mime-content-type.php
 * @param string $filename <p>
 * Path to the tested file.
 * </p>
 * @return string the content type in MIME format, like 
 * text/plain or application/octet-stream.
 */
function mime_content_type ($filename) {}

define ('FILEINFO_NONE', 0);
define ('FILEINFO_SYMLINK', 2);
define ('FILEINFO_MIME', 1040);
define ('FILEINFO_MIME_TYPE', 16);
define ('FILEINFO_MIME_ENCODING', 1024);
define ('FILEINFO_DEVICES', 8);
define ('FILEINFO_CONTINUE', 32);
define ('FILEINFO_PRESERVE_ATIME', 128);
define ('FILEINFO_RAW', 256);

// End of fileinfo v.1.0.5
