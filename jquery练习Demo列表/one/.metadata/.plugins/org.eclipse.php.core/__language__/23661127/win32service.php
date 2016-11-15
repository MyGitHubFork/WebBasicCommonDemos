<?php

// Start of win32service v.0.1.0-dev

/**
 * Registers the script with the SCM, so that it can act as the service with the given name
 * @link http://www.php.net/manual/en/function.win32-start-service-ctrl-dispatcher.php
 * @param name string <p>
 * The short-name of the service, as registered by
 * win32_create_service.
 * </p>
 * @return mixed Returns true on success, false if there is a problem with the parameters or a Win32 Error Code on failure.
 */
function win32_start_service_ctrl_dispatcher ($name) {}

/**
 * Update the service status
 * @link http://www.php.net/manual/en/function.win32-set-service-status.php
 * @param status int <p>
 * The service status code, one of
 * WIN32_SERVICE_RUNNING,
 * WIN32_SERVICE_STOPPED,
 * WIN32_SERVICE_STOP_PENDING,
 * WIN32_SERVICE_START_PENDING,
 * WIN32_SERVICE_CONTINUE_PENDING,
 * WIN32_SERVICE_PAUSE_PENDING,
 * WIN32_SERVICE_PAUSED.
 * </p>
 * @param checkpoint int[optional] <p>
 * The checkpoint value the service increments periodically to report its
 * progress during a lengthy start, stop, pause, or continue operation.
 * For example, the service should increment this value as it completes
 * each step of its initialization when it is starting up.
 * </p>
 * <p>
 * The checkpoint is only valid when the
 * status is one of
 * WIN32_SERVICE_STOP_PENDING,
 * WIN32_SERVICE_START_PENDING,
 * WIN32_SERVICE_CONTINUE_PENDING or
 * WIN32_SERVICE_PAUSE_PENDING.
 * </p>
 * @return bool Returns true on success, false if there is a problem with the parameters or a Win32 Error Code on failure.
 */
function win32_set_service_status ($status, $checkpoint = null) {}

/**
 * Creates a new service entry in the SCM database
 * @link http://www.php.net/manual/en/function.win32-create-service.php
 * @param details array <p>
 * An array of service details:
 * service
 * <p>
 * The short name of the service. This is the name that you
 * will use to control the service using the net
 * command. The service must be unique (no two services can share the
 * same name), and, ideally, should avoid having spaces in the name.
 * </p>
 * @param machine string[optional] <p>
 * The optional machine name on which you want to create a service.
 * If omitted, it will use the local machine.
 * </p>
 * @return mixed Returns WIN32_NO_ERROR on success, false if there is a problem with the parameters or a Win32 Error Code on failure.
 */
function win32_create_service (array $details, $machine = null) {}

/**
 * Deletes a service entry from the SCM database
 * @link http://www.php.net/manual/en/function.win32-delete-service.php
 * @param servicename string <p>
 * The short name of the service.
 * </p>
 * @param machine string[optional] <p>
 * The optional machine name. If omitted, the local machine will be used.
 * </p>
 * @return mixed Returns WIN32_NO_ERROR on success, false if there is a problem with the parameters or a Win32 Error Code on failure.
 */
function win32_delete_service ($servicename, $machine = null) {}

/**
 * Returns the last control message that was sent to this service
 * @link http://www.php.net/manual/en/function.win32-get-last-control-message.php
 * @return int a control constant which will be one of the
 * Win32Service Service Control Message Constants:
 * WIN32_SERVICE_CONTROL_CONTINUE,
 * WIN32_SERVICE_CONTROL_INTERROGATE,
 * WIN32_SERVICE_CONTROL_PAUSE,
 * WIN32_SERVICE_CONTROL_PRESHUTDOWN,
 * WIN32_SERVICE_CONTROL_SHUTDOWN,
 * WIN32_SERVICE_CONTROL_STOP.
 */
function win32_get_last_control_message () {}

