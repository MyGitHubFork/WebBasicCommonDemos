<?php

// Start of solr v.2.0.0

final class SolrObject implements ArrayAccess {

	/**
	 * Creates Solr object
	 * @link http://www.php.net/manual/en/solrobject.construct.php
	 */
	public function __construct () {}

	/**
	 * Destructor
	 * @link http://www.php.net/manual/en/solrobject.destruct.php
	 * @return void None.
	 */
	public function __destruct () {}

	/**
	 * Sets the value for a property
	 * @link http://www.php.net/manual/en/solrobject.offsetset.php
	 * @param property_name string <p>
	 * The name of the property.
	 * </p>
	 * @param property_value string <p>
	 * The new value.
	 * </p>
	 * @return void None.
	 */
	public function offsetSet ($property_name, $property_value) {}

	/**
	 * Used to retrieve a property
	 * @link http://www.php.net/manual/en/solrobject.offsetget.php
	 * @param property_name string <p>
	 * Name of the property.
	 * </p>
	 * @return mixed the property value.
	 */
	public function offsetGet ($property_name) {}

	/**
	 * Checks if the property exists
	 * @link http://www.php.net/manual/en/solrobject.offsetexists.php
	 * @param property_name string <p>
	 * The name of the property.
	 * </p>
	 * @return bool true on success or false on failure
	 */
	public function offsetExists ($property_name) {}

	/**
	 * Unsets the value for the property
	 * @link http://www.php.net/manual/en/solrobject.offsetunset.php
	 * @param property_name string <p>
	 * The name of the property.
	 * </p>
	 * @return void true on success or false on failure
	 */
	public function offsetUnset ($property_name) {}

	/**
	 * Returns an array of all the names of the properties
	 * @link http://www.php.net/manual/en/solrobject.getpropertynames.php
	 * @return array an array.
	 */
	public function getPropertyNames () {}

}

final class SolrDocument implements ArrayAccess, Iterator, Traversable, Serializable {
	const SORT_DEFAULT = 1;
	const SORT_ASC = 1;
	const SORT_DESC = 2;
	const SORT_FIELD_NAME = 1;
	const SORT_FIELD_VALUE_COUNT = 2;
	const SORT_FIELD_BOOST_VALUE = 4;

	private $_hashtable_index;


	/**
	 * Constructor
	 * @link http://www.php.net/manual/en/solrdocument.construct.php
	 */
	public function __construct () {}

	/**
	 * Destructor
	 * @link http://www.php.net/manual/en/solrdocument.destruct.php
	 * @return void 
	 */
	public function __destruct () {}

	/**
	 * Creates a copy of a SolrDocument object
	 * @link http://www.php.net/manual/en/solrdocument.clone.php
	 * @return void None.
	 */
	public function __clone () {}

	/**
	 * Adds another field to the document
	 * @link http://www.php.net/manual/en/solrdocument.set.php
	 * @param fieldName string <p>
	 * Name of the field.
	 * </p>
	 * @param fieldValue string <p>
	 * Field value.
	 * </p>
	 * @return bool true on success or false on failure
	 */
	public function __set ($fieldName, $fieldValue) {}

	/**
	 * Access the field as a property
	 * @link http://www.php.net/manual/en/solrdocument.get.php
	 * @param fieldName string <p>
	 * The name of the field.
	 * </p>
	 * @return SolrDocumentField a SolrDocumentField instance.
	 */
	public function __get ($fieldName) {}

	/**
	 * Checks if a field exists
	 * @link http://www.php.net/manual/en/solrdocument.isset.php
	 * @param fieldName string <p>
	 * Name of the field.
	 * </p>
	 * @return bool true on success or false on failure
	 */
	public function __isset ($fieldName) {}

	/**
	 * Removes a field from the document
	 * @link http://www.php.net/manual/en/solrdocument.unset.php
	 * @param fieldName string <p>
	 * The name of the field.
	 * </p>
	 * @return bool true on success or false on failure
	 */
	public function __unset ($fieldName) {}

	/**
	 * Adds a field to the document
	 * @link http://www.php.net/manual/en/solrdocument.offsetset.php
	 * @param fieldName string <p>
	 * The name of the field.
	 * </p>
	 * @param fieldValue string <p>
	 * The value for this field.
	 * </p>
	 * @return void true on success or false on failure
	 */
	public function offsetSet ($fieldName, $fieldValue) {}

	/**
	 * Retrieves a field
	 * @link http://www.php.net/manual/en/solrdocument.offsetget.php
	 * @param fieldName string <p>
	 * The name of the field.
	 * </p>
	 * @return SolrDocumentField a SolrDocumentField object.
	 */
	public function offsetGet ($fieldName) {}

	/**
	 * Checks if a particular field exists
	 * @link http://www.php.net/manual/en/solrdocument.offsetexists.php
	 * @param fieldName string <p>
	 * The name of the field.
	 * </p>
	 * @return bool true on success or false on failure
	 */
	public function offsetExists ($fieldName) {}

	/**
	 * Removes a field
	 * @link http://www.php.net/manual/en/solrdocument.offsetunset.php
	 * @param fieldName string <p>
	 * The name of the field.
	 * </p>
	 * @return void No return value.
	 */
	public function offsetUnset ($fieldName) {}

	/**
	 * Retrieves the current field
	 * @link http://www.php.net/manual/en/solrdocument.current.php
	 * @return SolrDocumentField the field
	 */
	public function &current () {}

	/**
	 * Retrieves the current key
	 * @link http://www.php.net/manual/en/solrdocument.key.php
	 * @return string the current key.
	 */
	public function key () {}

	/**
	 * Moves the internal pointer to the next field
	 * @link http://www.php.net/manual/en/solrdocument.next.php
	 * @return void This method has no return value.
	 */
	public function next () {}

	/**
	 * Resets the internal pointer to the beginning
	 * @link http://www.php.net/manual/en/solrdocument.rewind.php
	 * @return void This method has no return value.
	 */
	public function rewind () {}

	/**
	 * Checks if the current position internally is still valid
	 * @link http://www.php.net/manual/en/solrdocument.valid.php
	 * @return bool true on success and false if the current position is no longer valid.
	 */
	public function valid () {}

	/**
	 * Used for custom serialization
	 * @link http://www.php.net/manual/en/solrdocument.serialize.php
	 * @return string a string representing the serialized Solr document.
	 */
	public function serialize () {}

	/**
	 * Custom serialization of SolrDocument objects
	 * @link http://www.php.net/manual/en/solrdocument.unserialize.php
	 * @param serialized string <p>
	 * An XML representation of the document.
	 * </p>
	 * @return void None.
	 */
	public function unserialize ($serialized) {}

	/**
	 * Drops all the fields in the document
	 * @link http://www.php.net/manual/en/solrdocument.clear.php
	 * @return bool true on success or false on failure
	 */
	public function clear () {}

	/**
	 * This is an alias to SolrDocument::clear()
	 * @link http://www.php.net/manual/en/solrdocument.reset.php
	 * @return bool true on success or false on failure
	 */
	public function reset () {}

	/**
	 * Adds a field to the document
	 * @link http://www.php.net/manual/en/solrdocument.addfield.php
	 * @param fieldName string <p>
	 * The name of the field
	 * </p>
	 * @param fieldValue string <p>
	 * The value of the field.
	 * </p>
	 * @return bool true on success or false on failure
	 */
	public function addField ($fieldName, $fieldValue) {}

	/**
	 * Returns an array of fields names in the document
	 * @link http://www.php.net/manual/en/solrdocument.getfieldnames.php
	 * @return array an array containing the names of the fields in this document.
	 */
	public function getFieldNames () {}

	/**
	 * Returns the number of fields in this document
	 * @link http://www.php.net/manual/en/solrdocument.getfieldcount.php
	 * @return int an integer on success and false on failure.
	 */
	public function getFieldCount () {}

	/**
	 * Retrieves a field by name
	 * @link http://www.php.net/manual/en/solrdocument.getfield.php
	 * @param fieldName string <p>
	 * Name of the field.
	 * </p>
	 * @return SolrDocumentField a SolrDocumentField on success and false on failure.
	 */
	public function getField ($fieldName) {}

	/**
	 * Returns an array representation of the document
	 * @link http://www.php.net/manual/en/solrdocument.toarray.php
	 * @return array an array representation of the document.
	 */
	public function toArray () {}

	/**
	 * Checks if a field exists in the document
	 * @link http://www.php.net/manual/en/solrdocument.fieldexists.php
	 * @param fieldName string <p>
	 * The name of the field.
	 * </p>
	 * @return bool true if the field is present and false if it does not.
	 */
	public function fieldExists ($fieldName) {}

	/**
	 * Removes a field from the document
	 * @link http://www.php.net/manual/en/solrdocument.deletefield.php
	 * @param fieldName string <p>
	 * Name of the field
	 * </p>
	 * @return bool true on success or false on failure
	 */
	public function deleteField ($fieldName) {}

	/**
	 * Sorts the fields in the document
	 * @link http://www.php.net/manual/en/solrdocument.sort.php
	 * @param sortOrderBy int <p>
	 * The sort criteria.
	 * </p>
	 * @param sortDirection int[optional] <p>
	 * The sort direction.
	 * </p>
	 * @return bool true on success or false on failure
	 */
	public function sort ($sortOrderBy, $sortDirection = null) {}

	/**
	 * Merges source to the current SolrDocument
	 * @link http://www.php.net/manual/en/solrdocument.merge.php
	 * @param sourceDoc SolrDocument <p>
	 * The source document.
	 * </p>
	 * @param overwrite bool[optional] <p>
	 * If this is true then fields with the same name in the destination document will be overwritten.
	 * </p>
	 * @return bool true on success or false on failure
	 */
	public function merge (SolrDocument $sourceDoc, $overwrite = null) {}

	/**
	 * Returns a SolrInputDocument equivalent of the object
	 * @link http://www.php.net/manual/en/solrdocument.getinputdocument.php
	 * @return SolrInputDocument a SolrInputDocument on success and &null; on failure.
	 */
	public function &getInputDocument () {}

}

final class SolrDocumentField  {
	public $name;
	public $boost;
	public $values;


	/**
	 * Constructor
	 * @link http://www.php.net/manual/en/solrdocumentfield.construct.php
	 */
	public function __construct () {}

	/**
	 * Destructor
	 * @link http://www.php.net/manual/en/solrdocumentfield.destruct.php
	 * @return void None.
	 */
	public function __destruct () {}

}

final class SolrInputDocument  {
	const SORT_DEFAULT = 1;
	const SORT_ASC = 1;
	const SORT_DESC = 2;
	const SORT_FIELD_NAME = 1;
	const SORT_FIELD_VALUE_COUNT = 2;
	const SORT_FIELD_BOOST_VALUE = 4;

	private $_hashtable_index;


	/**
	 * Constructor
	 * @link http://www.php.net/manual/en/solrinputdocument.construct.php
	 */
	public function __construct () {}

	/**
	 * Destructor
	 * @link http://www.php.net/manual/en/solrinputdocument.destruct.php
	 * @return void None.
	 */
	public function __destruct () {}

	/**
	 * Creates a copy of a SolrDocument
	 * @link http://www.php.net/manual/en/solrinputdocument.clone.php
	 * @return void Creates a new SolrInputDocument instance.
	 */
	public function __clone () {}

	public function __sleep () {}

	public function __wakeup () {}

	/**
	 * Sets the boost value for this document
	 * @link http://www.php.net/manual/en/solrinputdocument.setboost.php
	 * @param documentBoostValue float <p>
	 * The index-time boost value for this document.
	 * </p>
	 * @return bool true on success or false on failure
	 */
	public function setBoost ($documentBoostValue) {}

	/**
	 * Retrieves the current boost value for the document
	 * @link http://www.php.net/manual/en/solrinputdocument.getboost.php
	 * @return float the boost value on success and false on failure.
	 */
	public function getBoost () {}

	/**
	 * Resets the input document
	 * @link http://www.php.net/manual/en/solrinputdocument.clear.php
	 * @return bool true on success or false on failure
	 */
	public function clear () {}

	/**
	 * This is an alias of SolrInputDocument::clear
	 * @link http://www.php.net/manual/en/solrinputdocument.reset.php
	 * @return bool true on success or false on failure
	 */
	public function reset () {}

	/**
	 * Adds a field to the document
	 * @link http://www.php.net/manual/en/solrinputdocument.addfield.php
	 * @param fieldName string <p>
	 * The name of the field
	 * </p>
	 * @param fieldValue string <p>
	 * The value for the field.
	 * </p>
	 * @param fieldBoostValue float[optional] <p>
	 * The index time boost for the field. Though this cannot be negative, you can still pass values less than 1.0 but they must be greater than zero.
	 * </p>
	 * @return bool true on success or false on failure
	 */
	public function addField ($fieldName, $fieldValue, $fieldBoostValue = null) {}

