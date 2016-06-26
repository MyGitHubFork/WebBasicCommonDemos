<?php

// Start of shmop v.

/**
 * Create or open shared memory block
 * @link http://www.php.net/manual/en/function.shmop-open.php
 * @param key int <p>
 * System's id for the shared memory block.
 * Can be passed as a decimal or hex.
 * </p>
 * @param flags string <p>
 * The flags that you can use:
 * "a" for access (sets SHM_RDONLY for shmat)
 * use this flag when you need to open an existing shared memory
 * segment for read only
 * @param mode int <p>
 * The permissions that you wish to assign to your memory segment, those
 * are the same as permission for a file. Permissions need to be passed
 * in octal form, like for example 0644
 * </p>
 * @param size int <p>
 * The size of the shared memory block you wish to create in bytes
 * </p>
 * @return int On success shmop_open will return an id that you can
 * use to access the shared memory segment you've created. false is 
 * returned on failure.
 */
function shmop_open ($key, $flags, $mode, $size) {}

/**
 * Read data from shared memory block
 * @link http://www.php.net/manual/en/function.shmop-read.php
 * @param shmid int <p>
 * The shared memory block identifier created by 
 * shmop_open
 * </p>
 * @param start int <p>
 * Offset from which to start reading
 * </p>
 * @param count int <p>
 * The number of bytes to read
 * </p>
 * @return string the data or false on failure.
 */
function shmop_read ($shmid, $start, $count) {}

/**
 * Close shared memory block
 * @link http://www.php.net/manual/en/function.shmop-close.php
 * @param shmid int <p>
 * The shared memory block identifier created by 
 * shmop_open
 * </p>
 * @return void 
 */
function shmop_close ($shmid) {}

/**
 * Get size of shared memory block
 * @link http://www.php.net/manual/en/function.shmop-size.php
 * @param shmid int <p>
 * The shared memory block identifier created by 
 * shmop_open
 * </p>
 * @return int an int, which represents the number of bytes the shared memory
 * block occupies.
 */
function shmop_size ($shmid) {}

/**
 * Write data into shared memory block
 * @link http://www.php.net/manual/en/function.shmop-write.php
 * @param shmid int <p>
 * The shared memory block identifier created by 
 * shmop_open
 * </p>
 * @param data string <p>
 * A string to write into shared memory block 
 * </p>
 * @param offset int <p>
 * Specifies where to start writing data inside the shared memory
 * segment.
 * </p>
 * @return int The size of the written data, or false on 
 * failure.
 */
function shmop_write ($shmid, $data, $offset) {}

/**
 * Delete shared memory block
 * @link http://www.php.net/manual/en/function.shmop-delete.php
 * @param shmid int <p>
 * The shared memory block identifier created by 
 * shmop_open
 * </p>
 * @return bool true on success or false on failure
 */
function shmop_delete ($shmid) {}

// End of shmop v.
