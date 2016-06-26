<?php

/**
 * Connects to the AS/400 server.
 * @param server string name of the server to connect, can be either symbolic name or IP
 * @param user string username to use for conencting
 * @param password string password for the username
 * @param options array[optional] connection options
 * @return resource AS/400 connection resource or false on failure
 */
function i5_connect($server, $user, $password, $options = null) {}


/**
 * Persistent connection to the AS/400 server.
 * This function acts like i5_connect(), with the following differences:
 * <ul>
 * <li>The connection does not disappear after the web request completion. It will keep job environment information such as library lists, etc.</li>
 * <li>The connection can be reused for another web request if the request contains the same server id, user and password used in the previous web request.</li>
 * <li>If the previous connection doesn’t exist, a new connection will be created, and will be kept open until the PHP script ends.</li>
 * <li>A subsequent call to i5_close() will not close the connection. * Use i5_pclose() to close the connection opened by i5_pconnect() function. </li>
 * </ul>
 *
 * @param server string name of the server to connect, can be either symbolic name or IP
 * @param user string username to use for conencting
 * @param password string password for the username
 * @param options array[optional] connection options
 * @return resource AS/400 connection resource or false on failure
 */
function i5_pconnect($server, $user, $password, $options = null) {}


/**
 * Close connection to AS/400 server.
 * @param connection resource[optional] result of i5_connect
 * @return boolean success value
 */
function i5_close($connection = null) {}


/**
 * Close connection to AS/400 server.
 * @param connection resource[optional] result of i5_connect
 * @return boolean success value
 */
function i5_pclose($connection = null) {}

/**
 * Change authority of the connection to specific user. All actions would be executed as this user from now on.
 * @param username string name of the user to change to
 * @param password string password for the user
 * @param resource connection[optional] - result of i5_connect
 * @return boolean success value
 */
function i5_adopt_authority($username, $password, $connection = null) {}


/**
 * Retrieves error information for last action that was executed.
 * @param connection resource[optional] result of i5_connect
 * @return boolean if there was no error, returns false. Otherwise, returns array with these elements: 0 - error number, as in i5_errno(), 1 - error category, 2 - error message, as in i5_errmsg(), 3 - detailed description of the error.
 */
function i5_error($connection = null) {}


/**
 * Get error number for last executed action.
 * @param connection resource[optional] result of i5_connect
 * @return integer error number
 */
function i5_errno($connection = null) {}
 

/**
 * Get error message for last executed action
 * @param connection resource[optional] result of i5_connect
 * @return string error message 
 */
function i5_errormsg($connection = null) {}


/**
 * Calls CL command.
 * @param command array array of name => value parts, name describing the call input parameters<br> names should match i5 CL command parameter names<br> if the array is empty or not provided, no input parameters are given<br> if value is integer, integer is passed, if value is string, quoted string is passed<br> if the value is an array, list of contained values is passed<br>
 * @param inputs array[optional] array which describes output parameters of the command. If not provided, no output parameters are defined. <br> key of the array defined i5 CL command parameter name<br> "RC" is predefined name containing the result of the command<br> value can be string - then it defines PHP variable name to accept the parameter<br> or array, then it shoudl have 2 elements:<br> * 				first is PHP variable name to accept the parameter<br> *				second is description of the parameter
 * @param connection resource[optional] result of i5_connect
 * @return boolean success value
 */
function i5_command($command, $inputs = null, $outputs = null, $connection = null) {}


/**
 * Opens a program and prepares it to be run.
 * @param name string program name. If service procedure call is done, the procedure name is given in parentheses like this: '''EASYCOM/MYPGM(PROC)'''
 * @param description array[optional] PHP-format program description. This should be provided if the program is not described on server.
 * @param connection resource[optional] result of i5_connect
 * @return resource if open succeeded - returns resource, false if open failed
 */
function i5_program_prepare($name, $description = null, $connection = null) {}


/**
 * Opens a program or service procedure using PCML file and prepares it to be run.
 * Note: use funciton file_get_contents to load the array, for example:<br>
 *  $description = file_get_contents("/www/zendcore/htdocs/teststruc.pcml"))
 *
 * @param description array[optional] PHP-format program description retrieved from the PCML file using file_get_contents
 * @param connection resource[optional] result of i5_connect
 * @return resource if open succeeded - returns resource, false if open failed
 */
function i5_program_prepare_PCML($name, $description = null, $connection = null) {}


/**
 * Calls the program and optionally accepts results
 * @param program resource resource opened by program_open
 * @param params array[optional] parameters according to description. Can be given as flat array, then parameters are assigned in order, or as key => value pairs then the values are assigned to the parameter named by the key
 * @param retvals array[optional] of key => value pairs where keys describe output parameter name and values name PHP variable that would receive the parameter [optional]
 * @return boolean success value
 */
function i5_program_call($program, $params = null, $retvals = null) {}


/**
 * Free program resource handle
 * @param program resource resource opened by program_open
 * @return boolean success value
 */
function i5_program_close($program) {}


/**
 * Fetch a row of data from the resource.
 * @param result resource resulting from operation returning data
 * @param option int[optional] flag specifying which record to fetch (I5_READ_SEEK -  Current record, I5_READ_NEXT -  Next record, I5_READ_PREV -  Previous record, I5_READ_FIRST-  First record, I5_READ_LAST -  Last record).
 * @return array
 */
function i5_fetch_array($result, $option = I5_READ_NEXT) {}


/**
 * Fetch a row of data from the resource.
 * @param result resource resource resulting from operation returning data
 * @param option int[optional] flag specifying which record to fetch (I5_READ_SEEK -  Current record, I5_READ_NEXT -  Next record, I5_READ_PREV -  Previous record, I5_READ_FIRST-  First record, I5_READ_LAST -  Last record).
 * @return array
 */
function i5_fetch_assoc($result, $option = I5_READ_NEXT ) {}


/**
 * Fetch a row of data from the resource.
 * @param result resource resulting from operation returning data
 * @param option int[optional] flag specifying which record to fetch (I5_READ_SEEK -  Current record, I5_READ_NEXT -  Next record, I5_READ_PREV -  Previous record, I5_READ_FIRST-  First record, I5_READ_LAST -  Last record).
 * @return object
 */