	/**
	 * Retrieves the boost value for a particular field
	 * @link http://www.php.net/manual/en/solrinputdocument.getfieldboost.php
	 * @param fieldName string <p>
	 * The name of the field.
	 * </p>
	 * @return float the boost value for the field or false if there was an error.
	 */
	public function getFieldBoost ($fieldName) {}

	/**
	 * Sets the index-time boost value for a field
	 * @link http://www.php.net/manual/en/solrinputdocument.setfieldboost.php
	 * @param fieldName string <p>
	 * The name of the field.
	 * </p>
	 * @param fieldBoostValue float <p>
	 * The index time boost value.
	 * </p>
	 * @return bool 
	 */
	public function setFieldBoost ($fieldName, $fieldBoostValue) {}

	/**
	 * Returns an array containing all the fields in the document
	 * @link http://www.php.net/manual/en/solrinputdocument.getfieldnames.php
	 * @return array an array on success and false on failure.
	 */
	public function getFieldNames () {}

	/**
	 * Returns the number of fields in the document
	 * @link http://www.php.net/manual/en/solrinputdocument.getfieldcount.php
	 * @return int an integer on success or false on failure.
	 */
	public function getFieldCount () {}

	/**
	 * Retrieves a field by name
	 * @link http://www.php.net/manual/en/solrinputdocument.getfield.php
	 * @param fieldName string <p>
	 * The name of the field.
	 * </p>
	 * @return SolrDocumentField a SolrDocumentField object on success and false on failure.
	 */
	public function getField ($fieldName) {}

	/**
	 * Returns an array representation of the input document
	 * @link http://www.php.net/manual/en/solrinputdocument.toarray.php
	 * @return array an array containing the fields. It returns false on failure.
	 */
	public function toArray () {}

	/**
	 * Checks if a field exists
	 * @link http://www.php.net/manual/en/solrinputdocument.fieldexists.php
	 * @param fieldName string <p>
	 * Name of the field.
	 * </p>
	 * @return bool true if the field was found and false if it was not found.
	 */
	public function fieldExists ($fieldName) {}

	/**
	 * Removes a field from the document
	 * @link http://www.php.net/manual/en/solrinputdocument.deletefield.php
	 * @param fieldName string <p>
	 * The name of the field.
	 * </p>
	 * @return bool true on success or false on failure
	 */
	public function deleteField ($fieldName) {}

	/**
	 * Sorts the fields within the document
	 * @link http://www.php.net/manual/en/solrinputdocument.sort.php
	 * @param sortOrderBy int <p>
	 * The sort criteria
	 * </p>
	 * @param sortDirection int[optional] <p>
	 * The sort direction
	 * </p>
	 * @return bool true on success or false on failure
	 */
	public function sort ($sortOrderBy, $sortDirection = null) {}

	/**
	 * Merges one input document into another
	 * @link http://www.php.net/manual/en/solrinputdocument.merge.php
	 * @param sourceDoc SolrInputDocument <p>
	 * The source document.
	 * </p>
	 * @param overwrite bool[optional] <p>
	 * If this is true it will replace matching fields in the destination document.
	 * </p>
	 * @return bool true on success or false on failure In the future, this will be modified to return the number of fields in the new document.
	 */
	public function merge (SolrInputDocument $sourceDoc, $overwrite = null) {}

}

class SolrClient  {
	const SEARCH_SERVLET_TYPE = 1;
	const UPDATE_SERVLET_TYPE = 2;
	const THREADS_SERVLET_TYPE = 4;
	const PING_SERVLET_TYPE = 8;
	const TERMS_SERVLET_TYPE = 16;
	const SYSTEM_SERVLET_TYPE = 32;
	const DEFAULT_SEARCH_SERVLET = "select";
	const DEFAULT_UPDATE_SERVLET = "update";
	const DEFAULT_THREADS_SERVLET = "admin/threads";
	const DEFAULT_PING_SERVLET = "admin/ping";
	const DEFAULT_TERMS_SERVLET = "terms";
	const DEFAULT_SYSTEM_SERVLET = "admin/system";

	private $_hashtable_index;


	/**
	 * Constructor for the SolrClient object
	 * @link http://www.php.net/manual/en/solrclient.construct.php
	 * @param clientOptions
	 */
	public function __construct (array $clientOptions) {}

	/**
	 * Destructor for SolrClient
	 * @link http://www.php.net/manual/en/solrclient.destruct.php
	 * @return void Destructor for SolrClient
	 */
	public function __destruct () {}

	public function __sleep () {}

	public function __wakeup () {}

	public function __clone () {}

	/**
	 * Returns the client options set internally
	 * @link http://www.php.net/manual/en/solrclient.getoptions.php
	 * @return array an array containing all the options for the SolrClient object set internally.
	 */
	public function getOptions () {}

	/**
	 * Returns the debug data for the last connection attempt
	 * @link http://www.php.net/manual/en/solrclient.getdebug.php
	 * @return string a string on success and null if there is nothing to return.
	 */
	public function getDebug () {}

	/**
	 * Changes the specified servlet type to a new value
	 * @link http://www.php.net/manual/en/solrclient.setservlet.php
	 * @param type int <p>One of the following :</p>
	 * <p>
	 * </p>
	 * @param value string <p>
	 * The new value for the servlet
	 * </p>
	 * @return bool true on success or false on failure
	 */
	public function setServlet ($type, $value) {}

	/**
	 * Sends a query to the server
	 * @link http://www.php.net/manual/en/solrclient.query.php
	 * @param query SolrParams <p>
	 * A SolrParams object. It is recommended to use SolrQuery for advanced queries.
	 * </p>
	 * @return SolrQueryResponse a SolrQueryResponse object on success and throws an exception on failure.
	 */
	public function &query (SolrParams $query) {}

	/**
	 * Adds a document to the index
	 * @link http://www.php.net/manual/en/solrclient.adddocument.php
	 * @param doc SolrInputDocument <p>
	 * The SolrInputDocument instance.
	 * </p>
	 * @param overwrite bool[optional] <p>
	 * Whether to overwrite existing document or not. If false there will be duplicates (several documents with the same ID).
	 * </p>
	 * <p>
	 * PECL Solr &lt; 2.0 $allowDups was used instead of $overwrite, which does the same functionality with exact opposite bool flag.
	 * </p>
	 * <p>
	 * $allowDups = false is the same as $overwrite = true
	 * </p>
	 * @param commitWithin int[optional] <p>
	 * Number of milliseconds within which to auto commit this document. Available since Solr 1.4 . Default (0) means disabled.
	 * </p>
	 * <p>
	 * When this value specified, it leaves the control of when to do the commit
	 * to Solr itself, optimizing number of commits to a minimum while still
	 * fulfilling
	 * the update latency requirements, and Solr will automatically do a commit
	 * when the oldest add in the buffer is due.
	 * </p>
	 * @return SolrUpdateResponse a SolrUpdateResponse object or throws an Exception on failure.
	 */
	public function &addDocument (SolrInputDocument $doc, $overwrite = null, $commitWithin = null) {}

	/**
	 * Adds a collection of SolrInputDocument instances to the index
	 * @link http://www.php.net/manual/en/solrclient.adddocuments.php
	 * @param docs array <p>
	 * An array containing the collection of SolrInputDocument instances. This array must be an actual variable.
	 * </p>
	 * @param overwrite bool[optional] <p>
	 * Whether to overwrite existing documents or not. If false there will be duplicates (several documents with the same ID).
	 * </p>
	 * <p>
	 * PECL Solr &lt; 2.0 $allowDups was used instead of $overwrite, which does the same functionality with exact opposite bool flag.
	 * </p>
	 * <p>
	 * $allowDups = false is the same as $overwrite = true
	 * </p>
	 * @param commitWithin int[optional] <p>
	 * Number of milliseconds within which to auto commit this document. Available since Solr 1.4 . Default (0) means disabled.
	 * </p>
	 * <p>
	 * When this value specified, it leaves the control of when to do the commit
	 * to Solr itself, optimizing number of commits to a minimum while still
	 * fulfilling
	 * the update latency requirements, and Solr will automatically do a commit
	 * when the oldest add in the buffer is due.
	 * </p>
	 * @return void a SolrUpdateResponse object or throws an exception on failure.
	 */
	public function &addDocuments (array $docs, $overwrite = null, $commitWithin = null) {}

	/**
	 * Sends a raw update request
	 * @link http://www.php.net/manual/en/solrclient.request.php
	 * @param raw_request string <p>
	 * An XML string with the raw request to the server.
	 * </p>
	 * @return void a SolrUpdateResponse on success. Throws an exception on failure.
	 */
	public function &request ($raw_request) {}

	/**
	 * Sets the response writer used to prepare the response from Solr
	 * @link http://www.php.net/manual/en/solrclient.setresponsewriter.php
	 * @param responseWriter string <p>One of the following :</p>
	 * <p>
	 * </p>
	 * @return void 
	 */
	public function &setResponseWriter ($responseWriter) {}

	/**
	 * Delete by Id
	 * @link http://www.php.net/manual/en/solrclient.deletebyid.php
	 * @param id string <p>
	 * The value of the uniqueKey field declared in the schema
	 * </p>
	 * @return SolrUpdateResponse a SolrUpdateResponse on success and throws an exception on failure.
	 */
	public function &deleteById ($id) {}

	/**
	 * Deletes by Ids
	 * @link http://www.php.net/manual/en/solrclient.deletebyids.php
	 * @param ids array <p>
	 * An array of IDs representing the uniqueKey field declared in the schema for each document to be deleted. This must be an actual php variable.
	 * </p>
	 * @return SolrUpdateResponse a SolrUpdateResponse on success and throws an exception on failure.
	 */
	public function &deleteByIds (array $ids) {}

	/**
	 * Deletes all documents matching the given query
	 * @link http://www.php.net/manual/en/solrclient.deletebyquery.php
	 * @param query string <p>
	 * The query
	 * </p>
	 * @return SolrUpdateResponse a SolrUpdateResponse on success and throws an exception on failure.
	 */
	public function &deleteByQuery ($query) {}

	/**
	 * Removes all documents matching any of the queries
	 * @link http://www.php.net/manual/en/solrclient.deletebyqueries.php
	 * @param queries array <p>
	 * The array of queries. This must be an actual php variable.
	 * </p>
	 * @return SolrUpdateResponse a SolrUpdateResponse on success and throws a SolrClientException on failure.
	 */
	public function &deleteByQueries (array $queries) {}

	/**
	 * Finalizes all add/deletes made to the index
	 * @link http://www.php.net/manual/en/solrclient.commit.php
	 * @param softCommit bool[optional] <p>
	 * This will refresh the 'view' of the index in a more performant manner, but without "on-disk" guarantees. (Solr4.0+)
	 * </p>
	 * <p>
	 * A soft commit is much faster since it only makes index changes visible and does not fsync index files or write a new index descriptor. 
	 * If the JVM crashes or there is a loss of power, changes that occurred after the last hard commit will be lost. 
	 * Search collections that have near-real-time requirements (that want index changes to be quickly visible to searches) will want to soft commit often but hard commit less frequently. 
	 * </p>
	 * @param waitSearcher bool[optional] <p>
	 * block until a new searcher is opened and registered as the main query searcher, making the changes visible. 
	 * </p>
	 * @param expungeDeletes bool[optional] <p>
	 * Merge segments with deletes away. (Solr1.4+)
	 * </p>
	 * @return SolrUpdateResponse a SolrUpdateResponse object on success or throws an exception on failure.
	 */
	public function &commit ($softCommit = null, $waitSearcher = null, $expungeDeletes = null) {}

	/**
	 * Defragments the index
	 * @link http://www.php.net/manual/en/solrclient.optimize.php
	 * @param maxSegments int[optional] <p>
	 * Optimizes down to at most this number of segments. Since Solr 1.3
	 * </p>
	 * @param softCommit bool[optional] <p>
	 * This will refresh the 'view' of the index in a more performant manner, but without "on-disk" guarantees. (Solr4.0+)
	 * </p>
	 * @param waitSearcher bool[optional] <p>
	 * Block until a new searcher is opened and registered as the main query searcher, making the changes visible. 
	 * </p>
	 * @return SolrUpdateResponse a SolrUpdateResponse on success or throws an exception on failure.
	 */
	public function &optimize ($maxSegments = null, $softCommit = null, $waitSearcher = null) {}

	/**
	 * Rollbacks all add/deletes made to the index since the last commit
	 * @link http://www.php.net/manual/en/solrclient.rollback.php
	 * @return SolrUpdateResponse a SolrUpdateResponse on success or throws a SolrClientException on failure.
	 */
	public function &rollback () {}

