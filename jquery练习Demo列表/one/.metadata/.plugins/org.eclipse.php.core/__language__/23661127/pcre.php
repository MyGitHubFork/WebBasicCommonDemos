<?php

// Start of pcre v.7.0.0-dev

/**
 * Perform a regular expression match
 * @link http://www.php.net/manual/en/function.preg-match.php
 * @param string $pattern <p>
 * The pattern to search for, as a string.
 * </p>
 * @param string $subject <p>
 * The input string.
 * </p>
 * @param array $matches [optional] <p>
 * If matches is provided, then it is filled with
 * the results of search. $matches[0] will contain the
 * text that matched the full pattern, $matches[1]
 * will have the text that matched the first captured parenthesized
 * subpattern, and so on.
 * </p>
 * @param int $flags [optional] <p>
 * flags can be the following flag:
 * PREG_OFFSET_CAPTURE
 * If this flag is passed, for every occurring match the appendant string
 * offset will also be returned. Note that this changes the value of
 * matches into an array where every element is an
 * array consisting of the matched string at offset 0
 * and its string offset into subject at offset
 * 1.
 * @param int $offset [optional] <p>
 * Normally, the search starts from the beginning of the subject string.
 * The optional parameter offset can be used to
 * specify the alternate place from which to start the search (in bytes).
 * </p>
 * <p>
 * Using offset is not equivalent to passing
 * substr($subject, $offset) to
 * preg_match in place of the subject string,
 * because pattern can contain assertions such as
 * ^, $ or
 * (?&lt;=x). Compare:
 * ]]>
 * The above example will output:</p>
 * <p>
 * while this example
 * </p>
 * ]]>
 * <p>
 * will produce
 * </p>
 * Array
 * (
 * [0] => def
 * [1] => 0
 * )
 * )
 * ]]>
 * </p>
 * @return int preg_match returns 1 if the pattern
 * matches given subject, 0 if it does not, or false
 * if an error occurred.
 */
function preg_match ($pattern, $subject, array &$matches = null, $flags = null, $offset = null) {}

/**
 * Perform a global regular expression match
 * @link http://www.php.net/manual/en/function.preg-match-all.php
 * @param string $pattern <p>
 * The pattern to search for, as a string.
 * </p>
 * @param string $subject <p>
 * The input string.
 * </p>
 * @param array $matches [optional] <p>
 * Normally, the search starts from the beginning of the subject string.
 * The optional parameter offset can be used to
 * specify the alternate place from which to start the search (in bytes).
 * </p>
 * <p>
 * Using offset is not equivalent to passing
 * substr($subject, $offset) to
 * preg_match_all in place of the subject string,
 * because pattern can contain assertions such as
 * ^, $ or
 * (?&lt;=x). See preg_match
 * for examples.
 * </p>
 * @param int $flags [optional] <p>
 * Can be a combination of the following flags (note that it doesn't make
 * sense to use PREG_PATTERN_ORDER together with
 * PREG_SET_ORDER):
 * PREG_PATTERN_ORDER
 * <p>
 * Orders results so that $matches[0] is an array of full
 * pattern matches, $matches[1] is an array of strings matched by
 * the first parenthesized subpattern, and so on.
 * </p>
 * <p>
 * ]]>
 * The above example will output:</p>
 * example: , this is a test
 * example: , this is a test
 * ]]>
 * <p>
 * So, $out[0] contains array of strings that matched full pattern,
 * and $out[1] contains array of strings enclosed by tags.
 * </p>
 * </p>
 * @param int $offset [optional] 
 * @return int the number of full pattern matches (which might be zero),
 * or false if an error occurred.
 */
function preg_match_all ($pattern, $subject, array &$matches = null, $flags = null, $offset = null) {}

