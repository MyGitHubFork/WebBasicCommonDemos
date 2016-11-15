<?php
/**
 * Sets and retrieves the tracing options.
 * @param $options string
 * @return int Old value of the options
 * @since 4.0
 */
function zend_codetracing_options($options) {}

/**
 * Enables or disables producing trace dump.
 * @param $dump boolean
 * @since 4.0
 */
function zend_codetracing_dump($dump) {}

/**
 * Creates a record of event in the trace log.
 * @return array Array containing trace dump ID number and event number inside the dump
 * @since 4.0
 */
function zend_codetracing_event() {}

/**
 * Sets/retrieves current dump name
 * @param $name string
 * @return array Current dump name (full path).
 * @since 4.0
 */
function zend_codetracing_dump_name($name) {}

/**
 * Retrieves current dump base - prefix from which dump names are created
 * @return array Current dump base (full path).
 * @since 4.0
 */
function zend_codetracing_dump_base() {}

/**
 * Exports dump data as AMF data structure.
 * @internal 
 * @param $id string
 * @return string AMF data containing the dump.
 * @since 4.0
 */
function zend_codetracing_dump_amf($id) {}

/**
 * Retrieves information about the dump stored in the file.
 * @internal 
 * @param $filename string
 * @param $id string
 * @param $amf boolean[optional]
 * @return mixed Array or AMF data containing the dump description.
 * @since 4.0
 */
function zend_codetracing_dump_inspect($filename, $id, $amf = false) {}
?>