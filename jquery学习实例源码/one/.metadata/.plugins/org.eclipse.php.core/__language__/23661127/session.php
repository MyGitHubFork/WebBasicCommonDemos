<?php

// Start of session v.7.0.0-dev

interface SessionHandlerInterface  {

	/**
	 * Initialize session
	 * @link http://www.php.net/manual/en/sessionhandlerinterface.open.php
	 * @param string $save_path <p>
	 * The path where to store/retrieve the session.
	 * </p>
	 * @param string $name <p>
	 * The session name.
	 * </p>
	 * @return bool The return value (usually true on success, false on failure). Note this value is returned internally to PHP for processing.
	 */
	abstract public function open ($save_path, $name) {}

	/**
	 * Close the session
	 * @link http://www.php.net/manual/en/sessionhandlerinterface.close.php
	 * @return bool The return value (usually true on success, false on failure). Note this value is returned internally to PHP for processing.
	 */
	abstract public function close () {}

	/**
	 * Read session data
	 * @link http://www.php.net/manual/en/sessionhandlerinterface.read.php
	 * @param string $session_id <p>
	 * The session id.
	 * </p>
	 * @return string an encoded string of the read data. If nothing was read, it must return an empty string. Note this value is returned internally to PHP for processing.
	 */
	abstract public function read ($session_id) {}

	/**
	 * Write session data
	 * @link http://www.php.net/manual/en/sessionhandlerinterface.write.php
	 * @param string $session_id <p>
	 * The session id.
	 * </p>
	 * @param string $session_data <p>
	 * The encoded session data. This data is the result of the PHP internally encoding the $_SESSION superglobal to a serialized
	 * string and passing it as this parameter. Please note sessions use an alternative serialization method.
	 * </p>
	 * @return bool The return value (usually true on success, false on failure). Note this value is returned internally to PHP for processing.
	 */
	abstract public function write ($session_id, $session_data) {}

	/**
	 * Destroy a session
	 * @link http://www.php.net/manual/en/sessionhandlerinterface.destroy.php
	 * @param string $session_id <p>
	 * The session ID being destroyed.
	 * </p>
	 * @return bool The return value (usually true on success, false on failure). Note this value is returned internally to PHP for processing.
	 */
	abstract public function destroy ($session_id) {}

	/**
	 * Cleanup old sessions
	 * @link http://www.php.net/manual/en/sessionhandlerinterface.gc.php
	 * @param int $maxlifetime <p>
	 * Sessions that have not updated for the last maxlifetime seconds will be removed.
	 * </p>
	 * @return bool The return value (usually true on success, false on failure). Note this value is returned internally to PHP for processing.
	 */
	abstract public function gc ($maxlifetime) {}

}

interface SessionIdInterface  {

	abstract public function create_sid () {}

}

interface SessionUpdateTimestampHandlerInterface  {

	/**
	 * @param $key
	 */
	abstract public function validateId ($key) {}

	/**
	 * @param $key
	 * @param $val
	 */
	abstract public function updateTimestamp ($key, $val) {}

}

class SessionHandler implements SessionHandlerInterface, SessionIdInterface {

	/**
	 * Initialize session
	 * @link http://www.php.net/manual/en/sessionhandler.open.php
	 * @param string $save_path <p>
	 * The path where to store/retrieve the session.
	 * </p>
	 * @param string $session_name <p>
	 * The session name.
	 * </p>
	 * @return bool The return value (usually true on success, false on failure). Note this value is returned internally to PHP for processing.
	 */
	public function open ($save_path, $session_name) {}

	/**
	 * Close the session
	 * @link http://www.php.net/manual/en/sessionhandler.close.php
	 * @return bool The return value (usually true on success, false on failure). Note this value is returned internally to PHP for processing.
	 */
	public function close () {}

	/**
	 * Read session data
	 * @link http://www.php.net/manual/en/sessionhandler.read.php
	 * @param string $session_id <p>
	 * The session id to read data for.
	 * </p>
	 * @return string an encoded string of the read data. If nothing was read, it must return an empty string. Note this value is returned internally to PHP for processing.
	 */
	public function read ($session_id) {}

	/**
	 * Write session data
	 * @link http://www.php.net/manual/en/sessionhandler.write.php
	 * @param string $session_id <p>
	 * The session id.
	 * </p>
	 * @param string $session_data <p>
	 * The encoded session data. This data is the result of the PHP internally encoding the $_SESSION superglobal to a serialized
	 * string and passing it as this parameter. Please note sessions use an alternative serialization method.
	 * </p>
	 * @return bool The return value (usually true on success, false on failure). Note this value is returned internally to PHP for processing.
	 */
	public function write ($session_id, $session_data) {}

