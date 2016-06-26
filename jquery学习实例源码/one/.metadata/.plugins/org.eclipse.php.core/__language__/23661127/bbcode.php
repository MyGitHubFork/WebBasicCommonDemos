<?php

// Start of bbcode v.1.1.0-dev

/**
 * Create a BBCode Resource
 * @link http://www.php.net/manual/en/function.bbcode-create.php
 * @param bbcode_initial_tags array[optional] <p>
 * An associative array containing the tag names as keys and parameters
 * required to correctly parse BBCode as their value. The following key/value
 * pairs are supported:
 * flags optional - a flag
 * set based on the BBCODE_FLAGS_* constants.
 * @return resource a BBCode_Container
 */
function bbcode_create (array $bbcode_initial_tags = null) {}

/**
 * Adds a bbcode element
 * @link http://www.php.net/manual/en/function.bbcode-add-element.php
 * @param bbcode_container resource <p>
 * BBCode_Container resource, returned by bbcode_create.
 * </p>
 * @param tag_name string <p>
 * The new tag to add to the BBCode_Container tag_set.
 * </p>
 * @param tag_rules array <p>
 * An associative array containing the parsing rules; see
 * bbcode_create for the available keys.
 * </p>
 * @return bool true on success or false on failure
 */
function bbcode_add_element ($bbcode_container, $tag_name, array $tag_rules) {}

/**
 * Close BBCode_container resource
 * @link http://www.php.net/manual/en/function.bbcode-destroy.php
 * @param bbcode_container resource <p>
 * BBCode_Container resource returned by bbcode_create.
 * </p>
 * @return bool true on success or false on failure
 */
function bbcode_destroy ($bbcode_container) {}

/**
 * Parse a string following a given rule set
 * @link http://www.php.net/manual/en/function.bbcode-parse.php
 * @param bbcode_container resource <p>
 * BBCode_Container resource returned by bbcode_create.
 * </p>
 * @param to_parse string <p>
 * The string we need to parse.
 * </p>
 * @return string the parsed string, or false on failure.
 */
function bbcode_parse ($bbcode_container, $to_parse) {}

/**
 * Adds a smiley to the parser
 * @link http://www.php.net/manual/en/function.bbcode-add-smiley.php
 * @param bbcode_container resource <p>
 * BBCode_Container resource, returned by bbcode_create.
 * </p>
 * @param smiley string <p>
 * The string that will be replaced when found.
 * </p>
 * @param replace_by string <p>
 * The string that replace smiley when found.
 * </p>
 * @return bool true on success or false on failure
 */
function bbcode_add_smiley ($bbcode_container, $smiley, $replace_by) {}

/**
 * Set or alter parser options
 * @link http://www.php.net/manual/en/function.bbcode-set-flags.php
 * @param bbcode_container resource <p>
 * BBCode_Container resource, returned by bbcode_create.
 * </p>
 * @param flags int <p>
 * The flag set that must be applied to the bbcode_container options 
 * </p>
 * @param mode int[optional] <p>
 * One of the BBCODE_SET_FLAGS_* constant to set, unset
 * a specific flag set or to replace the flag set by flags.
 * </p>
 * @return bool true on success or false on failure
 */
function bbcode_set_flags ($bbcode_container, $flags, $mode = null) {}

/**
 * Attach another parser in order to use another rule set for argument parsing
 * @link http://www.php.net/manual/en/function.bbcode-set-arg-parser.php
 * @param bbcode_container resource <p>
 * BBCode_Container resource, returned by bbcode_create.
 * </p>
 * @param bbcode_arg_parser resource <p>
 * BBCode_Container resource, returned by bbcode_create.
 * It will be used only for parsed arguments
 * </p>
 * @return bool true on success or false on failure
 */
function bbcode_set_arg_parser ($bbcode_container, $bbcode_arg_parser) {}


/**
 * This BBCode tag does not accept any arguments.
 * @link http://www.php.net/manual/en/bbcode.constants.php
 */
define ('BBCODE_TYPE_NOARG', 1);

/**
 * This BBCode tag does not have a corresponding close tag.
 * @link http://www.php.net/manual/en/bbcode.constants.php
 */
define ('BBCODE_TYPE_SINGLE', 2);

/**
 * This BBCode tag need an argument.
 * @link http://www.php.net/manual/en/bbcode.constants.php
 */
define ('BBCODE_TYPE_ARG', 3);

/**
 * This BBCode tag accept an optional argument.
 * @link http://www.php.net/manual/en/bbcode.constants.php
 */
define ('BBCODE_TYPE_OPTARG', 4);

/**
 * This BBCode tag is the special tag root (nesting level 0).
 * @link http://www.php.net/manual/en/bbcode.constants.php
 */
define ('BBCODE_TYPE_ROOT', 5);

/**
 * This BBCode tag require argument sub-parsing (the argument is also parsed by
 * the BBCode extension). As Of 0.10.2 another parser can be used as argument parser.
 * @link http://www.php.net/manual/en/bbcode.constants.php
 */