function i5_fetch_object($result, $option = I5_READ_NEXT) {}


/**
 * Fetch a row of data from the resource.
 * @param result resource resource resulting from operation returning data
 * @param option int[optional] flag specifying which record to fetch (I5_READ_SEEK -  Current record, I5_READ_NEXT -  Next record, I5_READ_PREV -  Previous record, I5_READ_FIRST-  First record, I5_READ_LAST -  Last record).
 * @return array
 */
function i5_fetch_row($result, $option = I5_READ_NEXT) {}


/**
 * Get information about the file/record.
 * @param result resource resource describing file or other record set
 * @param field mixed[optional] integer or string identifying the field. If this parameter is omitted, whole file information is given (when possible) {}
 * @return array with information about record
 */
function i5_info ($result, $field = null) {}


/**
 * Get field length.
 * @param result resource resource describing file or other record set
 * @param field mixed[optional] integer or string identifying the field position or name.
 * @return integer field's length
 */
function i5_field_len ($result, $field = null) {}


/**
 * Get field name.
 * @param result resource resource describing file or other record set
 * @param field integer integer identifying the field position.
 * @return integer field's length
 */
function i5_field_name ($result, $field ) {}


/**
 * Get field scale - number of digits for numeric fields. 
 * @param result resource resource describing file or other record set
 * @param field mixed integer or string identifying the field position or name.
 * @return integer field's number of digits. If field is not numeric -1 is returned.
 */
function i5_field_scale ($result, $field ) {}


/**
 * Get field type.
 * @param result resource describing file or other record set
 * @param field mixed integer or string identifying the field position or name.
 * @return string field's type string
 */
function i5_field_type ($result, $field ) {}


/**
 * Get list of fields for resource
 * @param result resource describing file or other record set
 * @return array containing field names, in order
 */
function i5_list_fields ($result ) {}


/**
 * Get numbers of fields for resource
 * @param result resource describing file or other record set
 * @return integer number of fields
 */
function i5_num_fields ($result ) {}


/**
 * Get one field of the result
 * @param result resource describing file or other record set
 * @param field mixed integer or string identifying the field position or name.
 * @return mixed field's contents in current record. 
 */
function i5_result ($result, $field) {}


/**
 * Open native i5 file
 * @param fileName string file name, may include library
 * @param mode int[optional] file mode to use (I5_OPEN_READ| I5_OPEN_READWRITE| I5_OPEN_COMMIT| I5_OPEN_SHRRD| I5_OPEN_SHRUPD| I5_OPEN_SHRNUPD| I5_OPEN_EXCLRD| I5_OPEN_EXCL) {}
 * @param connection resource[optional] result of i5_connect
 * @return resource if open successful, false otherwise
 */
function i5_open ($fileName, $mode = null, $connection = null ) {}


/**
 * Create new record in the file. Use setvalue() to set values in new record and then update() to write it to file. i5_new_record() is atomic function doing all the work.
 * @param file resource opened i5 file
 * @param mode integer if to clean the record (I5_ADDNEW_CLEAR - clear, I5_ADDNEW_NOCLEAR - do not clear) {}
 * @return resource if open succeeded, false if open failed
 */
function i5_addnew ($file, $mode) {}


/**
 * Set editing mode for the record. In order for value to be changed, it should be set in edit mode. This locks teh record so other users can not edit it simultaneously. i5_update_record() is atomic function doing all the work.
 * @param file resource i5 file resource 
 * @param mode integer editing mode (I5_EDIT_ONE - leave edit mode after i5_update() and also after reading or i5_delete(), I5_EDIT_ALWAYS - remain in editg mode until i5_cancel_edit() is called, I5_EDIT_AUTO - update is called automatically so no need to call i5_update() after setting values) {}
 * @return boolean success value. Return would be false if the record is already being edited by other used.
 */
function i5_edit ($file, $mode ) {}


/**
 * Remove current record
 * @param file resource i5 file resource
 * @return boolean success value. Return would be false if the record is already being edited by other used.
 */
function i5_delete ($file ) {}


/**
 * @param result resource result
 * @return boolean
 */
function i5_cancel_edit ($result) {}


/**
 * Change value of the current record. The record should be in edit mode after i5_edit() or created by i5_addnew(). i5_update_record() is atomic function doing all the work.
 * @param file resource i5 file resource
 * @param field mixed field identifier by name or position
 * @param value mixed value for the field
 * @return boolean success value.
 */
function i5_setvalue ($file, $field, $value ) {}


/**
 * Change value of the current record. The record should be in edit mode after i5_edit() or created by i5_addnew(). i5_update_record() is atomic function doing all the work.
 * @param file resource i5 file resource
 * @param values array set of key=>value parts describing fields to change and their new values
 * @return boolean success value.
 */
function i5_setvalue ($file, $values ) {}


/**
 * Creates a new record in file and inserts data into it
 * @param file resource opened i5 file resource
 * @param data array of data fields conforming to file description<br> can be either flat array or key-value pairs, like i5_setvalue arguments
 * @return boolean success value
 */
function i5_new_record($file, $data) {}


/**
 * Updates current row with given data
 * @param file resource opened i5 file resource
 * @param data array of data fields conforming to file description<br> can be either flat array or key-value pairs, like i5_setvalue arguments
 * @return boolean success value
 */
function i5_update_record($file, $data) {}


/**
 * Removes current record
 * @param file resource i5 file resource
 * @return boolean success value. Return would be false if the record is already being edited by other used.
 */
function i5_delete_record($file) {}
	

/**
 * Set upper bound of range for the file. Once bound is set, the first line for all seeks becomes the line defined by the range.
 * @param file resource i5 file resource
 * @param included boolean true if the field with this key should be included in the range, false otherwise
 * @param values array values for the key fields - array of key=>value pairs
 * @return boolean success value
 */
function i5_range_from ($file, $included, $values ) {}


/**
 * Set lower bound of range for the file. Once bound is set, the last entry for all seeks becomes the entry defined by the range.
 * @param result resource i5 file resource
 * @param included boolean true if the field with this key should be included in the range, false otherwise
 * @param values array values for the key fields - array of key=>value pairs
 * @return boolean success value
 */
