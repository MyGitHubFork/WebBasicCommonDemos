<?php

// Start of libevent v.0.1.0

/**
 * Create and initialize new event base
 * @link http://www.php.net/manual/en/function.event-base-new.php
 * @return resource event_base_new returns valid event base resource on
 * success or false on error.
 */
function event_base_new () {}

/**
 * Reinitialize the event base after a fork
 * @link http://www.php.net/manual/en/function.event-base-reinit.php
 * @param event_base resource <p>
 * Valid event base resource that needs to be re-initialized.
 * </p>
 * @return bool true on success or false on failure
 */
function event_base_reinit ($event_base) {}

/**
 * Destroy event base
 * @link http://www.php.net/manual/en/function.event-base-free.php
 * @param event_base resource <p>
 * Valid event base resource.
 * </p>
 * @return void 
 */
function event_base_free ($event_base) {}

/**
 * Handle events
 * @link http://www.php.net/manual/en/function.event-base-loop.php
 * @param event_base resource <p>
 * Valid event base resource.
 * </p>
 * @param flags int[optional] <p>
 * Optional parameter, which can take any combination of 
 * EVLOOP_ONCE and EVLOOP_NONBLOCK. 
 * </p>
 * @return int event_base_loop returns 0 on success, -1 on error and
 * 1 if no events were registered.
 */
function event_base_loop ($event_base, $flags = null) {}

/**
 * Abort event loop
 * @link http://www.php.net/manual/en/function.event-base-loopbreak.php
 * @param event_base resource <p>
 * Valid event base resource.
 * </p>
 * @return bool event_base_loopbreak returns true on success or false on error.
 */
function event_base_loopbreak ($event_base) {}

/**
 * Exit loop after a time
 * @link http://www.php.net/manual/en/function.event-base-loopexit.php
 * @param event_base resource <p>
 * Valid event base resource.
 * </p>
 * @param timeout int[optional] <p>
 * Optional timeout parameter (in microseconds).
 * </p>
 * @return bool event_base_loopexit returns true on success or false on error.
 */
function event_base_loopexit ($event_base, $timeout = null) {}

/**
 * Associate event base with an event
 * @link http://www.php.net/manual/en/function.event-base-set.php
 * @param event resource <p>
 * Valid event resource.
 * </p>
 * @param event_base resource <p>
 * Valid event base resource.
 * </p>
 * @return bool event_base_set returns true on success or false on error.
 */
function event_base_set ($event, $event_base) {}

/**
 * Set the number of event priority levels
 * @link http://www.php.net/manual/en/function.event-base-priority-init.php
 * @param event_base resource <p>
 * Valid event base resource.
 * </p>
 * @param npriorities int <p>
 * The number of event priority levels.
 * </p>
 * @return bool event_base_priority_init returns true on success or false on error.
 */
function event_base_priority_init ($event_base, $npriorities) {}

/**
 * Create new event
 * @link http://www.php.net/manual/en/function.event-new.php
 * @return resource event_new returns a new event resource on success or false on error.
 */
function event_new () {}

/**
 * Free event resource
 * @link http://www.php.net/manual/en/function.event-free.php
 * @param event resource <p>
 * Valid event resource.
 * </p>
 * @return void 
 */
function event_free ($event) {}

/**
 * Add an event to the set of monitored events
 * @link http://www.php.net/manual/en/function.event-add.php
 * @param event resource <p>
 * Valid event resource.
 * </p>
 * @param timeout int[optional] <p>
 * Optional timeout (in microseconds).
 * </p>
 * @return bool event_add returns true on success or false on error.
 */
function event_add ($event, $timeout = null) {}

/**
 * Prepare an event
 * @link http://www.php.net/manual/en/function.event-set.php
 * @param event resource <p>
 * Valid event resource.
 * </p>
 * @param fd mixed <p>
 * Valid PHP stream resource. The stream must be castable to file
 * descriptor, so you most likely won't be able to use any of filtered
 * streams.
 * </p>
 * @param events int <p>
 * A set of flags indicating the desired event, can be
 * EV_READ and/or EV_WRITE.
 * The additional flag EV_PERSIST makes the event
 * to persist until event_del is called, otherwise
 * the callback is invoked only once. 
 * </p>
 * @param callback mixed <p>
 * Callback function to be called when the matching event occurs.
 * </p>
 * @param arg mixed[optional] <p>
 * Optional callback parameter.
 * </p>
 * @return bool event_set returns true on success or false on error.
 */
