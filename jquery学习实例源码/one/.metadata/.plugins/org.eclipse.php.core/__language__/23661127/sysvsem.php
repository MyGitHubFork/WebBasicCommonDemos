<?php

// Start of sysvsem v.7.0.0-dev

/**
 * Get a semaphore id
 * @link http://www.php.net/manual/en/function.sem-get.php
 * @param int $key <p>
 * </p>
 * @param int $max_acquire [optional] <p>
 * The number of processes that can acquire the semaphore simultaneously
 * is set to max_acquire.
 * </p>
 * @param int $perm [optional] <p>
 * The semaphore permissions. Actually this value is
 * set only if the process finds it is the only process currently
 * attached to the semaphore.
 * </p>
 * @param int $auto_release [optional] <p>
 * Specifies if the semaphore should be automatically released on request
 * shutdown.
 * </p>
 * @return resource a positive semaphore identifier on success, or false on
 * error.
 */
function sem_get ($key, $max_acquire = null, $perm = null, $auto_release = null) {}

/**
 * Acquire a semaphore
 * @link http://www.php.net/manual/en/function.sem-acquire.php
 * @param resource $sem_identifier <p>
 * sem_identifier is a semaphore resource,
 * obtained from sem_get.
 * </p>
 * @param bool $nowait [optional] <p>
 * Specifies if the process shouldn't wait for the semaphore to be acquired.
 * If set to true, the call will return
 * false immediately if a semaphore cannot be immediately
 * acquired.
 * </p>
 * @return bool true on success or false on failure
 */
function sem_acquire ($sem_identifier, $nowait = null) {}

/**
 * Release a semaphore
 * @link http://www.php.net/manual/en/function.sem-release.php
 * @param resource $sem_identifier <p>
 * A Semaphore resource handle as returned by
 * sem_get.
 * </p>
 * @return bool true on success or false on failure
 */
function sem_release ($sem_identifier) {}

/**
 * Remove a semaphore
 * @link http://www.php.net/manual/en/function.sem-remove.php
 * @param resource $sem_identifier <p>
 * A semaphore resource identifier as returned
 * by sem_get.
 * </p>
 * @return bool true on success or false on failure
 */
function sem_remove ($sem_identifier) {}

// End of sysvsem v.7.0.0-dev