function i5_range_to ($result, $included, $values ) {}


/**
 * Remove range. Reverses the action of range_from() and range_to().
 * @param file resource i5 file resource
 * @return boolean success value
 */
function i5_range_clear ($file ) {}


/**
 * Seek to specific record of the result
 * @param result resource i5 file resource
 * @param record_number integer number of the record to seek to, starting from 0
 * @return boolean success value.
 */
function i5_data_seek ($result, $record_number ) {}


/**
 * Go to specific record in query/file
 * @param file resource i5 file resource
 * @param operator mixed comparison operator. Position is set to first record satisfying the operator (Available operators: : I5_EQ, I5_GT, I5_LT, I5_GE, I5_LE) {}
 * @param keyValue array values of the keys to compare
 * @return boolean success value.
 */
function i5_seek ($file, $operator, $keyValue ) {}


/**
 * Binds a PHP variable to an SQL statement parameter in a statement resource returned by i5_prepare().
 *
 * @param stmt resource i5_prepare prepared request ID
 * @param var1 mixed[optional] variables to associate referenced list
 * @param ... mixed[optional] variables to associate referenced list
 * @return boolean TRUE on success or FALSE on failure.
 */
function i5_bind_param ($stmt, $var1 = null) {}


/**
 * Returns the ID of the current record
 * @param file resource i5 file resource
 * @return integer the ID of the current record that can be used with i5_data_seek() to position on this record again.
 */
function i5_bookmark ($file ) {}


/**
 * Close file handle and free file resources.
 * @param file resource i5 file resource
 * @return boolean success value.
 */
function i5_free_file ($file ) {}


/**
 * Get information about key fields in the file.
 * @param file resource opened i5 file resource
 * @return array Array of integers specifying positions for key fields in the file. Then i5_info can be used to discover descriptions of these fields.
 */
function i5_get_keys($file) {}


/**
 * Executes an SQL statement directly.
 * @param query string SQL request string such as SELECT, INSERT, DELETE, UPDATES and etc
 * @param connection resource[optional] result of i5_connect
 * @return resource For SELECT request returns resource if statement was executed successfully and FALSE in case of error. For INSERT, UPDATE and DELETE requests returns TRUE if statement was executed successfully and FALSE in case of error.
 * i5_query() function is suitable for SQL requests without parameters. If you plan to issue the same SQL statement with different parameters, consider using i5_prepare() and i5_execute(). 
 */
function i5_query($query, $connection = null) {}


/**
 * Frees SQL request result.
 * Removes a query type resource from memory.
 * This function needs only to be called if your script requires too much memory, when a request returns very large results or if a large requests number are processed and may overload the web server memory. It is recommended to use this function to free memory resource used by SQL request. All memory resources are freed when the SQL request is ended.
 * @param query resource result of i5_query() or i5_execute()
 * @return boolean TRUE on success or FALSE on failure
 */
function i5_free_query($query) {}


/**
 * Prepares an SQL statement to be executed.
 * Query parameter may include one or several SQL variables if question marks (?) are set at the right places. There are three main advantages using prepared requests in your script: Performance: While preparing a request, database server creates a return optimized path in order to collect the requested data's. Later on, when the i5_prepare prepared request is sent, it will use the path avoiding processor overload with each request sent. Safety: While preparing a request, it is possible to set markers for entry values. Processing the prepared request with entry values, Easycom checks each entry value to make sure that their type match with the column or the description parameters. Advanced Functionality: Markers not only allow introducing entry values in stored procedure, but also allow collecting OUTPUT and INPUT/OUTPUT recording procedure parameters using i5_bind_param function.
 * @param query string SQL request to prepare
 * @param connection resource[optional] result of i5_connect
 * @return resource A statement resource if the SQL statement was successfully parsed and prepared by the database server. FALSE if the database server returned an error.
 */
function i5_prepare($query, $connection = null) {}


/**
 * Binds a PHP variable to an SQL statement parameter in a statement resource returned by i5_prepare().
 * @param stmt resource i5_prepare() prepared request ID
 * @param var1 mixed[optional] variables to associate referenced list
 * @param ... mixed[optional] variables to associate referenced list
 * @return boolean returns TRUE on success or FALSE on failure.
 */
function i5_bind_result($stmt, $var1 = null) {}


/**
 * Binds a PHP variable to an SQL statement parameter in a statement resource returned by i5_prepare().
 * @param stmt resource i5_prepare() prepared request ID
 * @param var mixed variable to associate referenced list
 * @param namefield string request field or associated file name
 * @return boolean returns TRUE on success or FALSE on failure.
 */
function i5_bind_result($stmt, $var, $namefield) {}


/**
 * Executes a prepared SQL statement.
 * i5_execute executes an SQL request prepared with i5_prepare. If the SQL statement returns a result set, for example, a SELECT statement or a CALL to a stored procedure that returns one or more result sets, you can retrieve a row as an array from the stmt resource using i5_fetch_array, i5_fetch_assoc or i5_fetch_row. If the request creates several results sets, i5_next_result function moves pointer to the next available set.
 * i5_execute is much more efficient than i5_query if the same request has to be run several times with only few parameter changes.. Refer to i5_prepare for a brief discussion of the advantages of using i5_prepare and i5_execute rather than i5_query.
 * A request may contain markers, identified with "?" sign. These markers can be linked to PHP variables (seer i5_bind_param), the results may be linked to PHP variables using i5_bind_result function.
 * @param stmt resource A prepared statement returned from i5_prepare
 * @param params array[optional] Input parameter matching any parameter markers contained in the prepared statement
 * @return resource an updated stmt resource in case of success FALSE if it fails.
 */
function i5_execute($stmt, $params = null) {}


/**
 * Reads binary data from a BLOB field type This function applies to SELECT type (i5_query or i5_execute) requests containing one or more BLOB type fields. Note: Reading and writing a blob requires a transaction.
 * @param result resource File ID
 * @param position integer BLOB field index
 * @return string Returns string with BLOB binary chain or FALSE on failure
 */
function i5_getblob($result, $position) {}