/**
 * Perform a regular expression search and replace
 * @link http://www.php.net/manual/en/function.preg-replace.php
 * @param mixed $pattern <p>
 * The pattern to search for. It can be either a string or an array with
 * strings.
 * </p>
 * <p>
 * Several PCRE modifiers
 * are also available.
 * </p>
 * @param mixed $replacement <p>
 * The string or an array with strings to replace. If this parameter is a
 * string and the pattern parameter is an array,
 * all patterns will be replaced by that string. If both
 * pattern and replacement
 * parameters are arrays, each pattern will be
 * replaced by the replacement counterpart. If
 * there are fewer elements in the replacement
 * array than in the pattern array, any extra
 * patterns will be replaced by an empty string.
 * </p>
 * <p>
 * replacement may contain references of the form
 * \\n or (since PHP 4.0.4)
 * $n, with the latter form
 * being the preferred one. Every such reference will be replaced by the text
 * captured by the n'th parenthesized pattern.
 * n can be from 0 to 99, and
 * \\0 or $0 refers to the text matched
 * by the whole pattern. Opening parentheses are counted from left to right
 * (starting from 1) to obtain the number of the capturing subpattern.
 * To use backslash in replacement, it must be doubled
 * ("\\\\" PHP string).
 * </p>
 * <p>
 * When working with a replacement pattern where a backreference is 
 * immediately followed by another number (i.e.: placing a literal number
 * immediately after a matched pattern), you cannot use the familiar 
 * \\1 notation for your backreference. 
 * \\11, for example, would confuse
 * preg_replace since it does not know whether you
 * want the \\1 backreference followed by a literal 
 * 1, or the \\11 backreference
 * followed by nothing. In this case the solution is to use 
 * \${1}1. This creates an isolated 
 * $1 backreference, leaving the 1
 * as a literal.
 * </p>
 * <p>
 * When using the deprecated e modifier, this function escapes
 * some characters (namely ', ",
 * \ and NULL) in the strings that replace the
 * backreferences. This is done to ensure that no syntax errors arise
 * from backreference usage with either single or double quotes (e.g.
 * 'strlen(\'$1\')+strlen("$2")'). Make sure you are
 * aware of PHP's string
 * syntax to know exactly how the interpreted string will look.
 * </p>
 * @param mixed $subject <p>
 * The string or an array with strings to search and replace.
 * </p>
 * <p>
 * If subject is an array, then the search and
 * replace is performed on every entry of subject,
 * and the return value is an array as well.
 * </p>
 * @param int $limit [optional] <p>
 * The maximum possible replacements for each pattern in each
 * subject string. Defaults to
 * -1 (no limit).
 * </p>
 * @param int $count [optional] <p>
 * If specified, this variable will be filled with the number of
 * replacements done.
 * </p>
 * @return mixed preg_replace returns an array if the
 * subject parameter is an array, or a string
 * otherwise.
 * </p>
 * <p>
 * If matches are found, the new subject will
 * be returned, otherwise subject will be
 * returned unchanged or &null; if an error occurred.
 */
function preg_replace ($pattern, $replacement, $subject, $limit = null, &$count = null) {}

/**
 * Perform a regular expression search and replace using a callback
 * @link http://www.php.net/manual/en/function.preg-replace-callback.php
 * @param mixed $pattern <p>
 * The pattern to search for. It can be either a string or an array with
 * strings.
 * </p>
 * @param callable $callback <p>
 * A callback that will be called and passed an array of matched elements
 * in the subject string. The callback should
 * return the replacement string. This is the callback signature:
 * </p>
 * <p>
 * stringhandler
 * arraymatches
 * </p>
 * <p>
 * You'll often need the callback function
 * for a preg_replace_callback in just one place.
 * In this case you can use an
 * anonymous function to
 * declare the callback within the call to
 * preg_replace_callback. By doing it this way
 * you have all information for the call in one place and do not
 * clutter the function namespace with a callback function's name
 * not used anywhere else.
 * </p>
 * <p>
 * preg_replace_callback and 
 * anonymous function
 * ]]>
 * </p>
 * @param mixed $subject <p>
 * The string or an array with strings to search and replace.
 * </p>
 * @param int $limit [optional] <p>
 * The maximum possible replacements for each pattern in each
 * subject string. Defaults to
 * -1 (no limit).
 * </p>
 * @param int $count [optional] <p>
 * If specified, this variable will be filled with the number of
 * replacements done.
 * </p>
 * @return mixed preg_replace_callback returns an array if the
 * subject parameter is an array, or a string
 * otherwise. On errors the return value is &null;
 * </p>
 * <p>
 * If matches are found, the new subject will be returned, otherwise
 * subject will be returned unchanged.
 */
function preg_replace_callback ($pattern, $callback, $subject, $limit = null, &$count = null) {}

/**
 * Perform a regular expression search and replace using callbacks
 * @link http://www.php.net/manual/en/function.preg-replace-callback-array.php
 * @param array $patterns_and_callbacks <p>
 * An associative array mapping patterns (keys) to callbacks (values).
 * </p>
 * @param mixed $subject <p>
 * The string or an array with strings to search and replace.
 * </p>
 * @param int $limit [optional] <p>
 * The maximum possible replacements for each pattern in each
 * subject string. Defaults to
 * -1 (no limit).
 * </p>
 * @param int $count [optional] <p>
 * If specified, this variable will be filled with the number of
 * replacements done.
 * </p>
 * @return mixed preg_replace_callback_array returns an array if the
 * subject parameter is an array, or a string
 * otherwise. On errors the return value is &null;
 * </p>
 * <p>
 * If matches are found, the new subject will be returned, otherwise
 * subject will be returned unchanged.
 */