	/**
	 * Checks if Solr server is still up
	 * @link http://www.php.net/manual/en/solrclient.ping.php
	 * @return SolrPingResponse a SolrPingResponse object on success and throws an exception on failure.
	 */
	public function &ping () {}

	public function &system () {}

	/**
	 * Checks the threads status
	 * @link http://www.php.net/manual/en/solrclient.threads.php
	 * @return void a SolrGenericResponse object.
	 */
	public function &threads () {}

}

class SolrParams implements Serializable {
	protected $_hashtable_index;


	/**
	 * Sets the parameter to the specified value
	 * @link http://www.php.net/manual/en/solrparams.setparam.php
	 * @param name string <p>
	 * Name of the parameter
	 * </p>
	 * @param value string <p>
	 * Value of the parameter
	 * </p>
	 * @return SolrParams a SolrParam object on success and false on value.
	 */
	public function &setParam ($name, $value) {}

	/**
	 * Adds a parameter to the object
	 * @link http://www.php.net/manual/en/solrparams.addparam.php
	 * @param name string <p>
	 * Name of parameter
	 * </p>
	 * @param value string <p>
	 * Value of parameter
	 * </p>
	 * @return SolrParams a SolrParam object on success and false on failure.
	 */
	public function &addParam ($name, $value) {}

	public function __toString () {}

	/**
	 * Returns all the name-value pair parameters in the object
	 * @link http://www.php.net/manual/en/solrparams.tostring.php
	 * @param url_encode bool[optional] <p>
	 * Whether to return URL-encoded values
	 * </p>
	 * @return string a string on success and false on failure.
	 */
	public function toString ($url_encode = null) {}

	/**
	 * Returns an array of non URL-encoded parameters
	 * @link http://www.php.net/manual/en/solrparams.getparams.php
	 * @return array an array of non URL-encoded parameters
	 */
	public function getParams () {}

	/**
	 * Returns a parameter value
	 * @link http://www.php.net/manual/en/solrparams.getparam.php
	 * @param param_name string[optional] <p>
	 * The name of the parameter
	 * </p>
	 * @return mixed a string or an array depending on the type of the parameter
	 */
	public function getParam ($param_name = null) {}

	/**
	 * Returns an array of URL-encoded parameters
	 * @link http://www.php.net/manual/en/solrparams.getpreparedparams.php
	 * @return array an array on URL-encoded parameters
	 */
	public function getPreparedParams () {}

	public function __clone () {}

	/**
	 * Used for custom serialization
	 * @link http://www.php.net/manual/en/solrparams.serialize.php
	 * @return string Used for custom serialization
	 */
	public function serialize () {}

	/**
	 * Used for custom serialization
	 * @link http://www.php.net/manual/en/solrparams.unserialize.php
	 * @param serialized string <p>
	 * The serialized representation of the object
	 * </p>
	 * @return void None
	 */
	public function unserialize ($serialized) {}

	/**
	 * This is an alias for SolrParams::addParam
	 * @link http://www.php.net/manual/en/solrparams.add.php
	 * @param name string <p>
	 * The name of the parameter
	 * </p>
	 * @param value string <p>
	 * The value of the parameter 
	 * </p>
	 * @return SolrParams a SolrParams instance on success
	 */
	public function &add ($name, $value) {}

	/**
	 * An alias of SolrParams::setParam
	 * @link http://www.php.net/manual/en/solrparams.set.php
	 * @param name string <p>
	 * Then name of the parameter
	 * </p>
	 * @param value string <p>
	 * The parameter value
	 * </p>
	 * @return void an instance of the SolrParams object on success
	 */
	public function &set ($name, $value) {}

	/**
	 * This is an alias for SolrParams::getParam
	 * @link http://www.php.net/manual/en/solrparams.get.php
	 * @param param_name string <p>
	 * Then name of the parameter
	 * </p>
	 * @return mixed an array or string depending on the type of parameter
	 */
	public function get ($param_name) {}

}

class SolrModifiableParams extends SolrParams implements Serializable {
	protected $_hashtable_index;


	/**
	 * Constructor
	 * @link http://www.php.net/manual/en/solrmodifiableparams.construct.php
	 */
	public function __construct () {}

	/**
	 * Destructor
	 * @link http://www.php.net/manual/en/solrmodifiableparams.destruct.php
	 * @return void None
	 */
	public function __destruct () {}

	/**
	 * Sets the parameter to the specified value
	 * @link http://www.php.net/manual/en/solrparams.setparam.php
	 * @param name string <p>
	 * Name of the parameter
	 * </p>
	 * @param value string <p>
	 * Value of the parameter
	 * </p>
	 * @return SolrParams a SolrParam object on success and false on value.
	 */
	public function &setParam ($name, $value) {}

	/**
	 * Adds a parameter to the object
	 * @link http://www.php.net/manual/en/solrparams.addparam.php
	 * @param name string <p>
	 * Name of parameter
	 * </p>
	 * @param value string <p>
	 * Value of parameter
	 * </p>
	 * @return SolrParams a SolrParam object on success and false on failure.
	 */
	public function &addParam ($name, $value) {}

	public function __toString () {}

	/**
	 * Returns all the name-value pair parameters in the object
	 * @link http://www.php.net/manual/en/solrparams.tostring.php
	 * @param url_encode bool[optional] <p>
	 * Whether to return URL-encoded values
	 * </p>
	 * @return string a string on success and false on failure.
	 */
	public function toString ($url_encode = null) {}

	/**
	 * Returns an array of non URL-encoded parameters
	 * @link http://www.php.net/manual/en/solrparams.getparams.php
	 * @return array an array of non URL-encoded parameters
	 */
	public function getParams () {}

	/**
	 * Returns a parameter value
	 * @link http://www.php.net/manual/en/solrparams.getparam.php
	 * @param param_name string[optional] <p>
	 * The name of the parameter
	 * </p>
	 * @return mixed a string or an array depending on the type of the parameter
	 */
	public function getParam ($param_name = null) {}

	/**
	 * Returns an array of URL-encoded parameters
	 * @link http://www.php.net/manual/en/solrparams.getpreparedparams.php
	 * @return array an array on URL-encoded parameters
	 */
	public function getPreparedParams () {}

	public function __clone () {}

	/**
	 * Used for custom serialization
	 * @link http://www.php.net/manual/en/solrparams.serialize.php
	 * @return string Used for custom serialization
	 */
	public function serialize () {}

	/**
	 * Used for custom serialization
	 * @link http://www.php.net/manual/en/solrparams.unserialize.php
	 * @param serialized string <p>
	 * The serialized representation of the object
	 * </p>
	 * @return void None
	 */
	public function unserialize ($serialized) {}

	/**
	 * This is an alias for SolrParams::addParam
	 * @link http://www.php.net/manual/en/solrparams.add.php
	 * @param name string <p>
	 * The name of the parameter
	 * </p>
	 * @param value string <p>
	 * The value of the parameter 
	 * </p>
	 * @return SolrParams a SolrParams instance on success
	 */
	public function &add ($name, $value) {}

	/**
	 * An alias of SolrParams::setParam
	 * @link http://www.php.net/manual/en/solrparams.set.php
	 * @param name string <p>
	 * Then name of the parameter
	 * </p>
	 * @param value string <p>
	 * The parameter value
	 * </p>
	 * @return void an instance of the SolrParams object on success
	 */
	public function &set ($name, $value) {}

	/**
	 * This is an alias for SolrParams::getParam
	 * @link http://www.php.net/manual/en/solrparams.get.php
	 * @param param_name string <p>
	 * Then name of the parameter
	 * </p>
	 * @return mixed an array or string depending on the type of parameter
	 */
	public function get ($param_name) {}

}

class SolrQuery extends SolrModifiableParams implements Serializable {
	const ORDER_ASC = 0;
	const ORDER_DESC = 1;
	const FACET_SORT_INDEX = 0;
	const FACET_SORT_COUNT = 1;
	const TERMS_SORT_INDEX = 0;
	const TERMS_SORT_COUNT = 1;

	protected $_hashtable_index;


	/**
	 * Constructor
	 * @link http://www.php.net/manual/en/solrquery.construct.php
	 * @param q[optional]
	 */
	public function __construct ($q = null) {}

	/**
	 * Destructor
	 * @link http://www.php.net/manual/en/solrquery.destruct.php
	 * @return void None.
	 */
	public function __destruct () {}

	/**
	 * Sets the search query
	 * @link http://www.php.net/manual/en/solrquery.setquery.php
	 * @param query string <p>
	 * The search query
	 * </p>
	 * @return SolrQuery the current SolrQuery object
	 */
	public function &setQuery ($query) {}

	/**
	 * Returns the main query
	 * @link http://www.php.net/manual/en/solrquery.getquery.php
	 * @return string a string on success and &null; if not set.
	 */
	public function getQuery () {}

	/**
	 * Specifies the number of rows to skip
	 * @link http://www.php.net/manual/en/solrquery.setstart.php
	 * @param start int <p>
	 * The number of rows to skip.
	 * </p>
	 * @return SolrQuery the current SolrQuery object.
	 */
	public function &setStart ($start) {}

	/**
	 * Returns the offset in the complete result set
	 * @link http://www.php.net/manual/en/solrquery.getstart.php
	 * @return int an integer on success and &null; if not set.
	 */
	public function getStart () {}

	/**
	 * Specifies the maximum number of rows to return in the result
	 * @link http://www.php.net/manual/en/solrquery.setrows.php
	 * @param rows int <p>
	 * The maximum number of rows to return
	 * </p>
	 * @return SolrQuery the current SolrQuery object.
	 */
	public function &setRows ($rows) {}

	/**
	 * Returns the maximum number of documents
	 * @link http://www.php.net/manual/en/solrquery.getrows.php
	 * @return int an integer on success and &null; if not set.
	 */
	public function getRows () {}

	/**
	 * Specifies which fields to return in the result
	 * @link http://www.php.net/manual/en/solrquery.addfield.php
	 * @param field string <p>
	 * The name of the field
	 * </p>
	 * @return SolrQuery the current SolrQuery object
	 */
	public function &addField ($field) {}

	/**
	 * Removes a field from the list of fields
	 * @link http://www.php.net/manual/en/solrquery.removefield.php
	 * @param field string <p>
	 * Name of the field.
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &removeField ($field) {}

	/**
	 * Returns the list of fields that will be returned in the response
	 * @link http://www.php.net/manual/en/solrquery.getfields.php
	 * @return array an array on success and &null; if not set.
	 */
	public function getFields () {}

	/**
	 * Used to control how the results should be sorted
	 * @link http://www.php.net/manual/en/solrquery.addsortfield.php
	 * @param field string <p>
	 * The name of the field
	 * </p>
	 * @param order int[optional] <p>
	 * The sort direction. This should be either SolrQuery::ORDER_ASC or SolrQuery::ORDER_DESC.
	 * </p>
	 * @return SolrQuery the current SolrQuery object.
	 */
	public function &addSortField ($field, $order = null) {}

	/**
	 * Removes one of the sort fields
	 * @link http://www.php.net/manual/en/solrquery.removesortfield.php
	 * @param field string <p>
	 * The name of the field
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &removeSortField ($field) {}

	/**
	 * Returns all the sort fields
	 * @link http://www.php.net/manual/en/solrquery.getsortfields.php
	 * @return array an array on success and &null; if none of the parameters was set.
	 */
	public function getSortFields () {}

	/**
	 * Specifies a filter query
	 * @link http://www.php.net/manual/en/solrquery.addfilterquery.php
	 * @param fq string <p>
	 * The filter query
	 * </p>
	 * @return SolrQuery the current SolrQuery object.
	 */
	public function &addFilterQuery ($fq) {}

	/**
	 * Removes a filter query
	 * @link http://www.php.net/manual/en/solrquery.removefilterquery.php
	 * @param fq string <p>
	 * The filter query to remove
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &removeFilterQuery ($fq) {}

	/**
	 * Returns an array of filter queries
	 * @link http://www.php.net/manual/en/solrquery.getfilterqueries.php
	 * @return array an array on success and &null; if not set.
	 */
	public function getFilterQueries () {}