/**
 * Writes a binary data in a BLOB field type. This function only applies to parameterized requests resources and is used the same way as i5_setparam function. Note: Writing a blob requires a transaction.
 * @param result resource Parameterized file ID
 * @param position integer Parameter index
 * @param blob mixed Binary chain content
 * @return boolean Returns TRUE on success or FALSE on failure.
 */
function i5_setblob($result, $position, $blob) {}


/**
 * Allocates parameter to parameterized request. This function is an alternative to i5_bind_param function (automatically linked). It allows explicit value allocation to a parameter. Note: Request must be prepared with i5_prepare function.
 * @param stmt resource i5_prepare prepared request ID
 * @param position integer parameter index (marker) in the request
 * @param value mixed parameter allocated value
 * @return boolean Returns TRUE on success or FALSE on failure
 */
function i5_setparam(resource $stmt, int $position, mixed $value) {}


/**
 * Starts transaction.
 * @param mode integer Transaction modes:
   <p>I5_ISOLEVEL_CHG - READ UNCOMMITED, READ WRITE (UR)
    <ul>
	 <li>Modified records remain locked.
     <li>Modifications are showed
    </ul>
   <p> I5_ISOLEVEL_CS - READ COMMITED (CS) 
    <ul>
     <li>Read records are locked. 
     <li>Modified records remain locked. 
     <li>Changes are not showed 
    </ul>
   <p> I5_ISOLEVEL_ALL - REPEATABLE READ (RS) 
    <ul>
     <li>Read records remain locked. 
     <li>Modified records remain locked. 
     <li>Modifications are not showed. 
    </ul>
   <p> I5_ISOLEVEL_NONE - No Transactions
    <ul>
     <li>Each record is committed immediately. 
    </ul>
 * @param connection resource[optional] result of i5_connect
 * @return boolean Returns TRUE if transaction has started, FALSE in case of error
 */
function i5_transaction($mode, $resource = null) {}


/**
 * Commits an in-progress transaction.
 * @param comment string[optional] Transaction comment that will be added to the journal
 * @param connection resource[optional] result of i5_connect
 * @return boolean Returns TRUE if transaction is valid, FALSE in case of error.
 */
function i5_commit($comment = null, $connection = null) {}


/**
 * Rolls back a transaction.
 * @param connection resource[optional] result of i5_connect
 * @return boolean Returns TRUE if transaction is valid, FALSE in case of error.
 */
function i5_rollback($connection = null) {}


/**
 * Opens a data queue with optional description.
 * @param name string the queue name
 * @param description array[optional] data description in format defined by program_open
 * @param key int[optional] key size - for keyed DataQ
 * @param connection resource[optional] result of i5_connect
 * @return resource if OK, false if failed
 */
function i5_dtaq_prepare($name, $description = null, $key = null, $connection = null) {}


/**
 * Reads data from the data queue. 
 * @param queue resource received from i5_dtaq_prepare
 * @param operator mixed search operator as defined by i5_seek function
 * @param key string key value to look for
 * @param timeout int[optional] timeout value in seconds
 * @return boolean false if could not read because of error or timeout, true otherwise
 */
function i5_dtaq_receive($queue, $operator, $key, $timeout = null) {}


/**
 * Puts data to the data queue. 
 * The data should conform to the description format, and can be either in flat array or key->value pair array.
 * @param queue resource received from i5_dtaq_prepare
 * @param key string key value to look for
 * @param data mixed data to put into the queue. The data should conform to the description format, and can be either in flat array or key->value pair array.
 * @return boolean false if could not be written because of error, true otherwise
 */
function i5_dtaq_send($queue, $key, $data) {}


/**
 * Free program resource handle
 * @param queue resource received from dtaq_open
 * @return boolean Bool success value
 */
function i5_dtaq_close($queue) {}


/**
 * Create an spool file lists, of certain output queue or for all queues.
 * @param description array[optional] The data by which the sppol files will be filtered, array with following keys:<br>* username - username that created the job<br> * outq - qualified name for the output queue containing the spool file<br> * userdata - the user-supplied key data for the spool file<br>All keys are optional and can be provided together.
 * @param connection resource[optional] result of i5_connect
 * @return resource if OK, false if failed
 */
function i5_spool_list($description, $connection) {}


/**
 * Get spool file data from the queue
 * @param spool_list resource Resource received from spool_list
 * @return array next spool file data array in the list, or false if queue is exhausted
 */
function i5_spool_list_read($spool_list) {}


/**
 * Free spool list resourse
 * @param spool_list resource Resource received from spool_list
 * @return boolean success value
 */
function i5_spool_list_close($spool_list) {}


/**
 * Get the data from the spool file.
 * @param spool_name string The spool file name
 * @param jobname string The name of the job that created the file
 * @param username string The username of the job that created the file
 * @param job_number int The number of the job that created the file
 * @param spool_id int ID of the spool file in the queue (as returned by outq_read)
 * @param filename string[optional] IFS filename to store the data. If not provided, the data is returned as string
 * @return string if no file name passed as parameter, false if function failes
 */
function i5_spool_get_data($spool_name, $jobname, $username, $job_number, $spool_id, $filename = null) {}


/**
 * Retrieve system value
 * @param name string name of the system value
 * @param connection resource[optional] result of i5_connect
 * @return string system value, false if not found
 */
function i5_get_system_value($name, $connection = null) {}


/**
 * Creates a new userspace object.
 * @param properties int I5_INITSIZE - The initial size of the user space being created. This value must be from 1 byte to 16, 776, 704 bytes<br> I5_DESCRIPTION - user space description<br> I5_INIT_VALUE - The initial value of all bytes in the user space.<br> I5_EXTEND_ATTRIBUT - extended attribute. The extended attribute must be a valid *NAME. For example, an object type of *FILE has an extended attribute of PF (physical file), LF (logical file), DSPF (display file), SAVF (save file), and so on.<br> I5_AUTHORITY - The authority you give users who do not have specific private or group authority to the user space<br> I5_LIBNAME - Library name where the user space is located<br> II5_NAME - User space name (10 char max)
 * @param connection resource[optional] result of i5_connect
 * @return boolean success value
 */
function i5_userspace_create($properties, $connection = null) {}