define ('BBCODE_FLAGS_ARG_PARSING', 1);

/**
 * This BBCode Tag does not accept content (it voids it automatically).
 * @link http://www.php.net/manual/en/bbcode.constants.php
 */
define ('BBCODE_FLAGS_CDATA_NOT_ALLOWED', 2);

/**
 * This BBCode Tag accepts smileys.
 * @link http://www.php.net/manual/en/bbcode.constants.php
 */
define ('BBCODE_FLAGS_SMILEYS_ON', 4);

/**
 * This BBCode Tag does not accept smileys.
 * @link http://www.php.net/manual/en/bbcode.constants.php
 */
define ('BBCODE_FLAGS_SMILEYS_OFF', 8);

/**
 * This BBCode Tag automatically closes if another tag of
 * the same type is found at the same nesting level.
 * @link http://www.php.net/manual/en/bbcode.constants.php
 */
define ('BBCODE_FLAGS_ONE_OPEN_PER_LEVEL', 16);

/**
 * This BBCode Tag is automatically removed
 * if content is empty it allows to produce lighter HTML.
 * @link http://www.php.net/manual/en/bbcode.constants.php
 */
define ('BBCODE_FLAGS_REMOVE_IF_EMPTY', 32);

/**
 * This BBCode Tag does not allow unclosed children to
 * reopen when automatically closed.
 * @link http://www.php.net/manual/en/bbcode.constants.php
 */
define ('BBCODE_FLAGS_DENY_REOPEN_CHILD', 64);

/**
 * This is a parser option allowing argument quoting with
 * double quotes (")
 * @link http://www.php.net/manual/en/bbcode.constants.php
 */
define ('BBCODE_ARG_DOUBLE_QUOTE', 1);

/**
 * This is a parser option allowing argument quoting with
 * single quotes (')
 * @link http://www.php.net/manual/en/bbcode.constants.php
 */
define ('BBCODE_ARG_SINGLE_QUOTE', 2);

/**
 * This is a parser option allowing argument quoting with
 * HTML version of double quotes (&amp;quot;)
 * @link http://www.php.net/manual/en/bbcode.constants.php
 */
define ('BBCODE_ARG_HTML_QUOTE', 4);

/**
 * This is a parser option allowing argument quotes to be
 * escaped this permit the quote delimiter to be found in
 * the string escaping character is \ it can escape any
 * quoting character or itself, if found in front of a non
 * escapable character, it will be dropped. 
 * Default behaviour is not to use escaping.
 * @link http://www.php.net/manual/en/bbcode.constants.php
 */
define ('BBCODE_ARG_QUOTE_ESCAPING', 16);

/**
 * This is a parser option changing the way errors are
 * treated. It automatically closes tag in the order they
 * are opened. And treat tags with only an open tag as if
 * there were a close tag present.
 * @link http://www.php.net/manual/en/bbcode.constants.php
 */
define ('BBCODE_AUTO_CORRECT', 256);

/**
 * This is a parser option changing the way errors are
 * treated. It automatically reopens tag if close tags are
 * not in the good order.
 * @link http://www.php.net/manual/en/bbcode.constants.php
 */
define ('BBCODE_CORRECT_REOPEN_TAGS', 512);

/**
 * This is a parser option disabling the BBCode parsing
 * it can be useful if only the "smiley" replacement must
 * be used.
 * @link http://www.php.net/manual/en/bbcode.constants.php
 */
define ('BBCODE_DISABLE_TREE_BUILD', 8192);

/**
 * This is a parser option setting smileys to ON if no
 * flag is given at tag level.
 * @link http://www.php.net/manual/en/bbcode.constants.php
 */
define ('BBCODE_DEFAULT_SMILEYS_ON', 1024);

/**
 * This is a parser option setting smileys to OFF if no
 * flag is given at tag level.
 * @link http://www.php.net/manual/en/bbcode.constants.php
 */
define ('BBCODE_DEFAULT_SMILEYS_OFF', 2048);

/**
 * This is a parser option disabling completely the 
 * smileys parsing.
 * @link http://www.php.net/manual/en/bbcode.constants.php
 */
define ('BBCODE_FORCE_SMILEYS_OFF', 4096);

/**
 * Use a case insensitive Detection for smileys
 * instead of a simple binary search.
 * @link http://www.php.net/manual/en/bbcode.constants.php
 */
define ('BBCODE_SMILEYS_CASE_INSENSITIVE', 16384);

/**
 * This permits to SET the complete flag set on a parser.
 * @link http://www.php.net/manual/en/bbcode.constants.php
 */
define ('BBCODE_SET_FLAGS_SET', 0);

/**
 * This permits to switch a flag set ON on a parser.
 * @link http://www.php.net/manual/en/bbcode.constants.php
 */
define ('BBCODE_SET_FLAGS_ADD', 1);

/**
 * This permits to switch a flag set OFF on a parser.
 * @link http://www.php.net/manual/en/bbcode.constants.php
 */
define ('BBCODE_SET_FLAGS_REMOVE', 2);

// End of bbcode v.1.1.0-dev