	/**
	 * Flag to show debug information
	 * @link http://www.php.net/manual/en/solrquery.setshowdebuginfo.php
	 * @param flag bool <p>
	 * Whether to show debug info. true or false
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &setShowDebugInfo ($flag) {}

	/**
	 * Sets the explainOther common query parameter
	 * @link http://www.php.net/manual/en/solrquery.setexplainother.php
	 * @param query string <p>
	 * The Lucene query to identify a set of documents
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &setExplainOther ($query) {}

	/**
	 * The time allowed for search to finish
	 * @link http://www.php.net/manual/en/solrquery.settimeallowed.php
	 * @param timeAllowed int <p>
	 * The time allowed for a search to finish.
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &setTimeAllowed ($timeAllowed) {}

	/**
	 * Returns the time in milliseconds allowed for the query to finish
	 * @link http://www.php.net/manual/en/solrquery.gettimeallowed.php
	 * @return int and integer on success and &null; if it is not set.
	 */
	public function getTimeAllowed () {}

	/**
	 * Exclude the header from the returned results
	 * @link http://www.php.net/manual/en/solrquery.setomitheader.php
	 * @param flag bool <p>
	 * true excludes the header from the result.
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &setOmitHeader ($flag) {}

	/**
	 * Toggles the echoHandler parameter
	 * @link http://www.php.net/manual/en/solrquery.setechohandler.php
	 * @param flag bool <p>
	 * true or false
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &setEchoHandler ($flag) {}

	/**
	 * Determines what kind of parameters to include in the response
	 * @link http://www.php.net/manual/en/solrquery.setechoparams.php
	 * @param type string <p>
	 * The type of parameters to include
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &setEchoParams ($type) {}

	/**
	 * Maps to the facet parameter. Enables or disables facetting
	 * @link http://www.php.net/manual/en/solrquery.setfacet.php
	 * @param flag bool 
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &setFacet ($flag) {}

	/**
	 * Returns the value of the facet parameter
	 * @link http://www.php.net/manual/en/solrquery.getfacet.php
	 * @return bool a boolean on success and &null; if not set
	 */
	public function getFacet () {}

	/**
	 * Adds another field to the facet
	 * @link http://www.php.net/manual/en/solrquery.addfacetfield.php
	 * @param field string <p>
	 * The name of the field
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &addFacetField ($field) {}

	/**
	 * Removes one of the facet.date parameters
	 * @link http://www.php.net/manual/en/solrquery.removefacetfield.php
	 * @param field string <p>
	 * The name of the field
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &removeFacetField ($field) {}

	/**
	 * Returns all the facet fields
	 * @link http://www.php.net/manual/en/solrquery.getfacetfields.php
	 * @return array an array of all the fields and &null; if none was set
	 */
	public function getFacetFields () {}

	/**
	 * Adds a facet query
	 * @link http://www.php.net/manual/en/solrquery.addfacetquery.php
	 * @param facetQuery string <p>
	 * The facet query
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &addFacetQuery ($facetQuery) {}

	/**
	 * Removes one of the facet.query parameters
	 * @link http://www.php.net/manual/en/solrquery.removefacetquery.php
	 * @param value string <p>
	 * The value
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &removeFacetQuery ($value) {}

	/**
	 * Returns all the facet queries
	 * @link http://www.php.net/manual/en/solrquery.getfacetqueries.php
	 * @return array an array on success and &null; if not set.
	 */
	public function getFacetQueries () {}

	/**
	 * Specifies a string prefix with which to limits the terms on which to facet
	 * @link http://www.php.net/manual/en/solrquery.setfacetprefix.php
	 * @param prefix string <p>
	 * The prefix string
	 * </p>
	 * @param field_override string[optional] <p>
	 * The name of the field.
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &setFacetPrefix ($prefix, $field_override = null) {}

	/**
	 * Returns the facet prefix
	 * @link http://www.php.net/manual/en/solrquery.getfacetprefix.php
	 * @param field_override string[optional] <p>
	 * The name of the field
	 * </p>
	 * @return string a string on success and &null; if not set.
	 */
	public function getFacetPrefix ($field_override = null) {}

	/**
	 * Determines the ordering of the facet field constraints
	 * @link http://www.php.net/manual/en/solrquery.setfacetsort.php
	 * @param facetSort int <p>
	 * Use SolrQuery::FACET_SORT_INDEX for sorting by index order or SolrQuery::FACET_SORT_COUNT for sorting by count.
	 * </p>
	 * @param field_override string[optional] <p>
	 * The name of the field.
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &setFacetSort ($facetSort, $field_override = null) {}

	/**
	 * Returns the facet sort type
	 * @link http://www.php.net/manual/en/solrquery.getfacetsort.php
	 * @param field_override string[optional] <p>
	 * The name of the field
	 * </p>
	 * @return int an integer (SolrQuery::FACET_SORT_INDEX or SolrQuery::FACET_SORT_COUNT) on success or &null; if not set.
	 */
	public function getFacetSort ($field_override = null) {}

	/**
	 * Maps to facet.limit
	 * @link http://www.php.net/manual/en/solrquery.setfacetlimit.php
	 * @param limit int <p>
	 * The maximum number of constraint counts
	 * </p>
	 * @param field_override string[optional] <p>
	 * The name of the field.
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &setFacetLimit ($limit, $field_override = null) {}

	/**
	 * Returns the maximum number of constraint counts that should be returned for the facet fields
	 * @link http://www.php.net/manual/en/solrquery.getfacetlimit.php
	 * @param field_override string[optional] <p>
	 * The name of the field to override for
	 * </p>
	 * @return int an integer on success and &null; if not set
	 */
	public function getFacetLimit ($field_override = null) {}

	/**
	 * Sets the offset into the list of constraints to allow for pagination
	 * @link http://www.php.net/manual/en/solrquery.setfacetoffset.php
	 * @param offset int <p>
	 * The offset
	 * </p>
	 * @param field_override string[optional] <p>
	 * The name of the field.
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &setFacetOffset ($offset, $field_override = null) {}

	/**
	 * Returns an offset into the list of constraints to be used for pagination
	 * @link http://www.php.net/manual/en/solrquery.getfacetoffset.php
	 * @param field_override string[optional] <p>
	 * The name of the field to override for.
	 * </p>
	 * @return int an integer on success and &null; if not set
	 */
	public function getFacetOffset ($field_override = null) {}

	/**
	 * Maps to facet.mincount
	 * @link http://www.php.net/manual/en/solrquery.setfacetmincount.php
	 * @param mincount int <p>
	 * The minimum count
	 * </p>
	 * @param field_override string[optional] <p>
	 * The name of the field.
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &setFacetMinCount ($mincount, $field_override = null) {}

	/**
	 * Returns the minimum counts for facet fields should be included in the response
	 * @link http://www.php.net/manual/en/solrquery.getfacetmincount.php
	 * @param field_override string[optional] <p>
	 * The name of the field
	 * </p>
	 * @return int an integer on success and &null; if not set
	 */
	public function getFacetMinCount ($field_override = null) {}

	/**
	 * Maps to facet.missing
	 * @link http://www.php.net/manual/en/solrquery.setfacetmissing.php
	 * @param flag bool <p>
	 * true turns this feature on. false disables it.
	 * </p>
	 * @param field_override string[optional] <p>
	 * The name of the field.
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &setFacetMissing ($flag, $field_override = null) {}

	/**
	 * Returns the current state of the facet.missing parameter
	 * @link http://www.php.net/manual/en/solrquery.getfacetmissing.php
	 * @param field_override string[optional] <p>
	 * The name of the field
	 * </p>
	 * @return bool a boolean on success and &null; if not set
	 */
	public function getFacetMissing ($field_override = null) {}

	/**
	 * Specifies the type of algorithm to use when faceting a field
	 * @link http://www.php.net/manual/en/solrquery.setfacetmethod.php
	 * @param method string <p>
	 * The method to use.
	 * </p>
	 * @param field_override string[optional] <p>
	 * The name of the field.
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &setFacetMethod ($method, $field_override = null) {}

	/**
	 * Returns the value of the facet.method parameter
	 * @link http://www.php.net/manual/en/solrquery.getfacetmethod.php
	 * @param field_override string[optional] <p>
	 * The name of the field
	 * </p>
	 * @return string a string on success and &null; if not set
	 */
	public function getFacetMethod ($field_override = null) {}

	/**
	 * Sets the minimum document frequency used for determining term count
	 * @link http://www.php.net/manual/en/solrquery.setfacetenumcachemindefaultfrequency.php
	 * @param frequency int 
	 * @param field_override string[optional] <p>
	 * The name of the field.
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &setFacetEnumCacheMinDefaultFrequency ($frequency, $field_override = null) {}

	/**
	 * Maps to facet.date
	 * @link http://www.php.net/manual/en/solrquery.addfacetdatefield.php
	 * @param dateField string <p>
	 * The name of the date field.
	 * </p>
	 * @return SolrQuery a SolrQuery object.
	 */
	public function &addFacetDateField ($dateField) {}

	/**
	 * Removes one of the facet date fields
	 * @link http://www.php.net/manual/en/solrquery.removefacetdatefield.php
	 * @param field string <p>
	 * The name of the date field to remove
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &removeFacetDateField ($field) {}

	/**
	 * Returns all the facet.date fields
	 * @link http://www.php.net/manual/en/solrquery.getfacetdatefields.php
	 * @return array all the facet.date fields as an array or &null; if none was set
	 */
	public function getFacetDateFields () {}

	/**
	 * Maps to facet.date.start
	 * @link http://www.php.net/manual/en/solrquery.setfacetdatestart.php
	 * @param value string <p>
	 * See facet.date.start
	 * </p>
	 * @param field_override string[optional] <p>
	 * The name of the field.
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &setFacetDateStart ($value, $field_override = null) {}

	/**
	 * Returns the  lower bound for the first date range for all date faceting on this field
	 * @link http://www.php.net/manual/en/solrquery.getfacetdatestart.php
	 * @param field_override string[optional] <p>
	 * The name of the field
	 * </p>
	 * @return string a string on success and &null; if not set
	 */
	public function getFacetDateStart ($field_override = null) {}

	/**
	 * Maps to facet.date.end
	 * @link http://www.php.net/manual/en/solrquery.setfacetdateend.php
	 * @param value string <p>
	 * See facet.date.end
	 * </p>
	 * @param field_override string[optional] <p>
	 * Name of the field
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &setFacetDateEnd ($value, $field_override = null) {}

	/**
	 * Returns the value for the facet.date.end parameter
	 * @link http://www.php.net/manual/en/solrquery.getfacetdateend.php
	 * @param field_override string[optional] <p>
	 * The name of the field
	 * </p>
	 * @return string a string on success and &null; if not set
	 */
	public function getFacetDateEnd ($field_override = null) {}

	/**
	 * Maps to facet.date.gap
	 * @link http://www.php.net/manual/en/solrquery.setfacetdategap.php
	 * @param value string <p>
	 * See facet.date.gap
	 * </p>
	 * @param field_override string[optional] <p>
	 * The name of the field
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &setFacetDateGap ($value, $field_override = null) {}

	/**
	 * Returns the value of the facet.date.gap parameter
	 * @link http://www.php.net/manual/en/solrquery.getfacetdategap.php
	 * @param field_override string[optional] <p>
	 * The name of the field
	 * </p>
	 * @return string a string on success and &null; if not set
	 */
	public function getFacetDateGap ($field_override = null) {}

	/**
	 * Maps to facet.date.hardend
	 * @link http://www.php.net/manual/en/solrquery.setfacetdatehardend.php
	 * @param value bool <p>
	 * See facet.date.hardend
	 * </p>
	 * @param field_override string[optional] <p>
	 * The name of the field
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &setFacetDateHardEnd ($value, $field_override = null) {}

	/**
	 * Returns the value of the facet.date.hardend parameter
	 * @link http://www.php.net/manual/en/solrquery.getfacetdatehardend.php
	 * @param field_override string[optional] <p>
	 * The name of the field
	 * </p>
	 * @return string a string on success and &null; if not set
	 */
	public function getFacetDateHardEnd ($field_override = null) {}

	/**
	 * Adds another facet.date.other parameter
	 * @link http://www.php.net/manual/en/solrquery.addfacetdateother.php
	 * @param value string <p>
	 * The value to use.
	 * </p>
	 * @param field_override string[optional] <p>
	 * The field name for the override.
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &addFacetDateOther ($value, $field_override = null) {}

	/**
	 * Removes one of the facet.date.other parameters
	 * @link http://www.php.net/manual/en/solrquery.removefacetdateother.php
	 * @param value string <p>
	 * The value
	 * </p>
	 * @param field_override string[optional] <p>
	 * The name of the field.
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &removeFacetDateOther ($value, $field_override = null) {}

	/**
	 * Returns the value for the facet.date.other parameter
	 * @link http://www.php.net/manual/en/solrquery.getfacetdateother.php
	 * @param field_override string[optional] <p>
	 * The name of the field
	 * </p>
	 * @return array a string on success and &null; if not set.
	 */
	public function getFacetDateOther ($field_override = null) {}