	/**
	 * Destroy a session
	 * @link http://www.php.net/manual/en/sessionhandler.destroy.php
	 * @param string $session_id <p>
	 * The session ID being destroyed.
	 * </p>
	 * @return bool The return value (usually true on success, false on failure). Note this value is returned internally to PHP for processing.
	 */
	public function destroy ($session_id) {}

	/**
	 * Cleanup old sessions
	 * @link http://www.php.net/manual/en/sessionhandler.gc.php
	 * @param int $maxlifetime <p>
	 * Sessions that have not updated for the last maxlifetime seconds will be removed.
	 * </p>
	 * @return bool The return value (usually true on success, false on failure). Note this value is returned internally to PHP for processing.
	 */
	public function gc ($maxlifetime) {}

	/**
	 * Return a new session ID
	 * @link http://www.php.net/manual/en/sessionhandler.create-sid.php
	 * @return string A session ID valid for the default session handler.
	 */
	public function create_sid () {}

}

/**
 * Get and/or set the current session name
 * @link http://www.php.net/manual/en/function.session-name.php
 * @param string $name [optional] <p>
 * The session name references the name of the session, which is 
 * used in cookies and URLs (e.g. PHPSESSID). It
 * should contain only alphanumeric characters; it should be short and
 * descriptive (i.e. for users with enabled cookie warnings).
 * If name is specified, the name of the current
 * session is changed to its value.
 * </p>
 * <p>
 * <p>
 * The session name can't consist of digits only, at least one letter
 * must be present. Otherwise a new session id is generated every time.
 * </p>
 * </p>
 * @return string the name of the current session. If name is given
 * and function updates the session name, name of the old session
 * is returned.
 */
function session_name ($name = null) {}

/**
 * Get and/or set the current session module
 * @link http://www.php.net/manual/en/function.session-module-name.php
 * @param string $module [optional] <p>
 * If module is specified, that module will be
 * used instead.
 * </p>
 * @return string the name of the current session module.
 */
function session_module_name ($module = null) {}

/**
 * Get and/or set the current session save path
 * @link http://www.php.net/manual/en/function.session-save-path.php
 * @param string $path [optional] <p>
 * Session data path. If specified, the path to which data is saved will
 * be changed. session_save_path needs to be called
 * before session_start for that purpose.
 * </p>
 * <p>
 * <p>
 * On some operating systems, you may want to specify a path on a
 * filesystem that handles lots of small files efficiently. For example,
 * on Linux, reiserfs may provide better performance than ext2fs.
 * </p>
 * </p>
 * @return string the path of the current directory used for data storage.
 */
function session_save_path ($path = null) {}

/**
 * Get and/or set the current session id
 * @link http://www.php.net/manual/en/function.session-id.php
 * @param string $id [optional] <p>
 * If id is specified, it will replace the current
 * session id. session_id needs to be called before
 * session_start for that purpose. Depending on the
 * session handler, not all characters are allowed within the session id.
 * For example, the file session handler only allows characters in the
 * range a-z A-Z 0-9 , (comma) and - (minus)!
 * </p>
 * When using session cookies, specifying an id
 * for session_id will always send a new cookie
 * when session_start is called, regardless if the
 * current session id is identical to the one being set.
 * @return string session_id returns the session id for the current
 * session or the empty string ("") if there is no current
 * session (no current session id exists).
 */
function session_id ($id = null) {}

/**
 * Update the current session id with a newly generated one
 * @link http://www.php.net/manual/en/function.session-regenerate-id.php
 * @param bool $delete_old_session [optional] <p>
 * Whether to delete the old associated session file or not.
 * </p>
 * @return bool true on success or false on failure
 */
function session_regenerate_id ($delete_old_session = null) {}

/**
 * Decodes session data from a session encoded string
 * @link http://www.php.net/manual/en/function.session-decode.php
 * @param string $data <p>
 * The encoded data to be stored.
 * </p>
 * @return bool true on success or false on failure
 */
function session_decode ($data) {}

/**
 * Encodes the current session data as a session encoded string
 * @link http://www.php.net/manual/en/function.session-encode.php
 * @return string the contents of the current session encoded.
 */
function session_encode () {}

/**
 * Start new or resume existing session
 * @link http://www.php.net/manual/en/function.session-start.php
 * @return bool This function returns true if a session was successfully started,
 * otherwise false.
 */
function session_start () {}

/**
 * Destroys all data registered to a session
 * @link http://www.php.net/manual/en/function.session-destroy.php
 * @return bool true on success or false on failure
 */