function event_set ($event, $fd, $events, $callback, $arg = null) {}

/**
 * Remove an event from the set of monitored events
 * @link http://www.php.net/manual/en/function.event-del.php
 * @param event resource <p>
 * Valid event resource.
 * </p>
 * @return bool event_del returns true on success or false on error.
 */
function event_del ($event) {}

/**
 * Assign a priority to an event.
 * @link http://www.php.net/manual/en/function.event-priority-set.php
 * @param event resource <p>
 * Valid event resource.
 * </p>
 * @param priority int <p>
 * Priority level. Cannot be less than zero and cannot exceed maximum
 * priority level of the event base (see
 * event_base_priority_init).
 * </p>
 * @return bool true on success or false on failure
 */
function event_priority_set ($event, $priority) {}

/**
 * Create new buffered event
 * @link http://www.php.net/manual/en/function.event-buffer-new.php
 * @param stream resource <p>
 * Valid PHP stream resource. Must be castable to file descriptor.
 * </p>
 * @param readcb mixed <p>
 * Callback to invoke where there is data to read, or NULL if
 * no callback is desired.
 * </p>
 * @param writecb mixed <p>
 * Callback to invoke where the descriptor is ready for writing, 
 * or NULL if no callback is desired.
 * </p>
 * @param errorcb mixed <p>
 * Callback to invoke where there is an error on the descriptor, cannot be
 * NULL.
 * </p>
 * @param arg mixed[optional] <p>
 * An argument that will be passed to each of the callbacks (optional).
 * </p>
 * @return resource event_buffer_new returns new buffered event resource
 * on success or false on error.
 */
function event_buffer_new ($stream, $readcb, $writecb, $errorcb, $arg = null) {}

/**
 * Destroy buffered event
 * @link http://www.php.net/manual/en/function.event-buffer-free.php
 * @param bevent resource <p>
 * Valid buffered event resource.
 * </p>
 * @return void 
 */
function event_buffer_free ($bevent) {}

/**
 * Associate buffered event with an event base
 * @link http://www.php.net/manual/en/function.event-buffer-base-set.php
 * @param bevent resource <p>
 * Valid buffered event resource.
 * </p>
 * @param event_base resource <p>
 * Valid event base resource.
 * </p>
 * @return bool event_buffer_base_set returns true on success or false on error.
 */
function event_buffer_base_set ($bevent, $event_base) {}

/**
 * Assign a priority to a buffered event
 * @link http://www.php.net/manual/en/function.event-buffer-priority-set.php
 * @param bevent resource <p>
 * Valid buffered event resource.
 * </p>
 * @param priority int <p>
 * Priority level. Cannot be less than zero and cannot exceed maximum
 * priority level of the event base (see event_base_priority_init). 
 * </p>
 * @return bool event_buffer_priority_set returns true on success or false on error.
 */
function event_buffer_priority_set ($bevent, $priority) {}

/**
 * Write data to a buffered event
 * @link http://www.php.net/manual/en/function.event-buffer-write.php
 * @param bevent resource <p>
 * Valid buffered event resource.
 * </p>
 * @param data string <p>
 * The data to be written.
 * </p>
 * @param data_size int[optional] <p>
 * Optional size parameter. event_buffer_write writes
 * all the data by default.
 * </p>
 * @return bool event_buffer_write returns true on success or false on error.
 */
function event_buffer_write ($bevent, $data, $data_size = null) {}

/**
 * Read data from a buffered event
 * @link http://www.php.net/manual/en/function.event-buffer-read.php
 * @param bevent resource <p>
 * Valid buffered event resource.
 * </p>
 * @param data_size int <p>
 * Data size in bytes.
 * </p>
 * @return string 
 */
function event_buffer_read ($bevent, $data_size) {}

/**
 * Enable a buffered event
 * @link http://www.php.net/manual/en/function.event-buffer-enable.php
 * @param bevent resource <p>
 * Valid buffered event resource.
 * </p>
 * @param events int <p>
 * Any combination of EV_READ and
 * EV_WRITE.
 * </p>
 * @return bool event_buffer_enable returns true on success or false on error.
 */
function event_buffer_enable ($bevent, $events) {}