	/**
	 * Enables or disables highlighting
	 * @link http://www.php.net/manual/en/solrquery.sethighlight.php
	 * @param flag bool <p>
	 * Enable or disable highlighting
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &setHighlight ($flag) {}

	/**
	 * Returns the state of the hl parameter
	 * @link http://www.php.net/manual/en/solrquery.gethighlight.php
	 * @return bool a boolean on success and &null; if not set.
	 */
	public function getHighlight () {}

	/**
	 * Maps to hl.fl
	 * @link http://www.php.net/manual/en/solrquery.addhighlightfield.php
	 * @param field string <p>
	 * Name of the field
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &addHighlightField ($field) {}

	/**
	 * Removes one of the fields used for highlighting
	 * @link http://www.php.net/manual/en/solrquery.removehighlightfield.php
	 * @param field string <p>
	 * The name of the field
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &removeHighlightField ($field) {}

	/**
	 * Returns all the fields that Solr should generate highlighted snippets for
	 * @link http://www.php.net/manual/en/solrquery.gethighlightfields.php
	 * @return array an array on success and &null; if not set.
	 */
	public function getHighlightFields () {}

	/**
	 * Sets the maximum number of highlighted snippets to generate per field
	 * @link http://www.php.net/manual/en/solrquery.sethighlightsnippets.php
	 * @param value int <p>
	 * The maximum number of highlighted snippets to generate per field
	 * </p>
	 * @param field_override string[optional] <p>
	 * The name of the field.
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &setHighlightSnippets ($value, $field_override = null) {}

	/**
	 * Returns the maximum number of highlighted snippets to generate per field
	 * @link http://www.php.net/manual/en/solrquery.gethighlightsnippets.php
	 * @param field_override string[optional] <p>
	 * The name of the field
	 * </p>
	 * @return int an integer on success and &null; if not set.
	 */
	public function getHighlightSnippets ($field_override = null) {}

	/**
	 * The size of fragments to consider for highlighting
	 * @link http://www.php.net/manual/en/solrquery.sethighlightfragsize.php
	 * @param size int <p>
	 * The size, in characters, of fragments to consider for highlighting
	 * </p>
	 * @param field_override string[optional] <p>
	 * The name of the field.
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &setHighlightFragsize ($size, $field_override = null) {}

	/**
	 * Returns the number of characters of fragments to consider for highlighting
	 * @link http://www.php.net/manual/en/solrquery.gethighlightfragsize.php
	 * @param field_override string[optional] <p>
	 * The name of the field
	 * </p>
	 * @return int an integer on success or &null; if not set.
	 */
	public function getHighlightFragsize ($field_override = null) {}

	/**
	 * Whether or not to collapse contiguous fragments into a single fragment
	 * @link http://www.php.net/manual/en/solrquery.sethighlightmergecontiguous.php
	 * @param flag bool 
	 * @param field_override string[optional] <p>
	 * The name of the field.
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &setHighlightMergeContiguous ($flag, $field_override = null) {}

	/**
	 * Returns whether or not the collapse contiguous fragments into a single fragment
	 * @link http://www.php.net/manual/en/solrquery.gethighlightmergecontiguous.php
	 * @param field_override string[optional] <p>
	 * The name of the field
	 * </p>
	 * @return bool a boolean on success and &null; if not set.
	 */
	public function getHighlightMergeContiguous ($field_override = null) {}

	/**
	 * Require field matching during highlighting
	 * @link http://www.php.net/manual/en/solrquery.sethighlightrequirefieldmatch.php
	 * @param flag bool <p>
	 * true or false
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &setHighlightRequireFieldMatch ($flag) {}

	/**
	 * Returns if a field will only be highlighted if the query matched in this particular field
	 * @link http://www.php.net/manual/en/solrquery.gethighlightrequirefieldmatch.php
	 * @return bool a boolean on success and &null; if not set.
	 */
	public function getHighlightRequireFieldMatch () {}

	/**
	 * Specifies the number of characters into a document to look for suitable snippets
	 * @link http://www.php.net/manual/en/solrquery.sethighlightmaxanalyzedchars.php
	 * @param value int <p>
	 * The number of characters into a document to look for suitable snippets
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &setHighlightMaxAnalyzedChars ($value) {}

	/**
	 * Returns the maximum number of characters into a document to look for suitable snippets
	 * @link http://www.php.net/manual/en/solrquery.gethighlightmaxanalyzedchars.php
	 * @return int an integer on success and &null; if not set.
	 */
	public function getHighlightMaxAnalyzedChars () {}

	/**
	 * Specifies the backup field to use
	 * @link http://www.php.net/manual/en/solrquery.sethighlightalternatefield.php
	 * @param field string <p>
	 * The name of the backup field
	 * </p>
	 * @param field_override string[optional] <p>
	 * The name of the field we are overriding this setting for.
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &setHighlightAlternateField ($field, $field_override = null) {}

	/**
	 * Returns the highlight field to use as backup or default
	 * @link http://www.php.net/manual/en/solrquery.gethighlightalternatefield.php
	 * @param field_override string[optional] <p>
	 * The name of the field
	 * </p>
	 * @return string a string on success and &null; if not set.
	 */
	public function getHighlightAlternateField ($field_override = null) {}

	/**
	 * Sets the maximum number of characters of the field to return
	 * @link http://www.php.net/manual/en/solrquery.sethighlightmaxalternatefieldlength.php
	 * @param fieldLength int <p>
	 * The length of the field
	 * </p>
	 * @param field_override string[optional] <p>
	 * The name of the field.
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &setHighlightMaxAlternateFieldLength ($fieldLength, $field_override = null) {}

	/**
	 * Returns the maximum number of characters of the field to return
	 * @link http://www.php.net/manual/en/solrquery.gethighlightmaxalternatefieldlength.php
	 * @param field_override string[optional] <p>
	 * The name of the field
	 * </p>
	 * @return int an integer on success and &null; if not set.
	 */
	public function getHighlightMaxAlternateFieldLength ($field_override = null) {}

	/**
	 * Specify a formatter for the highlight output
	 * @link http://www.php.net/manual/en/solrquery.sethighlightformatter.php
	 * @param formatter string <p>
	 * Currently the only legal value is "simple"
	 * </p>
	 * @param field_override string[optional] <p>
	 * The name of the field.
	 * </p>
	 * @return SolrQuery 
	 */
	public function &setHighlightFormatter ($formatter, $field_override = null) {}

	/**
	 * Returns the formatter for the highlighted output
	 * @link http://www.php.net/manual/en/solrquery.gethighlightformatter.php
	 * @param field_override string[optional] <p>
	 * The name of the field
	 * </p>
	 * @return string a string on success and &null; if not set.
	 */
	public function getHighlightFormatter ($field_override = null) {}

	/**
	 * Sets the text which appears before a highlighted term
	 * @link http://www.php.net/manual/en/solrquery.sethighlightsimplepre.php
	 * @param simplePre string <p>
	 * The text which appears before a highlighted term
	 * </p>
	 * @param field_override string[optional] <p>
	 * The name of the field.
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &setHighlightSimplePre ($simplePre, $field_override = null) {}

	/**
	 * Returns the text which appears before a highlighted term
	 * @link http://www.php.net/manual/en/solrquery.gethighlightsimplepre.php
	 * @param field_override string[optional] <p>
	 * The name of the field
	 * </p>
	 * @return string a string on success and &null; if not set.
	 */
	public function getHighlightSimplePre ($field_override = null) {}

	/**
	 * Sets the text which appears after a highlighted term
	 * @link http://www.php.net/manual/en/solrquery.sethighlightsimplepost.php
	 * @param simplePost string <p>
	 * Sets the text which appears after a highlighted term
	 * </p>
	 * <p> ]]></p>
	 * @param field_override string[optional] <p>
	 * The name of the field.
	 * </p>
	 * @return SolrQuery 
	 */
	public function &setHighlightSimplePost ($simplePost, $field_override = null) {}

	/**
	 * Returns the text which appears after a highlighted term
	 * @link http://www.php.net/manual/en/solrquery.gethighlightsimplepost.php
	 * @param field_override string[optional] <p>
	 * The name of the field
	 * </p>
	 * @return string a string on success and &null; if not set.
	 */
	public function getHighlightSimplePost ($field_override = null) {}

	/**
	 * Sets a text snippet generator for highlighted text
	 * @link http://www.php.net/manual/en/solrquery.sethighlightfragmenter.php
	 * @param fragmenter string <p>
	 * The standard fragmenter is gap. Another option is regex, which tries to create fragments that resembles a certain regular expression
	 * </p>
	 * @param field_override string[optional] <p>
	 * The name of the field.
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &setHighlightFragmenter ($fragmenter, $field_override = null) {}

	/**
	 * Returns the text snippet generator for highlighted text
	 * @link http://www.php.net/manual/en/solrquery.gethighlightfragmenter.php
	 * @param field_override string[optional] <p>
	 * The name of the field
	 * </p>
	 * @return string a string on success and &null; if not set.
	 */
	public function getHighlightFragmenter ($field_override = null) {}

	/**
	 * Whether to highlight phrase terms only when they appear within the query phrase
	 * @link http://www.php.net/manual/en/solrquery.sethighlightusephrasehighlighter.php
	 * @param flag bool 
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &setHighlightUsePhraseHighlighter ($flag) {}

	/**
	 * Returns the state of the hl.usePhraseHighlighter parameter
	 * @link http://www.php.net/manual/en/solrquery.gethighlightusephrasehighlighter.php
	 * @return bool a boolean on success and &null; if not set.
	 */
	public function getHighlightUsePhraseHighlighter () {}

	/**
	 * Use SpanScorer to highlight phrase terms
	 * @link http://www.php.net/manual/en/solrquery.sethighlighthighlightmultiterm.php
	 * @param flag bool <p>
	 * Whether or not to use SpanScorer to highlight phrase terms only when they appear within the query phrase in the document.
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &setHighlightHighlightMultiTerm ($flag) {}

	/**
	 * Returns whether or not to enable highlighting for range/wildcard/fuzzy/prefix queries
	 * @link http://www.php.net/manual/en/solrquery.gethighlighthighlightmultiterm.php
	 * @return bool a boolean on success and &null; if not set.
	 */
	public function getHighlightHighlightMultiTerm () {}

	/**
	 * Sets the factor by which the regex fragmenter can stray from the ideal fragment size
	 * @link http://www.php.net/manual/en/solrquery.sethighlightregexslop.php
	 * @param factor float <p>
	 * The factor by which the regex fragmenter can stray from the ideal fragment size
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &setHighlightRegexSlop ($factor) {}

	/**
	 * Returns the deviation factor from the ideal fragment size
	 * @link http://www.php.net/manual/en/solrquery.gethighlightregexslop.php
	 * @return float a double on success and &null; if not set.
	 */
	public function getHighlightRegexSlop () {}

	/**
	 * Specify the regular expression for fragmenting
	 * @link http://www.php.net/manual/en/solrquery.sethighlightregexpattern.php
	 * @param value string <p>
	 * The regular expression for fragmenting. This could be used to extract sentences
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &setHighlightRegexPattern ($value) {}

	/**
	 * Returns the regular expression for fragmenting
	 * @link http://www.php.net/manual/en/solrquery.gethighlightregexpattern.php
	 * @return string a string on success and &null; if not set.
	 */
	public function getHighlightRegexPattern () {}

	/**
	 * Specify the maximum number of characters to analyze
	 * @link http://www.php.net/manual/en/solrquery.sethighlightregexmaxanalyzedchars.php
	 * @param maxAnalyzedChars int <p>
	 * The maximum number of characters to analyze from a field when using the regex fragmenter
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &setHighlightRegexMaxAnalyzedChars ($maxAnalyzedChars) {}

	/**
	 * Returns the maximum number of characters from a field when using the regex fragmenter
	 * @link http://www.php.net/manual/en/solrquery.gethighlightregexmaxanalyzedchars.php
	 * @return int an integer on success and &null; if not set.
	 */
	public function getHighlightRegexMaxAnalyzedChars () {}

	/**
	 * Enables or disables the Stats component
	 * @link http://www.php.net/manual/en/solrquery.setstats.php
	 * @param flag bool <p>
	 * true turns on the stats component and false disables it.
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &setStats ($flag) {}

	/**
	 * Returns whether or not stats is enabled
	 * @link http://www.php.net/manual/en/solrquery.getstats.php
	 * @return bool a boolean on success and &null; if not set.
	 */
	public function getStats () {}

