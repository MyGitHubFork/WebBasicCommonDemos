<?php

// Start of redis v.2.2.5

class Redis  {
	const REDIS_NOT_FOUND = 0;
	const REDIS_STRING = 1;
	const REDIS_SET = 2;
	const REDIS_LIST = 3;
	const REDIS_ZSET = 4;
	const REDIS_HASH = 5;
	const ATOMIC = 0;
	const MULTI = 1;
	const PIPELINE = 2;
	const OPT_SERIALIZER = 1;
	const OPT_PREFIX = 2;
	const OPT_READ_TIMEOUT = 3;
	const SERIALIZER_NONE = 0;
	const SERIALIZER_PHP = 1;
	const OPT_SCAN = 4;
	const SCAN_RETRY = 1;
	const SCAN_NORETRY = 0;
	const AFTER = "after";
	const BEFORE = "before";


	public function __construct () {}

	public function __destruct () {}

	public function connect () {}

	public function pconnect () {}

	public function close () {}

	public function ping () {}

	public function echo () {}

	public function get () {}

	public function set () {}

	public function setex () {}

	public function psetex () {}

	public function setnx () {}

	public function getSet () {}

	public function randomKey () {}

	public function renameKey () {}

	public function renameNx () {}

	public function getMultiple () {}

	public function exists () {}

	public function delete () {}

	public function incr () {}

	public function incrBy () {}

	public function incrByFloat () {}

	public function decr () {}

	public function decrBy () {}

	public function type () {}

	public function append () {}

	public function getRange () {}

	public function setRange () {}

	public function getBit () {}

	public function setBit () {}

	public function strlen () {}

	public function getKeys () {}

	public function sort () {}

	public function sortAsc () {}

	public function sortAscAlpha () {}

	public function sortDesc () {}

	public function sortDescAlpha () {}

	public function lPush () {}

	public function rPush () {}

	public function lPushx () {}

	public function rPushx () {}

	public function lPop () {}

	public function rPop () {}

	public function blPop () {}

	public function brPop () {}

	public function lSize () {}

	public function lRemove () {}

	public function listTrim () {}

	public function lGet () {}

	public function lGetRange () {}

	public function lSet () {}

	public function lInsert () {}

	public function sAdd () {}

	public function sSize () {}

	public function sRemove () {}

	public function sMove () {}

	public function sPop () {}

	public function sRandMember () {}

	public function sContains () {}

	public function sMembers () {}

	public function sInter () {}

	public function sInterStore () {}

	public function sUnion () {}

	public function sUnionStore () {}

	public function sDiff () {}

	public function sDiffStore () {}

	public function setTimeout () {}

	public function save () {}

	public function bgSave () {}

	public function lastSave () {}

	public function flushDB () {}

	public function flushAll () {}

	public function dbSize () {}

	public function auth () {}

	public function ttl () {}

	public function pttl () {}

	public function persist () {}

	public function info () {}

	public function resetStat () {}

	public function select () {}

	public function move () {}

	public function bgrewriteaof () {}

	public function slaveof () {}

	public function object () {}

	public function bitop () {}

	public function bitcount () {}

	public function bitpos () {}

	public function mset () {}

	public function msetnx () {}

	public function rpoplpush () {}

	public function brpoplpush () {}

	public function zAdd () {}

	public function zDelete () {}

	public function zRange () {}

	public function zReverseRange () {}

	public function zRangeByScore () {}

	public function zRevRangeByScore () {}

	public function zCount () {}

	public function zDeleteRangeByScore () {}

	public function zDeleteRangeByRank () {}

	public function zCard () {}

	public function zScore () {}

	public function zRank () {}

	public function zRevRank () {}

	public function zInter () {}

	public function zUnion () {}

	public function zIncrBy () {}

	public function expireAt () {}

	public function pexpire () {}

	public function pexpireAt () {}

	public function hGet () {}

	public function hSet () {}

	public function hSetNx () {}

	public function hDel () {}

	public function hLen () {}

	public function hKeys () {}

	public function hVals () {}

	public function hGetAll () {}

	public function hExists () {}

	public function hIncrBy () {}