/**
 * Opens a user space  and prepares it to be run.
 * @param name string User space name in library/obejct format
 * @param description array Data description in format defined by program_prepare.
 * @param connection resource[optional] connection - result of i5_connect
 * @return resource if open succeeded, false if open failed.
 */
function i5_userspace_prepare($name, $description, $connection = null) {}


/**
 * Retrieve user space data.
 * @param user_space resource User Space resource opened by i5_userspace_prepare
 * @param params array Parameters in data description format for the user space record
 * @return boolean success value
 */
function i5_userspace_get($user_space, $params) {}


/**
 * Add user space data
 * @param user_space resource User Space resource opened by i5_userspace_prepare
 * @param params array Parameters in data description format for the user space record
 * @return boolean success value
 */
function i5_userspace_put($user_space, $params) {}


/**
 * Create data area of given size
 * @param name string name of the data area
 * @param size integer size in bytes of the dataarea
 * @param connection resource[optional] result of i5_connect
 * @return boolean success value
 */
function i5_data_area_create($name, $size, $connection = null) {}


/**
 * Read data from the area
 * @param name string name of the data area
 * @param offset int[optional] offset for the data. If not offset is specified, all the area is read.
 * @param length int[optional] length of the data to read, -1 means whole area
 * @param connection resource[optional] connection - result of i5_connect
 * @return string data if read successful, false if read failed (including when offset is wrong) {}
 */
function i5_data_area_read($name, $offset = null, $length = null, $connection = null) {}


/**
 * Writes data to the area
 * @param name string name of the data area
 * @param value string[optional] value to write
 * @param offset int[optional] offset for the data. If not offset is specified, all the area is written. If value is shorter than length it is padded to the length. If it's longer it is truncated.
 * @param length int[optional] length of the data to read
 * @param connection resource[optional] result of i5_connect
 * @return boolean success value
 */
function i5_data_area_write($name, $value = null, $offset = null, $length = null, $connection = null) {}


/**
 * Delete the data area
 * @param name string name of the data area
 * @param connection resource[optional] result of i5_connect
 * @return boolean success value
 */
function i5_data_area_delete($name, $connection = null) {}


/**
 * Open job log.
 * @param elements array[optional] JobName, JobUser, JobNumber, MaxMessage, Direction (default is current job)
 * @param connection resource[optional] result of i5_connect
 * @return resource The resource for fetching job log list if OK and false if failed.
 */
function i5_jobLog_list($elements = null, $connection = null) {}


/**
 * Get array for a job log entry
 * @param list resource resource returned by i5_jobLog_list function
 * @return array with the message element if OK, false if failed.
 */
function i5_jobLog_list_read($list) {}


/**
 * Close handle received from i5_jobLog_list()
 * @param handle resource Job list handle as returned by i5_jobLog_list()
 * @return boolean success value
 */
function i5_jobLog_list_close($handle) {}


/**
 * Open active job list. Use i5_job_list_read function to retrieve the job entries from this handle.
 * @param elements array[optional] JobName, JobUser, JobNumber, JobType, Direction (default is current job)
 * @param connection resource[optional] result of i5_connect
 * @return resource The resource for fetching job list if OK and false if failed.
 */
function i5_job_list($elements, $connection) {}


/**
 * Get array for an acive job entry
 * @param list resource resource returned by i5_job_list function
 * @return array with an job entry element if OK, false if failed.
 */
function i5_job_list_read($list) {}


/**
 * Close handle received from i5_job_list().
 * @param handle resource Job list handle as returned by i5_job_list()
 * @return boolean success value
 */
function i5_job_list_close($handle) {}


/**
 * Open message queue for reading.
 * Use fetch() on returned handle to read messages from the queue.
 * @param name string message queue name
 * @param connection resource[optional] result of i5_connect
 * @return resource Handle for message queue to use fetch on.
 */
function i5_messageq_open($name, $connection = null) {}


/**
 * Close handle received from messageq_open().
 * @param handle resource Message queue handle as returned by i5_messageq_open() {}
 * @return boolean success value
 */
function i5_messageq_close($handle) {}


/**
 * Open object list
 * @param library string library name (can be also *CURLIB or I5_CURLIB)
 * @param type string object type to fetch (*ALL or I5_ALL_OBJECTS for all)
 * @param name string[optional] name or wildcard of objects to read, default is all
 * @param connection resource[optional] result of i5_connect
 * @return resource for fetch if everything is OK, false on error
 */
function i5_objects_list($library, $type, $name = null, $connection = null) {}


/**
 * Get array for a object list entry
 * @param list resource resource returned by i5_objects_list function
 * @return array with the message element if OK, false if failed.
 */
function i5_objects_list_read($list) {}


/**
 * Close handle received from i5_objects_list().
 * @param handle resource Job list handle as returned by i5_objects_list()
 * @return bool success value
 */
function i5_objects_list_close($handle) {}