	/**
	 * Maps to stats.field parameter
	 * @link http://www.php.net/manual/en/solrquery.addstatsfield.php
	 * @param field string <p>
	 * The name of the field
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &addStatsField ($field) {}

	/**
	 * Removes one of the stats.field parameters
	 * @link http://www.php.net/manual/en/solrquery.removestatsfield.php
	 * @param field string <p>
	 * The name of the field.
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &removeStatsField ($field) {}

	/**
	 * Returns all the statistics fields
	 * @link http://www.php.net/manual/en/solrquery.getstatsfields.php
	 * @return array an array on success and &null; if not set.
	 */
	public function getStatsFields () {}

	/**
	 * Requests a return of sub results for values within the given facet
	 * @link http://www.php.net/manual/en/solrquery.addstatsfacet.php
	 * @param field string <p>
	 * The name of the field
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &addStatsFacet ($field) {}

	/**
	 * Removes one of the stats.facet parameters
	 * @link http://www.php.net/manual/en/solrquery.removestatsfacet.php
	 * @param value string <p>
	 * The value
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &removeStatsFacet ($value) {}

	/**
	 * Returns all the stats facets that were set
	 * @link http://www.php.net/manual/en/solrquery.getstatsfacets.php
	 * @return array an array on success and &null; if not set.
	 */
	public function getStatsFacets () {}

	/**
	 * Enables or disables moreLikeThis
	 * @link http://www.php.net/manual/en/solrquery.setmlt.php
	 * @param flag bool <p>
	 * true enables it and false turns it off.
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &setMlt ($flag) {}

	/**
	 * Returns whether or not MoreLikeThis results should be enabled
	 * @link http://www.php.net/manual/en/solrquery.getmlt.php
	 * @return bool a boolean on success and &null; if not set.
	 */
	public function getMlt () {}

	/**
	 * Set the number of similar documents to return for each result
	 * @link http://www.php.net/manual/en/solrquery.setmltcount.php
	 * @param count int <p>
	 * The number of similar documents to return for each result
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &setMltCount ($count) {}

	/**
	 * Returns the number of similar documents to return for each result
	 * @link http://www.php.net/manual/en/solrquery.getmltcount.php
	 * @return int an integer on success and &null; if not set.
	 */
	public function getMltCount () {}

	/**
	 * Sets a field to use for similarity
	 * @link http://www.php.net/manual/en/solrquery.addmltfield.php
	 * @param field string <p>
	 * The name of the field
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &addMltField ($field) {}

	/**
	 * Removes one of the moreLikeThis fields
	 * @link http://www.php.net/manual/en/solrquery.removemltfield.php
	 * @param field string <p>
	 * Name of the field
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &removeMltField ($field) {}

	/**
	 * Returns all the fields to use for similarity
	 * @link http://www.php.net/manual/en/solrquery.getmltfields.php
	 * @return array an array on success and &null; if not set.
	 */
	public function getMltFields () {}

	/**
	 * Maps to mlt.qf
	 * @link http://www.php.net/manual/en/solrquery.addmltqueryfield.php
	 * @param field string <p>
	 * The name of the field
	 * </p>
	 * @param boost float <p>
	 * Its boost value
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &addMltQueryField ($field, $boost) {}

	/**
	 * Removes one of the moreLikeThis query fields
	 * @link http://www.php.net/manual/en/solrquery.removemltqueryfield.php
	 * @param queryField string <p>
	 * The query field
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &removeMltQueryField ($queryField) {}

	/**
	 * Returns the query fields and their boosts
	 * @link http://www.php.net/manual/en/solrquery.getmltqueryfields.php
	 * @return array an array on success and &null; if not set.
	 */
	public function getMltQueryFields () {}

	/**
	 * Sets the frequency below which terms will be ignored in the source docs
	 * @link http://www.php.net/manual/en/solrquery.setmltmintermfrequency.php
	 * @param minTermFrequency int <p>
	 * The frequency below which terms will be ignored in the source docs
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &setMltMinTermFrequency ($minTermFrequency) {}

	/**
	 * Returns the frequency below which terms will be ignored in the source document
	 * @link http://www.php.net/manual/en/solrquery.getmltmintermfrequency.php
	 * @return int an integer on success and &null; if not set.
	 */
	public function getMltMinTermFrequency () {}

	/**
	 * Sets the mltMinDoc frequency
	 * @link http://www.php.net/manual/en/solrquery.setmltmindocfrequency.php
	 * @param minDocFrequency int <p>
	 * Sets the frequency at which words will be ignored which do not occur in at least this many docs.
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &setMltMinDocFrequency ($minDocFrequency) {}

	/**
	 * Returns the treshold frequency at which words will be ignored which do not occur in at least this many docs
	 * @link http://www.php.net/manual/en/solrquery.getmltmindocfrequency.php
	 * @return int an integer on success and &null; if not set.
	 */
	public function getMltMinDocFrequency () {}

	/**
	 * Sets the minimum word length
	 * @link http://www.php.net/manual/en/solrquery.setmltminwordlength.php
	 * @param minWordLength int <p>
	 * The minimum word length below which words will be ignored
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &setMltMinWordLength ($minWordLength) {}

	/**
	 * Returns the minimum word length below which words will be ignored
	 * @link http://www.php.net/manual/en/solrquery.getmltminwordlength.php
	 * @return int an integer on success and &null; if not set.
	 */
	public function getMltMinWordLength () {}

	/**
	 * Sets the maximum word length
	 * @link http://www.php.net/manual/en/solrquery.setmltmaxwordlength.php
	 * @param maxWordLength int <p>
	 * The maximum word length above which words will be ignored
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &setMltMaxWordLength ($maxWordLength) {}

	/**
	 * Returns the maximum word length above which words will be ignored
	 * @link http://www.php.net/manual/en/solrquery.getmltmaxwordlength.php
	 * @return int an integer on success and &null; if not set.
	 */
	public function getMltMaxWordLength () {}

	/**
	 * Specifies the maximum number of tokens to parse
	 * @link http://www.php.net/manual/en/solrquery.setmltmaxnumtokens.php
	 * @param value int <p>
	 * The maximum number of tokens to parse
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &setMltMaxNumTokens ($value) {}

	/**
	 * Returns the maximum number of tokens to parse in each document field that is not stored with TermVector support
	 * @link http://www.php.net/manual/en/solrquery.getmltmaxnumtokens.php
	 * @return int an integer on success and &null; if not set.
	 */
	public function getMltMaxNumTokens () {}

	/**
	 * Sets the maximum number of query terms included
	 * @link http://www.php.net/manual/en/solrquery.setmltmaxnumqueryterms.php
	 * @param value int <p>
	 * The maximum number of query terms that will be included in any generated query
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &setMltMaxNumQueryTerms ($value) {}

	/**
	 * Returns the maximum number of query terms that will be included in any generated query
	 * @link http://www.php.net/manual/en/solrquery.getmltmaxnumqueryterms.php
	 * @return int an integer on success and &null; if not set.
	 */
	public function getMltMaxNumQueryTerms () {}

	/**
	 * Set if the query will be boosted by the interesting term relevance
	 * @link http://www.php.net/manual/en/solrquery.setmltboost.php
	 * @param flag bool 
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &setMltBoost ($flag) {}

	/**
	 * Returns whether or not the query will be boosted by the interesting term relevance
	 * @link http://www.php.net/manual/en/solrquery.getmltboost.php
	 * @return bool a boolean on success and &null; if not set.
	 */
	public function getMltBoost () {}

	/**
	 * Enables or disables the TermsComponent
	 * @link http://www.php.net/manual/en/solrquery.setterms.php
	 * @param flag bool <p>
	 * true enables it. false turns it off
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &setTerms ($flag) {}

	/**
	 * Returns whether or not the TermsComponent is enabled
	 * @link http://www.php.net/manual/en/solrquery.getterms.php
	 * @return bool a boolean on success and &null; if not set.
	 */
	public function getTerms () {}

	/**
	 * Sets the name of the field to get the Terms from
	 * @link http://www.php.net/manual/en/solrquery.settermsfield.php
	 * @param fieldname string <p>
	 * The field name
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &setTermsField ($fieldname) {}

	/**
	 * Returns the field from which the terms are retrieved
	 * @link http://www.php.net/manual/en/solrquery.gettermsfield.php
	 * @return string a string on success and &null; if not set.
	 */
	public function getTermsField () {}

	/**
	 * Specifies the Term to start from
	 * @link http://www.php.net/manual/en/solrquery.settermslowerbound.php
	 * @param lowerBound string <p>
	 * The lower bound Term
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &setTermsLowerBound ($lowerBound) {}

	/**
	 * Returns the term to start at
	 * @link http://www.php.net/manual/en/solrquery.gettermslowerbound.php
	 * @return string a string on success and &null; if not set.
	 */
	public function getTermsLowerBound () {}

	/**
	 * Sets the term to stop at
	 * @link http://www.php.net/manual/en/solrquery.settermsupperbound.php
	 * @param upperBound string <p>
	 * The term to stop at
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &setTermsUpperBound ($upperBound) {}

	/**
	 * Returns the term to stop at
	 * @link http://www.php.net/manual/en/solrquery.gettermsupperbound.php
	 * @return string a string on success and &null; if not set.
	 */
	public function getTermsUpperBound () {}

	/**
	 * Include the lower bound term in the result set
	 * @link http://www.php.net/manual/en/solrquery.settermsincludelowerbound.php
	 * @param flag bool <p>
	 * Include the lower bound term in the result set
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &setTermsIncludeLowerBound ($flag) {}

	/**
	 * Returns whether or not to include the lower bound in the result set
	 * @link http://www.php.net/manual/en/solrquery.gettermsincludelowerbound.php
	 * @return bool a boolean on success and &null; if not set.
	 */
	public function getTermsIncludeLowerBound () {}

	/**
	 * Include the upper bound term in the result set
	 * @link http://www.php.net/manual/en/solrquery.settermsincludeupperbound.php
	 * @param flag bool <p>
	 * true or false
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &setTermsIncludeUpperBound ($flag) {}

	/**
	 * Returns whether or not to include the upper bound term in the result set
	 * @link http://www.php.net/manual/en/solrquery.gettermsincludeupperbound.php
	 * @return bool a boolean on success and &null; if not set.
	 */
	public function getTermsIncludeUpperBound () {}

	/**
	 * Sets the minimum document frequency
	 * @link http://www.php.net/manual/en/solrquery.settermsmincount.php
	 * @param frequency int <p>
	 * The minimum frequency
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &setTermsMinCount ($frequency) {}

	/**
	 * Returns the minimum document frequency to return in order to be included
	 * @link http://www.php.net/manual/en/solrquery.gettermsmincount.php
	 * @return int an integer on success and &null; if not set.
	 */
	public function getTermsMinCount () {}

	/**
	 * Sets the maximum document frequency
	 * @link http://www.php.net/manual/en/solrquery.settermsmaxcount.php
	 * @param frequency int <p>
	 * The maximum document frequency.
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &setTermsMaxCount ($frequency) {}

	/**
	 * Returns the maximum document frequency
	 * @link http://www.php.net/manual/en/solrquery.gettermsmaxcount.php
	 * @return int an integer on success and &null; if not set.
	 */
	public function getTermsMaxCount () {}

	/**
	 * Restrict matches to terms that start with the prefix
	 * @link http://www.php.net/manual/en/solrquery.settermsprefix.php
	 * @param prefix string <p>
	 * Restrict matches to terms that start with the prefix
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &setTermsPrefix ($prefix) {}

	/**
	 * Returns the term prefix
	 * @link http://www.php.net/manual/en/solrquery.gettermsprefix.php
	 * @return string a string on success and &null; if not set.
	 */
	public function getTermsPrefix () {}

	/**
	 * Sets the maximum number of terms to return
	 * @link http://www.php.net/manual/en/solrquery.settermslimit.php
	 * @param limit int <p>
	 * The maximum number of terms to return. All the terms will be returned if the limit is negative.
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &setTermsLimit ($limit) {}

	/**
	 * Returns the maximum number of terms Solr should return
	 * @link http://www.php.net/manual/en/solrquery.gettermslimit.php
	 * @return int an integer on success and &null; if not set.
	 */
	public function getTermsLimit () {}

	/**
	 * Return the raw characters of the indexed term
	 * @link http://www.php.net/manual/en/solrquery.settermsreturnraw.php
	 * @param flag bool 
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &setTermsReturnRaw ($flag) {}

	/**
	 * Whether or not to return raw characters
	 * @link http://www.php.net/manual/en/solrquery.gettermsreturnraw.php
	 * @return bool a boolean on success and &null; if not set.
	 */
	public function getTermsReturnRaw () {}

	/**
	 * Specifies how to sort the returned terms
	 * @link http://www.php.net/manual/en/solrquery.settermssort.php
	 * @param sortType int <p>
	 * SolrQuery::TERMS_SORT_INDEX or SolrQuery::TERMS_SORT_COUNT
	 * </p>
	 * @return SolrQuery the current SolrQuery object, if the return value is used.
	 */
	public function &setTermsSort ($sortType) {}

