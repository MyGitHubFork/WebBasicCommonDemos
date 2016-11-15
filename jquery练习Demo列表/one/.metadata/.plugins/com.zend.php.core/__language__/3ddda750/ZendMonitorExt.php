<?php
/**
 * Passes an error to the Monitor component with file and line details. This function is used in error handlers. An alternative is to use trigger_error. However, this function does not indicate the file name and line number: It only passes the error message.
 * @param $errno int
 * @param $errstr string
 * @param $errfile string
 * @param $errline int
 * @since 4.0
 */
function zend_monitor_pass_error($errno, $errstr, $errfile, $errline) {}

/**
 * Creates a special (custom) event that is generated from your code. The information collected consists of the three following parameters: Class, Text and User Data.
 * @param $class string
 * @param $text string
 * @param $user_data mixed
 * @since 4.0
 */
function zend_monitor_custom_event($class, $text, $user_data) {}

/**
 * Incorporates the locations of occurrences in the script when there are events that require those location for diagnosing the reason an event occured. Only events of the same type are aggregated. The collected information is viewed in the Zend Server Administration Interface.
 * @param $hint string
 * @return void 
 * @since 4.0
 */
function zend_monitor_set_aggregation_hint($hint) {}

/**
 * Enables or disables the event reporting of some event types by passing a bit-mask (as done by PHP's error_reporting function), but with the constants listed above, in ZEND_MONITOR_ET*. Note: You cannot enable events that are disabled in the Event Rules file
 * @param $new_error_reporting int[optional]
 * @return int The previous error_reporting level or FALSE if there is an error
 * @since 4.0
 */
function zend_monitor_event_reporting($new_error_reporting = null) {}

/**
 * Report an Event that is not one of Monitor Events
 * @internal 
 * @param $event_type int[optional]
 * @param $extra_data string[optional]
 * @return boolean FALSE in case of an error
 * @since 4.0
 */
function zend_monitor_report_event($event_type = null, $extra_data = 'null') {}

/**
 * Bitmask Representing all Event Types(for zend_monitor_event_reporting)
 * @since 4.0
 */
define('ZEND_MONITOR_ETBM_ALL', '');

/**
 * Bitmask Representing NO Monitoring Events (for zend_monitor_event_reporting)
 * @since 4.0
 */
define('ZEND_MONITOR_ETBM_NONE', '');

/**
 * Custom Event-Type Bitmask(for zend_monitor_event_reporting)
 * @since 4.0
 */
define('ZEND_MONITOR_ETBM_CUSTOM', '');

/**
 * Function Slow Execution Event-Type Bitmask(for zend_monitor_event_reporting)
 * @since 4.0
 */
define('ZEND_MONITOR_ETBM_FUNC_SLOW_EXEC', '');

/**
 * Function Error Event-Type Bitmask(for zend_monitor_event_reporting)
 * @since 4.0
 */
define('ZEND_MONITOR_ETBM_FUNC_ERR', '');

/**
 * Request Slow Execution Event-Type Bitmask(for zend_monitor_event_reporting)
 * @since 4.0
 */
define('ZEND_MONITOR_ETBM_REQ_SLOW_EXEC', '');

/**
 * Request Relative Slow Execution Event-Type Bitmask(for zend_monitor_event_reporting)
 * @since 4.0
 */
define('ZEND_MONITOR_ETBM_REQ_REL_SLOW_EXEC', '');

/**
 * Request Large Memory Usage Event-Type Bitmask(for zend_monitor_event_reporting)
 * @since 4.0
 */
define('ZEND_MONITOR_ETBM_REQ_LARGE_MEM_USAGE', '');

/**
 * Request Relative Large Memory Usage Event-Type Bitmask(for zend_monitor_event_reporting)
 * @since 4.0
 */
define('ZEND_MONITOR_ETBM_REQ_REL_LARGE_MEM_USAGE', '');

/**
 * Request Relateive Large Output Size Event-Type Bitmask(for zend_monitor_event_reporting)
 * @since 4.0
 */
define('ZEND_MONITOR_ETBM_REQ_LARGE_OUT_SIZE', '');

/**
 * Zend/PHP Error Event-Type Bitmask(for zend_monitor_event_reporting)
 * @since 4.0
 */
define('ZEND_MONITOR_ETBM_ZEND_ERR', '');

/**
 * Unhandled Java Exception Event-Type Bitmask(for zend_monitor_event_reporting)
 * @since 4.0
 */
define('ZEND_MONITOR_ETBM_JAVA_EXP', '');

/**
 * Job Queue - Job Execution Error Event-Type Bitmask
 * @since 4.0
 */
define('ZEND_MONITOR_ETBM_JQ_JOB_EXEC_ERROR', '');

/**
 * Job Queue - Job Logical Error Event-Type Bitmask(for zend_monitor_event_reporting)
 * @since 4.0
 */
define('ZEND_MONITOR_ETBM_JQ_JOB_LOGICAL_FAILURE', '');

/**
 * Job Queue - Job Execution Delayed Event-Type Bitmask(for zend_monitor_event_reporting)
 * @since 4.0
 */
define('ZEND_MONITOR_ETBM_JQ_JOB_EXEC_DELAY', '');

/**
 * Job Queue - Daemon High Concurrency Event-Type Bitmask(for zend_monitor_event_reporting)
 * @since 4.0
 */
define('ZEND_MONITOR_ETBM_JQ_DAEMON_HIGH_CONCURRENCY_LEVEL', '');

/**
 * Tracer - Failed to write a dump file Event-Type Bitmask(for zend_monitor_event_reporting)
 * @since 4.0
 */
define('ZEND_MONITOR_ETBM_ET_TRACER_FILE_WRITE_FAIL', '');

/**
 * Job Queue - Job Execution Error Event-Type Bitmask
 * @since 4.0
 */
define('ZEND_MONITOR_ET_JQ_JOB_EXEC_ERROR', '');

/**
 * Job Queue - Job Logical Error Event-Type
 * @since 4.0
 */
define('ZEND_MONITOR_ET_JQ_JOB_LOGICAL_FAILURE', '');

/**
 * Job Queue - Job Execution Delayed Event-Type
 * @since 4.0
 */
define('ZEND_MONITOR_ET_JQ_JOB_EXEC_DELAY', '');

/**
 * Job Queue - Daemon High Concurrency Event-Type
 * @since 4.0
 */
define('ZEND_MONITOR_ET_JQ_DAEMON_HIGH_CONCURRENCY_LEVEL', '');

/**
 * Tracer - Failed to write a dump file Event-Type
 * @since 4.0
 */
define('ZEND_MONITOR_ET_TRACER_FILE_WRITE_FAIL', '');

/**
 * ZSM - Configuration is not matching the cluster
 * @since 4.0
 */
define('ZEND_MONITOR_ET_ZSM_CONFIGUATION_MISMATCH', '');

/**
 * ZSM - Node added successfully to the cluster
 * @since 4.0
 */
define('ZEND_MONITOR_ET_ZSM_NODE_ADDED_SUCCESSFULLY', '');

/**
 * ZSM - Node is not responding
 * @since 4.0
 */
define('ZEND_MONITOR_ET_ZSM_NODE_IS_NOT_RESPONDING', '');

/**
 * ZSM - Node removed successfully from the cluster
 * @since 4.0
 */
define('ZEND_MONITOR_ET_ZSM_RESTART_FAILED', '');

/**
 * ZSM - Restart failed
 * @since 4.0
 */
define('ZEND_MONITOR_ET_TRACER_FILE_WRITE_FAIL', '');
?>