function preg_replace_callback_array (array $patterns_and_callbacks, $subject, $limit = null, &$count = null) {}

/**
 * Perform a regular expression search and replace
 * @link http://www.php.net/manual/en/function.preg-filter.php
 * @param mixed $pattern 
 * @param mixed $replacement 
 * @param mixed $subject 
 * @param int $limit [optional] 
 * @param int $count [optional] 
 * @return mixed an array if the subject
 * parameter is an array, or a string otherwise.
 * </p>
 * <p>
 * If no matches are found or an error occurred, an empty array 
 * is returned when subject is an array
 * or &null; otherwise.
 */
function preg_filter ($pattern, $replacement, $subject, $limit = null, &$count = null) {}

/**
 * Split string by a regular expression
 * @link http://www.php.net/manual/en/function.preg-split.php
 * @param string $pattern <p>
 * The pattern to search for, as a string.
 * </p>
 * @param string $subject <p>
 * The input string.
 * </p>
 * @param int $limit [optional] <p>
 * If specified, then only substrings up to limit
 * are returned with the rest of the string being placed in the last
 * substring. A limit of -1, 0 or &null; means "no limit"
 * and, as is standard across PHP, you can use &null; to skip to the 
 * flags parameter.
 * </p>
 * @param int $flags [optional] <p>
 * flags can be any combination of the following
 * flags (combined with the | bitwise operator):
 * PREG_SPLIT_NO_EMPTY
 * If this flag is set, only non-empty pieces will be returned by
 * preg_split.
 * @return array an array containing substrings of subject
 * split along boundaries matched by pattern.
 */
function preg_split ($pattern, $subject, $limit = null, $flags = null) {}

/**
 * Quote regular expression characters
 * @link http://www.php.net/manual/en/function.preg-quote.php
 * @param string $str <p>
 * The input string.
 * </p>
 * @param string $delimiter [optional] <p>
 * If the optional delimiter is specified, it
 * will also be escaped. This is useful for escaping the delimiter
 * that is required by the PCRE functions. The / is the most commonly
 * used delimiter.
 * </p>
 * @return string the quoted (escaped) string.
 */
function preg_quote ($str, $delimiter = null) {}

/**
 * Return array entries that match the pattern
 * @link http://www.php.net/manual/en/function.preg-grep.php
 * @param string $pattern <p>
 * The pattern to search for, as a string.
 * </p>
 * @param array $input <p>
 * The input array.
 * </p>
 * @param int $flags [optional] <p>
 * If set to PREG_GREP_INVERT, this function returns
 * the elements of the input array that do not match
 * the given pattern.
 * </p>
 * @return array an array indexed using the keys from the
 * input array.
 */
function preg_grep ($pattern, array $input, $flags = null) {}

/**
 * Returns the error code of the last PCRE regex execution
 * @link http://www.php.net/manual/en/function.preg-last-error.php
 * @return int one of the following constants (explained on their own page):
 * PREG_NO_ERROR
 * PREG_INTERNAL_ERROR
 * PREG_BACKTRACK_LIMIT_ERROR (see also pcre.backtrack_limit)
 * PREG_RECURSION_LIMIT_ERROR (see also pcre.recursion_limit)
 * PREG_BAD_UTF8_ERROR
 * PREG_BAD_UTF8_OFFSET_ERROR (since PHP 5.3.0)
 * PREG_JIT_STACKLIMIT_ERROR (since PHP 7.0.0)
 */
function preg_last_error () {}

define ('PREG_PATTERN_ORDER', 1);
define ('PREG_SET_ORDER', 2);
define ('PREG_OFFSET_CAPTURE', 256);
define ('PREG_SPLIT_NO_EMPTY', 1);
define ('PREG_SPLIT_DELIM_CAPTURE', 2);
define ('PREG_SPLIT_OFFSET_CAPTURE', 4);
define ('PREG_GREP_INVERT', 1);
define ('PREG_NO_ERROR', 0);
define ('PREG_INTERNAL_ERROR', 1);
define ('PREG_BACKTRACK_LIMIT_ERROR', 2);
define ('PREG_RECURSION_LIMIT_ERROR', 3);
define ('PREG_BAD_UTF8_ERROR', 4);
define ('PREG_BAD_UTF8_OFFSET_ERROR', 5);
define ('PREG_JIT_STACKLIMIT_ERROR', 6);
define ('PCRE_VERSION', "8.37 2015-04-28");

// End of pcre v.7.0.0-dev