	/**
	 * Returns an integer indicating how terms are sorted
	 * @link http://www.php.net/manual/en/solrquery.gettermssort.php
	 * @return int an integer on success and &null; if not set.
	 */
	public function getTermsSort () {}

	/**
	 * Sets the parameter to the specified value
	 * @link http://www.php.net/manual/en/solrparams.setparam.php
	 * @param name string <p>
	 * Name of the parameter
	 * </p>
	 * @param value string <p>
	 * Value of the parameter
	 * </p>
	 * @return SolrParams a SolrParam object on success and false on value.
	 */
	public function &setParam ($name, $value) {}

	/**
	 * Adds a parameter to the object
	 * @link http://www.php.net/manual/en/solrparams.addparam.php
	 * @param name string <p>
	 * Name of parameter
	 * </p>
	 * @param value string <p>
	 * Value of parameter
	 * </p>
	 * @return SolrParams a SolrParam object on success and false on failure.
	 */
	public function &addParam ($name, $value) {}

	public function __toString () {}

	/**
	 * Returns all the name-value pair parameters in the object
	 * @link http://www.php.net/manual/en/solrparams.tostring.php
	 * @param url_encode bool[optional] <p>
	 * Whether to return URL-encoded values
	 * </p>
	 * @return string a string on success and false on failure.
	 */
	public function toString ($url_encode = null) {}

	/**
	 * Returns an array of non URL-encoded parameters
	 * @link http://www.php.net/manual/en/solrparams.getparams.php
	 * @return array an array of non URL-encoded parameters
	 */
	public function getParams () {}

	/**
	 * Returns a parameter value
	 * @link http://www.php.net/manual/en/solrparams.getparam.php
	 * @param param_name string[optional] <p>
	 * The name of the parameter
	 * </p>
	 * @return mixed a string or an array depending on the type of the parameter
	 */
	public function getParam ($param_name = null) {}

	/**
	 * Returns an array of URL-encoded parameters
	 * @link http://www.php.net/manual/en/solrparams.getpreparedparams.php
	 * @return array an array on URL-encoded parameters
	 */
	public function getPreparedParams () {}

	public function __clone () {}

	/**
	 * Used for custom serialization
	 * @link http://www.php.net/manual/en/solrparams.serialize.php
	 * @return string Used for custom serialization
	 */
	public function serialize () {}

	/**
	 * Used for custom serialization
	 * @link http://www.php.net/manual/en/solrparams.unserialize.php
	 * @param serialized string <p>
	 * The serialized representation of the object
	 * </p>
	 * @return void None
	 */
	public function unserialize ($serialized) {}

	/**
	 * This is an alias for SolrParams::addParam
	 * @link http://www.php.net/manual/en/solrparams.add.php
	 * @param name string <p>
	 * The name of the parameter
	 * </p>
	 * @param value string <p>
	 * The value of the parameter 
	 * </p>
	 * @return SolrParams a SolrParams instance on success
	 */
	public function &add ($name, $value) {}

	/**
	 * An alias of SolrParams::setParam
	 * @link http://www.php.net/manual/en/solrparams.set.php
	 * @param name string <p>
	 * Then name of the parameter
	 * </p>
	 * @param value string <p>
	 * The parameter value
	 * </p>
	 * @return void an instance of the SolrParams object on success
	 */
	public function &set ($name, $value) {}

	/**
	 * This is an alias for SolrParams::getParam
	 * @link http://www.php.net/manual/en/solrparams.get.php
	 * @param param_name string <p>
	 * Then name of the parameter
	 * </p>
	 * @return mixed an array or string depending on the type of parameter
	 */
	public function get ($param_name) {}

}

class SolrResponse  {
	const PARSE_SOLR_OBJ = 0;
	const PARSE_SOLR_DOC = 1;

	protected $http_status;
	protected $parser_mode;
	protected $success;
	protected $response_writer;
	protected $http_status_message;
	protected $http_request_url;
	protected $http_raw_request_headers;
	protected $http_raw_request;
	protected $http_raw_response_headers;
	protected $http_raw_response;
	protected $http_digested_response;


	/**
	 * Returns the HTTP status of the response
	 * @link http://www.php.net/manual/en/solrresponse.gethttpstatus.php
	 * @return int the HTTP status of the response.
	 */
	public function getHttpStatus () {}

	/**
	 * Returns more details on the HTTP status
	 * @link http://www.php.net/manual/en/solrresponse.gethttpstatusmessage.php
	 * @return string more details on the HTTP status
	 */
	public function getHttpStatusMessage () {}

	/**
	 * Was the request a success
	 * @link http://www.php.net/manual/en/solrresponse.success.php
	 * @return bool true if it was successful and false if it was not.
	 */
	public function success () {}

	/**
	 * Returns the full URL the request was sent to
	 * @link http://www.php.net/manual/en/solrresponse.getrequesturl.php
	 * @return string the full URL the request was sent to
	 */
	public function getRequestUrl () {}

	/**
	 * Returns the raw request headers sent to the Solr server
	 * @link http://www.php.net/manual/en/solrresponse.getrawrequestheaders.php
	 * @return string the raw request headers sent to the Solr server
	 */
	public function getRawRequestHeaders () {}

	/**
	 * Returns the raw request sent to the Solr server
	 * @link http://www.php.net/manual/en/solrresponse.getrawrequest.php
	 * @return string the raw request sent to the Solr server
	 */
	public function getRawRequest () {}

	/**
	 * Returns the raw response headers from the server
	 * @link http://www.php.net/manual/en/solrresponse.getrawresponseheaders.php
	 * @return string the raw response headers from the server.
	 */
	public function getRawResponseHeaders () {}

	/**
	 * Returns the raw response from the server
	 * @link http://www.php.net/manual/en/solrresponse.getrawresponse.php
	 * @return string the raw response from the server.
	 */
	public function getRawResponse () {}

	/**
	 * Returns the XML response as serialized PHP data
	 * @link http://www.php.net/manual/en/solrresponse.getdigestedresponse.php
	 * @return string the XML response as serialized PHP data
	 */
	public function getDigestedResponse () {}

	/**
	 * Sets the parse mode
	 * @link http://www.php.net/manual/en/solrresponse.setparsemode.php
	 * @param parser_mode int[optional] <p>
	 * SolrResponse::PARSE_SOLR_DOC parses documents in SolrDocument instances. SolrResponse::PARSE_SOLR_OBJ parses document into SolrObjects.
	 * </p>
	 * @return bool true on success or false on failure
	 */
	public function setParseMode ($parser_mode = null) {}

	/**
	 * Returns a SolrObject representing the XML response from the server
	 * @link http://www.php.net/manual/en/solrresponse.getresponse.php
	 * @return SolrObject a SolrObject representing the XML response from the server
	 */
	public function getResponse () {}

}

final class SolrQueryResponse extends SolrResponse  {
	const PARSE_SOLR_OBJ = 0;
	const PARSE_SOLR_DOC = 1;

	protected $http_status;
	protected $parser_mode;
	protected $success;
	protected $response_writer;
	protected $http_status_message;
	protected $http_request_url;
	protected $http_raw_request_headers;
	protected $http_raw_request;
	protected $http_raw_response_headers;
	protected $http_raw_response;
	protected $http_digested_response;


	/**
	 * Constructor
	 * @link http://www.php.net/manual/en/solrqueryresponse.construct.php
	 */
	public function __construct () {}

	/**
	 * Destructor
	 * @link http://www.php.net/manual/en/solrqueryresponse.destruct.php
	 * @return void None
	 */
	public function __destruct () {}

	/**
	 * Returns the HTTP status of the response
	 * @link http://www.php.net/manual/en/solrresponse.gethttpstatus.php
	 * @return int the HTTP status of the response.
	 */
	public function getHttpStatus () {}

	/**
	 * Returns more details on the HTTP status
	 * @link http://www.php.net/manual/en/solrresponse.gethttpstatusmessage.php
	 * @return string more details on the HTTP status
	 */
	public function getHttpStatusMessage () {}

	/**
	 * Was the request a success
	 * @link http://www.php.net/manual/en/solrresponse.success.php
	 * @return bool true if it was successful and false if it was not.
	 */
	public function success () {}

	/**
	 * Returns the full URL the request was sent to
	 * @link http://www.php.net/manual/en/solrresponse.getrequesturl.php
	 * @return string the full URL the request was sent to
	 */
	public function getRequestUrl () {}

	/**
	 * Returns the raw request headers sent to the Solr server
	 * @link http://www.php.net/manual/en/solrresponse.getrawrequestheaders.php
	 * @return string the raw request headers sent to the Solr server
	 */
	public function getRawRequestHeaders () {}

	/**
	 * Returns the raw request sent to the Solr server
	 * @link http://www.php.net/manual/en/solrresponse.getrawrequest.php
	 * @return string the raw request sent to the Solr server
	 */
	public function getRawRequest () {}

	/**
	 * Returns the raw response headers from the server
	 * @link http://www.php.net/manual/en/solrresponse.getrawresponseheaders.php
	 * @return string the raw response headers from the server.
	 */
	public function getRawResponseHeaders () {}

	/**
	 * Returns the raw response from the server
	 * @link http://www.php.net/manual/en/solrresponse.getrawresponse.php
	 * @return string the raw response from the server.
	 */
	public function getRawResponse () {}

	/**
	 * Returns the XML response as serialized PHP data
	 * @link http://www.php.net/manual/en/solrresponse.getdigestedresponse.php
	 * @return string the XML response as serialized PHP data
	 */
	public function getDigestedResponse () {}

	/**
	 * Sets the parse mode
	 * @link http://www.php.net/manual/en/solrresponse.setparsemode.php
	 * @param parser_mode int[optional] <p>
	 * SolrResponse::PARSE_SOLR_DOC parses documents in SolrDocument instances. SolrResponse::PARSE_SOLR_OBJ parses document into SolrObjects.
	 * </p>
	 * @return bool true on success or false on failure
	 */
	public function setParseMode ($parser_mode = null) {}

	/**
	 * Returns a SolrObject representing the XML response from the server
	 * @link http://www.php.net/manual/en/solrresponse.getresponse.php
	 * @return SolrObject a SolrObject representing the XML response from the server
	 */
	public function getResponse () {}

}

final class SolrUpdateResponse extends SolrResponse  {
	const PARSE_SOLR_OBJ = 0;
	const PARSE_SOLR_DOC = 1;

	protected $http_status;
	protected $parser_mode;
	protected $success;
	protected $response_writer;
	protected $http_status_message;
	protected $http_request_url;
	protected $http_raw_request_headers;
	protected $http_raw_request;
	protected $http_raw_response_headers;
	protected $http_raw_response;
	protected $http_digested_response;


	/**
	 * Constructor
	 * @link http://www.php.net/manual/en/solrupdateresponse.construct.php
	 */
	public function __construct () {}

	/**
	 * Destructor
	 * @link http://www.php.net/manual/en/solrupdateresponse.destruct.php
	 * @return void None
	 */
	public function __destruct () {}

	/**
	 * Returns the HTTP status of the response
	 * @link http://www.php.net/manual/en/solrresponse.gethttpstatus.php
	 * @return int the HTTP status of the response.
	 */
	public function getHttpStatus () {}

	/**
	 * Returns more details on the HTTP status
	 * @link http://www.php.net/manual/en/solrresponse.gethttpstatusmessage.php
	 * @return string more details on the HTTP status
	 */
	public function getHttpStatusMessage () {}

	/**
	 * Was the request a success
	 * @link http://www.php.net/manual/en/solrresponse.success.php
	 * @return bool true if it was successful and false if it was not.
	 */
	public function success () {}

	/**
	 * Returns the full URL the request was sent to
	 * @link http://www.php.net/manual/en/solrresponse.getrequesturl.php
	 * @return string the full URL the request was sent to
	 */
	public function getRequestUrl () {}

	/**
	 * Returns the raw request headers sent to the Solr server
	 * @link http://www.php.net/manual/en/solrresponse.getrawrequestheaders.php
	 * @return string the raw request headers sent to the Solr server
	 */
	public function getRawRequestHeaders () {}

	/**
	 * Returns the raw request sent to the Solr server
	 * @link http://www.php.net/manual/en/solrresponse.getrawrequest.php
	 * @return string the raw request sent to the Solr server
	 */
	public function getRawRequest () {}

	/**
	 * Returns the raw response headers from the server
	 * @link http://www.php.net/manual/en/solrresponse.getrawresponseheaders.php
	 * @return string the raw response headers from the server.
	 */
	public function getRawResponseHeaders () {}

