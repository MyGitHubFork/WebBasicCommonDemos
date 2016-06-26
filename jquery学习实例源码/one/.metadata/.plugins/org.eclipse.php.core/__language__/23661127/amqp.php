<?php

// Start of amqp v.1.4.0

class AMQPConnection  {

	/**
	 * @param credentials[optional]
	 */
	public function __construct (array $credentials = null) {}

	public function isConnected () {}

	public function connect () {}

	public function pconnect () {}

	public function pdisconnect () {}

	public function disconnect () {}

	public function reconnect () {}

	public function getLogin () {}

	/**
	 * @param login
	 */
	public function setLogin ($login) {}

	public function getPassword () {}

	/**
	 * @param password
	 */
	public function setPassword ($password) {}

	public function getHost () {}

	/**
	 * @param host
	 */
	public function setHost ($host) {}

	public function getPort () {}

	/**
	 * @param port
	 */
	public function setPort ($port) {}

	public function getVhost () {}

	/**
	 * @param vhost
	 */
	public function setVhost ($vhost) {}

	public function getTimeout () {}

	/**
	 * @param timeout
	 */
	public function setTimeout ($timeout) {}

	public function getReadTimeout () {}

	/**
	 * @param timeout
	 */
	public function setReadTimeout ($timeout) {}

	public function getWriteTimeout () {}

	/**
	 * @param timeout
	 */
	public function setWriteTimeout ($timeout) {}

}

class AMQPChannel  {

	/**
	 * @param amqp_connection
	 */
	public function __construct ($amqp_connection) {}

	public function isConnected () {}

	public function getChannelId () {}

	/**
	 * @param size
	 */
	public function setPrefetchSize ($size) {}

	public function getPrefetchSize () {}

	/**
	 * @param count
	 */
	public function setPrefetchCount ($count) {}

	public function getPrefetchCount () {}

	/**
	 * @param size
	 * @param count
	 */
	public function qos ($size, $count) {}

	public function startTransaction () {}

	public function commitTransaction () {}

	public function rollbackTransaction () {}

	public function getConnection () {}

}

class AMQPQueue  {

	/**
	 * @param amqp_channel
	 */
	public function __construct ($amqp_channel) {}

	public function getName () {}

	/**
	 * @param queue_name
	 */
	public function setName ($queue_name) {}

	public function getFlags () {}

	/**
	 * @param flags
	 */
	public function setFlags ($flags) {}

	/**
	 * @param argument
	 */
	public function getArgument ($argument) {}

	public function getArguments () {}

	/**
	 * @param key
	 * @param value
	 */
	public function setArgument ($key, $value) {}

	/**
	 * @param arguments
	 */
	public function setArguments (array $arguments) {}

	public function declareQueue () {}

	/**
	 * @param exchange_name
	 * @param routing_key[optional]
	 * @param arguments[optional]
	 */
	public function bind ($exchange_name, $routing_key = null, $arguments = null) {}

	/**
	 * @param flags[optional]
	 */
	public function get ($flags = null) {}

	/**
	 * @param callback
	 * @param flags[optional]
	 * @param consumer_tag[optional]
	 */
	public function consume ($callback, $flags = null, $consumer_tag = null) {}

	/**
	 * @param delivery_tag
	 * @param flags[optional]
	 */
	public function ack ($delivery_tag, $flags = null) {}

	/**
	 * @param delivery_tag
	 * @param flags[optional]
	 */
	public function nack ($delivery_tag, $flags = null) {}

	/**
	 * @param delivery_tag
	 * @param flags[optional]
	 */
	public function reject ($delivery_tag, $flags = null) {}

	public function purge () {}

	/**
	 * @param consumer_tag[optional]
	 */
	public function cancel ($consumer_tag = null) {}

	/**
	 * @param flags[optional]
	 */
	public function delete ($flags = null) {}

	/**
	 * @param exchange_name
	 * @param routing_key[optional]
	 * @param arguments[optional]
	 */
	public function unbind ($exchange_name, $routing_key = null, $arguments = null) {}

	public function getChannel () {}

	public function getConnection () {}

	public function declare () {}

}

class AMQPExchange  {

	/**
	 * @param amqp_channel
	 */
	public function __construct ($amqp_channel) {}

	public function getName () {}

	/**
	 * @param exchange_name
	 */
	public function setName ($exchange_name) {}

	public function getFlags () {}

	/**
	 * @param flags
	 */
	public function setFlags ($flags) {}

	public function getType () {}

	/**
	 * @param exchange_type
	 */
	public function setType ($exchange_type) {}

	/**
	 * @param argument
	 */
	public function getArgument ($argument) {}

	public function getArguments () {}

	/**
	 * @param key
	 * @param value
	 */
	public function setArgument ($key, $value) {}

	/**
	 * @param arguments
	 */
	public function setArguments (array $arguments) {}

	public function declareExchange () {}

	/**
	 * @param exchange_name
	 * @param routing_key
	 * @param flags[optional]
	 */
	public function bind ($exchange_name, $routing_key, $flags = null) {}

	/**
	 * @param exchange_name[optional]
	 * @param flags[optional]
	 */
	public function delete ($exchange_name = null, $flags = null) {}

	/**
	 * @param message
	 * @param routing_key[optional]
	 * @param flags[optional]
	 * @param headers[optional]
	 */
	public function publish ($message, $routing_key = null, $flags = nullarray , $headers = null) {}

	public function getChannel () {}

	public function getConnection () {}

	public function declare () {}

}

class AMQPEnvelope  {

	public function __construct () {}

	public function getBody () {}

	public function getRoutingKey () {}

	public function getDeliveryTag () {}

	public function getDeliveryMode () {}

	public function getExchangeName () {}

	public function isRedelivery () {}

	public function getContentType () {}

	public function getContentEncoding () {}

	public function getType () {}

	public function getTimestamp () {}

	public function getPriority () {}

	public function getExpiration () {}

	public function getUserId () {}

	public function getAppId () {}

	public function getMessageId () {}

	public function getReplyTo () {}

	public function getCorrelationId () {}

	public function getHeaders () {}

	public function getHeader () {}

}

class AMQPException extends Exception  {
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

class AMQPConnectionException extends AMQPException  {
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

class AMQPChannelException extends AMQPException  {
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

class AMQPQueueException extends AMQPException  {
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

class AMQPExchangeException extends AMQPException  {
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
define ('AMQP_NOPARAM', 0);
define ('AMQP_DURABLE', 2);
define ('AMQP_PASSIVE', 4);
define ('AMQP_EXCLUSIVE', 8);
define ('AMQP_AUTODELETE', 16);
define ('AMQP_INTERNAL', 32);
define ('AMQP_NOLOCAL', 64);
define ('AMQP_AUTOACK', 128);
define ('AMQP_IFEMPTY', 256);
define ('AMQP_IFUNUSED', 512);
define ('AMQP_MANDATORY', 1024);
define ('AMQP_IMMEDIATE', 2048);
define ('AMQP_MULTIPLE', 4096);
define ('AMQP_NOWAIT', 8192);
define ('AMQP_REQUEUE', 16384);
define ('AMQP_EX_TYPE_DIRECT', "direct");
define ('AMQP_EX_TYPE_FANOUT', "fanout");
define ('AMQP_EX_TYPE_TOPIC', "topic");
define ('AMQP_EX_TYPE_HEADERS', "headers");
define ('AMQP_OS_SOCKET_TIMEOUT_ERRNO', 536870923);

// End of amqp v.1.4.0