/**
 * Queries the status of a service
 * @link http://www.php.net/manual/en/function.win32-query-service-status.php
 * @param servicename string <p>
 * The short name of the service.
 * </p>
 * @param machine string[optional] <p>
 * The optional machine name. If omitted, the local machine will be used.
 * </p>
 * @return mixed an array consisting of the following information on success, false if there is a problem with the parameters or a Win32 Error Code on failure.
 * </p>
 * <p>
 * ServiceType
 * <p>
 * The dwServiceType. See Win32Service Service Type Bitmasks.
 * </p>
 * CurrentState
 * <p>
 * The dwCurrentState. See Win32Service Service Status Constants.
 * </p>
 * ControlsAccepted
 * <p>
 * Which service controls are accepted by the service. See Win32Service Service Control Message Accepted Bitmasks.
 * </p>
 * Win32ExitCode
 * <p>
 * If the service exited, the return code from the process.
 * </p>
 * ServiceSpecificExitCode
 * <p>
 * If the service exited with an error condition, the service specific
 * code that is logged in the event log is visible here.
 * </p>
 * CheckPoint
 * <p>
 * If the service is shutting down, holds the current check point number.
 * This is used by the SCM as a kind of heart-beat to detect a wedged service
 * process. The value of the check point is best interpreted in
 * conjunction with the WaitHint value.
 * </p>
 * WaitHint
 * <p>
 * If the service is shutting down it will set WaitHint to a checkpoint
 * value that will indicate 100% completion. This can be used to
 * implement a progress indicator.
 * </p>
 * ProcessId
 * <p>
 * The Windows process identifier. If 0, the process is not running.
 * </p>
 * ServiceFlags
 * <p>
 * The dwServiceFlags. See Win32Service Service Service Flag Constants.
 * </p>
 */
function win32_query_service_status ($servicename, $machine = null) {}

/**
 * Starts a service
 * @link http://www.php.net/manual/en/function.win32-start-service.php
 * @param servicename string <p>
 * The short name of the service.
 * </p>
 * @param machine string[optional] <p>
 * Optional machine name. If omitted, the local machine is used.
 * </p>
 * @return int Returns WIN32_NO_ERROR on success, false if there is a problem with the parameters or a Win32 Error Code on failure.
 */
function win32_start_service ($servicename, $machine = null) {}

/**
 * Stops a service
 * @link http://www.php.net/manual/en/function.win32-stop-service.php
 * @param servicename string <p>
 * The short name of the service.
 * </p>
 * @param machine string[optional] <p>
 * Optional machine name. If omitted, the local machine is used.
 * </p>
 * @return int Returns WIN32_NO_ERROR on success, false if there is a problem with the parameters or a Win32 Error Code on failure.
 */
function win32_stop_service ($servicename, $machine = null) {}

define ('WIN32_SERVICE_CONTROL_CONTINUE', 3);
define ('WIN32_SERVICE_CONTROL_INTERROGATE', 4);
define ('WIN32_SERVICE_CONTROL_PAUSE', 2);
define ('WIN32_SERVICE_CONTROL_STOP', 1);
define ('WIN32_SERVICE_CONTROL_SHUTDOWN', 5);
define ('WIN32_SERVICE_CONTROL_HARDWAREPROFILECHANGE', 12);
define ('WIN32_SERVICE_CONTROL_POWEREVENT', 13);
define ('WIN32_SERVICE_CONTROL_SESSIONCHANGE', 14);
define ('WIN32_ERROR_CALL_NOT_IMPLEMENTED', 120);
define ('WIN32_NO_ERROR', 0);
define ('WIN32_SERVICE_RUNNING', 4);
define ('WIN32_SERVICE_STOPPED', 1);
define ('WIN32_SERVICE_START_PENDING', 2);
define ('WIN32_SERVICE_STOP_PENDING', 3);
define ('WIN32_SERVICE_WIN32_OWN_PROCESS', 16);
define ('WIN32_SERVICE_INTERACTIVE_PROCESS', 256);
define ('WIN32_SERVICE_CONTINUE_PENDING', 5);
define ('WIN32_SERVICE_PAUSE_PENDING', 6);
define ('WIN32_SERVICE_PAUSED', 7);
define ('WIN32_SERVICE_ACCEPT_NETBINDCHANGE', 16);
define ('WIN32_SERVICE_ACCEPT_PARAMCHANGE', 8);
define ('WIN32_SERVICE_ACCEPT_PAUSE_CONTINUE', 2);
define ('WIN32_SERVICE_ACCEPT_SHUTDOWN', 4);
define ('WIN32_SERVICE_ACCEPT_STOP', 1);
define ('WIN32_SERVICE_ACCEPT_HARDWAREPROFILECHANGE', 32);
define ('WIN32_SERVICE_ACCEPT_POWEREVENT', 64);
define ('WIN32_SERVICE_ACCEPT_SESSIONCHANGE', 128);
define ('WIN32_SERVICE_FILE_SYSTEM_DRIVER', 2);
define ('WIN32_SERVICE_KERNEL_DRIVER', 1);
define ('WIN32_SERVICE_WIN32_SHARE_PROCESS', 32);
define ('WIN32_SERVICE_RUNS_IN_SYSTEM_PROCESS', 1);

// End of win32service v.0.1.0-dev
