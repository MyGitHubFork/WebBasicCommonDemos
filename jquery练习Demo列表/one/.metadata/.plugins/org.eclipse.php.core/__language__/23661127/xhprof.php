<?php

// Start of xhprof v.0.9.2

/**
 * Start xhprof profiler
 * @link http://www.php.net/manual/en/function.xhprof-enable.php
 * @param flags int[optional] <p>
 * Optional flags to add additional information to the profiling. See the
 * XHprof constants for further
 * information about these flags, e.g., XHPROF_FLAGS_MEMORY
 * to enable memory profiling.
 * </p>
 * @param options array[optional] <p>
 * An array of optional options, namely, the
 * 'ignored_functions' option to pass in functions to be ignored
 * during profiling.
 * </p>
 * @return void &null;
 */
function xhprof_enable ($flags = null, array $options = null) {}

/**
 * Stops xhprof profiler
 * @link http://www.php.net/manual/en/function.xhprof-disable.php
 * @return array An array of xhprof data, from the run.
 */
function xhprof_disable () {}

/**
 * Start XHProf profiling in sampling mode
 * @link http://www.php.net/manual/en/function.xhprof-sample-enable.php
 * @return void &null;
 */
function xhprof_sample_enable () {}

/**
 * Stops xhprof sample profiler
 * @link http://www.php.net/manual/en/function.xhprof-sample-disable.php
 * @return array An array of xhprof sample data, from the run.
 */
function xhprof_sample_disable () {}


/**
 * Used to skip all built-in (internal) functions.
 * @link http://www.php.net/manual/en/xhprof.constants.php
 */
define ('XHPROF_FLAGS_NO_BUILTINS', 1);

/**
 * Used to add CPU profiling information to the output.
 * @link http://www.php.net/manual/en/xhprof.constants.php
 */
define ('XHPROF_FLAGS_CPU', 2);

/**
 * Used to add memory profiling information to the output.
 * @link http://www.php.net/manual/en/xhprof.constants.php
 */
define ('XHPROF_FLAGS_MEMORY', 4);

// End of xhprof v.0.9.2