function session_destroy () {}

/**
 * Free all session variables
 * @link http://www.php.net/manual/en/function.session-unset.php
 * @return void 
 */
function session_unset () {}

/**
 * Sets user-level session storage functions
 * @link http://www.php.net/manual/en/function.session-set-save-handler.php
 * @param callable $open 
 * @param callable $close 
 * @param callable $read 
 * @param callable $write 
 * @param callable $destroy 
 * @param callable $gc 
 * @param callable $create_sid [optional] 
 * @return bool true on success or false on failure
 */
function session_set_save_handler ($open, $close, $read, $write, $destroy, $gc, $create_sid = null) {}

/**
 * Get and/or set the current cache limiter
 * @link http://www.php.net/manual/en/function.session-cache-limiter.php
 * @param string $cache_limiter [optional] <p>
 * If cache_limiter is specified, the name of the
 * current cache limiter is changed to the new value.
 * </p>
 * <table>
 * Possible values
 * <tr valign="top">
 * <td>Value</td>
 * <td>Headers sent</td>
 * </tr>
 * <tr valign="top">
 * <td>public</td>
 * <td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>private_no_expire</td>
 * <td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>private</td>
 * <td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>nocache</td>
 * <td>
 * </td>
 * </tr>
 * </table>
 * @return string the name of the current cache limiter.
 */
function session_cache_limiter ($cache_limiter = null) {}

/**
 * Return current cache expire
 * @link http://www.php.net/manual/en/function.session-cache-expire.php
 * @param string $new_cache_expire [optional] <p>
 * If new_cache_expire is given, the current cache
 * expire is replaced with new_cache_expire.
 * </p>
 * <p>
 * Setting new_cache_expire is of value only, if
 * session.cache_limiter is set to a value
 * different from nocache.
 * </p>
 * @return int the current setting of session.cache_expire.
 * The value returned should be read in minutes, defaults to 180.
 */
function session_cache_expire ($new_cache_expire = null) {}

/**
 * Set the session cookie parameters
 * @link http://www.php.net/manual/en/function.session-set-cookie-params.php
 * @param int $lifetime <p>
 * Lifetime of the
 * session cookie, defined in seconds.
 * </p>
 * @param string $path [optional] <p>
 * Path on the domain where
 * the cookie will work. Use a single slash ('/') for all paths on the
 * domain.
 * </p>
 * @param string $domain [optional] <p>
 * Cookie domain, for
 * example 'www.php.net'. To make cookies visible on all subdomains then
 * the domain must be prefixed with a dot like '.php.net'.
 * </p>
 * @param bool $secure [optional] <p>
 * If true cookie will only be sent over
 * secure connections.
 * </p>
 * @param bool $httponly [optional] <p>
 * If set to true then PHP will attempt to send the
 * httponly
 * flag when setting the session cookie.
 * </p>
 * @return void 
 */
function session_set_cookie_params ($lifetime, $path = null, $domain = null, $secure = null, $httponly = null) {}

/**
 * Get the session cookie parameters
 * @link http://www.php.net/manual/en/function.session-get-cookie-params.php
 * @return array an array with the current session cookie information, the array
 * contains the following items:
 * "lifetime" - The
 * lifetime of the cookie in seconds.
 * "path" - The path where
 * information is stored.
 * "domain" - The domain
 * of the cookie.
 * "secure" - The cookie
 * should only be sent over secure connections.
 * "httponly" - The
 * cookie can only be accessed through the HTTP protocol.
 */
function session_get_cookie_params () {}

/**
 * Write session data and end session
 * @link http://www.php.net/manual/en/function.session-write-close.php
 * @return void 
 */
function session_write_close () {}

/**
 * Discard session array changes and finish session
 * @link http://www.php.net/manual/en/function.session-abort.php
 * @return void 
 */
function session_abort () {}

/**
 * Re-initialize session array with original values
 * @link http://www.php.net/manual/en/function.session-reset.php
 * @return void 
 */
function session_reset () {}

/**
 * Returns the current session status
 * @link http://www.php.net/manual/en/function.session-status.php
 */
function session_status () {}

/**
 * Session shutdown function
 * @link http://www.php.net/manual/en/function.session-register-shutdown.php
 * @return void 
 */
function session_register_shutdown () {}

/**
 * &Alias; <function>session_write_close</function>
 * @link http://www.php.net/manual/en/function.session-commit.php
 */
function session_commit () {}

define ('PHP_SESSION_DISABLED', 0);
define ('PHP_SESSION_NONE', 1);
define ('PHP_SESSION_ACTIVE', 2);

// End of session v.7.0.0-dev
