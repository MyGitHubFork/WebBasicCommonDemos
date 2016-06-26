<?php
/**
 * JavaException is a PHP class that inherits from the default PHP5 class "Exception"
 * @since 3.6
 */
class JavaException {

/**
 * Get the Java exception that led to this exception
 * @return object A Java exception object, if there was an exception, NULL otherwise
 * @since 3.6
 */
public function getCause() {}

}

/**
 * Creates a Java object
 * @param $class_name string
 * @vararg ...
 * @return object The Java object that was created, NULL otherwise
 * @since 3.6
 */
function java($class_name) {}

/**
 * Gets Java Bridge statistics
 * @internal 
 * @return array Array with statistics
 * @since 3.6
 */
function java_get_statistics() {}

/**
 * Returns a Java exception object for the last exception that occurred in the script: only the last exception is stored by the Java Bridge
 * @return object Java exception object, if there was an exception, NULL otherwise
 * @since 3.6
 */
function java_last_exception_get() {}

/**
 * Clears the last Java exception object record from the Java Bridge storage
 * @since 3.6
 */
function java_last_exception_clear() {}

/**
 * Sets the case sensitivity for Java calls when there are mixed cases in your PHP script
 * @param $ignore boolean
 * @since 3.6
 */
function java_set_ignore_case($ignore) {}

/**
 * Controls if exceptions are thrown on Java exception. When an exception is thrown by a Java application, this function controls if the exception caught by the PHP code will continue to be thrown or not (if not, it is stored in the Java Bridge's internal memory)
 * @param $throw int
 * @since 3.6
 */
function java_throw_exceptions($throw) {}

/**
 * Gets Java Bridge's version
 * @internal 
 * @return array An array with a "version" field
 * @since 3.6
 */
function java_get_version_info() {}

/**
 * Sets encoding for strings received by Java from the PHP code to verify that the encoding is the same in the PHP and Java code
 * @param $encoding string[optional]
 * @since 3.6
 */
function java_set_encoding($encoding = 'UTF-8') {}

/**
 * Includes an additional CLASSPATH/JAR in a PHP script context
 * @param $path string
 * @since 3.6
 */
function java_require($path) {}

/**
 * Reloads Jar files that were dynamically loaded - on demand
 * @param $new_jarpath string
 * @since 3.6
 */
function java_reload($new_jarpath) {}

/**
 * Checks that the Java Server is can be connected
 * @internal 
 * @since 4.0
 */
function java_is_server_running() {}
?>