define('I5_CURLIB', "*CURLIB");
define('I5_ALL_OBJECTS', "*ALL");
define('I5_ALL_NAMES', "*");
define('I5_LIST_MINIMAL', 0);
define('I5_LIST_DETAILED', 1);
define('I5_LIST_FULL', 2);
define('I5_TYPE_CHAR', 1);
define('I5_TYPE_INT', 2);
define('I5_TYPE_PACKED', 3);
define('I5_TYPE_ZONED', 4);
define('I5_TYPE_FLOAT', 5);
define('I5_TYPE_BYTE', 6);
define('I5_TYPE_STRUCT', 7);
define('I5_INPUT', 1);
define('I5_OUTPUT', 2);
define('I5_JOB_ACT_JOB_STS', '');
define('I5_JOB_ALW_MULTI_THREADS', '');
define('I5_JOB_ACT_ENDJOB_STS', '');
define('I5_JOB_BRKMSG', '');
define('I5_JOB_CANCEL_KEY', '');
define('I5_JOB_CCSID', '');
define('I5_JOB_CNTRYID', '');
define('I5_JOB_USRPRF', '');
define('I5_JOB_COMPLETION_STS', '');
define('I5_JOB_POOL_ID', '');
define('I5_JOB_CHAR_ID_CTRL', '');
define('I5_JOB_PROCESS_UNIT_TIME', '');
define('I5_JOB_PROCESS_UNIT_TIME_DB', '');
define('I5_JOB_DATETIME_ACTIVE', '');
define('I5_JOB_DATETIME_IN', '');
define('I5_JOB_DATETIME_SCHED', '');
define('I5_JOB_DATETIME_JOBQ', '');
define('I5_JOB_DATFMT', '');
define('I5_JOB_DATSEP', '');
define('I5_JOB_DBCS_CAP', '');
define('I5_JOB_DDM_HANDLE', '');
define('I5_JOB_DFTWAIT', '');
define('I5_JOB_DEVRCYACN', '');
define('I5_JOB_DEVNAME', '');
define('I5_JOB_DFTCCSID', '');
define('I5_JOB_DECFMT', '');
define('I5_JOB_DATETIME_END', '');
define('I5_JOB_ENDSEV', '');
define('I5_JOB_ENDSTS', '');
define('I5_JOB_EXITKEY', '');
define('I5_JOB_FUNC_NAME', '');
define('I5_JOB_FUNC_TYPE', '');
define('I5_JOB_SIGNED_JOB', '');
define('I5_JOB_GRPPRFNAME', '');
define('I5_JOB_GRPPRFNAME_SUP', '');
define('I5_JOB_INQMSGRPLY', '');
define('I5_JOB_ACCOUNT_CODE', '');
define('I5_JOB_DATE', '');
define('I5_JOB_DESC_NAME', '');
define('I5_JOB_QUEUE_NAME', '');
define('I5_JOB_QUEUE_PTY', '');
define('I5_JOB_SWITCHES', '');
define('I5_JOB_JOBMSGQFL', '');
define('I5_JOB_JOBMSGQ_SIZE', '');
define('I5_JOB_USRID', '');
define('I5_JOB_USRID_SETTING', '');
define('I5_JOB_END_REASON', '');
define('I5_JOB_LOG_PENDING', '');
define('I5_JOB_TYPE_ENHANCED', '');
define('I5_JOB_LANGID', '');
define('I5_JOB_LOGLVL', '');
define('I5_JOB_LOGCLPGM', '');
define('I5_JOB_LOGSEV', '');
define('I5_JOB_LOGTEXT', '');
define('I5_JOB_MODE_NAME', '');
define('I5_JOB_MAX_PROC_UNIT_TIME', '');
define('I5_JOB_MAX_TMP_STG_K', '');
define('I5_JOB_MAX_THREADS', '');
define('I5_JOB_MAX_TMP_STG_M', '');
define('I5_JOB_MEM_POOL_NAME', '');
define('I5_JOB_MSGRPL', '');
define('I5_JOB_INTERACTIVE_TRS', '');
define('I5_JOB_DB_LCKWAIT', '');
define('I5_JOB_ MCH_LCKW', '');
define('I5_JOB_NONDB_LCKW', '');
define('I5_JOB_AUX_IOREQ', '');
define('I5_JOB_OUTQ_NAME', '');
define('I5_JOB_OUTQ_PTY', '');
define('I5_JOB_PRTTEXT', '');
define('I5_JOB_PRTDEVNAME', '');
define('I5_JOB_PURGE', '');
define('I5_JOB_PRD_RETCODE', '');
define('I5_JOB_PROG_RETCODE', '');
define('I5_JOB_PENDING_SGNSET', '');
define('I5_JOB_PROCESS_ID', '');
define('I5_JOB_RESPONSE_TIME', '');
define('I5_JOB_RUNPTY', '');
define('I5_JOB_ROUTING_DATA', '');
define('I5_JOB_STRSEQ', '');
define('I5_JOB_STS_MSGHDL', '');
define('I5_JOB_STS_JOBQ', '');
define('I5_JOB_SBMJOB', '');
define('I5_JOB_SBMMSGQ', '');
define('I5_JOB_SBSD', '');
define('I5_JOB_SYSPOOLID', '');
define('I5_JOB_SPCLENV', '');
define('I5_JOB_SGNBLK_MASK', '');
define('I5_JOB_SGNSTS', '');
define('I5_JOB_SVRTYPE', '');
define('I5_JOB_SPLFILE_ACTION', '');
define('I5_JOB_TIMSEP', '');
define('I5_JOB_TIMESLICE', '');
define('I5_JOB_TIMESLICE_END', '');
define('I5_JOB_TMPSTGK', '');
define('I5_JOB_TIME_DB_LCKW', '');
define('I5_JOB_TIME_MCH_LCKW', '');
define('I5_JOB_TIME_NONDB_LCKW', '');
define('I5_JOB_THREADCNT', '');
define('I5_LOBJ_MESSAGE_IDENTIFIER', '');
define('I5_LOBJ_MESSAGE_TYPE', '');
define('I5_LOBJ_MESSAGE_FILENAME', '');
define('I5_LOBJ_MESSAGE_FILELIBRARY', '');
define('I5_LOBJ_DATASENT', '');
define('I5_LOBJ_TIMESENT', '');
define('I5_LOBJ_TIMESENT_MICRO', '');
define('I5_LOBJ_ALERTOPT', '');
define('I5_LOBJ_RPLDATA1', '');
define('I5_LOBJ_MSG', '');
define('I5_LOBJ_MSGDTA', '');
define('I5_LOBJ_MSGHLP', '');
define('I5_LOBJ_MSGHLPDTA', '');
define('I5_LOBJ_MSGHLPDTAFMT', '');
define('I5_LOBJ_DFTRPLY', '');
define('I5_LOBJ_SNDNAME', '');
define('I5_LOBJ_SNDTYPE', '');
define('I5_LOBJ_SNDPGM', '');
define('I5_LOBJ_SNDMOD', '');
define('I5_LOBJ_SNDPROC', '');
define('I5_LOBJ_RCVTYPE', '');
define('I5_LOBJ_RCVPROG', '');
define('I5_LOBJ_RCVMOD', '');
define('I5_LOBJ_RCVPROC', '');
define('I5_LOBJ_MSGFILE', '');
define('I5_LOBJ_PROBLEMID', '');
define('I5_LOBJ_RPLYSTS', '');
define('I5_LOBJ_RQSSTS', '');
define('I5_LOBJ_RQSLVL', '');
define('I5_LOBJ_TXTCCSID', '');
define('I5_LOBJ_DATACCSID', '');