	public function hIncrByFloat () {}

	public function hMset () {}

	public function hMget () {}

	public function multi () {}

	public function discard () {}

	public function exec () {}

	public function pipeline () {}

	public function watch () {}

	public function unwatch () {}

	public function publish () {}

	public function subscribe () {}

	public function psubscribe () {}

	public function unsubscribe () {}

	public function punsubscribe () {}

	public function time () {}

	public function eval () {}

	public function evalsha () {}

	public function script () {}

	public function dump () {}

	public function restore () {}

	public function migrate () {}

	public function getLastError () {}

	public function clearLastError () {}

	public function _prefix () {}

	public function _serialize () {}

	public function _unserialize () {}

	public function client () {}

	/**
	 * @param i_iterator
	 * @param str_pattern[optional]
	 * @param i_count[optional]
	 */
	public function scan (&$i_iterator, $str_pattern = null, $i_count = null) {}

	/**
	 * @param str_key
	 * @param i_iterator
	 * @param str_pattern[optional]
	 * @param i_count[optional]
	 */
	public function hscan ($str_key, &$i_iterator, $str_pattern = null, $i_count = null) {}

	/**
	 * @param str_key
	 * @param i_iterator
	 * @param str_pattern[optional]
	 * @param i_count[optional]
	 */
	public function zscan ($str_key, &$i_iterator, $str_pattern = null, $i_count = null) {}

	/**
	 * @param str_key
	 * @param i_iterator
	 * @param str_pattern[optional]
	 * @param i_count[optional]
	 */
	public function sscan ($str_key, &$i_iterator, $str_pattern = null, $i_count = null) {}

	public function getOption () {}

	public function setOption () {}

	public function config () {}

	public function slowlog () {}

	public function getHost () {}

	public function getPort () {}

	public function getDBNum () {}

	public function getTimeout () {}

	public function getReadTimeout () {}

	public function getPersistentID () {}

	public function getAuth () {}

	public function isConnected () {}

	public function wait () {}

	public function pubsub () {}

	public function open () {}

	public function popen () {}

	public function lLen () {}

	public function sGetMembers () {}

	public function mget () {}

	public function expire () {}

	public function zunionstore () {}

	public function zinterstore () {}

	public function zRemove () {}

	public function zRem () {}

	public function zRemoveRangeByScore () {}

	public function zRemRangeByScore () {}

	public function zRemRangeByRank () {}

	public function zSize () {}

	public function substr () {}

	public function rename () {}

	public function del () {}

	public function keys () {}

	public function lrem () {}

	public function ltrim () {}

	public function lindex () {}

	public function lrange () {}

	public function scard () {}

	public function srem () {}

	public function sismember () {}

	public function zrevrange () {}

	public function sendEcho () {}

	public function evaluate () {}

	public function evaluateSha () {}

}

class RedisArray  {

	public function __construct () {}

	/**
	 * @param function_name
	 * @param arguments
	 */
	public function __call ($function_name, $arguments) {}

	public function _hosts () {}

	public function _target () {}

	public function _instance () {}

	public function _function () {}

	public function _distributor () {}

	public function _rehash () {}

	public function select () {}

	public function info () {}

	public function ping () {}

	public function flushdb () {}

	public function flushall () {}

	public function mget () {}

	public function mset () {}

	public function del () {}

	public function getOption () {}

	public function setOption () {}

	public function keys () {}

	public function multi () {}

	public function exec () {}

	public function discard () {}

	public function unwatch () {}

	public function delete () {}

	public function getMultiple () {}

}

class RedisException extends RuntimeException  {
	protected $message;
	protected $code;
	protected $file;
	protected $line;


	final private function __clone () {}

	/**
	 * @param message[optional]
	 * @param code[optional]
	 * @param previous[optional]
	 */
	public function __construct ($message = null, $code = null, $previous = null) {}

	final public function getMessage () {}

	final public function getCode () {}

	final public function getFile () {}

	final public function getLine () {}

	final public function getTrace () {}

	final public function getPrevious () {}

	final public function getTraceAsString () {}

	public function __toString () {}

}
// End of redis v.2.2.5
