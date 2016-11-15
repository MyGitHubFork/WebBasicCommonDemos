<?php
/**
 * Stores a variable identified by key into the cache. If a namespace is provided, the key is stored under that namespace. Identical keys can exist under different namespaces
 * @param $key string
 * @param $value mixed
 * @param $ttl int[optional]
 * @return boolean FALSE if cache storing fails, TRUE otherwise
 * @since 4.0
 */
function zend_shm_cache_store($key, $value, $ttl = 0) {}

/**
 * Stores a variable identified by a key into the cache. If a namespace is provided, the key is stored under that namespace. Identical keys can exist under different namespaces
 * @param $key string
 * @param $value mixed
 * @param $ttl int[optional]
 * @return boolean FALSE if cache storing fails, TRUE otherwise
 * @since 4.0
 */
function zend_disk_cache_store($key, $value, $ttl = 0) {}

/**
 * Fetches data from the cache. The key can be prefixed with a namespace to indicate searching within the specified namespace only. If a namespace is not provided, the Data Cache searches for the key in the global namespace
 * @param $key mixed
 * @return mixed FALSE if no data that matches the key is found, else it returns the stored data, If an array of keys is given, then an array which its keys are the original keys and the values are the corresponding stored data values
 * @since 4.0
 */
function zend_shm_cache_fetch($key) {}

/**
 * Fetches data from the cache. The key can be prefixed with a namespace to indicate searching within the specified namespace only. If a namespace is not provided, the Data Cache searches for the key in the global namespace
 * @param $key mixed
 * @return mixed FALSE if no data that matches the key is found, else it returns the stored data, If an array of keys is given, then an array which its keys are the original keys and the values are the corresponding stored data values
 * @since 4.0
 */
function zend_disk_cache_fetch($key) {}

/**
 * Finds and deletes an entry from the cache, using a key to identify it. The key can be prefixed with a namespace to indicate that the key can be deleted within that namespace only. If a namespace is not provided, the Data Cache searches for the key in the global namespace
 * @param $key mixed
 * @return boolean TRUE on success, FALSE on failure.
 * @since 4.0
 */
function zend_shm_cache_delete($key) {}

/**
 * Finds and deletes an entry from the cache, using a key to identify it. The key can be prefixed with a namespace to indicate that the key can be deleted within that namespace only. If a namespace is not provided, the Data Cache searches for the key in the global namespace
 * @param $key string
 * @return boolean TRUE on success, FALSE on failure or when entry doesn't exist.
 * @since 4.0
 */
function zend_disk_cache_delete($key) {}

/**
 * Deletes all entries from all namespaces in the cache, if a 'namespace' is provided, only the entries in that namespace are deleted
 * @param $namespace string
 * @return boolean If the namespace does not exist or there are no items to clear, the function will return TRUE. The function will return FALSE only in case of error.
 * @since 4.0
 */
function zend_shm_cache_clear($namespace) {}

/**
 * Deletes all entries from all namespaces in the cache, if a 'namespace' is provided, only the entries in that namespace are deleted
 * @param $namespace string
 * @return boolean If the namespace does not exist or there are no items to clear, the function will return TRUE. The function will return FALSE only in case of error.
 * @since 4.0
 */
function zend_disk_cache_clear($namespace) {}
?>