// 5250 Bridge


/**
 * API class for working with 5250 bridge.
 * This class handles all communication to and from the 5250 bridge
 */
class Zend_5250 {	

	/**
	 * @param string $jobId
	 * @param Zend_5250_Handler $storageHandler If not set, a default (session based) storage will be used
	 */
	public function __construct($jobId = null, Zend_5250_Handler $storageHandler = null) {
	}
	
	/**
	 * Returns true if the bridge was already connected, othewise - false
	 *
	 * @return boolean
	 */
	public function isConnected() {
	}
	
	/**
	 * Create a connection to 5250 bridge and fetch the current stage (either from the bridge or from the storage)
	 * 
	 * @param string $username
	 * @param string $password
	 * @return Zend_5250_Response
	 */
	public function connect($username = '', $password = '') {
	}
	
	/**
	 * Sends a request to the 5250 bridge
	 * Once user sets all desired data in the input fields (using the setInputField() method), this function
	 * should be called with the command the user has selected (command, can be one of the 'F' keys, enter, 
	 * page up, etc.)
	 * 
	 * @param string $command
	 * @return Zend_5250_Response
	 */
	public function submit($command = Zend_5250::ENTER) {
	}
	
	/**
	 * Disconnecting from 5250 bridge (closing connection to application)
	 */
	public function disconnect() {
	}

	/**
	 * Sets data into input field specified by $id
	 * 
	 * @param int $id
	 * @param string $value
	 */
	public function setInputField($id, $value) {
	}
	
	/**
	 * Sets the focus of the page to a specified field
	 *
	 * @param Zend_5250_FieldData $fieldData
	 */
	public function setFocusedField(Zend_5250_FieldData $fieldData) {
	}
	
	/**
	 * Returns an array containing the i5 5250 Bridge color palette
	 * Color code is the key of the array and the color name is the value
	 * 
	 * @static
	 * @return array
	 */
	public static function getColorPalette() {
	}
	
	
	/**
	 * List of possible commands for the 5250 Bridge
	 */
	const F1		= 'F1';
	const F2		= 'F2';
	const F3		= 'F3';
	const F4		= 'F4';
	const F5		= 'F5';
	const F6		= 'F6';
	const F7		= 'F7';
	const F8		= 'F8';
	const F9		= 'F9';
	const F10		= 'F10';
	const F11		= 'F11';
	const F12		= 'F12';
	const F13		= 'F13';
	const F14		= 'F14';
	const F15		= 'F15';
	const F16		= 'F16';
	const F17		= 'F17';
	const F18		= 'F18';
	const F19		= 'F19';
	const F20		= 'F20';
	const F21		= 'F21';
	const F22		= 'F22';
	const F23		= 'F23';
	const F24		= 'F24';
	const CLEAR		= 'CLEAR';
	const ENTER		= 'ENTER';
	const HELP		= 'HELP';
	const PAGEDN	= 'PAGEDN';
	const PAGEUP	= 'PAGEUP';
	const ROLLLF	= 'ROLLLF';
	const ROLLRT	= 'ROLLRT';
	const PRINTKEY	= 'PRINT';
	const BACKSP	= 'BACKSP';
	const FORWARD	= 'FORWARD';
	
}

/**
 * Zend_5250_Exception is class for handling exceptions of 5250 Bridge 
 *
 */
class Zend_5250_Exception extends Exception {

}

/**
 * Interface for saving 5250 bridge XML string.
 * The entire communication between 5250 bridge and PHP is done via XML file that has to be saved between
 * requests in order to maintain session with i5. The implementation of this interface allows this.
 * This interface can be implemented by user, in case default handler provided by Zend is not sufficiant, 
 * and the user wants to save XML string using a different method.
 */
interface Zend_5250_Handler {
	
	/**
	 * Sets a unique job ID that will be used for storing session data
	 *
	 * @param string $jobId
	 */
	public function setJobId($jobId);
	
	/**
	 * Returns whether or not a stage (XML string) is stored in this storage
	 * 
	 * @return bool
	 */
	public function isStored();
	
	/**
	 * Returns the XML string
	 * 
	 * @return string
	 */
	public function getXmlString();

	/**
	 * Sets the XML string
	 * @param string $value
	 */
	public function setXmlString($value);
	
	/**
	 * Unsetting XML string saved so far
	 */
	public function destroy();
}

/**
 * This class is responsible for saving 5250 bridge XML string in the PHP session.
 * The entire communication between 5250 bridge and PHP is done via XML file that has to be saved between
 * requests in order to maintain session with i5.
 * This class is used as default handler in the Zend_5250 class.
 */
class Zend_5250_Handler_Session implements Zend_5250_Handler {

	/**
	 * Contructor that startes the session if it wasn't started before
	 *
	 */
	public function __construct() {
	}
	
	public function isStored() {
	}
	
	/**
	 * Sets the session key that will be used in saving XML string
	 *
	 * @param string $jobId
	 */
	public function setJobId($jobId) {
	}
	
	/**
	 * Return the data that was saved under session key
	 *
	 * @return string
	 */
	public function getXmlString() {
	}
	
	/**
	 * Saves the passed value in the session
	 *
	 * @param string $value
	 */
	public function setXmlString($value) {
	}
	
	/*
	 * Destroys the existing session
	 */
	public function destroy() {
	}
	
}

/**
 * A response object that holds all the relevant information that was returned from a 5250 Bridge request
 * Holds the input and output fields of the stage, the field that is currenlty in focus and an optional application error 
 */
class Zend_5250_Response {	

	/**
	 * Create a response object for a 5250 bridge request 

	 * @param array $inputFields
	 * @param array $outputFields
	 * @param Zend_5250_FieldData|false $focusedField
	 * @param string $applicationError
	 */
	public function __construct($inputFields, $outputFields, $focusedField, $applicationError) {
	}

	/**
	 * Returns all input fields available at this stage
	 * 
	 * @return array of Zend_5250_FieldData_Input objects
	 */
	public function getInputFields() {
	}
	
