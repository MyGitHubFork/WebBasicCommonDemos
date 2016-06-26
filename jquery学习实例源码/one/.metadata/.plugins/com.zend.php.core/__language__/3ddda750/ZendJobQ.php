<?php
/**
 * The ZendJobQueue is a PHP class that implements a connection to the Job Queue Daemon
 * @since 5.0
 */
class ZendJobQueue {

/**
 * A HTTP type of job with an absolute URL
 * @since 5.0
 */
const TYPE_HTTP = "";

/**
 * A HTTP type of job with a relative URL
 * @since 5.0
 */
const TYPE_HTTP_RELATIVE = "";

/**
 * A low priority job
 * @since 5.0
 */
const PRIORITY_LOW = "";

/**
 * A normal priority job
 * @since 5.0
 */
const PRIORITY_NORMAL = "";

/**
 * A high priority job
 * @since 5.0
 */
const PRIORITY_HIGH = "";

/**
 * An urgent priority job
 * @since 5.0
 */
const PRIORITY_URGENT = "";

/**
 * The job is waiting to be processed
 * @since 5.0
 */
const JOB_STATUS_PENDING = "";

/**
 * The job is waiting for its predecessor's completion
 * @since 5.0
 */
const JOB_STATUS_WAITING_PREDECESSOR = "";

/**
 * The job is executing
 * @since 5.0
 */
const JOB_STATUS_RUNNING = "";

/**
 * Job execution has been completed successfully
 * @since 5.0
 */
const JOB_STATUS_COMPLETED = "";

/**
 * The job execution failed
 * @since 5.0
 */
const JOB_STATUS_FAILED = "";

/**
 * The job was executed and reported its successful completion status
 * @since 5.0
 */
const JOB_STATUS_OK = "";

/**
 * The job was executed but reported failed completion status
 * @since 5.0
 */
const JOB_STATUS_LOGICALLY_FAILED = "";

/**
 * Job execution timeout
 * @since 5.0
 */
const JOB_STATUS_TIMEOUT = "";

/**
 * A logically removed job
 * @since 5.0
 */
const JOB_STATUS_REMOVED = "";

/**
 * The job is scheduled to be executed at some specific time
 * @since 5.0
 */
const JOB_STATUS_SCHEDULED = "";

/**
 * The job execution is susspended
 * @since 5.0
 */
const JOB_STATUS_SUSPENDED = "";

/**
 * Disable sorting of result set of getJobsList()
 * @since 5.0
 */
const SORT_JOB_NONE = "";

/**
 * Sort result set of getJobsList() by job id
 * @since 5.0
 */
const SORT_BY_ID = "";

/**
 * Sort result set of getJobsList() by job type
 * @since 5.0
 */
const SORT_BY_TYPE = "";

/**
 * Sort result set of getJobsList() by job script name
 * @since 5.0
 */
const SORT_BY_SCRIPT = "";

/**
 * Sort result set of getJobsList() by application name
 * @since 5.0
 */
const SORT_BY_APPLICATION = "";

/**
 * Sort result set of getJobsList() by job name
 * @since 5.0
 */
const SORT_BY_NAME = "";

/**
 * Sort result set of getJobsList() by job priority
 * @since 5.0
 */
const SORT_BY_PRIORITY = "";

/**
 * Sort result set of getJobsList() by job status
 * @since 5.0
 */
const SORT_BY_STATUS = "";

/**
 * Sort result set of getJobsList() by job predecessor
 * @since 5.0
 */
const SORT_BY_PREDECESSOR = "";

/**
 * Sort result set of getJobsList() by job persistence flag
 * @since 5.0
 */
const SORT_BY_PERSISTENCE = "";

/**
 * Sort result set of getJobsList() by job creation time
 * @since 5.0
 */
const SORT_BY_CREATION_TIME = "";

/**
 * Sort result set of getJobsList() by job schedule time
 * @since 5.0
 */
const SORT_BY_SCHEDULE_TIME = "";

/**
 * Sort result set of getJobsList() by job start time
 * @since 5.0
 */
const SORT_BY_START_TIME = "";

/**
 * Sort result set of getJobsList() by job end time
 * @since 5.0
 */
const SORT_BY_END_TIME = "";

/**
 * Sort result set of getJobsList() in direct order
 * @since 5.0
 */
const SORT_ASC = "";

/**
 * Sort result set of getJobsList() in reverse order
 * @since 5.0
 */
const SORT_DESC = "";

/**
 * Constant to report completion status from the jobs using setCurrentJobStatus()
 * @since 5.0
 */
const OK = "";

/**
 * Constant to report completion status from the jobs using setCurrentJobStatus()
 * @since 5.0
 */
const FAILED = "";

/**
 * Creates a ZendJobQueue object connected to a Job Queue daemon.
 * @param $queue string[optional]
 * @since 5.0
 */
function __construct($queue = 'taken from default_binding directive') {}

/**
 * Creates a new URL based job to make the Job Queue Daemon call given $script with given $vars
 * @param $url string
 * @param $vars array
 * @param $options mixed
 * @return int A job identifier which can be used to retrieve the job status
 * @since 5.0
 */
function createHttpJob($url, $vars, $options) {}

/**
 * Retrieves status of previously created job identified by $job_id
 * @param $job_id int
 * @return array The array contains status, completion status and output of the job
 * @since 5.0
 */
function getJobStatus($job_id) {}

/**
 * Removes the job from the queue. Makes all dependent jobs fail. In case the job is in progress it will be finished but dependent jobs won't be started anyway. For non-existing jobs the function just returns false. Finished jobs are simply removed from the database
 * @param $job_id int
 * @return boolean The job was removed or not removed
 * @since 5.0
 */
function removeJob($job_id) {}

/**
 * Restart a previously executed Job and all its followers.
 * @param $job_id int
 * @return boolean If the job was restarted or not restarted
 * @since 5.0
 */
function restartJob($job_id) {}

/**
 * Checks if Queue is suspended and returns true or false
 * @return boolean A Job Queue status
 * @since 5.0
 */
function isSuspended() {}

/**
 * Checks if the Job Queue Daemon is running
 * @return boolean Return true if the Job Queue Deamon is running, otherwise it returns false
 * @since 5.0
 */
function isJobQueueDaemonRunning() {}

/**
 * Suspends the Job Queue so it will accept new jobs, but won't start them. The jobs which were executed during call to this function will be completed
 * @since 5.0
 */
function suspendQueue() {}

/**
 * Resumes the Job Queue so it will schedule and start queued jobs.
 * @since 5.0
 */
function resumeQueue() {}

/**
 * Returns internal daemon statistics such as up-time, number of complete jobs, number of failed jobs, number of logically failed jobs, number of waiting jobs, number of currently running jobs, etc
 * @return array Associative array
 * @since 5.0
 */
function getStatistics() {}

/**
 * Returns the current value of the configuration option of the Job Queue Daemon
 * @return array Associative array of configuration variables
 * @since 5.0
 */
function getConfig() {}

/**
 * Re-reads the configuration file of the Job Queue Daemon and reloads all directives that are reloadable
 * @return boolean If configuration file was loaded successfully or not
 * @since 5.0
 */
function reloadConfig() {}

/**
 * Returns an associative array with properties of the job with the given id from the daemon database
 * @param $job_id int
 * @return array array of job details. The following properties are provided (some of them don't have to always be set): "id" - The job identifier "type" - The job type (see TYPE_* constants) "status" - The job status (see STATUS_* constants) "priority" - The job priority (see PRIORITY_* constants) "persistent" - The persistence flag "script" - The URL "predecessor" - The job predecessor "name" - The job name "vars" - The input variables or arguments "http_headers" - The additional HTTP headers for HTTP jobs "output" - The output of the job "error" - The error output of the job "creation_time" - The time when the job was created "start_time" - The time when the job was started "end_time" - The time when the job was finished "schedule" - The CRON-like schedule command "schedule_time" - The time when the job execution was scheduled "app_id" - The application name
 * @since 5.0
 */
function getJobInfo($job_id) {}

/**
 * Returns a list of associative arrays with the properties of the jobs which depend on the job with the given identifier
 * @param $job_id int
 * @return array A list of jobs
 * @since 5.0
 */
function getDependentJobs($job_id) {}

/**
 * Returns a list of associative arrays with properties of jobs which conform to a given query
 * @param $query array
 * @param $total int
 * @return array A list of jobs with their details
 * @since 5.0
 */
function getJobsList($query, $total) {}

/**
 * Returns an array of application names known by the daemon
 * @return array A list of applications
 * @since 5.0
 */
function getApplications() {}

/**
 * Returns an array of all the registered scheduled rules. Each rule is represented by a nested associative array with the following properties: "id" - The scheduling rule identifier "status" - The rule status (see STATUS_* constants) "type" - The rule type (see TYPE_* constants) "priority" - The priority of the jobs created by this rule "persistent" - The persistence flag of the jobs created by this rule "script" - The URL or script to run "name" - The name of the jobs created by this rule "vars" - The input variables or arguments "http_headers" - The additional HTTP headers "schedule" - The CRON-like schedule command "app_id" - The application name associated with this rule and created jobs "last_run" - The last time the rule was run "next_run" - The next time the rule will run
 * @return array A list of scheduling rules
 * @since 5.0
 */
function getSchedulingRules() {}

/**
 * Returns an associative array with the properties of the scheduling rule identified by the given argument. The list of the properties is the same as in getSchedulingRule()
 * @param $rule_id int
 * @return array Information about the scheduling rule
 * @since 5.0
 */
function getSchedulingRule($rule_id) {}

/**
 * Deletes the scheduling rule identified by the given $rule_id and scheduled jobs created by this rule
 * @param $rule_id int
 * @return boolean If scheduling rule was deleted or not deleted
 * @since 5.0
 */
function deleteSchedulingRule($rule_id) {}

/**
 * Suspends the scheduling rule identified by given $rule_id and deletes scheduled jobs created by this rule
 * @param $rule_id int
 * @return boolean If scheduling rule was suspended or not suspended
 * @since 5.0
 */
function suspendSchedulingRule($rule_id) {}

/**
 * Resumes the scheduling rule identified by given $rule_id and creates a corresponding scheduled job
 * @param $rule_id int
 * @return boolean If the scheduling rule was resumed or not resumed
 * @since 5.0
 */
function resumeSchedulingRule($rule_id) {}

/**
 * Updates and reschedules the existing scheduling rule
 * @param $rule_id int
 * @param $script string
 * @param $vars array
 * @param $options array
 * @return boolean If scheduling rule was updated or not updated
 * @since 5.0
 */
function updateSchedulingRule($rule_id, $script, $vars, $options) {}

/**
 * Decodes an array of input variables passed to the HTTP job
 * @return array The job variables
 * @since 5.0
 */
function getCurrentJobParams() {}

/**
 * Reports job completion status (OK or FAILED) back to the daemon
 * @param $completion int
 * @param $msg string
 * @since 5.0
 */
function setCurrentJobStatus($completion, $msg) {}

/**
 * Returns the current job ID. Returns NULL if not called within a job context.
 * @return int The job id
 * @since 5.0
 */
function getCurrentJobId() {}

}
?>