	/**
	 * Returns the raw response from the server
	 * @link http://www.php.net/manual/en/solrresponse.getrawresponse.php
	 * @return string the raw response from the server.
	 */
	public function getRawResponse () {}

	/**
	 * Returns the XML response as serialized PHP data
	 * @link http://www.php.net/manual/en/solrresponse.getdigestedresponse.php
	 * @return string the XML response as serialized PHP data
	 */
	public function getDigestedResponse () {}

	/**
	 * Sets the parse mode
	 * @link http://www.php.net/manual/en/solrresponse.setparsemode.php
	 * @param parser_mode int[optional] <p>
	 * SolrResponse::PARSE_SOLR_DOC parses documents in SolrDocument instances. SolrResponse::PARSE_SOLR_OBJ parses document into SolrObjects.
	 * </p>
	 * @return bool true on success or false on failure
	 */
	public function setParseMode ($parser_mode = null) {}

	/**
	 * Returns a SolrObject representing the XML response from the server
	 * @link http://www.php.net/manual/en/solrresponse.getresponse.php
	 * @return SolrObject a SolrObject representing the XML response from the server
	 */
	public function getResponse () {}

}

final class SolrPingResponse extends SolrResponse  {
	const PARSE_SOLR_OBJ = 0;
	const PARSE_SOLR_DOC = 1;

	protected $http_status;
	protected $parser_mode;
	protected $success;
	protected $response_writer;
	protected $http_status_message;
	protected $http_request_url;
	protected $http_raw_request_headers;
	protected $http_raw_request;
	protected $http_raw_response_headers;
	protected $http_raw_response;
	protected $http_digested_response;


	/**
	 * Constructor
	 * @link http://www.php.net/manual/en/solrpingresponse.construct.php
	 */
	public function __construct () {}

	/**
	 * Destructor
	 * @link http://www.php.net/manual/en/solrpingresponse.destruct.php
	 * @return void None
	 */
	public function __destruct () {}

	/**
	 * Returns the response from the server
	 * @link http://www.php.net/manual/en/solrpingresponse.getresponse.php
	 * @return string an empty string.
	 */
	public function getResponse () {}

	/**
	 * Returns the HTTP status of the response
	 * @link http://www.php.net/manual/en/solrresponse.gethttpstatus.php
	 * @return int the HTTP status of the response.
	 */
	public function getHttpStatus () {}

	/**
	 * Returns more details on the HTTP status
	 * @link http://www.php.net/manual/en/solrresponse.gethttpstatusmessage.php
	 * @return string more details on the HTTP status
	 */
	public function getHttpStatusMessage () {}

	/**
	 * Was the request a success
	 * @link http://www.php.net/manual/en/solrresponse.success.php
	 * @return bool true if it was successful and false if it was not.
	 */
	public function success () {}

	/**
	 * Returns the full URL the request was sent to
	 * @link http://www.php.net/manual/en/solrresponse.getrequesturl.php
	 * @return string the full URL the request was sent to
	 */
	public function getRequestUrl () {}

	/**
	 * Returns the raw request headers sent to the Solr server
	 * @link http://www.php.net/manual/en/solrresponse.getrawrequestheaders.php
	 * @return string the raw request headers sent to the Solr server
	 */
	public function getRawRequestHeaders () {}

	/**
	 * Returns the raw request sent to the Solr server
	 * @link http://www.php.net/manual/en/solrresponse.getrawrequest.php
	 * @return string the raw request sent to the Solr server
	 */
	public function getRawRequest () {}

	/**
	 * Returns the raw response headers from the server
	 * @link http://www.php.net/manual/en/solrresponse.getrawresponseheaders.php
	 * @return string the raw response headers from the server.
	 */
	public function getRawResponseHeaders () {}

	/**
	 * Returns the raw response from the server
	 * @link http://www.php.net/manual/en/solrresponse.getrawresponse.php
	 * @return string the raw response from the server.
	 */
	public function getRawResponse () {}

	/**
	 * Returns the XML response as serialized PHP data
	 * @link http://www.php.net/manual/en/solrresponse.getdigestedresponse.php
	 * @return string the XML response as serialized PHP data
	 */
	public function getDigestedResponse () {}

	/**
	 * Sets the parse mode
	 * @link http://www.php.net/manual/en/solrresponse.setparsemode.php
	 * @param parser_mode int[optional] <p>
	 * SolrResponse::PARSE_SOLR_DOC parses documents in SolrDocument instances. SolrResponse::PARSE_SOLR_OBJ parses document into SolrObjects.
	 * </p>
	 * @return bool true on success or false on failure
	 */
	public function setParseMode ($parser_mode = null) {}

}

final class SolrGenericResponse extends SolrResponse  {
	const PARSE_SOLR_OBJ = 0;
	const PARSE_SOLR_DOC = 1;

	protected $http_status;
	protected $parser_mode;
	protected $success;
	protected $response_writer;
	protected $http_status_message;
	protected $http_request_url;
	protected $http_raw_request_headers;
	protected $http_raw_request;
	protected $http_raw_response_headers;
	protected $http_raw_response;
	protected $http_digested_response;


	/**
	 * Constructor
	 * @link http://www.php.net/manual/en/solrgenericresponse.construct.php
	 */
	public function __construct () {}

	/**
	 * Destructor
	 * @link http://www.php.net/manual/en/solrgenericresponse.destruct.php
	 * @return void None
	 */
	public function __destruct () {}

	/**
	 * Returns the HTTP status of the response
	 * @link http://www.php.net/manual/en/solrresponse.gethttpstatus.php
	 * @return int the HTTP status of the response.
	 */
	public function getHttpStatus () {}

	/**
	 * Returns more details on the HTTP status
	 * @link http://www.php.net/manual/en/solrresponse.gethttpstatusmessage.php
	 * @return string more details on the HTTP status
	 */
	public function getHttpStatusMessage () {}

	/**
	 * Was the request a success
	 * @link http://www.php.net/manual/en/solrresponse.success.php
	 * @return bool true if it was successful and false if it was not.
	 */
	public function success () {}

	/**
	 * Returns the full URL the request was sent to
	 * @link http://www.php.net/manual/en/solrresponse.getrequesturl.php
	 * @return string the full URL the request was sent to
	 */
	public function getRequestUrl () {}

	/**
	 * Returns the raw request headers sent to the Solr server
	 * @link http://www.php.net/manual/en/solrresponse.getrawrequestheaders.php
	 * @return string the raw request headers sent to the Solr server
	 */
	public function getRawRequestHeaders () {}

	/**
	 * Returns the raw request sent to the Solr server
	 * @link http://www.php.net/manual/en/solrresponse.getrawrequest.php
	 * @return string the raw request sent to the Solr server
	 */
	public function getRawRequest () {}

	/**
	 * Returns the raw response headers from the server
	 * @link http://www.php.net/manual/en/solrresponse.getrawresponseheaders.php
	 * @return string the raw response headers from the server.
	 */
	public function getRawResponseHeaders () {}

	/**
	 * Returns the raw response from the server
	 * @link http://www.php.net/manual/en/solrresponse.getrawresponse.php
	 * @return string the raw response from the server.
	 */
	public function getRawResponse () {}

	/**
	 * Returns the XML response as serialized PHP data
	 * @link http://www.php.net/manual/en/solrresponse.getdigestedresponse.php
	 * @return string the XML response as serialized PHP data
	 */
	public function getDigestedResponse () {}

	/**
	 * Sets the parse mode
	 * @link http://www.php.net/manual/en/solrresponse.setparsemode.php
	 * @param parser_mode int[optional] <p>
	 * SolrResponse::PARSE_SOLR_DOC parses documents in SolrDocument instances. SolrResponse::PARSE_SOLR_OBJ parses document into SolrObjects.
	 * </p>
	 * @return bool true on success or false on failure
	 */
	public function setParseMode ($parser_mode = null) {}

	/**
	 * Returns a SolrObject representing the XML response from the server
	 * @link http://www.php.net/manual/en/solrresponse.getresponse.php
	 * @return SolrObject a SolrObject representing the XML response from the server
	 */
	public function getResponse () {}

}

class SolrUtils  {

	/**
	 * Escapes a lucene query string
	 * @link http://www.php.net/manual/en/solrutils.escapequerychars.php
	 * @param str string <p>
	 * This is the query string to be escaped.
	 * </p>
	 * @return string the escaped string or false on failure.
	 */
	public static function escapeQueryChars ($str) {}

	/**
	 * Prepares a phrase from an unescaped lucene string
	 * @link http://www.php.net/manual/en/solrutils.queryphrase.php
	 * @param str string <p>
	 * The lucene phrase.
	 * </p>
	 * @return string the phrase contained in double quotes.
	 */
	public static function queryPhrase ($str) {}

	/**
	 * Parses an response XML string into a SolrObject
	 * @link http://www.php.net/manual/en/solrutils.digestxmlresponse.php
	 * @param xmlresponse string <p>
	 * The XML response string from the Solr server.
	 * </p>
	 * @param parse_mode int[optional] <p>
	 * Use SolrResponse::PARSE_SOLR_OBJ or SolrResponse::PARSE_SOLR_DOC
	 * </p>
	 * @return SolrObject the SolrObject representing the XML response.
	 * </p>
	 * <p>If the parse_mode parameter is set to SolrResponse::PARSE_SOLR_OBJ Solr documents will be parses as SolrObject instances.</p>
	 * <p>If it is set to SolrResponse::PARSE_SOLR_DOC, they will be parsed as SolrDocument instances.
	 */
	public static function digestXmlResponse ($xmlresponse, $parse_mode = null) {}

	/**
	 * @param jsonResponse
	 */
	public static function digestJsonResponse ($jsonResponse) {}

	/**
	 * Returns the current version of the Solr extension
	 * @link http://www.php.net/manual/en/solrutils.getsolrversion.php
	 * @return string The current version of the Apache Solr extension.
	 */
	public static function getSolrVersion () {}

}

class SolrException extends Exception  {
	protected $message;
	protected $code;
	protected $file;
	protected $line;
	protected $sourceline;
	protected $sourcefile;
	protected $zif_name;


	/**
	 * Returns internal information where the Exception was thrown
	 * @link http://www.php.net/manual/en/solrexception.getinternalinfo.php
	 * @return array an array containing internal information where the error was thrown. Used only for debugging by extension developers.
	 */
	public function getInternalInfo () {}

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

class SolrIllegalOperationException extends SolrException  {
	protected $message;
	protected $code;
	protected $file;
	protected $line;
	protected $sourceline;
	protected $sourcefile;
	protected $zif_name;


	/**
	 * Returns internal information where the Exception was thrown
	 * @link http://www.php.net/manual/en/solrillegaloperationexception.getinternalinfo.php
	 * @return array an array containing internal information where the error was thrown. Used only for debugging by extension developers.
	 */
	public function getInternalInfo () {}

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

class SolrIllegalArgumentException extends SolrException  {
	protected $message;
	protected $code;
	protected $file;
	protected $line;
	protected $sourceline;
	protected $sourcefile;
	protected $zif_name;


	/**
	 * Returns internal information where the Exception was thrown
	 * @link http://www.php.net/manual/en/solrillegalargumentexception.getinternalinfo.php
	 * @return array an array containing internal information where the error was thrown. Used only for debugging by extension developers.
	 */
	public function getInternalInfo () {}

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

class SolrClientException extends SolrException  {
	protected $message;
	protected $code;
	protected $file;
	protected $line;
	protected $sourceline;
	protected $sourcefile;
	protected $zif_name;


	/**
	 * Returns internal information where the Exception was thrown
	 * @link http://www.php.net/manual/en/solrclientexception.getinternalinfo.php
	 * @return array an array containing internal information where the error was thrown. Used only for debugging by extension developers.
	 */
	public function getInternalInfo () {}

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

class SolrServerException extends SolrException  {
	protected $message;
	protected $code;
	protected $file;
	protected $line;
	protected $sourceline;
	protected $sourcefile;
	protected $zif_name;


	/**
	 * Returns internal information where the Exception was thrown
	 * @link http://www.php.net/manual/en/solrserverexception.getinternalinfo.php
	 * @return array an array containing internal information where the error was thrown. Used only for debugging by extension developers.
	 */
	public function getInternalInfo () {}

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

/**
 * Returns the current version of the Apache Solr extension
 * @link http://www.php.net/manual/en/function.solr-get-version.php
 * @return string It returns a string on success and false on failure.
 */
function solr_get_version () {}

define ('SOLR_MAJOR_VERSION', 2);
define ('SOLR_MINOR_VERSION', 0);
define ('SOLR_PATCH_VERSION', 0);
define ('SOLR_EXTENSION_VERSION', "2.0.0");

// End of solr v.2.0.0