	/**
	 * Returns input field specified by the given ID
	 * 
	 * @param int $id
	 * @return Zend_5250_FieldData_Input
	 */
	public function getInputField($id) {
	}
	
	/**
	 * Returns the field currently in focus
	 * 
	 * @return Zend_5250_FieldData or false if no field is in focus
	 */
	public function getFocusedField() {
	}
	
	/**
	 * Returns the number of input fields available in this stage
	 * 
	 * @return int 
	 */
	public function getInputFieldsCount() {
	}

	/**
	 * Returns all the output fields available at this stage
	 * 
	 * @return array of Zend_5250_FieldData_Output objects
	 */
	public function getOutputFields() {
	}
	
	/**
	 * Returns output field specified by the given ID
	 * 
	 * @param int $id
	 * @return Zend_5250_FieldData_Output
	 */
	public function getOutputField($id)  {
	}
	
	/**
	 * Returns the number of output fields available in this stage
	 * 
	 * @return int 
	 */
	public function getOutputFieldsCount() {
	}
	
	/**
	 * Returns the application error if occured
	 *
	 * @return string
	 */
	public function getApplicationError() {
	}
	
}

abstract class Zend_5250_FieldData {
	
	/**
	 * Saves the field's data
	 *
	 * @param integer $id
	 * @param SimpleXMLElement $field
	 */
	public function __construct($id, SimpleXMLElement $field) {
	}
	
	/**
	 * @return int The unique ID of this field data
	 */
	public function getId() {
	}
	
	/**
	 * @return int Height position of the field in the page
	 */
	public function getRow() {
	}
	
	/**
	 * @return int Width position of the field in the page
	 */
	public function getColumn() {
	}
	
	/**
	 * @return int The length of this field value
	 */
	public function getLength() {
	}
	
	/**
	 * @return int Color code as appear in the color pallete
	 */
	public function getColor() {
	}
	
	/**
	 * @return string This field value
	 */
	public function getValue() {
	}
	
}

/**
 * The Zend_5250_FieldData_Input class represents the input field
 */
class Zend_5250_FieldData_Input extends Zend_5250_FieldData {
	
	/**
	 * Saves the field's data
	 *
	 * @param integer $id
	 * @param SimpleXMLElement $field
	 */
	public function __construct($id, SimpleXMLElement $field) {
	}
	
	/**
	 * @return string
	 */
	public function getType() {
	}
	
	/**
	 * @return string
	 */
	public function getFont() {
	}
	
	/**
	 * @return string
	 */
	public function getFormat() {
	}

}

/**
 * The Zend_5250_FieldData_Output class represents the output field
 */
class Zend_5250_FieldData_Output extends Zend_5250_FieldData {
	
}

// connection

/**
 * Starts session according to provided job id
 * 
 * @param string $jobId
 * @return Zend_5250_Resource_Connection
 */
function zend_5250_open($jobId = null) {
}

/**
 * Creates a connection to the 5250 Bridge with provided username and password
 * 
 * @param Zend_5250_Resource_Connection $connection
 * @param string $username
 * @param string $password
 * @return Zend_5250_Resource_Response
 */
function zend_5250_connect($connection, $username = '', $password = '') {
}

/**
 * Returns true if the bridge was already connected, othewise - false
 *
 * @param Zend_5250_Resource_Connection $connection
 * @return boolean
 */
function zend_5250_is_connected($connection) {
}

/**
 * Sends a request to the 5250 bridge
 * Once user sets all desired data in the input fields (using the setInputField() method), this function
 * should be called with the command the user has selected (command, can be one of the 'F' keys, enter, 
 * page up, etc.)
 * 
 * @param Zend_5250_Resource_Connection $connection
 * @param string $command
 * @return Zend_5250_Resource_Response
 */
function zend_5250_submit($connection, $command = 'ENTER') {
}

/**
 * Disconnecting from 5250 bridge (closing connection to application)
 *
 * @param Zend_5250_Resource_Connection $connection
 */
function zend_5250_disconnect($connection) {
}

/**
 * Sets data into input field specified by $id
 * 
 * @param Zend_5250_Resource_Connection $connection
 * @param int $id
 * @param mixed $value
 */
function zend_5250_set_input_field($connection, $id, $value) {
}

/**
 * Sets the focus of the page to a specified field
 *
 * @param Zend_5250_Resource_Connection $connection
 * @param array $field
 */
function zend_5250_set_focused_field($connection, $field) {
}

/**
 * Returns an array containing the i5 5250 Bridge color palette
 * Color code is the key of the array and the color name is the value
 * 
 * @return array
 */
function zend_5250_get_color_palette() {
}

// response

/**
 * Returns all input fields available at this stage
 * 
 * @param Zend_5250_Resource_Response $response
 * @return array of arrays
 */
function zend_5250_get_input_fields($response) {
}

/**
 * Returns input field specified by the given ID
 * 
 * @param Zend_5250_Resource_Response $response
 * @param int $id
 * @return array
 */
function zend_5250_get_input_field($response, $id) {
}

/**
 * Returns the field currently in focus
 * 
 * @param Zend_5250_Resource_Response $response
 * @return array
 */
function zend_5250_get_focused_field($response) {
}

/**
 * Returns the number of input fields available in this stage
 * 
 * @param Zend_5250_Resource_Response $response
 * @return int 
 */
function zend_5250_get_input_fields_count($response) {
}

/**
 * Returns all the output fields available at this stage
 * 
 * @param Zend_5250_Resource_Response $response
 * @return array of arrays
 */
function zend_5250_get_output_fields($response) {
}

/**
 * Returns output field specified by the given ID
 * 
 * @param Zend_5250_Resource_Response $response
 * @param int $id
 * @return array
 */
function zend_5250_get_output_field($response, $id)  {
}

/**
 * Returns the number of output fields available in this stage
 * 
 * @param Zend_5250_Resource_Response $response
 * @return int 
 */
function zend_5250_get_output_fields_count($response) {
}

/**
 * Returns the application error if occured
 * 
 * @param Zend_5250_Resource_Response $response
 * @return string
 */
function zend_5250_get_application_error($response) {
}

// error handling

/**
 * Returns an error if occured in some function 
 * 
 * @return string
 */
function zend_5250_get_error() {
}


?>