/**
 * Disable a buffered event
 * @link http://www.php.net/manual/en/function.event-buffer-disable.php
 * @param bevent resource <p>
 * Valid buffered event resource.
 * </p>
 * @param events int <p>
 * Any combination of EV_READ and
 * EV_WRITE.
 * </p>
 * @return bool event_buffer_disable returns true on success or false on error.
 */
function event_buffer_disable ($bevent, $events) {}

/**
 * Set read and write timeouts for a buffered event
 * @link http://www.php.net/manual/en/function.event-buffer-timeout-set.php
 * @param bevent resource <p>
 * Valid buffered event resource.
 * </p>
 * @param read_timeout int <p>
 * Read timeout (in seconds).
 * </p>
 * @param write_timeout int <p>
 * Write timeout (in seconds).
 * </p>
 * @return void 
 */
function event_buffer_timeout_set ($bevent, $read_timeout, $write_timeout) {}

/**
 * Set the watermarks for read and write events
 * @link http://www.php.net/manual/en/function.event-buffer-watermark-set.php
 * @param bevent resource <p>
 * Valid buffered event resource.
 * </p>
 * @param events int <p>
 * Any combination of EV_READ and
 * EV_WRITE.
 * </p>
 * @param lowmark int <p>
 * Low watermark.
 * </p>
 * @param highmark int <p>
 * High watermark.
 * </p>
 * @return void 
 */
function event_buffer_watermark_set ($bevent, $events, $lowmark, $highmark) {}

/**
 * Change a buffered event file descriptor
 * @link http://www.php.net/manual/en/function.event-buffer-fd-set.php
 * @param bevent resource <p>
 * Valid buffered event resource.
 * </p>
 * @param fd resource <p>
 * Valid PHP stream, must be castable to file descriptor.
 * </p>
 * @return void 
 */
function event_buffer_fd_set ($bevent, $fd) {}

/**
 * Set or reset callbacks for a buffered event
 * @link http://www.php.net/manual/en/function.event-buffer-set-callback.php
 * @param event resource <p>
 * Valid buffered event resource.
 * </p>
 * @param readcb mixed <p>
 * Callback to invoke where there is data to read, or NULL if
 * no callback is desired.
 * </p>
 * @param writecb mixed <p>
 * Callback to invoke where the descriptor is ready for writing, 
 * or NULL if no callback is desired.
 * </p>
 * @param errorcb mixed <p>
 * Callback to invoke where there is an error on the descriptor, cannot be
 * NULL.
 * </p>
 * @param arg mixed[optional] <p>
 * An argument that will be passed to each of the callbacks (optional).
 * </p>
 * @return bool true on success or false on failure
 */
function event_buffer_set_callback ($event, $readcb, $writecb, $errorcb, $arg = null) {}

/**
 * &Alias; <function>event_new</function>
 * @link http://www.php.net/manual/en/function.event-timer-new.php
 */
function event_timer_new () {}

/**
 * Prepare a timer event
 * @link http://www.php.net/manual/en/function.event-timer-set.php
 * @param event resource <p>
 * Valid event resource.
 * </p>
 * @param callback callable <p>
 * Callback function to be called when the matching event occurs.
 * </p>
 * @param arg mixed[optional] <p>
 * Optional callback parameter.
 * </p>
 * @return bool true on success or false on failure
 */
function event_timer_set ($event, $callback, $arg = null) {}

/**
 * @param event
 * @param timeout[optional]
 */
function event_timer_pending ($event, $timeout = null) {}

/**
 * &Alias; <function>event_add</function>
 * @link http://www.php.net/manual/en/function.event-timer-add.php
 * @param event
 * @param timeout[optional]
 */
function event_timer_add ($event, $timeout = null) {}

/**
 * &Alias; <function>event_del</function>
 * @link http://www.php.net/manual/en/function.event-timer-del.php
 * @param event
 */
function event_timer_del ($event) {}

define ('EV_TIMEOUT', 1);
define ('EV_READ', 2);
define ('EV_WRITE', 4);
define ('EV_SIGNAL', 8);
define ('EV_PERSIST', 16);
define ('EVLOOP_NONBLOCK', 2);
define ('EVLOOP_ONCE', 1);
define ('EVBUFFER_READ', 1);
define ('EVBUFFER_WRITE', 2);
define ('EVBUFFER_EOF', 16);
define ('EVBUFFER_ERROR', 32);
define ('EVBUFFER_TIMEOUT', 64);

// End of libevent v.0.1.0
