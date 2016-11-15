<?php

// Start of intl v.1.1.0

class Collator  {
	const DEFAULT_VALUE = -1;
	const PRIMARY = 0;
	const SECONDARY = 1;
	const TERTIARY = 2;
	const DEFAULT_STRENGTH = 2;
	const QUATERNARY = 3;
	const IDENTICAL = 15;
	const OFF = 16;
	const ON = 17;
	const SHIFTED = 20;
	const NON_IGNORABLE = 21;
	const LOWER_FIRST = 24;
	const UPPER_FIRST = 25;
	const FRENCH_COLLATION = 0;
	const ALTERNATE_HANDLING = 1;
	const CASE_FIRST = 2;
	const CASE_LEVEL = 3;
	const NORMALIZATION_MODE = 4;
	const STRENGTH = 5;
	const HIRAGANA_QUATERNARY_MODE = 6;
	const NUMERIC_COLLATION = 7;
	const SORT_REGULAR = 0;
	const SORT_STRING = 1;
	const SORT_NUMERIC = 2;


	/**
	 * Create a collator
	 * @link http://www.php.net/manual/en/collator.construct.php
	 * @param $arg1
	 */
	public function __construct ($arg1) {}

	/**
	 * Create a collator
	 * @link http://www.php.net/manual/en/collator.create.php
	 * @param string $locale <p>
	 * The locale containing the required collation rules. Special values for
	 * locales can be passed in - if null is passed for the locale, the
	 * default locale collation rules will be used. If empty string ("") or
	 * "root" are passed, UCA rules will be used.
	 * </p>
	 * @return Collator Return new instance of Collator object, or &null;
	 * on error.
	 */
	public static function create ($locale) {}

	/**
	 * Compare two Unicode strings
	 * @link http://www.php.net/manual/en/collator.compare.php
	 * @param string $str1 <p>
	 * The first string to compare.
	 * </p>
	 * @param string $str2 <p>
	 * The second string to compare.
	 * </p>
	 * @return int Return comparison result:</p>
	 * <p>
	 * <p>
	 * 1 if str1 is greater than 
	 * str2 ;
	 * </p>
	 * <p>
	 * 0 if str1 is equal to 
	 * str2;
	 * </p>
	 * <p>
	 * -1 if str1 is less than 
	 * str2 .
	 * </p>
	 * On error
	 * boolean
	 * false
	 * is returned.
	 */
	public function compare ($str1, $str2) {}

	/**
	 * Sort array using specified collator
	 * @link http://www.php.net/manual/en/collator.sort.php
	 * @param array $arr <p>
	 * Array of strings to sort.
	 * </p>
	 * @param int $sort_flag [optional] <p>
	 * Optional sorting type, one of the following:
	 * </p>
	 * <p>
	 * <p>
	 * Collator::SORT_REGULAR
	 * - compare items normally (don't change types)
	 * </p>
	 * @return bool true on success or false on failure
	 */
	public function sort (array &$arr, $sort_flag = null) {}

	/**
	 * Sort array using specified collator and sort keys
	 * @link http://www.php.net/manual/en/collator.sortwithsortkeys.php
	 * @param array $arr <p>Array of strings to sort</p>
	 * @return bool true on success or false on failure
	 */
	public function sortWithSortKeys (array &$arr) {}

	/**
	 * Sort array maintaining index association
	 * @link http://www.php.net/manual/en/collator.asort.php
	 * @param array $arr <p>Array of strings to sort.</p>
	 * @param int $sort_flag [optional] <p>
	 * Optional sorting type, one of the following:
	 * <p>
	 * Collator::SORT_REGULAR
	 * - compare items normally (don't change types)
	 * </p>
	 * @return bool true on success or false on failure
	 */
	public function asort (array &$arr, $sort_flag = null) {}

	/**
	 * Get collation attribute value
	 * @link http://www.php.net/manual/en/collator.getattribute.php
	 * @param int $attr <p>
	 * Attribute to get value for.
	 * </p>
	 * @return int Attribute value, or boolean false on error.
	 */
	public function getAttribute ($attr) {}

	/**
	 * Set collation attribute
	 * @link http://www.php.net/manual/en/collator.setattribute.php
	 * @param int $attr <p>Attribute.</p>
	 * @param int $val <p>
	 * Attribute value.
	 * </p>
	 * @return bool true on success or false on failure
	 */
	public function setAttribute ($attr, $val) {}

	/**
	 * Get current collation strength
	 * @link http://www.php.net/manual/en/collator.getstrength.php
	 * @return int current collation strength, or boolean false on error.
	 */
	public function getStrength () {}

	/**
	 * Set collation strength
	 * @link http://www.php.net/manual/en/collator.setstrength.php
	 * @param int $strength <p>Strength to set.</p>
	 * <p>
	 * Possible values are:
	 * <p>
	 * Collator::PRIMARY
	 * </p>
	 * @return bool true on success or false on failure
	 */
	public function setStrength ($strength) {}

	/**
	 * Get the locale name of the collator
	 * @link http://www.php.net/manual/en/collator.getlocale.php
	 * @param int $type <p>
	 * You can choose between valid and actual locale (
	 * Locale::VALID_LOCALE and 
	 * Locale::ACTUAL_LOCALE,
	 * respectively).
	 * </p>
	 * @return string Real locale name from which the collation data comes. If the collator was
	 * instantiated from rules or an error occurred, returns
	 * boolean false.
	 */
	public function getLocale ($type) {}

	/**
	 * Get collator's last error code
	 * @link http://www.php.net/manual/en/collator.geterrorcode.php
	 * @return int Error code returned by the last Collator API function call.
	 */
	public function getErrorCode () {}

	/**
	 * Get text for collator's last error code
	 * @link http://www.php.net/manual/en/collator.geterrormessage.php
	 * @return string Description of an error occurred in the last Collator API function call.
	 */
	public function getErrorMessage () {}

	/**
	 * Get sorting key for a string
	 * @link http://www.php.net/manual/en/collator.getsortkey.php
	 * @param string $str <p>
	 * The string to produce the key from.
	 * </p>
	 * @return string the collation key for the string. Collation keys can be compared directly instead of strings.
	 */
	public function getSortKey ($str) {}

}

class NumberFormatter  {
	const PATTERN_DECIMAL = 0;
	const DECIMAL = 1;
	const CURRENCY = 2;
	const PERCENT = 3;
	const SCIENTIFIC = 4;
	const SPELLOUT = 5;
	const ORDINAL = 6;
	const DURATION = 7;
	const PATTERN_RULEBASED = 9;
	const IGNORE = 0;
	const DEFAULT_STYLE = 1;
	const ROUND_CEILING = 0;
	const ROUND_FLOOR = 1;
	const ROUND_DOWN = 2;
	const ROUND_UP = 3;
	const ROUND_HALFEVEN = 4;
	const ROUND_HALFDOWN = 5;
	const ROUND_HALFUP = 6;
	const PAD_BEFORE_PREFIX = 0;
	const PAD_AFTER_PREFIX = 1;
	const PAD_BEFORE_SUFFIX = 2;
	const PAD_AFTER_SUFFIX = 3;
	const PARSE_INT_ONLY = 0;
	const GROUPING_USED = 1;
	const DECIMAL_ALWAYS_SHOWN = 2;
	const MAX_INTEGER_DIGITS = 3;
	const MIN_INTEGER_DIGITS = 4;
	const INTEGER_DIGITS = 5;
	const MAX_FRACTION_DIGITS = 6;
	const MIN_FRACTION_DIGITS = 7;
	const FRACTION_DIGITS = 8;
	const MULTIPLIER = 9;
	const GROUPING_SIZE = 10;
	const ROUNDING_MODE = 11;
	const ROUNDING_INCREMENT = 12;
	const FORMAT_WIDTH = 13;
	const PADDING_POSITION = 14;
	const SECONDARY_GROUPING_SIZE = 15;
	const SIGNIFICANT_DIGITS_USED = 16;
	const MIN_SIGNIFICANT_DIGITS = 17;
	const MAX_SIGNIFICANT_DIGITS = 18;
	const LENIENT_PARSE = 19;
	const POSITIVE_PREFIX = 0;
	const POSITIVE_SUFFIX = 1;
	const NEGATIVE_PREFIX = 2;
	const NEGATIVE_SUFFIX = 3;
	const PADDING_CHARACTER = 4;
	const CURRENCY_CODE = 5;
	const DEFAULT_RULESET = 6;
	const PUBLIC_RULESETS = 7;
	const DECIMAL_SEPARATOR_SYMBOL = 0;
	const GROUPING_SEPARATOR_SYMBOL = 1;
	const PATTERN_SEPARATOR_SYMBOL = 2;
	const PERCENT_SYMBOL = 3;
	const ZERO_DIGIT_SYMBOL = 4;
	const DIGIT_SYMBOL = 5;
	const MINUS_SIGN_SYMBOL = 6;
	const PLUS_SIGN_SYMBOL = 7;
	const CURRENCY_SYMBOL = 8;
	const INTL_CURRENCY_SYMBOL = 9;
	const MONETARY_SEPARATOR_SYMBOL = 10;
	const EXPONENTIAL_SYMBOL = 11;
	const PERMILL_SYMBOL = 12;
	const PAD_ESCAPE_SYMBOL = 13;
	const INFINITY_SYMBOL = 14;
	const NAN_SYMBOL = 15;
	const SIGNIFICANT_DIGIT_SYMBOL = 16;
	const MONETARY_GROUPING_SEPARATOR_SYMBOL = 17;
	const TYPE_DEFAULT = 0;
	const TYPE_INT32 = 1;
	const TYPE_INT64 = 2;
	const TYPE_DOUBLE = 3;
	const TYPE_CURRENCY = 4;


	/**
	 * @param $locale
	 * @param $style
	 * @param $pattern [optional]
	 */
	public function __construct ($locale, $style, $pattern = null) {}

	/**
	 * Create a number formatter
	 * @link http://www.php.net/manual/en/numberformatter.create.php
	 * @param string $locale <p>
	 * Locale in which the number would be formatted (locale name, e.g. en_CA).
	 * </p>
	 * @param int $style <p>
	 * Style of the formatting, one of the
	 * format style constants. If
	 * NumberFormatter::PATTERN_DECIMAL
	 * or NumberFormatter::PATTERN_RULEBASED
	 * is passed then the number format is opened using the given pattern,
	 * which must conform to the syntax described in
	 * ICU DecimalFormat
	 * documentation or
	 * ICU RuleBasedNumberFormat
	 * documentation, respectively.
	 * </p>
	 * @param string $pattern [optional] <p>
	 * Pattern string if the chosen style requires a pattern.
	 * </p>
	 * @return NumberFormatter NumberFormatter object or false on error.
	 */
	public static function create ($locale, $style, $pattern = null) {}

	/**
	 * Format a number
	 * @link http://www.php.net/manual/en/numberformatter.format.php
	 * @param number $value <p>
	 * The value to format. Can be integer or float,
	 * other values will be converted to a numeric value.
	 * </p>
	 * @param int $type [optional] <p>
	 * The
	 * formatting type to use.
	 * </p>
	 * @return string the string containing formatted value, or false on error.
	 */
	public function format ($value, $type = null) {}

	/**
	 * Parse a number
	 * @link http://www.php.net/manual/en/numberformatter.parse.php
	 * @param string $value 
	 * @param int $type [optional] <p>
	 * The
	 * formatting type to use. By default,
	 * NumberFormatter::TYPE_DOUBLE is used.
	 * </p>
	 * @param int $position [optional] <p>
	 * Offset in the string at which to begin parsing. On return, this value
	 * will hold the offset at which parsing ended.
	 * </p>
	 * @return mixed The value of the parsed number or false on error.
	 */
	public function parse ($value, $type = null, &$position = null) {}

	/**
	 * Format a currency value
	 * @link http://www.php.net/manual/en/numberformatter.formatcurrency.php
	 * @param float $value <p>
	 * The numeric currency value.
	 * </p>
	 * @param string $currency <p>
	 * The 3-letter ISO 4217 currency code indicating the currency to use.
	 * </p>
	 * @return string String representing the formatted currency value.
	 */
	public function formatCurrency ($value, $currency) {}

	/**
	 * Parse a currency number
	 * @link http://www.php.net/manual/en/numberformatter.parsecurrency.php
	 * @param string $value 
	 * @param string $currency <p>
	 * Parameter to receive the currency name (3-letter ISO 4217 currency
	 * code).
	 * </p>
	 * @param int $position [optional] <p>
	 * Offset in the string at which to begin parsing. On return, this value
	 * will hold the offset at which parsing ended.
	 * </p>
	 * @return float The parsed numeric value or false on error.
	 */
	public function parseCurrency ($value, &$currency, &$position = null) {}

	/**
	 * Set an attribute
	 * @link http://www.php.net/manual/en/numberformatter.setattribute.php
	 * @param int $attr <p>
	 * Attribute specifier - one of the
	 * numeric attribute constants.
	 * </p>
	 * @param int $value <p>
	 * The attribute value.
	 * </p>
	 * @return bool true on success or false on failure
	 */
	public function setAttribute ($attr, $value) {}

	/**
	 * Get an attribute
	 * @link http://www.php.net/manual/en/numberformatter.getattribute.php
	 * @param int $attr <p>
	 * Attribute specifier - one of the
	 * numeric attribute constants.
	 * </p>
	 * @return int Return attribute value on success, or false on error.
	 */
	public function getAttribute ($attr) {}

	/**
	 * Set a text attribute
	 * @link http://www.php.net/manual/en/numberformatter.settextattribute.php
	 * @param int $attr <p>
	 * Attribute specifier - one of the
	 * text attribute
	 * constants.
	 * </p>
	 * @param string $value <p>
	 * Text for the attribute value.
	 * </p>
	 * @return bool true on success or false on failure
	 */
	public function setTextAttribute ($attr, $value) {}

	/**
	 * Get a text attribute
	 * @link http://www.php.net/manual/en/numberformatter.gettextattribute.php
	 * @param int $attr <p>
	 * Attribute specifier - one of the
	 * text attribute constants.
	 * </p>
	 * @return string Return attribute value on success, or false on error.
	 */
	public function getTextAttribute ($attr) {}

	/**
	 * Set a symbol value
	 * @link http://www.php.net/manual/en/numberformatter.setsymbol.php
	 * @param int $attr <p>
	 * Symbol specifier, one of the
	 * format symbol constants.
	 * </p>
	 * @param string $value <p>
	 * Text for the symbol.
	 * </p>
	 * @return bool true on success or false on failure
	 */
	public function setSymbol ($attr, $value) {}

	/**
	 * Get a symbol value
	 * @link http://www.php.net/manual/en/numberformatter.getsymbol.php
	 * @param int $attr <p>
	 * Symbol specifier, one of the
	 * format symbol constants.
	 * </p>
	 * @return string The symbol string or false on error.
	 */
	public function getSymbol ($attr) {}

	/**
	 * Set formatter pattern
	 * @link http://www.php.net/manual/en/numberformatter.setpattern.php
	 * @param string $pattern <p>
	 * Pattern in syntax described in
	 * ICU DecimalFormat
	 * documentation.
	 * </p>
	 * @return bool true on success or false on failure
	 */
	public function setPattern ($pattern) {}

	/**
	 * Get formatter pattern
	 * @link http://www.php.net/manual/en/numberformatter.getpattern.php
	 * @return string Pattern string that is used by the formatter, or false if an error happens.
	 */
	public function getPattern () {}

	/**
	 * Get formatter locale
	 * @link http://www.php.net/manual/en/numberformatter.getlocale.php
	 * @param int $type [optional] <p>
	 * You can choose between valid and actual locale (
	 * Locale::VALID_LOCALE,
	 * Locale::ACTUAL_LOCALE,
	 * respectively). The default is the actual locale.
	 * </p>
	 * @return string The locale name used to create the formatter.
	 */
	public function getLocale ($type = null) {}

	/**
	 * Get formatter's last error code.
	 * @link http://www.php.net/manual/en/numberformatter.geterrorcode.php
	 * @return int error code from last formatter call.
	 */
	public function getErrorCode () {}

	/**
	 * Get formatter's last error message.
	 * @link http://www.php.net/manual/en/numberformatter.geterrormessage.php
	 * @return string error message from last formatter call.
	 */
	public function getErrorMessage () {}

}

class Normalizer  {
	const NONE = 1;
	const FORM_D = 2;
	const NFD = 2;
	const FORM_KD = 3;
	const NFKD = 3;
	const FORM_C = 4;
	const NFC = 4;
	const FORM_KC = 5;
	const NFKC = 5;


	/**
	 * Normalizes the input provided and returns the normalized string
	 * @link http://www.php.net/manual/en/normalizer.normalize.php
	 * @param string $input <p>The input string to normalize</p>
	 * @param int $form [optional] <p>One of the normalization forms.</p>
	 * @return string The normalized string or &null; if an error occurred.
	 */
	public static function normalize ($input, $form = null) {}

	/**
	 * Checks if the provided string is already in the specified normalization
   form.
	 * @link http://www.php.net/manual/en/normalizer.isnormalized.php
	 * @param string $input <p>The input string to normalize</p>
	 * @param int $form [optional] <p>
	 * One of the normalization forms.
	 * </p>
	 * @return bool true if normalized, false otherwise or if there an error
	 */
	public static function isNormalized ($input, $form = null) {}

}

class Locale  {
	const ACTUAL_LOCALE = 0;
	const VALID_LOCALE = 1;
	const DEFAULT_LOCALE = null;
	const LANG_TAG = "language";
	const EXTLANG_TAG = "extlang";
	const SCRIPT_TAG = "script";
	const REGION_TAG = "region";
	const VARIANT_TAG = "variant";
	const GRANDFATHERED_LANG_TAG = "grandfathered";
	const PRIVATE_TAG = "private";


	/**
	 * Gets the default locale value from the INTL global 'default_locale'
	 * @link http://www.php.net/manual/en/locale.getdefault.php
	 * @return string The current runtime locale
	 */
	public static function getDefault () {}

	/**
	 * sets the default runtime locale
	 * @link http://www.php.net/manual/en/locale.setdefault.php
	 * @param string $locale <p>
	 * Is a BCP 47 compliant language tag containing the
	 * </p>
	 * @return bool true on success or false on failure
	 */
	public static function setDefault ($locale) {}

	/**
	 * Gets the primary language for the input locale
	 * @link http://www.php.net/manual/en/locale.getprimarylanguage.php
	 * @param string $locale <p>
	 * The locale to extract the primary language code from
	 * </p>
	 * @return string The language code associated with the language or &null; in case of error.
	 */
	public static function getPrimaryLanguage ($locale) {}

	/**
	 * Gets the script for the input locale
	 * @link http://www.php.net/manual/en/locale.getscript.php
	 * @param string $locale <p>
	 * The locale to extract the script code from
	 * </p>
	 * @return string The script subtag for the locale or &null; if not present
	 */
	public static function getScript ($locale) {}

	/**
	 * Gets the region for the input locale
	 * @link http://www.php.net/manual/en/locale.getregion.php
	 * @param string $locale <p>
	 * The locale to extract the region code from
	 * </p>
	 * @return string The region subtag for the locale or &null; if not present
	 */
	public static function getRegion ($locale) {}

	/**
	 * Gets the keywords for the input locale
	 * @link http://www.php.net/manual/en/locale.getkeywords.php
	 * @param string $locale <p>
	 * The locale to extract the keywords from
	 * </p>
	 * @return array Associative array containing the keyword-value pairs for this locale
	 */
	public static function getKeywords ($locale) {}

	/**
	 * Returns an appropriately localized display name for script of the input locale
	 * @link http://www.php.net/manual/en/locale.getdisplayscript.php
	 * @param string $locale <p>
	 * The locale to return a display script for
	 * </p>
	 * @param string $in_locale [optional] <p>
	 * Optional format locale to use to display the script name
	 * </p>
	 * @return string Display name of the script for the $locale in the format appropriate for
	 * $in_locale.
	 */
	public static function getDisplayScript ($locale, $in_locale = null) {}

	/**
	 * Returns an appropriately localized display name for region of the input locale
	 * @link http://www.php.net/manual/en/locale.getdisplayregion.php
	 * @param string $locale <p>
	 * The locale to return a display region for.
	 * </p>
	 * @param string $in_locale [optional] <p>
	 * Optional format locale to use to display the region name
	 * </p>
	 * @return string display name of the region for the $locale in the format appropriate for
	 * $in_locale.
	 */
	public static function getDisplayRegion ($locale, $in_locale = null) {}

	/**
	 * Returns an appropriately localized display name for the input locale
	 * @link http://www.php.net/manual/en/locale.getdisplayname.php
	 * @param string $locale <p>
	 * The locale to return a display name for.
	 * </p>
	 * @param string $in_locale [optional] <p>optional format locale</p>
	 * @return string Display name of the locale in the format appropriate for $in_locale.
	 */
	public static function getDisplayName ($locale, $in_locale = null) {}

	/**
	 * Returns an appropriately localized display name for language of the inputlocale
	 * @link http://www.php.net/manual/en/locale.getdisplaylanguage.php
	 * @param string $locale <p>
	 * The locale to return a display language for
	 * </p>
	 * @param string $in_locale [optional] <p>
	 * Optional format locale to use to display the language name
	 * </p>
	 * @return string display name of the language for the $locale in the format appropriate for
	 * $in_locale.
	 */
	public static function getDisplayLanguage ($locale, $in_locale = null) {}

	/**
	 * Returns an appropriately localized display name for variants of the input locale
	 * @link http://www.php.net/manual/en/locale.getdisplayvariant.php
	 * @param string $locale <p>
	 * The locale to return a display variant for
	 * </p>
	 * @param string $in_locale [optional] <p>
	 * Optional format locale to use to display the variant name
	 * </p>
	 * @return string Display name of the variant for the $locale in the format appropriate for
	 * $in_locale.
	 */
	public static function getDisplayVariant ($locale, $in_locale = null) {}

	/**
	 * Returns a correctly ordered and delimited locale ID
	 * @link http://www.php.net/manual/en/locale.composelocale.php
	 * @param array $subtags <p>
	 * an array containing a list of key-value pairs, where the keys identify
	 * the particular locale ID subtags, and the values are the associated
	 * subtag values. 
	 * <p>
	 * The 'variant' and 'private' subtags can take maximum 15 values
	 * whereas 'extlang' can take maximum 3 values.e.g. Variants are allowed
	 * with the suffix ranging from 0-14. Hence the keys for the input array
	 * can be variant0, variant1, ...,variant14. In the returned locale id,
	 * the subtag is ordered by suffix resulting in variant0 followed by
	 * variant1 followed by variant2 and so on.
	 * </p>
	 * <p>
	 * The 'variant', 'private' and 'extlang' multiple values can be specified both
	 * as array under specific key (e.g. 'variant') and as multiple numbered keys
	 * (e.g. 'variant0', 'variant1', etc.).
	 * </p>
	 * </p>
	 * @return string The corresponding locale identifier.
	 */
	public static function composeLocale (array $subtags) {}

	/**
	 * Returns a key-value array of locale ID subtag elements.
	 * @link http://www.php.net/manual/en/locale.parselocale.php
	 * @param string $locale <p>
	 * The locale to extract the subtag array from. Note: The 'variant' and
	 * 'private' subtags can take maximum 15 values whereas 'extlang' can take
	 * maximum 3 values.
	 * </p>
	 * @return array an array containing a list of key-value pairs, where the keys
	 * identify the particular locale ID subtags, and the values are the
	 * associated subtag values. The array will be ordered as the locale id
	 * subtags e.g. in the locale id if variants are '-varX-varY-varZ' then the
	 * returned array will have variant0=&gt;varX , variant1=&gt;varY ,
	 * variant2=&gt;varZ
	 */
	public static function parseLocale ($locale) {}

	/**
	 * Gets the variants for the input locale
	 * @link http://www.php.net/manual/en/locale.getallvariants.php
	 * @param string $locale <p>
	 * The locale to extract the variants from
	 * </p>
	 * @return array The array containing the list of all variants subtag for the locale 
	 * or &null; if not present
	 */
	public static function getAllVariants ($locale) {}

	/**
	 * Checks if a language tag filter matches with locale
	 * @link http://www.php.net/manual/en/locale.filtermatches.php
	 * @param string $langtag <p>
	 * The language tag to check
	 * </p>
	 * @param string $locale <p>
	 * The language range to check against
	 * </p>
	 * @param bool $canonicalize [optional] <p>
	 * If true, the arguments will be converted to canonical form before
	 * matching. 
	 * </p>
	 * @return bool true if $locale matches $langtag false otherwise.
	 */
	public static function filterMatches ($langtag, $locale, $canonicalize = null) {}

	/**
	 * Searches the language tag list for the best match to the language
	 * @link http://www.php.net/manual/en/locale.lookup.php
	 * @param array $langtag <p>
	 * An array containing a list of language tags to compare to 
	 * locale. Maximum 100 items allowed.
	 * </p>
	 * @param string $locale <p>
	 * The locale to use as the language range when matching.
	 * </p>
	 * @param bool $canonicalize [optional] <p>
	 * If true, the arguments will be converted to canonical form before
	 * matching.
	 * </p>
	 * @param string $default [optional] <p>
	 * The locale to use if no match is found.
	 * </p>
	 * @return string The closest matching language tag or default value.
	 */
	public static function lookup (array $langtag, $locale, $canonicalize = null, $default = null) {}

	/**
	 * Canonicalize the locale string
	 * @link http://www.php.net/manual/en/locale.canonicalize.php
	 * @param string $locale <p>
	 * </p>
	 * @return string 
	 */
	public static function canonicalize ($locale) {}

	/**
	 * Tries to find out best available locale based on HTTP "Accept-Language" header
	 * @link http://www.php.net/manual/en/locale.acceptfromhttp.php
	 * @param string $header <p>
	 * The string containing the "Accept-Language" header according to format in RFC 2616.
	 * </p>
	 * @return string The corresponding locale identifier.
	 */
	public static function acceptFromHttp ($header) {}

}

class MessageFormatter  {

	/**
	 * @param $locale
	 * @param $pattern
	 */
	public function __construct ($locale, $pattern) {}

	/**
	 * Constructs a new Message Formatter
	 * @link http://www.php.net/manual/en/messageformatter.create.php
	 * @param string $locale <p>
	 * The locale to use when formatting arguments
	 * </p>
	 * @param string $pattern <p>
	 * The pattern string to stick arguments into. 
	 * The pattern uses an 'apostrophe-friendly' syntax; it is run through
	 * umsg_autoQuoteApostrophe 
	 * before being interpreted.
	 * </p>
	 * @return MessageFormatter The formatter object
	 */
	public static function create ($locale, $pattern) {}

	/**
	 * Format the message
	 * @link http://www.php.net/manual/en/messageformatter.format.php
	 * @param array $args <p>
	 * Arguments to insert into the format string
	 * </p>
	 * @return string The formatted string, or false if an error occurred
	 */
	public function format (array $args) {}

	/**
	 * Quick format message
	 * @link http://www.php.net/manual/en/messageformatter.formatmessage.php
	 * @param string $locale <p>
	 * The locale to use for formatting locale-dependent parts
	 * </p>
	 * @param string $pattern <p>
	 * The pattern string to insert things into.
	 * The pattern uses an 'apostrophe-friendly' syntax; it is run through
	 * umsg_autoQuoteApostrophe 
	 * before being interpreted.
	 * </p>
	 * @param array $args <p>
	 * The array of values to insert into the format string
	 * </p>
	 * @return string The formatted pattern string or false if an error occurred
	 */
	public static function formatMessage ($locale, $pattern, array $args) {}

	/**
	 * Parse input string according to pattern
	 * @link http://www.php.net/manual/en/messageformatter.parse.php
	 * @param string $value <p>
	 * The string to parse
	 * </p>
	 * @return array An array containing the items extracted, or false on error
	 */
	public function parse ($value) {}

	/**
	 * Quick parse input string
	 * @link http://www.php.net/manual/en/messageformatter.parsemessage.php
	 * @param string $locale <p>
	 * The locale to use for parsing locale-dependent parts
	 * </p>
	 * @param string $pattern <p>
	 * The pattern with which to parse the value.
	 * </p>
	 * @param string $source <p>
	 * The string to parse, conforming to the pattern.
	 * </p>
	 * @return array An array containing items extracted, or false on error
	 */
	public static function parseMessage ($locale, $pattern, $source) {}

	/**
	 * Set the pattern used by the formatter
	 * @link http://www.php.net/manual/en/messageformatter.setpattern.php
	 * @param string $pattern <p>
	 * The pattern string to use in this message formatter.
	 * The pattern uses an 'apostrophe-friendly' syntax; it is run through
	 * umsg_autoQuoteApostrophe 
	 * before being interpreted.
	 * </p>
	 * @return bool true on success or false on failure
	 */
	public function setPattern ($pattern) {}

	/**
	 * Get the pattern used by the formatter
	 * @link http://www.php.net/manual/en/messageformatter.getpattern.php
	 * @return string The pattern string for this message formatter
	 */
	public function getPattern () {}

	/**
	 * Get the locale for which the formatter was created.
	 * @link http://www.php.net/manual/en/messageformatter.getlocale.php
	 * @return string The locale name
	 */
	public function getLocale () {}

	/**
	 * Get the error code from last operation
	 * @link http://www.php.net/manual/en/messageformatter.geterrorcode.php
	 * @return int The error code, one of UErrorCode values. Initial value is U_ZERO_ERROR.
	 */
	public function getErrorCode () {}

	/**
	 * Get the error text from the last operation
	 * @link http://www.php.net/manual/en/messageformatter.geterrormessage.php
	 * @return string Description of the last error.
	 */
	public function getErrorMessage () {}

}

class IntlDateFormatter  {
	const FULL = 0;
	const LONG = 1;
	const MEDIUM = 2;
	const SHORT = 3;
	const NONE = -1;
	const GREGORIAN = 1;
	const TRADITIONAL = 0;


	/**
	 * @param $locale
	 * @param $datetype
	 * @param $timetype
	 * @param $timezone [optional]
	 * @param $calendar [optional]
	 * @param $pattern [optional]
	 */
	public function __construct ($locale, $datetype, $timetype, $timezone = null, $calendar = null, $pattern = null) {}

	/**
	 * Create a date formatter
	 * @link http://www.php.net/manual/en/intldateformatter.create.php
	 * @param string $locale <p>
	 * Locale to use when formatting or parsing or &null; to use the value
	 * specified in the ini setting intl.default_locale.
	 * </p>
	 * @param int $datetype <p>
	 * Date type to use (none, short,
	 * medium, long,
	 * full). This is one of the IntlDateFormatter
	 * constants. It can also be &null;, in which case ICUʼs default
	 * date type will be used.
	 * </p>
	 * @param int $timetype <p>
	 * Time type to use (none, short,
	 * medium, long,
	 * full). This is one of the IntlDateFormatter
	 * constants. It can also be &null;, in which case ICUʼs default
	 * time type will be used.
	 * </p>
	 * @param mixed $timezone [optional] <p>
	 * Time zone ID. The default (and the one used if &null; is given) is the
	 * one returned by date_default_timezone_get or, if
	 * applicable, that of the IntlCalendar object passed
	 * for the calendar parameter. This ID must be a
	 * valid identifier on ICUʼs database or an ID representing an
	 * explicit offset, such as GMT-05:30.
	 * </p>
	 * <p>
	 * This can also be an IntlTimeZone or a
	 * DateTimeZone object.
	 * </p>
	 * @param mixed $calendar [optional] <p>
	 * Calendar to use for formatting or parsing. The default value is &null;,
	 * which corresponds to IntlDateFormatter::GREGORIAN.
	 * This can either be one of the 
	 * IntlDateFormatter
	 * calendar constants or an IntlCalendar. Any
	 * IntlCalendar object passed will be clone; it will
	 * not be changed by the IntlDateFormatter. This will
	 * determine the calendar type used (gregorian, islamic, persian, etc.) and,
	 * if &null; is given for the timezone parameter,
	 * also the timezone used.
	 * </p>
	 * @param string $pattern [optional] <p>
	 * Optional pattern to use when formatting or parsing.
	 * Possible patterns are documented at &url.icu.datepattern;.
	 * </p>
	 * @return IntlDateFormatter The created IntlDateFormatter or false in case of
	 * failure.
	 */
	public static function create ($locale, $datetype, $timetype, $timezone = null, $calendar = null, $pattern = null) {}

	/**
	 * Get the datetype used for the IntlDateFormatter
	 * @link http://www.php.net/manual/en/intldateformatter.getdatetype.php
	 * @return int The current date type value of the formatter.
	 */
	public function getDateType () {}

	/**
	 * Get the timetype used for the IntlDateFormatter
	 * @link http://www.php.net/manual/en/intldateformatter.gettimetype.php
	 * @return int The current date type value of the formatter.
	 */
	public function getTimeType () {}

	/**
	 * Get the calendar type used for the IntlDateFormatter
	 * @link http://www.php.net/manual/en/intldateformatter.getcalendar.php
	 * @return int The calendar
	 * type being used by the formatter. Either
	 * IntlDateFormatter::TRADITIONAL or
	 * IntlDateFormatter::GREGORIAN.
	 */
	public function getCalendar () {}

	/**
	 * Get copy of formatterʼs calendar object
	 * @link http://www.php.net/manual/en/intldateformatter.getcalendarobject.php
	 * @return IntlCalendar A copy of the internal calendar object used by this formatter.
	 */
	public function getCalendarObject () {}

	/**
	 * Sets the calendar type used by the formatter
	 * @link http://www.php.net/manual/en/intldateformatter.setcalendar.php
	 * @param mixed $which <p>
	 * This can either be: the calendar
	 * type to use (default is
	 * IntlDateFormatter::GREGORIAN, which is also used if
	 * &null; is specified) or an
	 * IntlCalendar object.
	 * </p>
	 * <p>
	 * Any IntlCalendar object passed in will be cloned;
	 * no modifications will be made to the argument object.
	 * </p>
	 * <p>
	 * The timezone of the formatter will only be kept if an
	 * IntlCalendar object is not passed, otherwise the
	 * new timezone will be that of the passed object.
	 * </p>
	 * @return bool true on success or false on failure
	 */
	public function setCalendar ($which) {}

	/**
	 * Get the timezone-id used for the IntlDateFormatter
	 * @link http://www.php.net/manual/en/intldateformatter.gettimezoneid.php
	 * @return string ID string for the time zone used by this formatter.
	 */
	public function getTimeZoneId () {}

	/**
	 * Get formatterʼs timezone
	 * @link http://www.php.net/manual/en/intldateformatter.gettimezone.php
	 * @return IntlTimeZone The associated IntlTimeZone
	 * object or false on failure.
	 */
	public function getTimeZone () {}

	/**
	 * Sets formatterʼs timezone
	 * @link http://www.php.net/manual/en/intldateformatter.settimezone.php
	 * @param mixed $zone <p>
	 * The timezone to use for this formatter. This can be specified in the
	 * following forms:
	 * </p>
	 * &reference.intl.inctimezoneparam;
	 * @return boolean true on success and false on failure.
	 */
	public function setTimeZone ($zone) {}

	/**
	 * Set the pattern used for the IntlDateFormatter
	 * @link http://www.php.net/manual/en/intldateformatter.setpattern.php
	 * @param string $pattern <p>
	 * New pattern string to use.
	 * Possible patterns are documented at &url.icu.datepattern;.
	 * </p>
	 * @return bool true on success or false on failure
	 * Bad formatstrings are usually the cause of the failure.
	 */
	public function setPattern ($pattern) {}

	/**
	 * Get the pattern used for the IntlDateFormatter
	 * @link http://www.php.net/manual/en/intldateformatter.getpattern.php
	 * @return string The pattern string being used to format/parse.
	 */
	public function getPattern () {}

	/**
	 * Get the locale used by formatter
	 * @link http://www.php.net/manual/en/intldateformatter.getlocale.php
	 * @param int $which [optional] 
	 * @return string the locale of this formatter or 'false' if error
	 */
	public function getLocale ($which = null) {}

	/**
	 * Set the leniency of the parser
	 * @link http://www.php.net/manual/en/intldateformatter.setlenient.php
	 * @param bool $lenient <p>
	 * Sets whether the parser is lenient or not, default is true (lenient).
	 * </p>
	 * @return bool true on success or false on failure
	 */
	public function setLenient ($lenient) {}

	/**
	 * Get the lenient used for the IntlDateFormatter
	 * @link http://www.php.net/manual/en/intldateformatter.islenient.php
	 * @return bool true if parser is lenient, false if parser is strict. By default the parser is lenient.
	 */
	public function isLenient () {}

	/**
	 * Format the date/time value as a string
	 * @link http://www.php.net/manual/en/intldateformatter.format.php
	 * @param mixed $value <p>
	 * Value to format. This may be a DateTime object, an
	 * IntlCalendar object, a numeric type
	 * representing a (possibly fractional) number of seconds since epoch or an
	 * array in the format output by
	 * localtime.
	 * </p>
	 * <p>
	 * If a DateTime or an
	 * IntlCalendar object is passed, its timezone is not
	 * considered. The object will be formatted using the formaterʼs configured
	 * timezone. If one wants to use the timezone of the object to be formatted,
	 * IntlDateFormatter::setTimeZone must be called before
	 * with the objectʼs timezone. Alternatively, the static function
	 * IntlDateFormatter::formatObject may be used instead.
	 * </p>
	 * @return string The formatted string or, if an error occurred, false.
	 */
	public function format ($value) {}

	/**
	 * Formats an object
	 * @link http://www.php.net/manual/en/intldateformatter.formatobject.php
	 * @param object $object <p>
	 * An object of type IntlCalendar or
	 * DateTime. The timezone information in the object
	 * will be used.
	 * </p>
	 * @param mixed $format [optional] <p>
	 * How to format the date/time. This can either be an array with
	 * two elements (first the date style, then the time style, these being one
	 * of the constants IntlDateFormatter::NONE,
	 * IntlDateFormatter::SHORT,
	 * IntlDateFormatter::MEDIUM,
	 * IntlDateFormatter::LONG,
	 * IntlDateFormatter::FULL), a long with
	 * the value of one of these constants (in which case it will be used both
	 * for the time and the date) or a string with the format
	 * described in the ICU
	 * documentation. If &null;, the default style will be used.
	 * </p>
	 * @param string $locale [optional] <p>
	 * The locale to use, or &null; to use the default one.
	 * </p>
	 * @return string A string with result or false on failure.
	 */
	public static function formatObject ($object, $format = null, $locale = null) {}

	/**
	 * Parse string to a timestamp value
	 * @link http://www.php.net/manual/en/intldateformatter.parse.php
	 * @param string $value <p>
	 * string to convert to a time 
	 * </p>
	 * @param int $position [optional] <p>
	 * Position at which to start the parsing in $value (zero-based).
	 * If no error occurs before $value is consumed, $parse_pos will contain -1
	 * otherwise it will contain the position at which parsing ended (and the error occurred).
	 * This variable will contain the end position if the parse fails.
	 * If $parse_pos > strlen($value), the parse fails immediately. 
	 * </p>
	 * @return int timestamp parsed value, or false if value can't be parsed.
	 */
	public function parse ($value, &$position = null) {}

	/**
	 * Parse string to a field-based time value
	 * @link http://www.php.net/manual/en/intldateformatter.localtime.php
	 * @param string $value <p>
	 * string to convert to a time 
	 * </p>
	 * @param int $position [optional] <p>
	 * Position at which to start the parsing in $value (zero-based).
	 * If no error occurs before $value is consumed, $parse_pos will contain -1
	 * otherwise it will contain the position at which parsing ended .
	 * If $parse_pos > strlen($value), the parse fails immediately. 
	 * </p>
	 * @return array Localtime compatible array of integers : contains 24 hour clock value in tm_hour field
	 */
	public function localtime ($value, &$position = null) {}

	/**
	 * Get the error code from last operation
	 * @link http://www.php.net/manual/en/intldateformatter.geterrorcode.php
	 * @return int The error code, one of UErrorCode values. Initial value is U_ZERO_ERROR.
	 */
	public function getErrorCode () {}

	/**
	 * Get the error text from the last operation.
	 * @link http://www.php.net/manual/en/intldateformatter.geterrormessage.php
	 * @return string Description of the last error.
	 */
	public function getErrorMessage () {}

}

class ResourceBundle implements Traversable {

	/**
	 * @param $locale
	 * @param $bundlename
	 * @param $fallback [optional]
	 */
	public function __construct ($locale, $bundlename, $fallback = null) {}

	/**
	 * Create a resource bundle
	 * @link http://www.php.net/manual/en/resourcebundle.create.php
	 * @param string $locale <p>
	 * Locale for which the resources should be loaded (locale name, e.g. en_CA).
	 * </p>
	 * @param string $bundlename <p>
	 * The directory where the data is stored or the name of the .dat file.
	 * </p>
	 * @param bool $fallback [optional] <p>
	 * Whether locale should match exactly or fallback to parent locale is allowed.
	 * </p>
	 * @return ResourceBundle ResourceBundle object or &null; on error.
	 */
	public static function create ($locale, $bundlename, $fallback = null) {}

	/**
	 * Get data from the bundle
	 * @link http://www.php.net/manual/en/resourcebundle.get.php
	 * @param string|int $index <p>
	 * Data index, must be string or integer.
	 * </p>
	 * @return mixed the data located at the index or &null; on error. Strings, integers and binary data strings
	 * are returned as corresponding PHP types, integer array is returned as PHP array. Complex types are
	 * returned as ResourceBundle object.
	 */
	public function get ($index) {}

	/**
	 * Get number of elements in the bundle
	 * @link http://www.php.net/manual/en/resourcebundle.count.php
	 * @return int number of elements in the bundle.
	 */
	public function count () {}

	/**
	 * Get supported locales
	 * @link http://www.php.net/manual/en/resourcebundle.locales.php
	 * @param string $bundlename <p>
	 * Path of ResourceBundle for which to get available locales, or
	 * empty string for default locales list.
	 * </p>
	 * @return array the list of locales supported by the bundle.
	 */
	public static function getLocales ($bundlename) {}

	/**
	 * Get bundle's last error code.
	 * @link http://www.php.net/manual/en/resourcebundle.geterrorcode.php
	 * @return int error code from last bundle object call.
	 */
	public function getErrorCode () {}

	/**
	 * Get bundle's last error message.
	 * @link http://www.php.net/manual/en/resourcebundle.geterrormessage.php
	 * @return string error message from last bundle object's call.
	 */
	public function getErrorMessage () {}

}

class Transliterator  {
	const FORWARD = 0;
	const REVERSE = 1;

	public $id;


	/**
	 * Private constructor to deny instantiation
	 * @link http://www.php.net/manual/en/transliterator.construct.php
	 */
	final private function __construct () {}

	/**
	 * Create a transliterator
	 * @link http://www.php.net/manual/en/transliterator.create.php
	 * @param string $id <p>
	 * The id.
	 * </p>
	 * @param int $direction [optional] <p>
	 * The direction, defaults to 
	 * >Transliterator::FORWARD.
	 * May also be set to
	 * Transliterator::REVERSE.
	 * </p>
	 * @return Transliterator a Transliterator object on success,
	 * or &null; on failure.
	 */
	public static function create ($id, $direction = null) {}

	/**
	 * Create transliterator from rules
	 * @link http://www.php.net/manual/en/transliterator.createfromrules.php
	 * @param string $rules <p>
	 * The rules.
	 * </p>
	 * @param string $direction [optional] <p>
	 * The direction, defaults to 
	 * >Transliterator::FORWARD.
	 * May also be set to
	 * Transliterator::REVERSE.
	 * </p>
	 * @return Transliterator a Transliterator object on success,
	 * or &null; on failure.
	 */
	public static function createFromRules ($rules, $direction = null) {}

	/**
	 * Create an inverse transliterator
	 * @link http://www.php.net/manual/en/transliterator.createinverse.php
	 * @return Transliterator a Transliterator object on success,
	 * or &null; on failure
	 */
	public function createInverse () {}

	/**
	 * Get transliterator IDs
	 * @link http://www.php.net/manual/en/transliterator.listids.php
	 * @return array An array of registered transliterator IDs on success,
	 * or false on failure.
	 */
	public static function listIDs () {}

	/**
	 * Transliterate a string
	 * @link http://www.php.net/manual/en/transliterator.transliterate.php
	 * @param string $subject <p>
	 * The string to be transformed.
	 * </p>
	 * @param int $start [optional] <p>
	 * The start index (in UTF-16 code units) from which the string will start
	 * to be transformed, inclusive. Indexing starts at 0. The text before will
	 * be left as is.
	 * </p>
	 * @param int $end [optional] <p>
	 * The end index (in UTF-16 code units) until which the string will be
	 * transformed, exclusive. Indexing starts at 0. The text after will be
	 * left as is.
	 * </p>
	 * @return string The transfomed string on success, or false on failure.
	 */
	public function transliterate ($subject, $start = null, $end = null) {}

	/**
	 * Get last error code
	 * @link http://www.php.net/manual/en/transliterator.geterrorcode.php
	 * @return int The error code on success,
	 * or false if none exists, or on failure.
	 */
	public function getErrorCode () {}

	/**
	 * Get last error message
	 * @link http://www.php.net/manual/en/transliterator.geterrormessage.php
	 * @return string The error code on success,
	 * or false if none exists, or on failure.
	 */
	public function getErrorMessage () {}

}

class IntlTimeZone  {
	const DISPLAY_SHORT = 1;
	const DISPLAY_LONG = 2;
	const DISPLAY_SHORT_GENERIC = 3;
	const DISPLAY_LONG_GENERIC = 4;
	const DISPLAY_SHORT_GMT = 5;
	const DISPLAY_LONG_GMT = 6;
	const DISPLAY_SHORT_COMMONLY_USED = 7;
	const DISPLAY_GENERIC_LOCATION = 8;
	const TYPE_ANY = 0;
	const TYPE_CANONICAL = 1;
	const TYPE_CANONICAL_LOCATION = 2;


	private function __construct () {}

	/**
	 * Create a timezone object for the given ID
	 * @link http://www.php.net/manual/en/intltimezone.createtimezone.php
	 * @param string $zoneId <p>
	 * </p>
	 * @return IntlTimeZone 
	 */
	public static function createTimeZone ($zoneId) {}

	/**
	 * Create a timezone object from <type>DateTimeZone</type>
	 * @link http://www.php.net/manual/en/intltimezone.fromdatetimezone.php
	 * @param DateTimeZone $zoneId <p>
	 * </p>
	 * @return IntlTimeZone 
	 */
	public static function fromDateTimeZone (DateTimeZone $zoneId) {}

	/**
	 * Create a new copy of the default timezone for this host
	 * @link http://www.php.net/manual/en/intltimezone.createdefault.php
	 * @return IntlTimeZone 
	 */
	public static function createDefault () {}

	/**
	 * Create GMT (UTC) timezone
	 * @link http://www.php.net/manual/en/intltimezone.getgmt.php
	 * @return IntlTimeZone 
	 */
	public static function getGMT () {}

	public static function getUnknown () {}

	/**
	 * Get an enumeration over time zone IDs associated with the
  given country or offset
	 * @link http://www.php.net/manual/en/intltimezone.createenumeration.php
	 * @param mixed $countryOrRawOffset [optional] <p>
	 * </p>
	 * @return IntlIterator 
	 */
	public static function createEnumeration ($countryOrRawOffset = null) {}

	/**
	 * Get the number of IDs in the equivalency group that includes the given ID
	 * @link http://www.php.net/manual/en/intltimezone.countequivalentids.php
	 * @param string $zoneId <p>
	 * </p>
	 * @return integer 
	 */
	public static function countEquivalentIDs ($zoneId) {}

	/**
	 * @param $zoneType
	 * @param $region [optional]
	 * @param $rawOffset [optional]
	 */
	public static function createTimeZoneIDEnumeration ($zoneType, $region = null, $rawOffset = null) {}

	/**
	 * Get the canonical system timezone ID or the normalized custom time zone ID for the given time zone ID
	 * @link http://www.php.net/manual/en/intltimezone.getcanonicalid.php
	 * @param string $zoneId <p>
	 * </p>
	 * @param bool $isSystemID [optional] <p>
	 * </p>
	 * @return string 
	 */
	public static function getCanonicalID ($zoneId, &$isSystemID = null) {}

	/**
	 * @param $zoneId
	 */
	public static function getRegion ($zoneId) {}

	/**
	 * Get the timezone data version currently used by ICU
	 * @link http://www.php.net/manual/en/intltimezone.gettzdataversion.php
	 * @return string 
	 */
	public static function getTZDataVersion () {}

	/**
	 * Get an ID in the equivalency group that includes the given ID
	 * @link http://www.php.net/manual/en/intltimezone.getequivalentid.php
	 * @param string $zoneId <p>
	 * </p>
	 * @param integer $index <p>
	 * </p>
	 * @return string 
	 */
	public static function getEquivalentID ($zoneId, $index) {}

	/**
	 * Get timezone ID
	 * @link http://www.php.net/manual/en/intltimezone.getid.php
	 * @return string 
	 */
	public function getID () {}

	/**
	 * Check if this time zone uses daylight savings time
	 * @link http://www.php.net/manual/en/intltimezone.usedaylighttime.php
	 * @return bool 
	 */
	public function useDaylightTime () {}

	/**
	 * Get the time zone raw and GMT offset for the given moment in time
	 * @link http://www.php.net/manual/en/intltimezone.getoffset.php
	 * @param float $date <p>
	 * </p>
	 * @param bool $local <p>
	 * </p>
	 * @param integer $rawOffset <p>
	 * </p>
	 * @param integer $dstOffset <p>
	 * </p>
	 * @return integer 
	 */
	public function getOffset ($date, $local, &$rawOffset, &$dstOffset) {}

	/**
	 * Get the raw GMT offset (before taking daylight savings time into account
	 * @link http://www.php.net/manual/en/intltimezone.getrawoffset.php
	 * @return integer 
	 */
	public function getRawOffset () {}

	/**
	 * Check if this zone has the same rules and offset as another zone
	 * @link http://www.php.net/manual/en/intltimezone.hassamerules.php
	 * @param IntlTimeZone $otherTimeZone <p>
	 * </p>
	 * @return bool 
	 */
	public function hasSameRules (IntlTimeZone $otherTimeZone) {}

	/**
	 * Get a name of this time zone suitable for presentation to the user
	 * @link http://www.php.net/manual/en/intltimezone.getdisplayname.php
	 * @param bool $isDaylight [optional] <p>
	 * </p>
	 * @param integer $style [optional] <p>
	 * </p>
	 * @param string $locale [optional] <p>
	 * </p>
	 * @return string 
	 */
	public function getDisplayName ($isDaylight = null, $style = null, $locale = null) {}

	/**
	 * Get the amount of time to be added to local standard time to get local wall clock time
	 * @link http://www.php.net/manual/en/intltimezone.getdstsavings.php
	 * @return integer 
	 */
	public function getDSTSavings () {}

	/**
	 * Convert to <type>DateTimeZone</type> object
	 * @link http://www.php.net/manual/en/intltimezone.todatetimezone.php
	 * @return DateTimeZone 
	 */
	public function toDateTimeZone () {}

	/**
	 * Get last error code on the object
	 * @link http://www.php.net/manual/en/intltimezone.geterrorcode.php
	 * @return integer 
	 */
	public function getErrorCode () {}

	/**
	 * Get last error message on the object
	 * @link http://www.php.net/manual/en/intltimezone.geterrormessage.php
	 * @return string 
	 */
	public function getErrorMessage () {}

}

class IntlCalendar  {
	const FIELD_ERA = 0;
	const FIELD_YEAR = 1;
	const FIELD_MONTH = 2;
	const FIELD_WEEK_OF_YEAR = 3;
	const FIELD_WEEK_OF_MONTH = 4;
	const FIELD_DATE = 5;
	const FIELD_DAY_OF_YEAR = 6;
	const FIELD_DAY_OF_WEEK = 7;
	const FIELD_DAY_OF_WEEK_IN_MONTH = 8;
	const FIELD_AM_PM = 9;
	const FIELD_HOUR = 10;
	const FIELD_HOUR_OF_DAY = 11;
	const FIELD_MINUTE = 12;
	const FIELD_SECOND = 13;
	const FIELD_MILLISECOND = 14;
	const FIELD_ZONE_OFFSET = 15;
	const FIELD_DST_OFFSET = 16;
	const FIELD_YEAR_WOY = 17;
	const FIELD_DOW_LOCAL = 18;
	const FIELD_EXTENDED_YEAR = 19;
	const FIELD_JULIAN_DAY = 20;
	const FIELD_MILLISECONDS_IN_DAY = 21;
	const FIELD_IS_LEAP_MONTH = 22;
	const FIELD_FIELD_COUNT = 23;
	const FIELD_DAY_OF_MONTH = 5;
	const DOW_SUNDAY = 1;
	const DOW_MONDAY = 2;
	const DOW_TUESDAY = 3;
	const DOW_WEDNESDAY = 4;
	const DOW_THURSDAY = 5;
	const DOW_FRIDAY = 6;
	const DOW_SATURDAY = 7;
	const DOW_TYPE_WEEKDAY = 0;
	const DOW_TYPE_WEEKEND = 1;
	const DOW_TYPE_WEEKEND_OFFSET = 2;
	const DOW_TYPE_WEEKEND_CEASE = 3;
	const WALLTIME_FIRST = 1;
	const WALLTIME_LAST = 0;
	const WALLTIME_NEXT_VALID = 2;


	/**
	 * Private constructor for disallowing instantiation
	 * @link http://www.php.net/manual/en/intlcalendar.construct.php
	 */
	private function __construct () {}

	/**
	 * Create a new IntlCalendar
	 * @link http://www.php.net/manual/en/intlcalendar.createinstance.php
	 * @param mixed $timeZone [optional] <p>
	 * The timezone to use.
	 * </p>
	 * &reference.intl.inctimezoneparam;
	 * @param string $locale [optional] <p>
	 * A locale to use or &null; to use the default locale.
	 * </p>
	 * @return IntlCalendar The created IntlCalendar instance or &null; on
	 * failure.
	 */
	public static function createInstance ($timeZone = null, $locale = null) {}

	/**
	 * Get set of locale keyword values
	 * @link http://www.php.net/manual/en/intlcalendar.getkeywordvaluesforlocale.php
	 * @param string $key <p>
	 * The locale keyword for which relevant values are to be queried. Only
	 * 'calendar' is supported.
	 * </p>
	 * @param string $locale <p>
	 * The locale onto which the keyword/value pair are to be appended.
	 * </p>
	 * @param boolean $commonlyUsed <p>
	 * Whether to show only the values commonly used for the specified locale.
	 * </p>
	 * @return Iterator An iterator that yields strings with the locale keyword
	 * values or false on failure.
	 */
	public static function getKeywordValuesForLocale ($key, $locale, $commonlyUsed) {}

	/**
	 * Get number representing the current time
	 * @link http://www.php.net/manual/en/intlcalendar.getnow.php
	 * @return float A float representing a number of milliseconds since the epoch,
	 * not counting leap seconds.
	 */
	public static function getNow () {}

	/**
	 * Get array of locales for which there is data
	 * @link http://www.php.net/manual/en/intlcalendar.getavailablelocales.php
	 * @return array An array of strings, one for which locale.
	 */
	public static function getAvailableLocales () {}

	/**
	 * Get the value for a field
	 * @link http://www.php.net/manual/en/intlcalendar.get.php
	 * @param int $field &reference.intl.incfieldparam;
	 * @return int An integer with the value of the time field.
	 */
	public function get ($field) {}

	/**
	 * Get time currently represented by the object
	 * @link http://www.php.net/manual/en/intlcalendar.gettime.php
	 * @return float A float representing the number of milliseconds elapsed since the
	 * reference time (1 Jan 1970 00:00:00 UTC).
	 */
	public function getTime () {}

	/**
	 * Set the calendar time in milliseconds since the epoch
	 * @link http://www.php.net/manual/en/intlcalendar.settime.php
	 * @param float $date <p>
	 * An instant represented by the number of number of milliseconds between
	 * such instant and the epoch, ignoring leap seconds.
	 * </p>
	 * @return bool true on success and false on failure.
	 */
	public function setTime ($date) {}

	/**
	 * Add a (signed) amount of time to a field
	 * @link http://www.php.net/manual/en/intlcalendar.add.php
	 * @param int $field &reference.intl.incfieldparam;
	 * @param int $amount <p>
	 * The signed amount to add to the current field. If the amount is positive,
	 * the instant will be moved forward; if it is negative, the instant wil be
	 * moved into the past. The unit is implicit to the field type. For instance,
	 * hours for IntlCalendar::FIELD_HOUR_OF_DAY.
	 * </p>
	 * @return bool true on success or false on failure.
	 */
	public function add ($field, $amount) {}

	/**
	 * Set the timezone used by this calendar
	 * @link http://www.php.net/manual/en/intlcalendar.settimezone.php
	 * @param mixed $timeZone <p>
	 * The new timezone to be used by this calendar. It can be specified in the
	 * following ways:
	 * &reference.intl.inctimezoneparam;
	 * </p>
	 * @return bool true on success and false on failure.
	 */
	public function setTimeZone ($timeZone) {}

	/**
	 * Whether this objectʼs time is after that of the passed object
	 * @link http://www.php.net/manual/en/intlcalendar.after.php
	 * @param IntlCalendar $other <p>
	 * The calendar whose time will be checked against the primary objectʼs time.
	 * </p>
	 * @return bool true if this objectʼs current time is after that of the
	 * calendar argumentʼs time. Returns false otherwise.
	 * Also returns false on failure. You can use exceptions or
	 * intl_get_error_code to detect error conditions.
	 */
	public function after (IntlCalendar $other) {}

	/**
	 * Whether this objectʼs time is before that of the passed object
	 * @link http://www.php.net/manual/en/intlcalendar.before.php
	 * @param IntlCalendar $other <p>
	 * The calendar whose time will be checked against the primary objectʼs time.
	 * </p>
	 * @return bool true if this objectʼs current time is before that of the
	 * calendar argumentʼs time. Returns false otherwise.
	 * Also returns false on failure. You can use exceptions or
	 * intl_get_error_code to detect error conditions.
	 */
	public function before (IntlCalendar $other) {}

	/**
	 * Set a time field or several common fields at once
	 * @link http://www.php.net/manual/en/intlcalendar.set.php
	 * @param int $field &reference.intl.incfieldparam;
	 * @param int $value <p>
	 * The new value of the given field.
	 * </p>
	 * @return bool true on success and false on failure.
	 */
	public function set ($field, $value) {}

	/**
	 * Add value to field without carrying into more significant fields
	 * @link http://www.php.net/manual/en/intlcalendar.roll.php
	 * @param int $field &reference.intl.incfieldparam;
	 * @param mixed $amountOrUpOrDown <p>
	 * The (signed) amount to add to the field, true for rolling up (adding
	 * 1), or false for rolling down (subtracting
	 * 1).
	 * </p>
	 * @return bool true on success or false on failure.
	 */
	public function roll ($field, $amountOrUpOrDown) {}

	/**
	 * Clear a field or all fields
	 * @link http://www.php.net/manual/en/intlcalendar.clear.php
	 * @param int $field [optional] &reference.intl.incfieldparam;
	 * @return bool true on success or false on failure. Failure can only occur is
	 * invalid arguments are provided.
	 */
	public function clear ($field = null) {}

	/**
	 * Calculate difference between given time and this objectʼs time
	 * @link http://www.php.net/manual/en/intlcalendar.fielddifference.php
	 * @param float $when <p>
	 * The time against which to compare the quantity represented by the
	 * field. For the result to be positive, the time
	 * given for this parameter must be ahead of the time of the object the
	 * method is being invoked on.
	 * </p>
	 * @param int $field <p>
	 * The field that represents the quantity being compared.
	 * </p>
	 * &reference.intl.incfieldparam;
	 * @return int a (signed) difference of time in the unit associated with the
	 * specified field or false on failure.
	 */
	public function fieldDifference ($when, $field) {}

	/**
	 * The maximum value for a field, considering the objectʼs current time
	 * @link http://www.php.net/manual/en/intlcalendar.getactualmaximum.php
	 * @param int $field &reference.intl.incfieldparam;
	 * @return int An int representing the maximum value in the units associated
	 * with the given field or false on failure.
	 */
	public function getActualMaximum ($field) {}

	/**
	 * The minimum value for a field, considering the objectʼs current time
	 * @link http://www.php.net/manual/en/intlcalendar.getactualminimum.php
	 * @param int $field &reference.intl.incfieldparam;
	 * @return int An int representing the minimum value in the fieldʼs
	 * unit or false on failure.
	 */
	public function getActualMinimum ($field) {}

	/**
	 * Tell whether a day is a weekday, weekend or a day that has a transition between the two
	 * @link http://www.php.net/manual/en/intlcalendar.getdayofweektype.php
	 * @param int $dayOfWeek <p>
	 * One of the constants IntlCalendar::DOW_SUNDAY,
	 * IntlCalendar::DOW_MONDAY, …,
	 * IntlCalendar::DOW_SATURDAY.
	 * </p>
	 * @return int one of the constants 
	 * IntlCalendar::DOW_TYPE_WEEKDAY,
	 * IntlCalendar::DOW_TYPE_WEEKEND,
	 * IntlCalendar::DOW_TYPE_WEEKEND_OFFSET or
	 * IntlCalendar::DOW_TYPE_WEEKEND_CEASE or false on failure.
	 */
	public function getDayOfWeekType ($dayOfWeek) {}

	/**
	 * Get the first day of the week for the calendarʼs locale
	 * @link http://www.php.net/manual/en/intlcalendar.getfirstdayofweek.php
	 * @return int One of the constants IntlCalendar::DOW_SUNDAY,
	 * IntlCalendar::DOW_MONDAY, …,
	 * IntlCalendar::DOW_SATURDAY or false on failure.
	 */
	public function getFirstDayOfWeek () {}

	/**
	 * Get the largest local minimum value for a field
	 * @link http://www.php.net/manual/en/intlcalendar.getgreatestminimum.php
	 * @param int $field &reference.intl.incfieldparam;
	 * @return int An int representing a field value, in the fieldʼs
	 * unit, or false on failure.
	 */
	public function getGreatestMinimum ($field) {}

	/**
	 * Get the smallest local maximum for a field
	 * @link http://www.php.net/manual/en/intlcalendar.getleastmaximum.php
	 * @param int $field &reference.intl.incfieldparam;
	 * @return int An int representing a field value in the fieldʼs
	 * unit or false on failure.
	 */
	public function getLeastMaximum ($field) {}

	/**
	 * Get the locale associated with the object
	 * @link http://www.php.net/manual/en/intlcalendar.getlocale.php
	 * @param int $localeType <p>
	 * Whether to fetch the actual locale (the locale from which the calendar
	 * data originates, with Locale::ACTUAL_LOCALE) or the
	 * valid locale, i.e., the most specific locale supported by ICU relatively
	 * to the requested locale – see Locale::VALID_LOCALE.
	 * From the most general to the most specific, the locales are ordered in
	 * this fashion – actual locale, valid locale, requested locale.
	 * </p>
	 * @return string A locale string or false on failure.
	 */
	public function getLocale ($localeType) {}

	/**
	 * Get the global maximum value for a field
	 * @link http://www.php.net/manual/en/intlcalendar.getmaximum.php
	 * @param int $field &reference.intl.incfieldparam;
	 * @return int An int representing a field value in the fieldʼs
	 * unit or false on failure.
	 */
	public function getMaximum ($field) {}

	/**
	 * Get minimal number of days the first week in a year or month can have
	 * @link http://www.php.net/manual/en/intlcalendar.getminimaldaysinfirstweek.php
	 * @return int An int representing a number of days or false on failure.
	 */
	public function getMinimalDaysInFirstWeek () {}

	/**
	 * Get the global minimum value for a field
	 * @link http://www.php.net/manual/en/intlcalendar.getminimum.php
	 * @param int $field &reference.intl.incfieldparam;
	 * @return int An int representing a value for the given
	 * field in the fieldʼs unit or false on failure.
	 */
	public function getMinimum ($field) {}

	/**
	 * Get the objectʼs timezone
	 * @link http://www.php.net/manual/en/intlcalendar.gettimezone.php
	 * @return IntlTimeZone An IntlTimeZone object corresponding to the one used
	 * internally in this object.
	 */
	public function getTimeZone () {}

	/**
	 * Get the calendar type
	 * @link http://www.php.net/manual/en/intlcalendar.gettype.php
	 * @return string A string representing the calendar type, such as
	 * 'gregorian', 'islamic', etc.
	 */
	public function getType () {}

	/**
	 * Get time of the day at which weekend begins or ends
	 * @link http://www.php.net/manual/en/intlcalendar.getweekendtransition.php
	 * @param string $dayOfWeek <p>
	 * One of the constants IntlCalendar::DOW_SUNDAY,
	 * IntlCalendar::DOW_MONDAY, …,
	 * IntlCalendar::DOW_SATURDAY.
	 * </p>
	 * @return int The number of milliseconds into the day at which the weekend begins or
	 * ends or false on failure.
	 */
	public function getWeekendTransition ($dayOfWeek) {}

	/**
	 * Whether the objectʼs time is in Daylight Savings Time
	 * @link http://www.php.net/manual/en/intlcalendar.indaylighttime.php
	 * @return bool true if the date is in Daylight Savings Time, false otherwise.
	 * The value false may also be returned on failure, for instance after
	 * specifying invalid field values on non-lenient mode; use exceptions or query
	 * intl_get_error_code to disambiguate.
	 */
	public function inDaylightTime () {}

	/**
	 * Whether another calendar is equal but for a different time
	 * @link http://www.php.net/manual/en/intlcalendar.isequivalentto.php
	 * @param IntlCalendar $other <p>
	 * The other calendar against which the comparison is to be made.
	 * </p>
	 * @return bool Assuming there are no argument errors, returns true iif the calendars are
	 * equivalent except possibly for their set time.
	 */
	public function isEquivalentTo (IntlCalendar $other) {}

	/**
	 * Whether date/time interpretation is in lenient mode
	 * @link http://www.php.net/manual/en/intlcalendar.islenient.php
	 * @return bool A bool representing whether the calendar is set to lenient mode.
	 */
	public function isLenient () {}

	/**
	 * Whether a field is set
	 * @link http://www.php.net/manual/en/intlcalendar.isset.php
	 * @param int $field &reference.intl.incfieldparam;
	 * @return bool Assuming there are no argument errors, returns true iif the field is set.
	 */
	public function isSet ($field) {}

	/**
	 * Whether a certain date/time is in the weekend
	 * @link http://www.php.net/manual/en/intlcalendar.isweekend.php
	 * @param float $date [optional] <p>
	 * An optional timestamp representing the number of milliseconds since the
	 * epoch, excluding leap seconds. If &null;, this objectʼs current time is
	 * used instead.
	 * </p>
	 * @return bool A bool indicating whether the given or this objectʼs time occurs
	 * in a weekend.
	 * </p>
	 * <p>
	 * The value false may also be returned on failure, for instance after giving
	 * a date out of bounds on non-lenient mode; use exceptions or query
	 * intl_get_error_code to disambiguate.
	 */
	public function isWeekend ($date = null) {}

	/**
	 * Set the day on which the week is deemed to start
	 * @link http://www.php.net/manual/en/intlcalendar.setfirstdayofweek.php
	 * @param int $dayOfWeek <p>
	 * One of the constants IntlCalendar::DOW_SUNDAY,
	 * IntlCalendar::DOW_MONDAY, …,
	 * IntlCalendar::DOW_SATURDAY.
	 * </p>
	 * @return bool true on success. Failure can only happen due to invalid parameters.
	 */
	public function setFirstDayOfWeek ($dayOfWeek) {}

	/**
	 * Set whether date/time interpretation is to be lenient
	 * @link http://www.php.net/manual/en/intlcalendar.setlenient.php
	 * @param string $isLenient <p>
	 * Use true to activate the lenient mode; false otherwise.
	 * </p>
	 * @return ReturnType true on success. Failure can only happen due to invalid parameters.
	 */
	public function setLenient ($isLenient) {}

	/**
	 * Set minimal number of days the first week in a year or month can have
	 * @link http://www.php.net/manual/en/intlcalendar.setminimaldaysinfirstweek.php
	 * @param int $minimalDays <p>
	 * The number of minimal days to set.
	 * </p>
	 * @return bool true on success, false on failure.
	 */
	public function setMinimalDaysInFirstWeek ($minimalDays) {}

	/**
	 * Compare time of two IntlCalendar objects for equality
	 * @link http://www.php.net/manual/en/intlcalendar.equals.php
	 * @param IntlCalendar $other <p>
	 * The calendar to compare with the primary object.
	 * </p>
	 * @return bool true if the current time of both this and the passed in
	 * IntlCalendar object are the same, or false
	 * otherwise. The value false can also be returned on failure. This can only
	 * happen if bad arguments are passed in. In any case, the two cases can be
	 * distinguished by calling intl_get_error_code.
	 */
	public function equals (IntlCalendar $other) {}

	/**
	 * Get behavior for handling repeating wall time
	 * @link http://www.php.net/manual/en/intlcalendar.getrepeatedwalltimeoption.php
	 * @return int One of the constants IntlCalendar::WALLTIME_FIRST or
	 * IntlCalendar::WALLTIME_LAST.
	 */
	public function getRepeatedWallTimeOption () {}

	/**
	 * Get behavior for handling skipped wall time
	 * @link http://www.php.net/manual/en/intlcalendar.getskippedwalltimeoption.php
	 * @return int One of the constants IntlCalendar::WALLTIME_FIRST,
	 * IntlCalendar::WALLTIME_LAST or
	 * IntlCalendar::WALLTIME_NEXT_VALID.
	 */
	public function getSkippedWallTimeOption () {}

	/**
	 * Set behavior for handling repeating wall times at negative timezone offset transitions
	 * @link http://www.php.net/manual/en/intlcalendar.setrepeatedwalltimeoption.php
	 * @param int $wallTimeOption <p>
	 * One of the constants IntlCalendar::WALLTIME_FIRST or
	 * IntlCalendar::WALLTIME_LAST.
	 * </p>
	 * @return bool true on success. Failure can only happen due to invalid parameters.
	 */
	public function setRepeatedWallTimeOption ($wallTimeOption) {}

	/**
	 * Set behavior for handling skipped wall times at positive timezone offset transitions
	 * @link http://www.php.net/manual/en/intlcalendar.setskippedwalltimeoption.php
	 * @param int $wallTimeOption <p>
	 * One of the constants IntlCalendar::WALLTIME_FIRST,
	 * IntlCalendar::WALLTIME_LAST or
	 * IntlCalendar::WALLTIME_NEXT_VALID. 
	 * </p>
	 * @return bool true on success. Failure can only happen due to invalid parameters.
	 */
	public function setSkippedWallTimeOption ($wallTimeOption) {}

	/**
	 * Create an IntlCalendar from a DateTime object or string
	 * @link http://www.php.net/manual/en/intlcalendar.fromdatetime.php
	 * @param mixed $dateTime <p>
	 * A DateTime object or a string that
	 * can be passed to DateTime::__construct.
	 * </p>
	 * @return IntlCalendar The created IntlCalendar object or &null; in case of
	 * failure. If a string is passed, any exception that occurs
	 * inside the DateTime constructor is propagated.
	 */
	public static function fromDateTime ($dateTime) {}

	/**
	 * Convert an IntlCalendar into a DateTime object
	 * @link http://www.php.net/manual/en/intlcalendar.todatetime.php
	 * @return DateTime A DateTime object with the same timezone as this
	 * object (though using PHPʼs database instead of ICUʼs) and the same time,
	 * except for the smaller precision (second precision instead of millisecond).
	 * Returns false on failure.
	 */
	public function toDateTime () {}

	/**
	 * Get last error code on the object
	 * @link http://www.php.net/manual/en/intlcalendar.geterrorcode.php
	 * @return int An ICU error code indicating either success, failure or a warning.
	 */
	public function getErrorCode () {}

	/**
	 * Get last error message on the object
	 * @link http://www.php.net/manual/en/intlcalendar.geterrormessage.php
	 * @return string The error message associated with last error that occurred in a function call
	 * on this object, or a string indicating the non-existance of an error.
	 */
	public function getErrorMessage () {}

}

class IntlGregorianCalendar extends IntlCalendar  {

	/**
	 * @param $timeZoneOrYear [optional]
	 * @param $localeOrMonth [optional]
	 * @param $dayOfMonth [optional]
	 * @param $hour [optional]
	 * @param $minute [optional]
	 * @param $second [optional]
	 */
	public function __construct ($timeZoneOrYear = null, $localeOrMonth = null, $dayOfMonth = null, $hour = null, $minute = null, $second = null) {}

	/**
	 * @param $date
	 */
	public function setGregorianChange ($date) {}

	public function getGregorianChange () {}

	/**
	 * @param $year
	 */
	public function isLeapYear ($year) {}

	/**
	 * Create a new IntlCalendar
	 * @link http://www.php.net/manual/en/intlcalendar.createinstance.php
	 * @param mixed $timeZone [optional] <p>
	 * The timezone to use.
	 * </p>
	 * &reference.intl.inctimezoneparam;
	 * @param string $locale [optional] <p>
	 * A locale to use or &null; to use the default locale.
	 * </p>
	 * @return IntlCalendar The created IntlCalendar instance or &null; on
	 * failure.
	 */
	public static function createInstance ($timeZone = null, $locale = null) {}

	/**
	 * Get set of locale keyword values
	 * @link http://www.php.net/manual/en/intlcalendar.getkeywordvaluesforlocale.php
	 * @param string $key <p>
	 * The locale keyword for which relevant values are to be queried. Only
	 * 'calendar' is supported.
	 * </p>
	 * @param string $locale <p>
	 * The locale onto which the keyword/value pair are to be appended.
	 * </p>
	 * @param boolean $commonlyUsed <p>
	 * Whether to show only the values commonly used for the specified locale.
	 * </p>
	 * @return Iterator An iterator that yields strings with the locale keyword
	 * values or false on failure.
	 */
	public static function getKeywordValuesForLocale ($key, $locale, $commonlyUsed) {}

	/**
	 * Get number representing the current time
	 * @link http://www.php.net/manual/en/intlcalendar.getnow.php
	 * @return float A float representing a number of milliseconds since the epoch,
	 * not counting leap seconds.
	 */
	public static function getNow () {}

	/**
	 * Get array of locales for which there is data
	 * @link http://www.php.net/manual/en/intlcalendar.getavailablelocales.php
	 * @return array An array of strings, one for which locale.
	 */
	public static function getAvailableLocales () {}

	/**
	 * Get the value for a field
	 * @link http://www.php.net/manual/en/intlcalendar.get.php
	 * @param int $field &reference.intl.incfieldparam;
	 * @return int An integer with the value of the time field.
	 */
	public function get ($field) {}

	/**
	 * Get time currently represented by the object
	 * @link http://www.php.net/manual/en/intlcalendar.gettime.php
	 * @return float A float representing the number of milliseconds elapsed since the
	 * reference time (1 Jan 1970 00:00:00 UTC).
	 */
	public function getTime () {}

	/**
	 * Set the calendar time in milliseconds since the epoch
	 * @link http://www.php.net/manual/en/intlcalendar.settime.php
	 * @param float $date <p>
	 * An instant represented by the number of number of milliseconds between
	 * such instant and the epoch, ignoring leap seconds.
	 * </p>
	 * @return bool true on success and false on failure.
	 */
	public function setTime ($date) {}

	/**
	 * Add a (signed) amount of time to a field
	 * @link http://www.php.net/manual/en/intlcalendar.add.php
	 * @param int $field &reference.intl.incfieldparam;
	 * @param int $amount <p>
	 * The signed amount to add to the current field. If the amount is positive,
	 * the instant will be moved forward; if it is negative, the instant wil be
	 * moved into the past. The unit is implicit to the field type. For instance,
	 * hours for IntlCalendar::FIELD_HOUR_OF_DAY.
	 * </p>
	 * @return bool true on success or false on failure.
	 */
	public function add ($field, $amount) {}

	/**
	 * Set the timezone used by this calendar
	 * @link http://www.php.net/manual/en/intlcalendar.settimezone.php
	 * @param mixed $timeZone <p>
	 * The new timezone to be used by this calendar. It can be specified in the
	 * following ways:
	 * &reference.intl.inctimezoneparam;
	 * </p>
	 * @return bool true on success and false on failure.
	 */
	public function setTimeZone ($timeZone) {}

	/**
	 * Whether this objectʼs time is after that of the passed object
	 * @link http://www.php.net/manual/en/intlcalendar.after.php
	 * @param IntlCalendar $other <p>
	 * The calendar whose time will be checked against the primary objectʼs time.
	 * </p>
	 * @return bool true if this objectʼs current time is after that of the
	 * calendar argumentʼs time. Returns false otherwise.
	 * Also returns false on failure. You can use exceptions or
	 * intl_get_error_code to detect error conditions.
	 */
	public function after (IntlCalendar $other) {}

	/**
	 * Whether this objectʼs time is before that of the passed object
	 * @link http://www.php.net/manual/en/intlcalendar.before.php
	 * @param IntlCalendar $other <p>
	 * The calendar whose time will be checked against the primary objectʼs time.
	 * </p>
	 * @return bool true if this objectʼs current time is before that of the
	 * calendar argumentʼs time. Returns false otherwise.
	 * Also returns false on failure. You can use exceptions or
	 * intl_get_error_code to detect error conditions.
	 */
	public function before (IntlCalendar $other) {}

	/**
	 * Set a time field or several common fields at once
	 * @link http://www.php.net/manual/en/intlcalendar.set.php
	 * @param int $field &reference.intl.incfieldparam;
	 * @param int $value <p>
	 * The new value of the given field.
	 * </p>
	 * @return bool true on success and false on failure.
	 */
	public function set ($field, $value) {}

	/**
	 * Add value to field without carrying into more significant fields
	 * @link http://www.php.net/manual/en/intlcalendar.roll.php
	 * @param int $field &reference.intl.incfieldparam;
	 * @param mixed $amountOrUpOrDown <p>
	 * The (signed) amount to add to the field, true for rolling up (adding
	 * 1), or false for rolling down (subtracting
	 * 1).
	 * </p>
	 * @return bool true on success or false on failure.
	 */
	public function roll ($field, $amountOrUpOrDown) {}

	/**
	 * Clear a field or all fields
	 * @link http://www.php.net/manual/en/intlcalendar.clear.php
	 * @param int $field [optional] &reference.intl.incfieldparam;
	 * @return bool true on success or false on failure. Failure can only occur is
	 * invalid arguments are provided.
	 */
	public function clear ($field = null) {}

	/**
	 * Calculate difference between given time and this objectʼs time
	 * @link http://www.php.net/manual/en/intlcalendar.fielddifference.php
	 * @param float $when <p>
	 * The time against which to compare the quantity represented by the
	 * field. For the result to be positive, the time
	 * given for this parameter must be ahead of the time of the object the
	 * method is being invoked on.
	 * </p>
	 * @param int $field <p>
	 * The field that represents the quantity being compared.
	 * </p>
	 * &reference.intl.incfieldparam;
	 * @return int a (signed) difference of time in the unit associated with the
	 * specified field or false on failure.
	 */
	public function fieldDifference ($when, $field) {}

	/**
	 * The maximum value for a field, considering the objectʼs current time
	 * @link http://www.php.net/manual/en/intlcalendar.getactualmaximum.php
	 * @param int $field &reference.intl.incfieldparam;
	 * @return int An int representing the maximum value in the units associated
	 * with the given field or false on failure.
	 */
	public function getActualMaximum ($field) {}

	/**
	 * The minimum value for a field, considering the objectʼs current time
	 * @link http://www.php.net/manual/en/intlcalendar.getactualminimum.php
	 * @param int $field &reference.intl.incfieldparam;
	 * @return int An int representing the minimum value in the fieldʼs
	 * unit or false on failure.
	 */
	public function getActualMinimum ($field) {}

	/**
	 * Tell whether a day is a weekday, weekend or a day that has a transition between the two
	 * @link http://www.php.net/manual/en/intlcalendar.getdayofweektype.php
	 * @param int $dayOfWeek <p>
	 * One of the constants IntlCalendar::DOW_SUNDAY,
	 * IntlCalendar::DOW_MONDAY, …,
	 * IntlCalendar::DOW_SATURDAY.
	 * </p>
	 * @return int one of the constants 
	 * IntlCalendar::DOW_TYPE_WEEKDAY,
	 * IntlCalendar::DOW_TYPE_WEEKEND,
	 * IntlCalendar::DOW_TYPE_WEEKEND_OFFSET or
	 * IntlCalendar::DOW_TYPE_WEEKEND_CEASE or false on failure.
	 */
	public function getDayOfWeekType ($dayOfWeek) {}

	/**
	 * Get the first day of the week for the calendarʼs locale
	 * @link http://www.php.net/manual/en/intlcalendar.getfirstdayofweek.php
	 * @return int One of the constants IntlCalendar::DOW_SUNDAY,
	 * IntlCalendar::DOW_MONDAY, …,
	 * IntlCalendar::DOW_SATURDAY or false on failure.
	 */
	public function getFirstDayOfWeek () {}

	/**
	 * Get the largest local minimum value for a field
	 * @link http://www.php.net/manual/en/intlcalendar.getgreatestminimum.php
	 * @param int $field &reference.intl.incfieldparam;
	 * @return int An int representing a field value, in the fieldʼs
	 * unit, or false on failure.
	 */
	public function getGreatestMinimum ($field) {}

	/**
	 * Get the smallest local maximum for a field
	 * @link http://www.php.net/manual/en/intlcalendar.getleastmaximum.php
	 * @param int $field &reference.intl.incfieldparam;
	 * @return int An int representing a field value in the fieldʼs
	 * unit or false on failure.
	 */
	public function getLeastMaximum ($field) {}

	/**
	 * Get the locale associated with the object
	 * @link http://www.php.net/manual/en/intlcalendar.getlocale.php
	 * @param int $localeType <p>
	 * Whether to fetch the actual locale (the locale from which the calendar
	 * data originates, with Locale::ACTUAL_LOCALE) or the
	 * valid locale, i.e., the most specific locale supported by ICU relatively
	 * to the requested locale – see Locale::VALID_LOCALE.
	 * From the most general to the most specific, the locales are ordered in
	 * this fashion – actual locale, valid locale, requested locale.
	 * </p>
	 * @return string A locale string or false on failure.
	 */
	public function getLocale ($localeType) {}

	/**
	 * Get the global maximum value for a field
	 * @link http://www.php.net/manual/en/intlcalendar.getmaximum.php
	 * @param int $field &reference.intl.incfieldparam;
	 * @return int An int representing a field value in the fieldʼs
	 * unit or false on failure.
	 */
	public function getMaximum ($field) {}

	/**
	 * Get minimal number of days the first week in a year or month can have
	 * @link http://www.php.net/manual/en/intlcalendar.getminimaldaysinfirstweek.php
	 * @return int An int representing a number of days or false on failure.
	 */
	public function getMinimalDaysInFirstWeek () {}

	/**
	 * Get the global minimum value for a field
	 * @link http://www.php.net/manual/en/intlcalendar.getminimum.php
	 * @param int $field &reference.intl.incfieldparam;
	 * @return int An int representing a value for the given
	 * field in the fieldʼs unit or false on failure.
	 */
	public function getMinimum ($field) {}

	/**
	 * Get the objectʼs timezone
	 * @link http://www.php.net/manual/en/intlcalendar.gettimezone.php
	 * @return IntlTimeZone An IntlTimeZone object corresponding to the one used
	 * internally in this object.
	 */
	public function getTimeZone () {}

	/**
	 * Get the calendar type
	 * @link http://www.php.net/manual/en/intlcalendar.gettype.php
	 * @return string A string representing the calendar type, such as
	 * 'gregorian', 'islamic', etc.
	 */
	public function getType () {}

	/**
	 * Get time of the day at which weekend begins or ends
	 * @link http://www.php.net/manual/en/intlcalendar.getweekendtransition.php
	 * @param string $dayOfWeek <p>
	 * One of the constants IntlCalendar::DOW_SUNDAY,
	 * IntlCalendar::DOW_MONDAY, …,
	 * IntlCalendar::DOW_SATURDAY.
	 * </p>
	 * @return int The number of milliseconds into the day at which the weekend begins or
	 * ends or false on failure.
	 */
	public function getWeekendTransition ($dayOfWeek) {}

	/**
	 * Whether the objectʼs time is in Daylight Savings Time
	 * @link http://www.php.net/manual/en/intlcalendar.indaylighttime.php
	 * @return bool true if the date is in Daylight Savings Time, false otherwise.
	 * The value false may also be returned on failure, for instance after
	 * specifying invalid field values on non-lenient mode; use exceptions or query
	 * intl_get_error_code to disambiguate.
	 */
	public function inDaylightTime () {}

	/**
	 * Whether another calendar is equal but for a different time
	 * @link http://www.php.net/manual/en/intlcalendar.isequivalentto.php
	 * @param IntlCalendar $other <p>
	 * The other calendar against which the comparison is to be made.
	 * </p>
	 * @return bool Assuming there are no argument errors, returns true iif the calendars are
	 * equivalent except possibly for their set time.
	 */
	public function isEquivalentTo (IntlCalendar $other) {}

	/**
	 * Whether date/time interpretation is in lenient mode
	 * @link http://www.php.net/manual/en/intlcalendar.islenient.php
	 * @return bool A bool representing whether the calendar is set to lenient mode.
	 */
	public function isLenient () {}

	/**
	 * Whether a field is set
	 * @link http://www.php.net/manual/en/intlcalendar.isset.php
	 * @param int $field &reference.intl.incfieldparam;
	 * @return bool Assuming there are no argument errors, returns true iif the field is set.
	 */
	public function isSet ($field) {}

	/**
	 * Whether a certain date/time is in the weekend
	 * @link http://www.php.net/manual/en/intlcalendar.isweekend.php
	 * @param float $date [optional] <p>
	 * An optional timestamp representing the number of milliseconds since the
	 * epoch, excluding leap seconds. If &null;, this objectʼs current time is
	 * used instead.
	 * </p>
	 * @return bool A bool indicating whether the given or this objectʼs time occurs
	 * in a weekend.
	 * </p>
	 * <p>
	 * The value false may also be returned on failure, for instance after giving
	 * a date out of bounds on non-lenient mode; use exceptions or query
	 * intl_get_error_code to disambiguate.
	 */
	public function isWeekend ($date = null) {}

	/**
	 * Set the day on which the week is deemed to start
	 * @link http://www.php.net/manual/en/intlcalendar.setfirstdayofweek.php
	 * @param int $dayOfWeek <p>
	 * One of the constants IntlCalendar::DOW_SUNDAY,
	 * IntlCalendar::DOW_MONDAY, …,
	 * IntlCalendar::DOW_SATURDAY.
	 * </p>
	 * @return bool true on success. Failure can only happen due to invalid parameters.
	 */
	public function setFirstDayOfWeek ($dayOfWeek) {}

	/**
	 * Set whether date/time interpretation is to be lenient
	 * @link http://www.php.net/manual/en/intlcalendar.setlenient.php
	 * @param string $isLenient <p>
	 * Use true to activate the lenient mode; false otherwise.
	 * </p>
	 * @return ReturnType true on success. Failure can only happen due to invalid parameters.
	 */
	public function setLenient ($isLenient) {}

	/**
	 * Set minimal number of days the first week in a year or month can have
	 * @link http://www.php.net/manual/en/intlcalendar.setminimaldaysinfirstweek.php
	 * @param int $minimalDays <p>
	 * The number of minimal days to set.
	 * </p>
	 * @return bool true on success, false on failure.
	 */
	public function setMinimalDaysInFirstWeek ($minimalDays) {}

	/**
	 * Compare time of two IntlCalendar objects for equality
	 * @link http://www.php.net/manual/en/intlcalendar.equals.php
	 * @param IntlCalendar $other <p>
	 * The calendar to compare with the primary object.
	 * </p>
	 * @return bool true if the current time of both this and the passed in
	 * IntlCalendar object are the same, or false
	 * otherwise. The value false can also be returned on failure. This can only
	 * happen if bad arguments are passed in. In any case, the two cases can be
	 * distinguished by calling intl_get_error_code.
	 */
	public function equals (IntlCalendar $other) {}

	/**
	 * Get behavior for handling repeating wall time
	 * @link http://www.php.net/manual/en/intlcalendar.getrepeatedwalltimeoption.php
	 * @return int One of the constants IntlCalendar::WALLTIME_FIRST or
	 * IntlCalendar::WALLTIME_LAST.
	 */
	public function getRepeatedWallTimeOption () {}

	/**
	 * Get behavior for handling skipped wall time
	 * @link http://www.php.net/manual/en/intlcalendar.getskippedwalltimeoption.php
	 * @return int One of the constants IntlCalendar::WALLTIME_FIRST,
	 * IntlCalendar::WALLTIME_LAST or
	 * IntlCalendar::WALLTIME_NEXT_VALID.
	 */
	public function getSkippedWallTimeOption () {}

	/**
	 * Set behavior for handling repeating wall times at negative timezone offset transitions
	 * @link http://www.php.net/manual/en/intlcalendar.setrepeatedwalltimeoption.php
	 * @param int $wallTimeOption <p>
	 * One of the constants IntlCalendar::WALLTIME_FIRST or
	 * IntlCalendar::WALLTIME_LAST.
	 * </p>
	 * @return bool true on success. Failure can only happen due to invalid parameters.
	 */
	public function setRepeatedWallTimeOption ($wallTimeOption) {}

	/**
	 * Set behavior for handling skipped wall times at positive timezone offset transitions
	 * @link http://www.php.net/manual/en/intlcalendar.setskippedwalltimeoption.php
	 * @param int $wallTimeOption <p>
	 * One of the constants IntlCalendar::WALLTIME_FIRST,
	 * IntlCalendar::WALLTIME_LAST or
	 * IntlCalendar::WALLTIME_NEXT_VALID. 
	 * </p>
	 * @return bool true on success. Failure can only happen due to invalid parameters.
	 */
	public function setSkippedWallTimeOption ($wallTimeOption) {}

	/**
	 * Create an IntlCalendar from a DateTime object or string
	 * @link http://www.php.net/manual/en/intlcalendar.fromdatetime.php
	 * @param mixed $dateTime <p>
	 * A DateTime object or a string that
	 * can be passed to DateTime::__construct.
	 * </p>
	 * @return IntlCalendar The created IntlCalendar object or &null; in case of
	 * failure. If a string is passed, any exception that occurs
	 * inside the DateTime constructor is propagated.
	 */
	public static function fromDateTime ($dateTime) {}

	/**
	 * Convert an IntlCalendar into a DateTime object
	 * @link http://www.php.net/manual/en/intlcalendar.todatetime.php
	 * @return DateTime A DateTime object with the same timezone as this
	 * object (though using PHPʼs database instead of ICUʼs) and the same time,
	 * except for the smaller precision (second precision instead of millisecond).
	 * Returns false on failure.
	 */
	public function toDateTime () {}

	/**
	 * Get last error code on the object
	 * @link http://www.php.net/manual/en/intlcalendar.geterrorcode.php
	 * @return int An ICU error code indicating either success, failure or a warning.
	 */
	public function getErrorCode () {}

	/**
	 * Get last error message on the object
	 * @link http://www.php.net/manual/en/intlcalendar.geterrormessage.php
	 * @return string The error message associated with last error that occurred in a function call
	 * on this object, or a string indicating the non-existance of an error.
	 */
	public function getErrorMessage () {}

}

class Spoofchecker  {
	const SINGLE_SCRIPT_CONFUSABLE = 1;
	const MIXED_SCRIPT_CONFUSABLE = 2;
	const WHOLE_SCRIPT_CONFUSABLE = 4;
	const ANY_CASE = 8;
	const SINGLE_SCRIPT = 16;
	const INVISIBLE = 32;
	const CHAR_LIMIT = 64;


	/**
	 * Constructor
	 * @link http://www.php.net/manual/en/spoofchecker.construct.php
	 */
	public function __construct () {}

	/**
	 * Checks if a given text contains any suspicious characters
	 * @link http://www.php.net/manual/en/spoofchecker.issuspicious.php
	 * @param string $text <p>
	 * </p>
	 * @param string $error [optional] <p>
	 * </p>
	 * @return bool 
	 */
	public function isSuspicious ($text, &$error = null) {}

	/**
	 * Checks if a given text contains any confusable characters
	 * @link http://www.php.net/manual/en/spoofchecker.areconfusable.php
	 * @param string $s1 <p>
	 * </p>
	 * @param string $s2 <p>
	 * </p>
	 * @param string $error [optional] <p>
	 * </p>
	 * @return bool 
	 */
	public function areConfusable ($s1, $s2, &$error = null) {}

	/**
	 * Locales to use when running checks
	 * @link http://www.php.net/manual/en/spoofchecker.setallowedlocales.php
	 * @param string $locale_list <p>
	 * </p>
	 * @return void 
	 */
	public function setAllowedLocales ($locale_list) {}

	/**
	 * Set the checks to run
	 * @link http://www.php.net/manual/en/spoofchecker.setchecks.php
	 * @param long $checks <p>
	 * </p>
	 * @return void 
	 */
	public function setChecks ($checks) {}

}

class IntlException extends Exception implements Throwable {
	protected $message;
	protected $code;
	protected $file;
	protected $line;


	final private function __clone () {}

	/**
	 * @param $message [optional]
	 * @param $code [optional]
	 * @param $previous [optional]
	 */
	public function __construct ($message = null, $code = null, $previous = null) {}

	public function __wakeup () {}

	final public function getMessage () {}

	final public function getCode () {}

	final public function getFile () {}

	final public function getLine () {}

	final public function getTrace () {}

	final public function getPrevious () {}

	final public function getTraceAsString () {}

	public function __toString () {}

}

class IntlIterator implements Iterator, Traversable {

	/**
	 * Get the current element
	 * @link http://www.php.net/manual/en/intliterator.current.php
	 * @return ReturnType 
	 */
	public function current () {}

	/**
	 * Get the current key
	 * @link http://www.php.net/manual/en/intliterator.key.php
	 * @return ReturnType 
	 */
	public function key () {}

	/**
	 * Move forward to the next element
	 * @link http://www.php.net/manual/en/intliterator.next.php
	 * @return ReturnType 
	 */
	public function next () {}

	/**
	 * Rewind the iterator to the first element
	 * @link http://www.php.net/manual/en/intliterator.rewind.php
	 * @return ReturnType 
	 */
	public function rewind () {}

	/**
	 * Check if current position is valid
	 * @link http://www.php.net/manual/en/intliterator.valid.php
	 * @return ReturnType 
	 */
	public function valid () {}

}

class IntlBreakIterator implements Traversable {
	const DONE = -1;
	const WORD_NONE = 0;
	const WORD_NONE_LIMIT = 100;
	const WORD_NUMBER = 100;
	const WORD_NUMBER_LIMIT = 200;
	const WORD_LETTER = 200;
	const WORD_LETTER_LIMIT = 300;
	const WORD_KANA = 300;
	const WORD_KANA_LIMIT = 400;
	const WORD_IDEO = 400;
	const WORD_IDEO_LIMIT = 500;
	const LINE_SOFT = 0;
	const LINE_SOFT_LIMIT = 100;
	const LINE_HARD = 100;
	const LINE_HARD_LIMIT = 200;
	const SENTENCE_TERM = 0;
	const SENTENCE_TERM_LIMIT = 100;
	const SENTENCE_SEP = 100;
	const SENTENCE_SEP_LIMIT = 200;


	/**
	 * Private constructor for disallowing instantiation
	 * @link http://www.php.net/manual/en/intlbreakiterator.construct.php
	 */
	private function __construct () {}

	/**
	 * Create break iterator for word breaks
	 * @link http://www.php.net/manual/en/intlbreakiterator.createwordinstance.php
	 * @param string $_locale_ [optional] 
	 * @return ReturnType 
	 */
	public static function createWordInstance ($_locale_ = null) {}

	/**
	 * Create break iterator for logically possible line breaks
	 * @link http://www.php.net/manual/en/intlbreakiterator.createlineinstance.php
	 * @param string $_locale_ [optional] 
	 * @return ReturnType 
	 */
	public static function createLineInstance ($_locale_ = null) {}

	/**
	 * Create break iterator for boundaries of combining character sequences
	 * @link http://www.php.net/manual/en/intlbreakiterator.createcharacterinstance.php
	 * @param string $_locale_ [optional] 
	 * @return ReturnType 
	 */
	public static function createCharacterInstance ($_locale_ = null) {}

	/**
	 * Create break iterator for sentence breaks
	 * @link http://www.php.net/manual/en/intlbreakiterator.createsentenceinstance.php
	 * @param string $_locale_ [optional] 
	 * @return ReturnType 
	 */
	public static function createSentenceInstance ($_locale_ = null) {}

	/**
	 * Create break iterator for title-casing breaks
	 * @link http://www.php.net/manual/en/intlbreakiterator.createtitleinstance.php
	 * @param string $_locale_ [optional] 
	 * @return ReturnType 
	 */
	public static function createTitleInstance ($_locale_ = null) {}

	/**
	 * Create break iterator for boundaries of code points
	 * @link http://www.php.net/manual/en/intlbreakiterator.createcodepointinstance.php
	 * @return ReturnType 
	 */
	public static function createCodePointInstance () {}

	/**
	 * Get the text being scanned
	 * @link http://www.php.net/manual/en/intlbreakiterator.gettext.php
	 * @return ReturnType 
	 */
	public function getText () {}

	/**
	 * Set the text being scanned
	 * @link http://www.php.net/manual/en/intlbreakiterator.settext.php
	 * @param string $_text_ 
	 * @return ReturnType 
	 */
	public function setText ($_text_) {}

	/**
	 * Set position to the first character in the text
	 * @link http://www.php.net/manual/en/intlbreakiterator.first.php
	 * @return ReturnType 
	 */
	public function first () {}

	/**
	 * Set the iterator position to index beyond the last character
	 * @link http://www.php.net/manual/en/intlbreakiterator.last.php
	 * @return ReturnType 
	 */
	public function last () {}

	/**
	 * Set the iterator position to the boundary immediately before the current
	 * @link http://www.php.net/manual/en/intlbreakiterator.previous.php
	 * @return ReturnType 
	 */
	public function previous () {}

	/**
	 * Advance the iterator the next boundary
	 * @link http://www.php.net/manual/en/intlbreakiterator.next.php
	 * @param string $_offset_ [optional] 
	 * @return ReturnType 
	 */
	public function next ($_offset_ = null) {}

	/**
	 * Get index of current position
	 * @link http://www.php.net/manual/en/intlbreakiterator.current.php
	 * @return ReturnType 
	 */
	public function current () {}

	/**
	 * Advance the iterator to the first boundary following specified offset
	 * @link http://www.php.net/manual/en/intlbreakiterator.following.php
	 * @param string $_offset_ 
	 * @return ReturnType 
	 */
	public function following ($_offset_) {}

	/**
	 * Set the iterator position to the first boundary before an offset
	 * @link http://www.php.net/manual/en/intlbreakiterator.preceding.php
	 * @param string $_offset_ 
	 * @return ReturnType 
	 */
	public function preceding ($_offset_) {}

	/**
	 * Tell whether an offset is a boundaryʼs offset
	 * @link http://www.php.net/manual/en/intlbreakiterator.isboundary.php
	 * @param string $_offset_ 
	 * @return ReturnType 
	 */
	public function isBoundary ($_offset_) {}

	/**
	 * Get the locale associated with the object
	 * @link http://www.php.net/manual/en/intlbreakiterator.getlocale.php
	 * @param string $_locale_type_ 
	 * @return ReturnType 
	 */
	public function getLocale ($_locale_type_) {}

	/**
	 * Create iterator for navigating fragments between boundaries
	 * @link http://www.php.net/manual/en/intlbreakiterator.getpartsiterator.php
	 * @param string $_key_type_ [optional] 
	 * @return ReturnType 
	 */
	public function getPartsIterator ($_key_type_ = null) {}

	/**
	 * Get last error code on the object
	 * @link http://www.php.net/manual/en/intlbreakiterator.geterrorcode.php
	 * @return ReturnType 
	 */
	public function getErrorCode () {}

	/**
	 * Get last error message on the object
	 * @link http://www.php.net/manual/en/intlbreakiterator.geterrormessage.php
	 * @return ReturnType 
	 */
	public function getErrorMessage () {}

}

class IntlRuleBasedBreakIterator extends IntlBreakIterator implements Traversable {
	const DONE = -1;
	const WORD_NONE = 0;
	const WORD_NONE_LIMIT = 100;
	const WORD_NUMBER = 100;
	const WORD_NUMBER_LIMIT = 200;
	const WORD_LETTER = 200;
	const WORD_LETTER_LIMIT = 300;
	const WORD_KANA = 300;
	const WORD_KANA_LIMIT = 400;
	const WORD_IDEO = 400;
	const WORD_IDEO_LIMIT = 500;
	const LINE_SOFT = 0;
	const LINE_SOFT_LIMIT = 100;
	const LINE_HARD = 100;
	const LINE_HARD_LIMIT = 200;
	const SENTENCE_TERM = 0;
	const SENTENCE_TERM_LIMIT = 100;
	const SENTENCE_SEP = 100;
	const SENTENCE_SEP_LIMIT = 200;


	/**
	 * Create iterator from ruleset
	 * @link http://www.php.net/manual/en/intlrulebasedbreakiterator.construct.php
	 * @param $rules
	 * @param $areCompiled [optional]
	 */
	public function __construct ($rules, $areCompiled = null) {}

	/**
	 * Get the rule set used to create this object
	 * @link http://www.php.net/manual/en/intlrulebasedbreakiterator.getrules.php
	 * @return ReturnType 
	 */
	public function getRules () {}

	/**
	 * Get the largest status value from the break rules that determined the current break position
	 * @link http://www.php.net/manual/en/intlrulebasedbreakiterator.getrulestatus.php
	 * @return ReturnType 
	 */
	public function getRuleStatus () {}

	/**
	 * Get the status values from the break rules that determined the current break position
	 * @link http://www.php.net/manual/en/intlrulebasedbreakiterator.getrulestatusvec.php
	 * @return ReturnType 
	 */
	public function getRuleStatusVec () {}

	/**
	 * Get the binary form of compiled rules
	 * @link http://www.php.net/manual/en/intlrulebasedbreakiterator.getbinaryrules.php
	 * @return ReturnType 
	 */
	public function getBinaryRules () {}

	/**
	 * Create break iterator for word breaks
	 * @link http://www.php.net/manual/en/intlbreakiterator.createwordinstance.php
	 * @param string $_locale_ [optional] 
	 * @return ReturnType 
	 */
	public static function createWordInstance ($_locale_ = null) {}

	/**
	 * Create break iterator for logically possible line breaks
	 * @link http://www.php.net/manual/en/intlbreakiterator.createlineinstance.php
	 * @param string $_locale_ [optional] 
	 * @return ReturnType 
	 */
	public static function createLineInstance ($_locale_ = null) {}

	/**
	 * Create break iterator for boundaries of combining character sequences
	 * @link http://www.php.net/manual/en/intlbreakiterator.createcharacterinstance.php
	 * @param string $_locale_ [optional] 
	 * @return ReturnType 
	 */
	public static function createCharacterInstance ($_locale_ = null) {}

	/**
	 * Create break iterator for sentence breaks
	 * @link http://www.php.net/manual/en/intlbreakiterator.createsentenceinstance.php
	 * @param string $_locale_ [optional] 
	 * @return ReturnType 
	 */
	public static function createSentenceInstance ($_locale_ = null) {}

	/**
	 * Create break iterator for title-casing breaks
	 * @link http://www.php.net/manual/en/intlbreakiterator.createtitleinstance.php
	 * @param string $_locale_ [optional] 
	 * @return ReturnType 
	 */
	public static function createTitleInstance ($_locale_ = null) {}

	/**
	 * Create break iterator for boundaries of code points
	 * @link http://www.php.net/manual/en/intlbreakiterator.createcodepointinstance.php
	 * @return ReturnType 
	 */
	public static function createCodePointInstance () {}

	/**
	 * Get the text being scanned
	 * @link http://www.php.net/manual/en/intlbreakiterator.gettext.php
	 * @return ReturnType 
	 */
	public function getText () {}

	/**
	 * Set the text being scanned
	 * @link http://www.php.net/manual/en/intlbreakiterator.settext.php
	 * @param string $_text_ 
	 * @return ReturnType 
	 */
	public function setText ($_text_) {}

	/**
	 * Set position to the first character in the text
	 * @link http://www.php.net/manual/en/intlbreakiterator.first.php
	 * @return ReturnType 
	 */
	public function first () {}

	/**
	 * Set the iterator position to index beyond the last character
	 * @link http://www.php.net/manual/en/intlbreakiterator.last.php
	 * @return ReturnType 
	 */
	public function last () {}

	/**
	 * Set the iterator position to the boundary immediately before the current
	 * @link http://www.php.net/manual/en/intlbreakiterator.previous.php
	 * @return ReturnType 
	 */
	public function previous () {}

	/**
	 * Advance the iterator the next boundary
	 * @link http://www.php.net/manual/en/intlbreakiterator.next.php
	 * @param string $_offset_ [optional] 
	 * @return ReturnType 
	 */
	public function next ($_offset_ = null) {}

	/**
	 * Get index of current position
	 * @link http://www.php.net/manual/en/intlbreakiterator.current.php
	 * @return ReturnType 
	 */
	public function current () {}

	/**
	 * Advance the iterator to the first boundary following specified offset
	 * @link http://www.php.net/manual/en/intlbreakiterator.following.php
	 * @param string $_offset_ 
	 * @return ReturnType 
	 */
	public function following ($_offset_) {}

	/**
	 * Set the iterator position to the first boundary before an offset
	 * @link http://www.php.net/manual/en/intlbreakiterator.preceding.php
	 * @param string $_offset_ 
	 * @return ReturnType 
	 */
	public function preceding ($_offset_) {}

	/**
	 * Tell whether an offset is a boundaryʼs offset
	 * @link http://www.php.net/manual/en/intlbreakiterator.isboundary.php
	 * @param string $_offset_ 
	 * @return ReturnType 
	 */
	public function isBoundary ($_offset_) {}

	/**
	 * Get the locale associated with the object
	 * @link http://www.php.net/manual/en/intlbreakiterator.getlocale.php
	 * @param string $_locale_type_ 
	 * @return ReturnType 
	 */
	public function getLocale ($_locale_type_) {}

	/**
	 * Create iterator for navigating fragments between boundaries
	 * @link http://www.php.net/manual/en/intlbreakiterator.getpartsiterator.php
	 * @param string $_key_type_ [optional] 
	 * @return ReturnType 
	 */
	public function getPartsIterator ($_key_type_ = null) {}

	/**
	 * Get last error code on the object
	 * @link http://www.php.net/manual/en/intlbreakiterator.geterrorcode.php
	 * @return ReturnType 
	 */
	public function getErrorCode () {}

	/**
	 * Get last error message on the object
	 * @link http://www.php.net/manual/en/intlbreakiterator.geterrormessage.php
	 * @return ReturnType 
	 */
	public function getErrorMessage () {}

}

class IntlCodePointBreakIterator extends IntlBreakIterator implements Traversable {
	const DONE = -1;
	const WORD_NONE = 0;
	const WORD_NONE_LIMIT = 100;
	const WORD_NUMBER = 100;
	const WORD_NUMBER_LIMIT = 200;
	const WORD_LETTER = 200;
	const WORD_LETTER_LIMIT = 300;
	const WORD_KANA = 300;
	const WORD_KANA_LIMIT = 400;
	const WORD_IDEO = 400;
	const WORD_IDEO_LIMIT = 500;
	const LINE_SOFT = 0;
	const LINE_SOFT_LIMIT = 100;
	const LINE_HARD = 100;
	const LINE_HARD_LIMIT = 200;
	const SENTENCE_TERM = 0;
	const SENTENCE_TERM_LIMIT = 100;
	const SENTENCE_SEP = 100;
	const SENTENCE_SEP_LIMIT = 200;


	/**
	 * Get last code point passed over after advancing or receding the iterator
	 * @link http://www.php.net/manual/en/intlcodepointbreakiterator.getlastcodepoint.php
	 * @return ReturnType 
	 */
	public function getLastCodePoint () {}

	/**
	 * Private constructor for disallowing instantiation
	 * @link http://www.php.net/manual/en/intlbreakiterator.construct.php
	 */
	private function __construct () {}

	/**
	 * Create break iterator for word breaks
	 * @link http://www.php.net/manual/en/intlbreakiterator.createwordinstance.php
	 * @param string $_locale_ [optional] 
	 * @return ReturnType 
	 */
	public static function createWordInstance ($_locale_ = null) {}

	/**
	 * Create break iterator for logically possible line breaks
	 * @link http://www.php.net/manual/en/intlbreakiterator.createlineinstance.php
	 * @param string $_locale_ [optional] 
	 * @return ReturnType 
	 */
	public static function createLineInstance ($_locale_ = null) {}

	/**
	 * Create break iterator for boundaries of combining character sequences
	 * @link http://www.php.net/manual/en/intlbreakiterator.createcharacterinstance.php
	 * @param string $_locale_ [optional] 
	 * @return ReturnType 
	 */
	public static function createCharacterInstance ($_locale_ = null) {}

	/**
	 * Create break iterator for sentence breaks
	 * @link http://www.php.net/manual/en/intlbreakiterator.createsentenceinstance.php
	 * @param string $_locale_ [optional] 
	 * @return ReturnType 
	 */
	public static function createSentenceInstance ($_locale_ = null) {}

	/**
	 * Create break iterator for title-casing breaks
	 * @link http://www.php.net/manual/en/intlbreakiterator.createtitleinstance.php
	 * @param string $_locale_ [optional] 
	 * @return ReturnType 
	 */
	public static function createTitleInstance ($_locale_ = null) {}

	/**
	 * Create break iterator for boundaries of code points
	 * @link http://www.php.net/manual/en/intlbreakiterator.createcodepointinstance.php
	 * @return ReturnType 
	 */
	public static function createCodePointInstance () {}

	/**
	 * Get the text being scanned
	 * @link http://www.php.net/manual/en/intlbreakiterator.gettext.php
	 * @return ReturnType 
	 */
	public function getText () {}

	/**
	 * Set the text being scanned
	 * @link http://www.php.net/manual/en/intlbreakiterator.settext.php
	 * @param string $_text_ 
	 * @return ReturnType 
	 */
	public function setText ($_text_) {}

	/**
	 * Set position to the first character in the text
	 * @link http://www.php.net/manual/en/intlbreakiterator.first.php
	 * @return ReturnType 
	 */
	public function first () {}

	/**
	 * Set the iterator position to index beyond the last character
	 * @link http://www.php.net/manual/en/intlbreakiterator.last.php
	 * @return ReturnType 
	 */
	public function last () {}

	/**
	 * Set the iterator position to the boundary immediately before the current
	 * @link http://www.php.net/manual/en/intlbreakiterator.previous.php
	 * @return ReturnType 
	 */
	public function previous () {}

	/**
	 * Advance the iterator the next boundary
	 * @link http://www.php.net/manual/en/intlbreakiterator.next.php
	 * @param string $_offset_ [optional] 
	 * @return ReturnType 
	 */
	public function next ($_offset_ = null) {}

	/**
	 * Get index of current position
	 * @link http://www.php.net/manual/en/intlbreakiterator.current.php
	 * @return ReturnType 
	 */
	public function current () {}

	/**
	 * Advance the iterator to the first boundary following specified offset
	 * @link http://www.php.net/manual/en/intlbreakiterator.following.php
	 * @param string $_offset_ 
	 * @return ReturnType 
	 */
	public function following ($_offset_) {}

	/**
	 * Set the iterator position to the first boundary before an offset
	 * @link http://www.php.net/manual/en/intlbreakiterator.preceding.php
	 * @param string $_offset_ 
	 * @return ReturnType 
	 */
	public function preceding ($_offset_) {}

	/**
	 * Tell whether an offset is a boundaryʼs offset
	 * @link http://www.php.net/manual/en/intlbreakiterator.isboundary.php
	 * @param string $_offset_ 
	 * @return ReturnType 
	 */
	public function isBoundary ($_offset_) {}

	/**
	 * Get the locale associated with the object
	 * @link http://www.php.net/manual/en/intlbreakiterator.getlocale.php
	 * @param string $_locale_type_ 
	 * @return ReturnType 
	 */
	public function getLocale ($_locale_type_) {}

	/**
	 * Create iterator for navigating fragments between boundaries
	 * @link http://www.php.net/manual/en/intlbreakiterator.getpartsiterator.php
	 * @param string $_key_type_ [optional] 
	 * @return ReturnType 
	 */
	public function getPartsIterator ($_key_type_ = null) {}

	/**
	 * Get last error code on the object
	 * @link http://www.php.net/manual/en/intlbreakiterator.geterrorcode.php
	 * @return ReturnType 
	 */
	public function getErrorCode () {}

	/**
	 * Get last error message on the object
	 * @link http://www.php.net/manual/en/intlbreakiterator.geterrormessage.php
	 * @return ReturnType 
	 */
	public function getErrorMessage () {}

}

class IntlPartsIterator extends IntlIterator implements Traversable, Iterator {
	const KEY_SEQUENTIAL = 0;
	const KEY_LEFT = 1;
	const KEY_RIGHT = 2;


	/**
	 * Get IntlBreakIterator backing this parts iterator
	 * @link http://www.php.net/manual/en/intlpartsiterator.getbreakiterator.php
	 * @return ReturnType 
	 */
	public function getBreakIterator () {}

	/**
	 * Get the current element
	 * @link http://www.php.net/manual/en/intliterator.current.php
	 * @return ReturnType 
	 */
	public function current () {}

	/**
	 * Get the current key
	 * @link http://www.php.net/manual/en/intliterator.key.php
	 * @return ReturnType 
	 */
	public function key () {}

	/**
	 * Move forward to the next element
	 * @link http://www.php.net/manual/en/intliterator.next.php
	 * @return ReturnType 
	 */
	public function next () {}

	/**
	 * Rewind the iterator to the first element
	 * @link http://www.php.net/manual/en/intliterator.rewind.php
	 * @return ReturnType 
	 */
	public function rewind () {}

	/**
	 * Check if current position is valid
	 * @link http://www.php.net/manual/en/intliterator.valid.php
	 * @return ReturnType 
	 */
	public function valid () {}

}

class UConverter  {
	const REASON_UNASSIGNED = 0;
	const REASON_ILLEGAL = 1;
	const REASON_IRREGULAR = 2;
	const REASON_RESET = 3;
	const REASON_CLOSE = 4;
	const REASON_CLONE = 5;
	const UNSUPPORTED_CONVERTER = -1;
	const SBCS = 0;
	const DBCS = 1;
	const MBCS = 2;
	const LATIN_1 = 3;
	const UTF8 = 4;
	const UTF16_BigEndian = 5;
	const UTF16_LittleEndian = 6;
	const UTF32_BigEndian = 7;
	const UTF32_LittleEndian = 8;
	const EBCDIC_STATEFUL = 9;
	const ISO_2022 = 10;
	const LMBCS_1 = 11;
	const LMBCS_2 = 12;
	const LMBCS_3 = 13;
	const LMBCS_4 = 14;
	const LMBCS_5 = 15;
	const LMBCS_6 = 16;
	const LMBCS_8 = 17;
	const LMBCS_11 = 18;
	const LMBCS_16 = 19;
	const LMBCS_17 = 20;
	const LMBCS_18 = 21;
	const LMBCS_19 = 22;
	const LMBCS_LAST = 22;
	const HZ = 23;
	const SCSU = 24;
	const ISCII = 25;
	const US_ASCII = 26;
	const UTF7 = 27;
	const BOCU1 = 28;
	const UTF16 = 29;
	const UTF32 = 30;
	const CESU8 = 31;
	const IMAP_MAILBOX = 32;


	/**
	 * Create UConverter object
	 * @link http://www.php.net/manual/en/uconverter.construct.php
	 * @param $destination_encoding [optional]
	 * @param $source_encoding [optional]
	 */
	public function __construct ($destination_encoding = null, $source_encoding = null) {}

	/**
	 * Set the source encoding
	 * @link http://www.php.net/manual/en/uconverter.setsourceencoding.php
	 * @param string $encoding <p>
	 * </p>
	 * @return void 
	 */
	public function setSourceEncoding ($encoding) {}

	/**
	 * Set the destination encoding
	 * @link http://www.php.net/manual/en/uconverter.setdestinationencoding.php
	 * @param string $encoding <p>
	 * </p>
	 * @return void 
	 */
	public function setDestinationEncoding ($encoding) {}

	/**
	 * Get the source encoding
	 * @link http://www.php.net/manual/en/uconverter.getsourceencoding.php
	 * @return string 
	 */
	public function getSourceEncoding () {}

	/**
	 * Get the destination encoding
	 * @link http://www.php.net/manual/en/uconverter.getdestinationencoding.php
	 * @return string 
	 */
	public function getDestinationEncoding () {}

	/**
	 * Get the source convertor type
	 * @link http://www.php.net/manual/en/uconverter.getsourcetype.php
	 * @return integer 
	 */
	public function getSourceType () {}

	/**
	 * Get the destination converter type
	 * @link http://www.php.net/manual/en/uconverter.getdestinationtype.php
	 * @return integer 
	 */
	public function getDestinationType () {}

	/**
	 * Get substitution chars
	 * @link http://www.php.net/manual/en/uconverter.getsubstchars.php
	 * @return string 
	 */
	public function getSubstChars () {}

	/**
	 * Set the substitution chars
	 * @link http://www.php.net/manual/en/uconverter.setsubstchars.php
	 * @param string $chars <p>
	 * </p>
	 * @return void 
	 */
	public function setSubstChars ($chars) {}

	/**
	 * Default "to" callback function
	 * @link http://www.php.net/manual/en/uconverter.toucallback.php
	 * @param integer $reason <p>
	 * </p>
	 * @param string $source <p>
	 * </p>
	 * @param string $codeUnits <p>
	 * </p>
	 * @param integer $error <p>
	 * </p>
	 * @return mixed 
	 */
	public function toUCallback ($reason, $source, $codeUnits, &$error) {}

	/**
	 * Default "from" callback function
	 * @link http://www.php.net/manual/en/uconverter.fromucallback.php
	 * @param integer $reason <p>
	 * </p>
	 * @param string $source <p>
	 * </p>
	 * @param string $codePoint <p>
	 * </p>
	 * @param integer $error <p>
	 * </p>
	 * @return mixed 
	 */
	public function fromUCallback ($reason, $source, $codePoint, &$error) {}

	/**
	 * Convert string from one charset to another
	 * @link http://www.php.net/manual/en/uconverter.convert.php
	 * @param string $str <p>
	 * </p>
	 * @param bool $reverse [optional] <p>
	 * </p>
	 * @return string 
	 */
	public function convert ($str, $reverse = null) {}

	/**
	 * Convert string from one charset to another
	 * @link http://www.php.net/manual/en/uconverter.transcode.php
	 * @param string $str <p>
	 * </p>
	 * @param string $toEncoding <p>
	 * </p>
	 * @param string $fromEncoding <p>
	 * </p>
	 * @param array $options [optional] <p>
	 * </p>
	 * @return string 
	 */
	public static function transcode ($str, $toEncoding, $fromEncoding, array $options = null) {}

	/**
	 * Get last error code on the object
	 * @link http://www.php.net/manual/en/uconverter.geterrorcode.php
	 * @return integer 
	 */
	public function getErrorCode () {}

	/**
	 * Get last error message on the object
	 * @link http://www.php.net/manual/en/uconverter.geterrormessage.php
	 * @return string 
	 */
	public function getErrorMessage () {}

	/**
	 * Get string representation of the callback reason
	 * @link http://www.php.net/manual/en/uconverter.reasontext.php
	 * @param integer $reason [optional] <p>
	 * </p>
	 * @return string 
	 */
	public static function reasonText ($reason = null) {}

	/**
	 * Get the available canonical converter names
	 * @link http://www.php.net/manual/en/uconverter.getavailable.php
	 * @return array 
	 */
	public static function getAvailable () {}

	/**
	 * Get the aliases of the given name
	 * @link http://www.php.net/manual/en/uconverter.getaliases.php
	 * @param string $name [optional] <p>
	 * </p>
	 * @return array 
	 */
	public static function getAliases ($name = null) {}

	/**
	 * Get standards associated to converter names
	 * @link http://www.php.net/manual/en/uconverter.getstandards.php
	 * @return array 
	 */
	public static function getStandards () {}

}

class IntlChar  {
	const UNICODE_VERSION = 6.3;
	const CODEPOINT_MIN = 0;
	const CODEPOINT_MAX = 1114111;
	const PROPERTY_ALPHABETIC = 0;
	const PROPERTY_BINARY_START = 0;
	const PROPERTY_ASCII_HEX_DIGIT = 1;
	const PROPERTY_BIDI_CONTROL = 2;
	const PROPERTY_BIDI_MIRRORED = 3;
	const PROPERTY_DASH = 4;
	const PROPERTY_DEFAULT_IGNORABLE_CODE_POINT = 5;
	const PROPERTY_DEPRECATED = 6;
	const PROPERTY_DIACRITIC = 7;
	const PROPERTY_EXTENDER = 8;
	const PROPERTY_FULL_COMPOSITION_EXCLUSION = 9;
	const PROPERTY_GRAPHEME_BASE = 10;
	const PROPERTY_GRAPHEME_EXTEND = 11;
	const PROPERTY_GRAPHEME_LINK = 12;
	const PROPERTY_HEX_DIGIT = 13;
	const PROPERTY_HYPHEN = 14;
	const PROPERTY_ID_CONTINUE = 15;
	const PROPERTY_ID_START = 16;
	const PROPERTY_IDEOGRAPHIC = 17;
	const PROPERTY_IDS_BINARY_OPERATOR = 18;
	const PROPERTY_IDS_TRINARY_OPERATOR = 19;
	const PROPERTY_JOIN_CONTROL = 20;
	const PROPERTY_LOGICAL_ORDER_EXCEPTION = 21;
	const PROPERTY_LOWERCASE = 22;
	const PROPERTY_MATH = 23;
	const PROPERTY_NONCHARACTER_CODE_POINT = 24;
	const PROPERTY_QUOTATION_MARK = 25;
	const PROPERTY_RADICAL = 26;
	const PROPERTY_SOFT_DOTTED = 27;
	const PROPERTY_TERMINAL_PUNCTUATION = 28;
	const PROPERTY_UNIFIED_IDEOGRAPH = 29;
	const PROPERTY_UPPERCASE = 30;
	const PROPERTY_WHITE_SPACE = 31;
	const PROPERTY_XID_CONTINUE = 32;
	const PROPERTY_XID_START = 33;
	const PROPERTY_CASE_SENSITIVE = 34;
	const PROPERTY_S_TERM = 35;
	const PROPERTY_VARIATION_SELECTOR = 36;
	const PROPERTY_NFD_INERT = 37;
	const PROPERTY_NFKD_INERT = 38;
	const PROPERTY_NFC_INERT = 39;
	const PROPERTY_NFKC_INERT = 40;
	const PROPERTY_SEGMENT_STARTER = 41;
	const PROPERTY_PATTERN_SYNTAX = 42;
	const PROPERTY_PATTERN_WHITE_SPACE = 43;
	const PROPERTY_POSIX_ALNUM = 44;
	const PROPERTY_POSIX_BLANK = 45;
	const PROPERTY_POSIX_GRAPH = 46;
	const PROPERTY_POSIX_PRINT = 47;
	const PROPERTY_POSIX_XDIGIT = 48;
	const PROPERTY_CASED = 49;
	const PROPERTY_CASE_IGNORABLE = 50;
	const PROPERTY_CHANGES_WHEN_LOWERCASED = 51;
	const PROPERTY_CHANGES_WHEN_UPPERCASED = 52;
	const PROPERTY_CHANGES_WHEN_TITLECASED = 53;
	const PROPERTY_CHANGES_WHEN_CASEFOLDED = 54;
	const PROPERTY_CHANGES_WHEN_CASEMAPPED = 55;
	const PROPERTY_CHANGES_WHEN_NFKC_CASEFOLDED = 56;
	const PROPERTY_BINARY_LIMIT = 57;
	const PROPERTY_BIDI_CLASS = 4096;
	const PROPERTY_INT_START = 4096;
	const PROPERTY_BLOCK = 4097;
	const PROPERTY_CANONICAL_COMBINING_CLASS = 4098;
	const PROPERTY_DECOMPOSITION_TYPE = 4099;
	const PROPERTY_EAST_ASIAN_WIDTH = 4100;
	const PROPERTY_GENERAL_CATEGORY = 4101;
	const PROPERTY_JOINING_GROUP = 4102;
	const PROPERTY_JOINING_TYPE = 4103;
	const PROPERTY_LINE_BREAK = 4104;
	const PROPERTY_NUMERIC_TYPE = 4105;
	const PROPERTY_SCRIPT = 4106;
	const PROPERTY_HANGUL_SYLLABLE_TYPE = 4107;
	const PROPERTY_NFD_QUICK_CHECK = 4108;
	const PROPERTY_NFKD_QUICK_CHECK = 4109;
	const PROPERTY_NFC_QUICK_CHECK = 4110;
	const PROPERTY_NFKC_QUICK_CHECK = 4111;
	const PROPERTY_LEAD_CANONICAL_COMBINING_CLASS = 4112;
	const PROPERTY_TRAIL_CANONICAL_COMBINING_CLASS = 4113;
	const PROPERTY_GRAPHEME_CLUSTER_BREAK = 4114;
	const PROPERTY_SENTENCE_BREAK = 4115;
	const PROPERTY_WORD_BREAK = 4116;
	const PROPERTY_BIDI_PAIRED_BRACKET_TYPE = 4117;
	const PROPERTY_INT_LIMIT = 4118;
	const PROPERTY_GENERAL_CATEGORY_MASK = 8192;
	const PROPERTY_MASK_START = 8192;
	const PROPERTY_MASK_LIMIT = 8193;
	const PROPERTY_NUMERIC_VALUE = 12288;
	const PROPERTY_DOUBLE_START = 12288;
	const PROPERTY_DOUBLE_LIMIT = 12289;
	const PROPERTY_AGE = 16384;
	const PROPERTY_STRING_START = 16384;
	const PROPERTY_BIDI_MIRRORING_GLYPH = 16385;
	const PROPERTY_CASE_FOLDING = 16386;
	const PROPERTY_ISO_COMMENT = 16387;
	const PROPERTY_LOWERCASE_MAPPING = 16388;
	const PROPERTY_NAME = 16389;
	const PROPERTY_SIMPLE_CASE_FOLDING = 16390;
	const PROPERTY_SIMPLE_LOWERCASE_MAPPING = 16391;
	const PROPERTY_SIMPLE_TITLECASE_MAPPING = 16392;
	const PROPERTY_SIMPLE_UPPERCASE_MAPPING = 16393;
	const PROPERTY_TITLECASE_MAPPING = 16394;
	const PROPERTY_UNICODE_1_NAME = 16395;
	const PROPERTY_UPPERCASE_MAPPING = 16396;
	const PROPERTY_BIDI_PAIRED_BRACKET = 16397;
	const PROPERTY_STRING_LIMIT = 16398;
	const PROPERTY_SCRIPT_EXTENSIONS = 28672;
	const PROPERTY_OTHER_PROPERTY_START = 28672;
	const PROPERTY_OTHER_PROPERTY_LIMIT = 28673;
	const PROPERTY_INVALID_CODE = -1;
	const CHAR_CATEGORY_UNASSIGNED = 0;
	const CHAR_CATEGORY_GENERAL_OTHER_TYPES = 0;
	const CHAR_CATEGORY_UPPERCASE_LETTER = 1;
	const CHAR_CATEGORY_LOWERCASE_LETTER = 2;
	const CHAR_CATEGORY_TITLECASE_LETTER = 3;
	const CHAR_CATEGORY_MODIFIER_LETTER = 4;
	const CHAR_CATEGORY_OTHER_LETTER = 5;
	const CHAR_CATEGORY_NON_SPACING_MARK = 6;
	const CHAR_CATEGORY_ENCLOSING_MARK = 7;
	const CHAR_CATEGORY_COMBINING_SPACING_MARK = 8;
	const CHAR_CATEGORY_DECIMAL_DIGIT_NUMBER = 9;
	const CHAR_CATEGORY_LETTER_NUMBER = 10;
	const CHAR_CATEGORY_OTHER_NUMBER = 11;
	const CHAR_CATEGORY_SPACE_SEPARATOR = 12;
	const CHAR_CATEGORY_LINE_SEPARATOR = 13;
	const CHAR_CATEGORY_PARAGRAPH_SEPARATOR = 14;
	const CHAR_CATEGORY_CONTROL_CHAR = 15;
	const CHAR_CATEGORY_FORMAT_CHAR = 16;
	const CHAR_CATEGORY_PRIVATE_USE_CHAR = 17;
	const CHAR_CATEGORY_SURROGATE = 18;
	const CHAR_CATEGORY_DASH_PUNCTUATION = 19;
	const CHAR_CATEGORY_START_PUNCTUATION = 20;
	const CHAR_CATEGORY_END_PUNCTUATION = 21;
	const CHAR_CATEGORY_CONNECTOR_PUNCTUATION = 22;
	const CHAR_CATEGORY_OTHER_PUNCTUATION = 23;
	const CHAR_CATEGORY_MATH_SYMBOL = 24;
	const CHAR_CATEGORY_CURRENCY_SYMBOL = 25;
	const CHAR_CATEGORY_MODIFIER_SYMBOL = 26;
	const CHAR_CATEGORY_OTHER_SYMBOL = 27;
	const CHAR_CATEGORY_INITIAL_PUNCTUATION = 28;
	const CHAR_CATEGORY_FINAL_PUNCTUATION = 29;
	const CHAR_CATEGORY_CHAR_CATEGORY_COUNT = 30;
	const CHAR_DIRECTION_LEFT_TO_RIGHT = 0;
	const CHAR_DIRECTION_RIGHT_TO_LEFT = 1;
	const CHAR_DIRECTION_EUROPEAN_NUMBER = 2;
	const CHAR_DIRECTION_EUROPEAN_NUMBER_SEPARATOR = 3;
	const CHAR_DIRECTION_EUROPEAN_NUMBER_TERMINATOR = 4;
	const CHAR_DIRECTION_ARABIC_NUMBER = 5;
	const CHAR_DIRECTION_COMMON_NUMBER_SEPARATOR = 6;
	const CHAR_DIRECTION_BLOCK_SEPARATOR = 7;
	const CHAR_DIRECTION_SEGMENT_SEPARATOR = 8;
	const CHAR_DIRECTION_WHITE_SPACE_NEUTRAL = 9;
	const CHAR_DIRECTION_OTHER_NEUTRAL = 10;
	const CHAR_DIRECTION_LEFT_TO_RIGHT_EMBEDDING = 11;
	const CHAR_DIRECTION_LEFT_TO_RIGHT_OVERRIDE = 12;
	const CHAR_DIRECTION_RIGHT_TO_LEFT_ARABIC = 13;
	const CHAR_DIRECTION_RIGHT_TO_LEFT_EMBEDDING = 14;
	const CHAR_DIRECTION_RIGHT_TO_LEFT_OVERRIDE = 15;
	const CHAR_DIRECTION_POP_DIRECTIONAL_FORMAT = 16;
	const CHAR_DIRECTION_DIR_NON_SPACING_MARK = 17;
	const CHAR_DIRECTION_BOUNDARY_NEUTRAL = 18;
	const CHAR_DIRECTION_FIRST_STRONG_ISOLATE = 19;
	const CHAR_DIRECTION_LEFT_TO_RIGHT_ISOLATE = 20;
	const CHAR_DIRECTION_RIGHT_TO_LEFT_ISOLATE = 21;
	const CHAR_DIRECTION_POP_DIRECTIONAL_ISOLATE = 22;
	const CHAR_DIRECTION_CHAR_DIRECTION_COUNT = 23;
	const BLOCK_CODE_NO_BLOCK = 0;
	const BLOCK_CODE_BASIC_LATIN = 1;
	const BLOCK_CODE_LATIN_1_SUPPLEMENT = 2;
	const BLOCK_CODE_LATIN_EXTENDED_A = 3;
	const BLOCK_CODE_LATIN_EXTENDED_B = 4;
	const BLOCK_CODE_IPA_EXTENSIONS = 5;
	const BLOCK_CODE_SPACING_MODIFIER_LETTERS = 6;
	const BLOCK_CODE_COMBINING_DIACRITICAL_MARKS = 7;
	const BLOCK_CODE_GREEK = 8;
	const BLOCK_CODE_CYRILLIC = 9;
	const BLOCK_CODE_ARMENIAN = 10;
	const BLOCK_CODE_HEBREW = 11;
	const BLOCK_CODE_ARABIC = 12;
	const BLOCK_CODE_SYRIAC = 13;
	const BLOCK_CODE_THAANA = 14;
	const BLOCK_CODE_DEVANAGARI = 15;
	const BLOCK_CODE_BENGALI = 16;
	const BLOCK_CODE_GURMUKHI = 17;
	const BLOCK_CODE_GUJARATI = 18;
	const BLOCK_CODE_ORIYA = 19;
	const BLOCK_CODE_TAMIL = 20;
	const BLOCK_CODE_TELUGU = 21;
	const BLOCK_CODE_KANNADA = 22;
	const BLOCK_CODE_MALAYALAM = 23;
	const BLOCK_CODE_SINHALA = 24;
	const BLOCK_CODE_THAI = 25;
	const BLOCK_CODE_LAO = 26;
	const BLOCK_CODE_TIBETAN = 27;
	const BLOCK_CODE_MYANMAR = 28;
	const BLOCK_CODE_GEORGIAN = 29;
	const BLOCK_CODE_HANGUL_JAMO = 30;
	const BLOCK_CODE_ETHIOPIC = 31;
	const BLOCK_CODE_CHEROKEE = 32;
	const BLOCK_CODE_UNIFIED_CANADIAN_ABORIGINAL_SYLLABICS = 33;
	const BLOCK_CODE_OGHAM = 34;
	const BLOCK_CODE_RUNIC = 35;
	const BLOCK_CODE_KHMER = 36;
	const BLOCK_CODE_MONGOLIAN = 37;
	const BLOCK_CODE_LATIN_EXTENDED_ADDITIONAL = 38;
	const BLOCK_CODE_GREEK_EXTENDED = 39;
	const BLOCK_CODE_GENERAL_PUNCTUATION = 40;
	const BLOCK_CODE_SUPERSCRIPTS_AND_SUBSCRIPTS = 41;
	const BLOCK_CODE_CURRENCY_SYMBOLS = 42;
	const BLOCK_CODE_COMBINING_MARKS_FOR_SYMBOLS = 43;
	const BLOCK_CODE_LETTERLIKE_SYMBOLS = 44;
	const BLOCK_CODE_NUMBER_FORMS = 45;
	const BLOCK_CODE_ARROWS = 46;
	const BLOCK_CODE_MATHEMATICAL_OPERATORS = 47;
	const BLOCK_CODE_MISCELLANEOUS_TECHNICAL = 48;
	const BLOCK_CODE_CONTROL_PICTURES = 49;
	const BLOCK_CODE_OPTICAL_CHARACTER_RECOGNITION = 50;
	const BLOCK_CODE_ENCLOSED_ALPHANUMERICS = 51;
	const BLOCK_CODE_BOX_DRAWING = 52;
	const BLOCK_CODE_BLOCK_ELEMENTS = 53;
	const BLOCK_CODE_GEOMETRIC_SHAPES = 54;
	const BLOCK_CODE_MISCELLANEOUS_SYMBOLS = 55;
	const BLOCK_CODE_DINGBATS = 56;
	const BLOCK_CODE_BRAILLE_PATTERNS = 57;
	const BLOCK_CODE_CJK_RADICALS_SUPPLEMENT = 58;
	const BLOCK_CODE_KANGXI_RADICALS = 59;
	const BLOCK_CODE_IDEOGRAPHIC_DESCRIPTION_CHARACTERS = 60;
	const BLOCK_CODE_CJK_SYMBOLS_AND_PUNCTUATION = 61;
	const BLOCK_CODE_HIRAGANA = 62;
	const BLOCK_CODE_KATAKANA = 63;
	const BLOCK_CODE_BOPOMOFO = 64;
	const BLOCK_CODE_HANGUL_COMPATIBILITY_JAMO = 65;
	const BLOCK_CODE_KANBUN = 66;
	const BLOCK_CODE_BOPOMOFO_EXTENDED = 67;
	const BLOCK_CODE_ENCLOSED_CJK_LETTERS_AND_MONTHS = 68;
	const BLOCK_CODE_CJK_COMPATIBILITY = 69;
	const BLOCK_CODE_CJK_UNIFIED_IDEOGRAPHS_EXTENSION_A = 70;
	const BLOCK_CODE_CJK_UNIFIED_IDEOGRAPHS = 71;
	const BLOCK_CODE_YI_SYLLABLES = 72;
	const BLOCK_CODE_YI_RADICALS = 73;
	const BLOCK_CODE_HANGUL_SYLLABLES = 74;
	const BLOCK_CODE_HIGH_SURROGATES = 75;
	const BLOCK_CODE_HIGH_PRIVATE_USE_SURROGATES = 76;
	const BLOCK_CODE_LOW_SURROGATES = 77;
	const BLOCK_CODE_PRIVATE_USE_AREA = 78;
	const BLOCK_CODE_PRIVATE_USE = 78;
	const BLOCK_CODE_CJK_COMPATIBILITY_IDEOGRAPHS = 79;
	const BLOCK_CODE_ALPHABETIC_PRESENTATION_FORMS = 80;
	const BLOCK_CODE_ARABIC_PRESENTATION_FORMS_A = 81;
	const BLOCK_CODE_COMBINING_HALF_MARKS = 82;
	const BLOCK_CODE_CJK_COMPATIBILITY_FORMS = 83;
	const BLOCK_CODE_SMALL_FORM_VARIANTS = 84;
	const BLOCK_CODE_ARABIC_PRESENTATION_FORMS_B = 85;
	const BLOCK_CODE_SPECIALS = 86;
	const BLOCK_CODE_HALFWIDTH_AND_FULLWIDTH_FORMS = 87;
	const BLOCK_CODE_OLD_ITALIC = 88;
	const BLOCK_CODE_GOTHIC = 89;
	const BLOCK_CODE_DESERET = 90;
	const BLOCK_CODE_BYZANTINE_MUSICAL_SYMBOLS = 91;
	const BLOCK_CODE_MUSICAL_SYMBOLS = 92;
	const BLOCK_CODE_MATHEMATICAL_ALPHANUMERIC_SYMBOLS = 93;
	const BLOCK_CODE_CJK_UNIFIED_IDEOGRAPHS_EXTENSION_B = 94;
	const BLOCK_CODE_CJK_COMPATIBILITY_IDEOGRAPHS_SUPPLEMENT = 95;
	const BLOCK_CODE_TAGS = 96;
	const BLOCK_CODE_CYRILLIC_SUPPLEMENT = 97;
	const BLOCK_CODE_CYRILLIC_SUPPLEMENTARY = 97;
	const BLOCK_CODE_TAGALOG = 98;
	const BLOCK_CODE_HANUNOO = 99;
	const BLOCK_CODE_BUHID = 100;
	const BLOCK_CODE_TAGBANWA = 101;
	const BLOCK_CODE_MISCELLANEOUS_MATHEMATICAL_SYMBOLS_A = 102;
	const BLOCK_CODE_SUPPLEMENTAL_ARROWS_A = 103;
	const BLOCK_CODE_SUPPLEMENTAL_ARROWS_B = 104;
	const BLOCK_CODE_MISCELLANEOUS_MATHEMATICAL_SYMBOLS_B = 105;
	const BLOCK_CODE_SUPPLEMENTAL_MATHEMATICAL_OPERATORS = 106;
	const BLOCK_CODE_KATAKANA_PHONETIC_EXTENSIONS = 107;
	const BLOCK_CODE_VARIATION_SELECTORS = 108;
	const BLOCK_CODE_SUPPLEMENTARY_PRIVATE_USE_AREA_A = 109;
	const BLOCK_CODE_SUPPLEMENTARY_PRIVATE_USE_AREA_B = 110;
	const BLOCK_CODE_LIMBU = 111;
	const BLOCK_CODE_TAI_LE = 112;
	const BLOCK_CODE_KHMER_SYMBOLS = 113;
	const BLOCK_CODE_PHONETIC_EXTENSIONS = 114;
	const BLOCK_CODE_MISCELLANEOUS_SYMBOLS_AND_ARROWS = 115;
	const BLOCK_CODE_YIJING_HEXAGRAM_SYMBOLS = 116;
	const BLOCK_CODE_LINEAR_B_SYLLABARY = 117;
	const BLOCK_CODE_LINEAR_B_IDEOGRAMS = 118;
	const BLOCK_CODE_AEGEAN_NUMBERS = 119;
	const BLOCK_CODE_UGARITIC = 120;
	const BLOCK_CODE_SHAVIAN = 121;
	const BLOCK_CODE_OSMANYA = 122;
	const BLOCK_CODE_CYPRIOT_SYLLABARY = 123;
	const BLOCK_CODE_TAI_XUAN_JING_SYMBOLS = 124;
	const BLOCK_CODE_VARIATION_SELECTORS_SUPPLEMENT = 125;
	const BLOCK_CODE_ANCIENT_GREEK_MUSICAL_NOTATION = 126;
	const BLOCK_CODE_ANCIENT_GREEK_NUMBERS = 127;
	const BLOCK_CODE_ARABIC_SUPPLEMENT = 128;
	const BLOCK_CODE_BUGINESE = 129;
	const BLOCK_CODE_CJK_STROKES = 130;
	const BLOCK_CODE_COMBINING_DIACRITICAL_MARKS_SUPPLEMENT = 131;
	const BLOCK_CODE_COPTIC = 132;
	const BLOCK_CODE_ETHIOPIC_EXTENDED = 133;
	const BLOCK_CODE_ETHIOPIC_SUPPLEMENT = 134;
	const BLOCK_CODE_GEORGIAN_SUPPLEMENT = 135;
	const BLOCK_CODE_GLAGOLITIC = 136;
	const BLOCK_CODE_KHAROSHTHI = 137;
	const BLOCK_CODE_MODIFIER_TONE_LETTERS = 138;
	const BLOCK_CODE_NEW_TAI_LUE = 139;
	const BLOCK_CODE_OLD_PERSIAN = 140;
	const BLOCK_CODE_PHONETIC_EXTENSIONS_SUPPLEMENT = 141;
	const BLOCK_CODE_SUPPLEMENTAL_PUNCTUATION = 142;
	const BLOCK_CODE_SYLOTI_NAGRI = 143;
	const BLOCK_CODE_TIFINAGH = 144;
	const BLOCK_CODE_VERTICAL_FORMS = 145;
	const BLOCK_CODE_NKO = 146;
	const BLOCK_CODE_BALINESE = 147;
	const BLOCK_CODE_LATIN_EXTENDED_C = 148;
	const BLOCK_CODE_LATIN_EXTENDED_D = 149;
	const BLOCK_CODE_PHAGS_PA = 150;
	const BLOCK_CODE_PHOENICIAN = 151;
	const BLOCK_CODE_CUNEIFORM = 152;
	const BLOCK_CODE_CUNEIFORM_NUMBERS_AND_PUNCTUATION = 153;
	const BLOCK_CODE_COUNTING_ROD_NUMERALS = 154;
	const BLOCK_CODE_SUNDANESE = 155;
	const BLOCK_CODE_LEPCHA = 156;
	const BLOCK_CODE_OL_CHIKI = 157;
	const BLOCK_CODE_CYRILLIC_EXTENDED_A = 158;
	const BLOCK_CODE_VAI = 159;
	const BLOCK_CODE_CYRILLIC_EXTENDED_B = 160;
	const BLOCK_CODE_SAURASHTRA = 161;
	const BLOCK_CODE_KAYAH_LI = 162;
	const BLOCK_CODE_REJANG = 163;
	const BLOCK_CODE_CHAM = 164;
	const BLOCK_CODE_ANCIENT_SYMBOLS = 165;
	const BLOCK_CODE_PHAISTOS_DISC = 166;
	const BLOCK_CODE_LYCIAN = 167;
	const BLOCK_CODE_CARIAN = 168;
	const BLOCK_CODE_LYDIAN = 169;
	const BLOCK_CODE_MAHJONG_TILES = 170;
	const BLOCK_CODE_DOMINO_TILES = 171;
	const BLOCK_CODE_SAMARITAN = 172;
	const BLOCK_CODE_UNIFIED_CANADIAN_ABORIGINAL_SYLLABICS_EXTENDED = 173;
	const BLOCK_CODE_TAI_THAM = 174;
	const BLOCK_CODE_VEDIC_EXTENSIONS = 175;
	const BLOCK_CODE_LISU = 176;
	const BLOCK_CODE_BAMUM = 177;
	const BLOCK_CODE_COMMON_INDIC_NUMBER_FORMS = 178;
	const BLOCK_CODE_DEVANAGARI_EXTENDED = 179;
	const BLOCK_CODE_HANGUL_JAMO_EXTENDED_A = 180;
	const BLOCK_CODE_JAVANESE = 181;
	const BLOCK_CODE_MYANMAR_EXTENDED_A = 182;
	const BLOCK_CODE_TAI_VIET = 183;
	const BLOCK_CODE_MEETEI_MAYEK = 184;
	const BLOCK_CODE_HANGUL_JAMO_EXTENDED_B = 185;
	const BLOCK_CODE_IMPERIAL_ARAMAIC = 186;
	const BLOCK_CODE_OLD_SOUTH_ARABIAN = 187;
	const BLOCK_CODE_AVESTAN = 188;
	const BLOCK_CODE_INSCRIPTIONAL_PARTHIAN = 189;
	const BLOCK_CODE_INSCRIPTIONAL_PAHLAVI = 190;
	const BLOCK_CODE_OLD_TURKIC = 191;
	const BLOCK_CODE_RUMI_NUMERAL_SYMBOLS = 192;
	const BLOCK_CODE_KAITHI = 193;
	const BLOCK_CODE_EGYPTIAN_HIEROGLYPHS = 194;
	const BLOCK_CODE_ENCLOSED_ALPHANUMERIC_SUPPLEMENT = 195;
	const BLOCK_CODE_ENCLOSED_IDEOGRAPHIC_SUPPLEMENT = 196;
	const BLOCK_CODE_CJK_UNIFIED_IDEOGRAPHS_EXTENSION_C = 197;
	const BLOCK_CODE_MANDAIC = 198;
	const BLOCK_CODE_BATAK = 199;
	const BLOCK_CODE_ETHIOPIC_EXTENDED_A = 200;
	const BLOCK_CODE_BRAHMI = 201;
	const BLOCK_CODE_BAMUM_SUPPLEMENT = 202;
	const BLOCK_CODE_KANA_SUPPLEMENT = 203;
	const BLOCK_CODE_PLAYING_CARDS = 204;
	const BLOCK_CODE_MISCELLANEOUS_SYMBOLS_AND_PICTOGRAPHS = 205;
	const BLOCK_CODE_EMOTICONS = 206;
	const BLOCK_CODE_TRANSPORT_AND_MAP_SYMBOLS = 207;
	const BLOCK_CODE_ALCHEMICAL_SYMBOLS = 208;
	const BLOCK_CODE_CJK_UNIFIED_IDEOGRAPHS_EXTENSION_D = 209;
	const BLOCK_CODE_ARABIC_EXTENDED_A = 210;
	const BLOCK_CODE_ARABIC_MATHEMATICAL_ALPHABETIC_SYMBOLS = 211;
	const BLOCK_CODE_CHAKMA = 212;
	const BLOCK_CODE_MEETEI_MAYEK_EXTENSIONS = 213;
	const BLOCK_CODE_MEROITIC_CURSIVE = 214;
	const BLOCK_CODE_MEROITIC_HIEROGLYPHS = 215;
	const BLOCK_CODE_MIAO = 216;
	const BLOCK_CODE_SHARADA = 217;
	const BLOCK_CODE_SORA_SOMPENG = 218;
	const BLOCK_CODE_SUNDANESE_SUPPLEMENT = 219;
	const BLOCK_CODE_TAKRI = 220;
	const BLOCK_CODE_COUNT = 221;
	const BLOCK_CODE_INVALID_CODE = -1;
	const BPT_NONE = 0;
	const BPT_OPEN = 1;
	const BPT_CLOSE = 2;
	const BPT_COUNT = 3;
	const EA_NEUTRAL = 0;
	const EA_AMBIGUOUS = 1;
	const EA_HALFWIDTH = 2;
	const EA_FULLWIDTH = 3;
	const EA_NARROW = 4;
	const EA_WIDE = 5;
	const EA_COUNT = 6;
	const UNICODE_CHAR_NAME = 0;
	const UNICODE_10_CHAR_NAME = 1;
	const EXTENDED_CHAR_NAME = 2;
	const CHAR_NAME_ALIAS = 3;
	const CHAR_NAME_CHOICE_COUNT = 4;
	const SHORT_PROPERTY_NAME = 0;
	const LONG_PROPERTY_NAME = 1;
	const PROPERTY_NAME_CHOICE_COUNT = 2;
	const DT_NONE = 0;
	const DT_CANONICAL = 1;
	const DT_COMPAT = 2;
	const DT_CIRCLE = 3;
	const DT_FINAL = 4;
	const DT_FONT = 5;
	const DT_FRACTION = 6;
	const DT_INITIAL = 7;
	const DT_ISOLATED = 8;
	const DT_MEDIAL = 9;
	const DT_NARROW = 10;
	const DT_NOBREAK = 11;
	const DT_SMALL = 12;
	const DT_SQUARE = 13;
	const DT_SUB = 14;
	const DT_SUPER = 15;
	const DT_VERTICAL = 16;
	const DT_WIDE = 17;
	const DT_COUNT = 18;
	const JT_NON_JOINING = 0;
	const JT_JOIN_CAUSING = 1;
	const JT_DUAL_JOINING = 2;
	const JT_LEFT_JOINING = 3;
	const JT_RIGHT_JOINING = 4;
	const JT_TRANSPARENT = 5;
	const JT_COUNT = 6;
	const JG_NO_JOINING_GROUP = 0;
	const JG_AIN = 1;
	const JG_ALAPH = 2;
	const JG_ALEF = 3;
	const JG_BEH = 4;
	const JG_BETH = 5;
	const JG_DAL = 6;
	const JG_DALATH_RISH = 7;
	const JG_E = 8;
	const JG_FEH = 9;
	const JG_FINAL_SEMKATH = 10;
	const JG_GAF = 11;
	const JG_GAMAL = 12;
	const JG_HAH = 13;
	const JG_TEH_MARBUTA_GOAL = 14;
	const JG_HAMZA_ON_HEH_GOAL = 14;
	const JG_HE = 15;
	const JG_HEH = 16;
	const JG_HEH_GOAL = 17;
	const JG_HETH = 18;
	const JG_KAF = 19;
	const JG_KAPH = 20;
	const JG_KNOTTED_HEH = 21;
	const JG_LAM = 22;
	const JG_LAMADH = 23;
	const JG_MEEM = 24;
	const JG_MIM = 25;
	const JG_NOON = 26;
	const JG_NUN = 27;
	const JG_PE = 28;
	const JG_QAF = 29;
	const JG_QAPH = 30;
	const JG_REH = 31;
	const JG_REVERSED_PE = 32;
	const JG_SAD = 33;
	const JG_SADHE = 34;
	const JG_SEEN = 35;
	const JG_SEMKATH = 36;
	const JG_SHIN = 37;
	const JG_SWASH_KAF = 38;
	const JG_SYRIAC_WAW = 39;
	const JG_TAH = 40;
	const JG_TAW = 41;
	const JG_TEH_MARBUTA = 42;
	const JG_TETH = 43;
	const JG_WAW = 44;
	const JG_YEH = 45;
	const JG_YEH_BARREE = 46;
	const JG_YEH_WITH_TAIL = 47;
	const JG_YUDH = 48;
	const JG_YUDH_HE = 49;
	const JG_ZAIN = 50;
	const JG_FE = 51;
	const JG_KHAPH = 52;
	const JG_ZHAIN = 53;
	const JG_BURUSHASKI_YEH_BARREE = 54;
	const JG_FARSI_YEH = 55;
	const JG_NYA = 56;
	const JG_ROHINGYA_YEH = 57;
	const JG_COUNT = 58;
	const GCB_OTHER = 0;
	const GCB_CONTROL = 1;
	const GCB_CR = 2;
	const GCB_EXTEND = 3;
	const GCB_L = 4;
	const GCB_LF = 5;
	const GCB_LV = 6;
	const GCB_LVT = 7;
	const GCB_T = 8;
	const GCB_V = 9;
	const GCB_SPACING_MARK = 10;
	const GCB_PREPEND = 11;
	const GCB_REGIONAL_INDICATOR = 12;
	const GCB_COUNT = 13;
	const WB_OTHER = 0;
	const WB_ALETTER = 1;
	const WB_FORMAT = 2;
	const WB_KATAKANA = 3;
	const WB_MIDLETTER = 4;
	const WB_MIDNUM = 5;
	const WB_NUMERIC = 6;
	const WB_EXTENDNUMLET = 7;
	const WB_CR = 8;
	const WB_EXTEND = 9;
	const WB_LF = 10;
	const WB_MIDNUMLET = 11;
	const WB_NEWLINE = 12;
	const WB_REGIONAL_INDICATOR = 13;
	const WB_HEBREW_LETTER = 14;
	const WB_SINGLE_QUOTE = 15;
	const WB_DOUBLE_QUOTE = 16;
	const WB_COUNT = 17;
	const SB_OTHER = 0;
	const SB_ATERM = 1;
	const SB_CLOSE = 2;
	const SB_FORMAT = 3;
	const SB_LOWER = 4;
	const SB_NUMERIC = 5;
	const SB_OLETTER = 6;
	const SB_SEP = 7;
	const SB_SP = 8;
	const SB_STERM = 9;
	const SB_UPPER = 10;
	const SB_CR = 11;
	const SB_EXTEND = 12;
	const SB_LF = 13;
	const SB_SCONTINUE = 14;
	const SB_COUNT = 15;
	const LB_UNKNOWN = 0;
	const LB_AMBIGUOUS = 1;
	const LB_ALPHABETIC = 2;
	const LB_BREAK_BOTH = 3;
	const LB_BREAK_AFTER = 4;
	const LB_BREAK_BEFORE = 5;
	const LB_MANDATORY_BREAK = 6;
	const LB_CONTINGENT_BREAK = 7;
	const LB_CLOSE_PUNCTUATION = 8;
	const LB_COMBINING_MARK = 9;
	const LB_CARRIAGE_RETURN = 10;
	const LB_EXCLAMATION = 11;
	const LB_GLUE = 12;
	const LB_HYPHEN = 13;
	const LB_IDEOGRAPHIC = 14;
	const LB_INSEPARABLE = 15;
	const LB_INSEPERABLE = 15;
	const LB_INFIX_NUMERIC = 16;
	const LB_LINE_FEED = 17;
	const LB_NONSTARTER = 18;
	const LB_NUMERIC = 19;
	const LB_OPEN_PUNCTUATION = 20;
	const LB_POSTFIX_NUMERIC = 21;
	const LB_PREFIX_NUMERIC = 22;
	const LB_QUOTATION = 23;
	const LB_COMPLEX_CONTEXT = 24;
	const LB_SURROGATE = 25;
	const LB_SPACE = 26;
	const LB_BREAK_SYMBOLS = 27;
	const LB_ZWSPACE = 28;
	const LB_NEXT_LINE = 29;
	const LB_WORD_JOINER = 30;
	const LB_H2 = 31;
	const LB_H3 = 32;
	const LB_JL = 33;
	const LB_JT = 34;
	const LB_JV = 35;
	const LB_CLOSE_PARENTHESIS = 36;
	const LB_CONDITIONAL_JAPANESE_STARTER = 37;
	const LB_HEBREW_LETTER = 38;
	const LB_REGIONAL_INDICATOR = 39;
	const LB_COUNT = 40;
	const NT_NONE = 0;
	const NT_DECIMAL = 1;
	const NT_DIGIT = 2;
	const NT_NUMERIC = 3;
	const NT_COUNT = 4;
	const HST_NOT_APPLICABLE = 0;
	const HST_LEADING_JAMO = 1;
	const HST_VOWEL_JAMO = 2;
	const HST_TRAILING_JAMO = 3;
	const HST_LV_SYLLABLE = 4;
	const HST_LVT_SYLLABLE = 5;
	const HST_COUNT = 6;


	/**
	 * @link http://www.php.net/manual/en/intlchar.chr.php
	 * @param mixed $codepoint <p>
	 * </p>
	 * @return string 
	 */
	public static function chr ($codepoint) {}

	/**
	 * @link http://www.php.net/manual/en/intlchar.ord.php
	 * @param mixed $character <p>
	 * </p>
	 * @return int 
	 */
	public static function ord ($character) {}

	/**
	 * @link http://www.php.net/manual/en/intlchar.hasbinaryproperty.php
	 * @param mixed $codepoint <p>
	 * </p>
	 * @param int $property <p>
	 * </p>
	 * @return bool 
	 */
	public static function hasBinaryProperty ($codepoint, $property) {}

	/**
	 * @link http://www.php.net/manual/en/intlchar.isualphabetic.php
	 * @param mixed $codepoint <p>
	 * </p>
	 * @return bool 
	 */
	public static function isUAlphabetic ($codepoint) {}

	/**
	 * @link http://www.php.net/manual/en/intlchar.isulowercase.php
	 * @param mixed $codepoint <p>
	 * </p>
	 * @return bool 
	 */
	public static function isULowercase ($codepoint) {}

	/**
	 * @link http://www.php.net/manual/en/intlchar.isuuppercase.php
	 * @param mixed $codepoint <p>
	 * </p>
	 * @return bool 
	 */
	public static function isUUppercase ($codepoint) {}

	/**
	 * @link http://www.php.net/manual/en/intlchar.isuwhitespace.php
	 * @param mixed $codepoint <p>
	 * </p>
	 * @return bool 
	 */
	public static function isUWhiteSpace ($codepoint) {}

	/**
	 * @link http://www.php.net/manual/en/intlchar.getintpropertyvalue.php
	 * @param mixed $codepoint <p>
	 * </p>
	 * @param int $property <p>
	 * </p>
	 * @return int 
	 */
	public static function getIntPropertyValue ($codepoint, $property) {}

	/**
	 * @link http://www.php.net/manual/en/intlchar.getintpropertyminvalue.php
	 * @param int $property <p>
	 * </p>
	 * @return int 
	 */
	public static function getIntPropertyMinValue ($property) {}

	/**
	 * @link http://www.php.net/manual/en/intlchar.getintpropertymaxvalue.php
	 * @param int $property <p>
	 * </p>
	 * @return int 
	 */
	public static function getIntPropertyMaxValue ($property) {}

	/**
	 * @link http://www.php.net/manual/en/intlchar.getnumericvalue.php
	 * @param mixed $codepoint <p>
	 * </p>
	 * @return float 
	 */
	public static function getNumericValue ($codepoint) {}

	/**
	 * @link http://www.php.net/manual/en/intlchar.islower.php
	 * @param mixed $codepoint <p>
	 * </p>
	 * @return bool 
	 */
	public static function islower ($codepoint) {}

	/**
	 * @link http://www.php.net/manual/en/intlchar.isupper.php
	 * @param mixed $codepoint <p>
	 * </p>
	 * @return bool 
	 */
	public static function isupper ($codepoint) {}

	/**
	 * @link http://www.php.net/manual/en/intlchar.istitle.php
	 * @param mixed $codepoint <p>
	 * </p>
	 * @return bool 
	 */
	public static function istitle ($codepoint) {}

	/**
	 * @link http://www.php.net/manual/en/intlchar.isdigit.php
	 * @param mixed $codepoint <p>
	 * </p>
	 * @return bool 
	 */
	public static function isdigit ($codepoint) {}

	/**
	 * @link http://www.php.net/manual/en/intlchar.isalpha.php
	 * @param mixed $codepoint <p>
	 * </p>
	 * @return bool 
	 */
	public static function isalpha ($codepoint) {}

	/**
	 * @link http://www.php.net/manual/en/intlchar.isalnum.php
	 * @param mixed $codepoint <p>
	 * </p>
	 * @return bool 
	 */
	public static function isalnum ($codepoint) {}

	/**
	 * @link http://www.php.net/manual/en/intlchar.isxdigit.php
	 * @param mixed $codepoint <p>
	 * </p>
	 * @return bool 
	 */
	public static function isxdigit ($codepoint) {}

	/**
	 * @link http://www.php.net/manual/en/intlchar.ispunct.php
	 * @param mixed $codepoint <p>
	 * </p>
	 * @return bool 
	 */
	public static function ispunct ($codepoint) {}

	/**
	 * @link http://www.php.net/manual/en/intlchar.isgraph.php
	 * @param mixed $codepoint <p>
	 * </p>
	 * @return bool 
	 */
	public static function isgraph ($codepoint) {}

	/**
	 * @link http://www.php.net/manual/en/intlchar.isblank.php
	 * @param mixed $codepoint <p>
	 * </p>
	 * @return bool 
	 */
	public static function isblank ($codepoint) {}

	/**
	 * @link http://www.php.net/manual/en/intlchar.isdefined.php
	 * @param mixed $codepoint <p>
	 * </p>
	 * @return bool 
	 */
	public static function isdefined ($codepoint) {}

	/**
	 * @link http://www.php.net/manual/en/intlchar.isspace.php
	 * @param mixed $codepoint <p>
	 * </p>
	 * @return bool 
	 */
	public static function isspace ($codepoint) {}

	/**
	 * @link http://www.php.net/manual/en/intlchar.isjavaspacechar.php
	 * @param mixed $codepoint <p>
	 * </p>
	 * @return bool 
	 */
	public static function isJavaSpaceChar ($codepoint) {}

	/**
	 * @link http://www.php.net/manual/en/intlchar.iswhitespace.php
	 * @param mixed $codepoint <p>
	 * </p>
	 * @return bool 
	 */
	public static function isWhitespace ($codepoint) {}

	/**
	 * @link http://www.php.net/manual/en/intlchar.iscntrl.php
	 * @param mixed $codepoint <p>
	 * </p>
	 * @return bool 
	 */
	public static function iscntrl ($codepoint) {}

	/**
	 * @link http://www.php.net/manual/en/intlchar.isisocontrol.php
	 * @param mixed $codepoint <p>
	 * </p>
	 * @return bool 
	 */
	public static function isISOControl ($codepoint) {}

	/**
	 * @link http://www.php.net/manual/en/intlchar.isprint.php
	 * @param mixed $codepoint <p>
	 * </p>
	 * @return bool 
	 */
	public static function isprint ($codepoint) {}

	/**
	 * @link http://www.php.net/manual/en/intlchar.isbase.php
	 * @param mixed $codepoint <p>
	 * </p>
	 * @return bool 
	 */
	public static function isbase ($codepoint) {}

	/**
	 * @link http://www.php.net/manual/en/intlchar.chardirection.php
	 * @param mixed $codepoint <p>
	 * </p>
	 * @return int 
	 */
	public static function charDirection ($codepoint) {}

	/**
	 * @link http://www.php.net/manual/en/intlchar.ismirrored.php
	 * @param mixed $codepoint <p>
	 * </p>
	 * @return bool 
	 */
	public static function isMirrored ($codepoint) {}

	/**
	 * @link http://www.php.net/manual/en/intlchar.charmirror.php
	 * @param mixed $codepoint <p>
	 * </p>
	 * @return mixed 
	 */
	public static function charMirror ($codepoint) {}

	/**
	 * @link http://www.php.net/manual/en/intlchar.getbidipairedbracket.php
	 * @param mixed $codepoint <p>
	 * </p>
	 * @return mixed 
	 */
	public static function getBidiPairedBracket ($codepoint) {}

	/**
	 * @link http://www.php.net/manual/en/intlchar.chartype.php
	 * @param mixed $codepoint <p>
	 * </p>
	 * @return int 
	 */
	public static function charType ($codepoint) {}

	/**
	 * @link http://www.php.net/manual/en/intlchar.enumchartypes.php
	 * @param callable $callback <p>
	 * </p>
	 * @return void 
	 */
	public static function enumCharTypes ($callback) {}

	/**
	 * @link http://www.php.net/manual/en/intlchar.getcombiningclass.php
	 * @param mixed $codepoint <p>
	 * </p>
	 * @return int 
	 */
	public static function getCombiningClass ($codepoint) {}

	/**
	 * @link http://www.php.net/manual/en/intlchar.chardigitvalue.php
	 * @param mixed $codepoint <p>
	 * </p>
	 * @return int 
	 */
	public static function charDigitValue ($codepoint) {}

	/**
	 * @link http://www.php.net/manual/en/intlchar.getblockcode.php
	 * @param mixed $codepoint <p>
	 * </p>
	 * @return int 
	 */
	public static function getBlockCode ($codepoint) {}

	/**
	 * @link http://www.php.net/manual/en/intlchar.charname.php
	 * @param mixed $codepoint <p>
	 * </p>
	 * @param int $nameChoice [optional] <p>
	 * </p>
	 * @return string 
	 */
	public static function charName ($codepoint, $nameChoice = null) {}

	/**
	 * @link http://www.php.net/manual/en/intlchar.charfromname.php
	 * @param string $characterName <p>
	 * </p>
	 * @param int $nameChoice [optional] <p>
	 * </p>
	 * @return int 
	 */
	public static function charFromName ($characterName, $nameChoice = null) {}

	/**
	 * @link http://www.php.net/manual/en/intlchar.enumcharnames.php
	 * @param mixed $start <p>
	 * </p>
	 * @param mixed $limit <p>
	 * </p>
	 * @param callable $callback <p>
	 * </p>
	 * @param int $nameChoice [optional] <p>
	 * </p>
	 * @return void 
	 */
	public static function enumCharNames ($start, $limit, $callback, $nameChoice = null) {}

	/**
	 * @link http://www.php.net/manual/en/intlchar.getpropertyname.php
	 * @param int $property <p>
	 * </p>
	 * @param int $nameChoice [optional] <p>
	 * </p>
	 * @return string 
	 */
	public static function getPropertyName ($property, $nameChoice = null) {}

	/**
	 * @link http://www.php.net/manual/en/intlchar.getpropertyenum.php
	 * @param string $alias <p>
	 * </p>
	 * @return int 
	 */
	public static function getPropertyEnum ($alias) {}

	/**
	 * @link http://www.php.net/manual/en/intlchar.getpropertyvaluename.php
	 * @param int $property <p>
	 * </p>
	 * @param int $value <p>
	 * </p>
	 * @param int $nameChoice [optional] <p>
	 * </p>
	 * @return string 
	 */
	public static function getPropertyValueName ($property, $value, $nameChoice = null) {}

	/**
	 * @link http://www.php.net/manual/en/intlchar.getpropertyvalueenum.php
	 * @param int $property <p>
	 * </p>
	 * @param string $name <p>
	 * </p>
	 * @return int 
	 */
	public static function getPropertyValueEnum ($property, $name) {}

	/**
	 * @link http://www.php.net/manual/en/intlchar.isidstart.php
	 * @param mixed $codepoint <p>
	 * </p>
	 * @return bool 
	 */
	public static function isIDStart ($codepoint) {}

	/**
	 * @link http://www.php.net/manual/en/intlchar.isidpart.php
	 * @param mixed $codepoint <p>
	 * </p>
	 * @return bool 
	 */
	public static function isIDPart ($codepoint) {}

	/**
	 * @link http://www.php.net/manual/en/intlchar.isidignorable.php
	 * @param mixed $codepoint <p>
	 * </p>
	 * @return bool 
	 */
	public static function isIDIgnorable ($codepoint) {}

	/**
	 * @link http://www.php.net/manual/en/intlchar.isjavaidstart.php
	 * @param mixed $codepoint <p>
	 * </p>
	 * @return bool 
	 */
	public static function isJavaIDStart ($codepoint) {}

	/**
	 * @link http://www.php.net/manual/en/intlchar.isjavaidpart.php
	 * @param mixed $codepoint <p>
	 * </p>
	 * @return bool 
	 */
	public static function isJavaIDPart ($codepoint) {}

	/**
	 * @link http://www.php.net/manual/en/intlchar.tolower.php
	 * @param mixed $codepoint <p>
	 * </p>
	 * @return mixed 
	 */
	public static function tolower ($codepoint) {}

	/**
	 * @link http://www.php.net/manual/en/intlchar.toupper.php
	 * @param mixed $codepoint <p>
	 * </p>
	 * @return mixed 
	 */
	public static function toupper ($codepoint) {}

	/**
	 * @link http://www.php.net/manual/en/intlchar.totitle.php
	 * @param mixed $codepoint <p>
	 * </p>
	 * @return mixed 
	 */
	public static function totitle ($codepoint) {}

	/**
	 * @link http://www.php.net/manual/en/intlchar.foldcase.php
	 * @param mixed $foldCase <p>
	 * </p>
	 * @param int $options [optional] 
	 * @return mixed 
	 */
	public static function foldCase ($foldCase, $options = null) {}

	/**
	 * @link http://www.php.net/manual/en/intlchar.digit.php
	 * @param string $codepoint <p>
	 * </p>
	 * @param int $radix [optional] <p>
	 * </p>
	 * @return int 
	 */
	public static function digit ($codepoint, $radix = null) {}

	/**
	 * @link http://www.php.net/manual/en/intlchar.fordigit.php
	 * @param int $digit <p>
	 * </p>
	 * @param int $radix [optional] <p>
	 * </p>
	 * @return int 
	 */
	public static function forDigit ($digit, $radix = null) {}

	/**
	 * @link http://www.php.net/manual/en/intlchar.charage.php
	 * @param mixed $codepoint <p>
	 * </p>
	 * @return array 
	 */
	public static function charAge ($codepoint) {}

	/**
	 * @link http://www.php.net/manual/en/intlchar.getunicodeversion.php
	 * @return array 
	 */
	public static function getUnicodeVersion () {}

	/**
	 * @link http://www.php.net/manual/en/intlchar.getfc-nfkc-closure.php
	 * @param mixed $codepoint <p>
	 * </p>
	 * @return string 
	 */
	public static function getFC_NFKC_Closure ($codepoint) {}

}

/**
 * @param $arg1
 */
function collator_create ($arg1) {}

/**
 * @param Collator $object
 * @param $arg1
 * @param $arg2
 */
function collator_compare (Collator $object, $arg1, $arg2) {}

/**
 * @param Collator $object
 * @param $arg1
 */
function collator_get_attribute (Collator $object, $arg1) {}

/**
 * @param Collator $object
 * @param $arg1
 * @param $arg2
 */
function collator_set_attribute (Collator $object, $arg1, $arg2) {}

/**
 * @param Collator $object
 */
function collator_get_strength (Collator $object) {}

/**
 * @param Collator $object
 * @param $arg1
 */
function collator_set_strength (Collator $object, $arg1) {}

/**
 * @param Collator $object
 * @param $arr
 * @param $sort_flags [optional]
 */
function collator_sort (Collator $objectarray , &$arr, $sort_flags = null) {}

/**
 * @param Collator $object
 * @param $arr
 * @param $sort_flags [optional]
 */
function collator_sort_with_sort_keys (Collator $objectarray , &$arr, $sort_flags = null) {}

/**
 * @param Collator $object
 * @param $arr
 * @param $sort_flags [optional]
 */
function collator_asort (Collator $objectarray , &$arr, $sort_flags = null) {}

/**
 * @param Collator $object
 * @param $arg1
 */
function collator_get_locale (Collator $object, $arg1) {}

/**
 * @param Collator $object
 */
function collator_get_error_code (Collator $object) {}

/**
 * @param Collator $object
 */
function collator_get_error_message (Collator $object) {}

/**
 * @param Collator $object
 * @param $arg1
 * @param $arg2
 */
function collator_get_sort_key (Collator $object, $arg1, $arg2) {}

/**
 * @param $locale
 * @param $style
 * @param $pattern [optional]
 */
function numfmt_create ($locale, $style, $pattern = null) {}

/**
 * @param $nf
 * @param $num
 * @param $type [optional]
 */
function numfmt_format ($nf, $num, $type = null) {}

/**
 * @param $formatter
 * @param $string
 * @param $type [optional]
 * @param $position [optional]
 */
function numfmt_parse ($formatter, $string, $type = null, &$position = null) {}

/**
 * @param $nf
 * @param $num
 * @param $currency
 */
function numfmt_format_currency ($nf, $num, $currency) {}

/**
 * @param $formatter
 * @param $string
 * @param $currency
 * @param $position [optional]
 */
function numfmt_parse_currency ($formatter, $string, &$currency, &$position = null) {}

/**
 * @param $nf
 * @param $attr
 * @param $value
 */
function numfmt_set_attribute ($nf, $attr, $value) {}

/**
 * @param $nf
 * @param $attr
 */
function numfmt_get_attribute ($nf, $attr) {}

/**
 * @param $nf
 * @param $attr
 * @param $value
 */
function numfmt_set_text_attribute ($nf, $attr, $value) {}

/**
 * @param $nf
 * @param $attr
 */
function numfmt_get_text_attribute ($nf, $attr) {}

/**
 * @param $nf
 * @param $attr
 * @param $symbol
 */
function numfmt_set_symbol ($nf, $attr, $symbol) {}

/**
 * @param $nf
 * @param $attr
 */
function numfmt_get_symbol ($nf, $attr) {}

/**
 * @param $nf
 * @param $pattern
 */
function numfmt_set_pattern ($nf, $pattern) {}

/**
 * @param $nf
 */
function numfmt_get_pattern ($nf) {}

/**
 * @param $nf
 * @param $type [optional]
 */
function numfmt_get_locale ($nf, $type = null) {}

/**
 * @param $nf
 */
function numfmt_get_error_code ($nf) {}

/**
 * @param $nf
 */
function numfmt_get_error_message ($nf) {}

/**
 * @param $input
 * @param $form [optional]
 */
function normalizer_normalize ($input, $form = null) {}

/**
 * @param $input
 * @param $form [optional]
 */
function normalizer_is_normalized ($input, $form = null) {}

function locale_get_default () {}

/**
 * @param $arg1
 */
function locale_set_default ($arg1) {}

/**
 * @param $arg1
 */
function locale_get_primary_language ($arg1) {}

/**
 * @param $arg1
 */
function locale_get_script ($arg1) {}

/**
 * @param $arg1
 */
function locale_get_region ($arg1) {}

/**
 * @param $arg1
 */
function locale_get_keywords ($arg1) {}

/**
 * @param $arg1
 * @param $arg2
 */
function locale_get_display_script ($arg1, $arg2) {}

/**
 * @param $arg1
 * @param $arg2
 */
function locale_get_display_region ($arg1, $arg2) {}

/**
 * @param $arg1
 * @param $arg2
 */
function locale_get_display_name ($arg1, $arg2) {}

/**
 * @param $arg1
 * @param $arg2
 */
function locale_get_display_language ($arg1, $arg2) {}

/**
 * @param $arg1
 * @param $arg2
 */
function locale_get_display_variant ($arg1, $arg2) {}

/**
 * @param $arg1
 */
function locale_compose ($arg1) {}

/**
 * @param $arg1
 */
function locale_parse ($arg1) {}

/**
 * @param $arg1
 */
function locale_get_all_variants ($arg1) {}

/**
 * @param $arg1
 * @param $arg2
 * @param $arg3
 */
function locale_filter_matches ($arg1, $arg2, $arg3) {}

/**
 * @param $arg1
 */
function locale_canonicalize ($arg1) {}

/**
 * @param $arg1
 * @param $arg2
 * @param $arg3
 * @param $arg4
 */
function locale_lookup ($arg1, $arg2, $arg3, $arg4) {}

/**
 * @param $arg1
 */
function locale_accept_from_http ($arg1) {}

/**
 * @param $locale
 * @param $pattern
 */
function msgfmt_create ($locale, $pattern) {}

/**
 * @param $nf
 * @param $args
 */
function msgfmt_format ($nf, $args) {}

/**
 * @param $locale
 * @param $pattern
 * @param $args
 */
function msgfmt_format_message ($locale, $pattern, $args) {}

/**
 * @param $nf
 * @param $source
 */
function msgfmt_parse ($nf, $source) {}

/**
 * @param $locale
 * @param $pattern
 * @param $source
 */
function msgfmt_parse_message ($locale, $pattern, $source) {}

/**
 * @param $mf
 * @param $pattern
 */
function msgfmt_set_pattern ($mf, $pattern) {}

/**
 * @param $mf
 */
function msgfmt_get_pattern ($mf) {}

/**
 * @param $mf
 */
function msgfmt_get_locale ($mf) {}

/**
 * @param $nf
 */
function msgfmt_get_error_code ($nf) {}

/**
 * @param $coll
 */
function msgfmt_get_error_message ($coll) {}

/**
 * @param $locale
 * @param $date_type
 * @param $time_type
 * @param $timezone_str [optional]
 * @param $calendar [optional]
 * @param $pattern [optional]
 */
function datefmt_create ($locale, $date_type, $time_type, $timezone_str = null, $calendar = null, $pattern = null) {}

/**
 * @param $mf
 */
function datefmt_get_datetype ($mf) {}

/**
 * @param $mf
 */
function datefmt_get_timetype ($mf) {}

/**
 * @param $mf
 */
function datefmt_get_calendar ($mf) {}

/**
 * @param $mf
 */
function datefmt_get_calendar_object ($mf) {}

/**
 * @param $mf
 * @param $calendar
 */
function datefmt_set_calendar ($mf, $calendar) {}

/**
 * @param $mf
 */
function datefmt_get_locale ($mf) {}

/**
 * @param $mf
 */
function datefmt_get_timezone_id ($mf) {}

/**
 * @param $mf
 */
function datefmt_get_timezone ($mf) {}

/**
 * @param $mf
 * @param $timezone
 */
function datefmt_set_timezone ($mf, $timezone) {}

/**
 * @param $mf
 */
function datefmt_get_pattern ($mf) {}

/**
 * @param $mf
 * @param $pattern
 */
function datefmt_set_pattern ($mf, $pattern) {}

/**
 * @param $mf
 */
function datefmt_is_lenient ($mf) {}

/**
 * @param $mf
 */
function datefmt_set_lenient ($mf) {}

/**
 * @param $args [optional]
 * @param $array [optional]
 */
function datefmt_format ($args = null, $array = null) {}

/**
 * @param $object
 * @param $format [optional]
 * @param $locale [optional]
 */
function datefmt_format_object ($object, $format = null, $locale = null) {}

/**
 * @param $formatter
 * @param $string
 * @param $position [optional]
 */
function datefmt_parse ($formatter, $string, &$position = null) {}

/**
 * @param $formatter
 * @param $string
 * @param $position [optional]
 */
function datefmt_localtime ($formatter, $string, &$position = null) {}

/**
 * @param $nf
 */
function datefmt_get_error_code ($nf) {}

/**
 * @param $coll
 */
function datefmt_get_error_message ($coll) {}

/**
 * Get string length in grapheme units
 * @link http://www.php.net/manual/en/function.grapheme-strlen.php
 * @param string $input <p>
 * The string being measured for length. It must be a valid UTF-8 string.
 * </p>
 * @return int The length of the string on success, and 0 if the string is empty.
 */
function grapheme_strlen ($input) {}

/**
 * Find position (in grapheme units) of first occurrence of a string
 * @link http://www.php.net/manual/en/function.grapheme-strpos.php
 * @param string $haystack <p>
 * The string to look in. Must be valid UTF-8.
 * </p>
 * @param string $needle <p>
 * The string to look for. Must be valid UTF-8.
 * </p>
 * @param int $offset [optional] <p>
 * The optional $offset parameter allows you to specify where in $haystack to
 * start searching as an offset in grapheme units (not bytes or characters).
 * The position returned is still relative to the beginning of haystack
 * regardless of the value of $offset.
 * </p>
 * @return int the position as an integer. If needle is not found, strpos() will return boolean FALSE.
 */
function grapheme_strpos ($haystack, $needle, $offset = null) {}

/**
 * Find position (in grapheme units) of first occurrence of a case-insensitive string
 * @link http://www.php.net/manual/en/function.grapheme-stripos.php
 * @param string $haystack <p>
 * The string to look in. Must be valid UTF-8.
 * </p>
 * @param string $needle <p>
 * The string to look for. Must be valid UTF-8. 
 * </p>
 * @param int $offset [optional] <p>
 * The optional $offset parameter allows you to specify where in haystack to
 * start searching as an offset in grapheme units (not bytes or characters).
 * The position returned is still relative to the beginning of haystack
 * regardless of the value of $offset.
 * </p>
 * @return int the position as an integer. If needle is not found, grapheme_stripos() will return boolean FALSE.
 */
function grapheme_stripos ($haystack, $needle, $offset = null) {}

/**
 * Find position (in grapheme units) of last occurrence of a string
 * @link http://www.php.net/manual/en/function.grapheme-strrpos.php
 * @param string $haystack <p>
 * The string to look in. Must be valid UTF-8.
 * </p>
 * @param string $needle <p>
 * The string to look for. Must be valid UTF-8.
 * </p>
 * @param int $offset [optional] <p>
 * The optional $offset parameter allows you to specify where in $haystack to
 * start searching as an offset in grapheme units (not bytes or characters).
 * The position returned is still relative to the beginning of haystack
 * regardless of the value of $offset.
 * </p>
 * @return int the position as an integer. If needle is not found, grapheme_strrpos() will return boolean FALSE.
 */
function grapheme_strrpos ($haystack, $needle, $offset = null) {}

/**
 * Find position (in grapheme units) of last occurrence of a case-insensitive string
 * @link http://www.php.net/manual/en/function.grapheme-strripos.php
 * @param string $haystack <p>
 * The string to look in. Must be valid UTF-8.
 * </p>
 * @param string $needle <p>
 * The string to look for. Must be valid UTF-8.
 * </p>
 * @param int $offset [optional] <p>
 * The optional $offset parameter allows you to specify where in $haystack to
 * start searching as an offset in grapheme units (not bytes or characters).
 * The position returned is still relative to the beginning of haystack
 * regardless of the value of $offset.
 * </p>
 * @return int the position as an integer. If needle is not found, grapheme_strripos() will return boolean FALSE.
 */
function grapheme_strripos ($haystack, $needle, $offset = null) {}

/**
 * Return part of a string
 * @link http://www.php.net/manual/en/function.grapheme-substr.php
 * @param string $string <p>
 * The input string. Must be valid UTF-8. 
 * </p>
 * @param int $start <p>
 * Start position in default grapheme units.
 * If $start is non-negative, the returned string will start at the
 * $start'th position in $string, counting from zero. If $start is negative,
 * the returned string will start at the $start'th grapheme unit from the 
 * end of string.
 * </p>
 * @param int $length [optional] <p>
 * Length in grapheme units.
 * If $length is given and is positive, the string returned will contain
 * at most $length grapheme units beginning from $start (depending on the 
 * length of string). If $length is given and is negative, then
 * that many grapheme units will be omitted from the end of string (after the
 * start position has been calculated when a start is negative). If $start
 * denotes a position beyond this truncation, false will be returned. 
 * </p>
 * @return int the extracted part of $string.
 */
function grapheme_substr ($string, $start, $length = null) {}

/**
 * Returns part of haystack string from the first occurrence of needle to the end of haystack.
 * @link http://www.php.net/manual/en/function.grapheme-strstr.php
 * @param string $haystack <p>
 * The input string. Must be valid UTF-8. 
 * </p>
 * @param string $needle <p>
 * The string to look for. Must be valid UTF-8. 
 * </p>
 * @param bool $before_needle [optional] <p>
 * If true, grapheme_strstr() returns the part of the
 * haystack before the first occurrence of the needle (excluding the needle).
 * </p>
 * @return string the portion of string, or FALSE if needle is not found.
 */
function grapheme_strstr ($haystack, $needle, $before_needle = null) {}

/**
 * Returns part of haystack string from the first occurrence of case-insensitive needle to the end of haystack.
 * @link http://www.php.net/manual/en/function.grapheme-stristr.php
 * @param string $haystack <p>
 * The input string. Must be valid UTF-8.
 * </p>
 * @param string $needle <p>
 * The string to look for. Must be valid UTF-8.
 * </p>
 * @param bool $before_needle [optional] <p>
 * If true, grapheme_strstr() returns the part of the
 * haystack before the first occurrence of the needle (excluding needle).
 * </p>
 * @return string the portion of $haystack, or FALSE if $needle is not found.
 */
function grapheme_stristr ($haystack, $needle, $before_needle = null) {}

/**
 * Function to extract a sequence of default grapheme clusters from a text buffer, which must be encoded in UTF-8.
 * @link http://www.php.net/manual/en/function.grapheme-extract.php
 * @param string $haystack <p>
 * String to search.
 * </p>
 * @param int $size <p>
 * Maximum number items - based on the $extract_type - to return.
 * </p>
 * @param int $extract_type [optional] <p>
 * Defines the type of units referred to by the $size parameter:
 * </p>
 * <p>
 * GRAPHEME_EXTR_COUNT (default) - $size is the number of default
 * grapheme clusters to extract.
 * GRAPHEME_EXTR_MAXBYTES - $size is the maximum number of bytes
 * returned.
 * GRAPHEME_EXTR_MAXCHARS - $size is the maximum number of UTF-8
 * characters returned.
 * </p>
 * @param int $start [optional] <p>
 * Starting position in $haystack in bytes - if given, it must be zero or a
 * positive value that is less than or equal to the length of $haystack in
 * bytes. If $start does not point to the first byte of a UTF-8
 * character, the start position is moved to the next character boundary.
 * </p>
 * @param int $next [optional] <p>
 * Reference to a value that will be set to the next starting position.
 * When the call returns, this may point to the first byte position past the end of the string.
 * </p>
 * @return string A string starting at offset $start and ending on a default grapheme cluster
 * boundary that conforms to the $size and $extract_type specified.
 */
function grapheme_extract ($haystack, $size, $extract_type = null, $start = null, &$next = null) {}

/**
 * Convert domain name to IDNA ASCII form.
 * @link http://www.php.net/manual/en/function.idn-to-ascii.php
 * @param string $utf8_domain <p>
 * The UTF-8 encoded domain name.
 * <p>
 * If e.g. an ISO-8859-1 (aka Western Europe latin1) encoded string is
 * passed it will be converted into an ACE encoded "xn--" string. 
 * It will not be the one you expected though!
 * </p>
 * </p>
 * @param int $errorcode [optional] <p>
 * Will be set to the IDNA error code. 
 * </p>
 * @param string $domain <p>
 * Domain to convert. In PHP 5 must be UTF-8 encoded.
 * </p>
 * @param int $options [optional] <p>
 * Conversion options - combination of IDNA_* constants
 * (except IDNA_ERROR_* constants).
 * </p>
 * @param int $variant [optional] <p>
 * Either INTL_IDNA_VARIANT_2003 for IDNA 2003 or
 * INTL_IDNA_VARIANT_UTS46 for UTS #46.
 * </p>
 * @param array $idna_info [optional] <p>
 * This parameter can be used only if
 * INTL_IDNA_VARIANT_UTS46 was used for
 * variant. In that case, it will be filled with an
 * array with the keys 'result', the possibly illegal
 * result of the transformation,
 * 'isTransitionalDifferent', a boolean indicating
 * whether the usage of the transitional mechanisms of UTS #46 either has
 * or would have changed the result and 'errors',
 * which is an int representing a bitset of the error
 * constants IDNA_ERROR_*.
 * </p>
 * @return string Domain name encoded in ASCII-compatible form. or false on failure
 */
function idn_to_ascii ($utf8_domain, &$errorcode = null, $domain, $options = null, $variant = null, array &$idna_info = null) {}

/**
 * Convert domain name from IDNA ASCII to Unicode.
 * @link http://www.php.net/manual/en/function.idn-to-utf8.php
 * @param string $ascii_domain <p>
 * The ASCII encoded domain name. Looks like "xn--..." if the it originally contained non-ASCII characters.
 * </p>
 * @param int $errorcode [optional] <p>
 * Will be set to the IDNA error code.
 * </p>
 * @param string $domain <p>
 * Domain to convert in IDNA ASCII-compatible format.
 * </p>
 * @param int $options [optional] <p>
 * Conversion options - combination of IDNA_* constants
 * (except IDNA_ERROR_* constants).
 * </p>
 * @param int $variant [optional] <p>
 * Either INTL_IDNA_VARIANT_2003 for IDNA 2003 or
 * INTL_IDNA_VARIANT_UTS46 for UTS #46.
 * </p>
 * @param array $idna_info [optional] <p>
 * This parameter can be used only if
 * INTL_IDNA_VARIANT_UTS46 was used for
 * variant. In that case, it will be filled with an
 * array with the keys 'result', the possibly illegal
 * result of the transformation,
 * 'isTransitionalDifferent', a boolean indicating
 * whether the usage of the transitional mechanisms of UTS #46 either has
 * or would have changed the result and 'errors',
 * which is an int representing a bitset of the error
 * constants IDNA_ERROR_*.
 * </p>
 * @return string Domain name in Unicode, encoded in UTF-8. or false on failure
 */
function idn_to_utf8 ($ascii_domain, &$errorcode = null, $domain, $options = null, $variant = null, array &$idna_info = null) {}

/**
 * @param $locale
 * @param $bundlename
 * @param $fallback [optional]
 */
function resourcebundle_create ($locale, $bundlename, $fallback = null) {}

/**
 * @param $bundle
 * @param $index
 * @param $fallback [optional]
 */
function resourcebundle_get ($bundle, $index, $fallback = null) {}

/**
 * @param $bundle
 */
function resourcebundle_count ($bundle) {}

/**
 * @param $bundlename
 */
function resourcebundle_locales ($bundlename) {}

/**
 * @param $bundle
 */
function resourcebundle_get_error_code ($bundle) {}

/**
 * @param $bundle
 */
function resourcebundle_get_error_message ($bundle) {}

/**
 * @param $id
 * @param $direction [optional]
 */
function transliterator_create ($id, $direction = null) {}

/**
 * @param $rules
 * @param $direction [optional]
 */
function transliterator_create_from_rules ($rules, $direction = null) {}

function transliterator_list_ids () {}

/**
 * @param Transliterator $orig_trans
 */
function transliterator_create_inverse (Transliterator $orig_trans) {}

/**
 * @param $trans
 * @param $subject
 * @param $start [optional]
 * @param $end [optional]
 */
function transliterator_transliterate ($trans, $subject, $start = null, $end = null) {}

/**
 * @param Transliterator $trans
 */
function transliterator_get_error_code (Transliterator $trans) {}

/**
 * @param Transliterator $trans
 */
function transliterator_get_error_message (Transliterator $trans) {}

/**
 * @param $zoneId
 */
function intltz_create_time_zone ($zoneId) {}

/**
 * @param DateTimeZone $dateTimeZone
 */
function intltz_from_date_time_zone (DateTimeZone $dateTimeZone) {}

function intltz_create_default () {}

/**
 * @param IntlTimeZone $timeZone
 */
function intltz_get_id (IntlTimeZone $timeZone) {}

function intltz_get_gmt () {}

function intltz_get_unknown () {}

/**
 * @param $countryOrRawOffset [optional]
 */
function intltz_create_enumeration ($countryOrRawOffset = null) {}

/**
 * @param $zoneId
 */
function intltz_count_equivalent_ids ($zoneId) {}

/**
 * @param $zoneType
 * @param $region [optional]
 * @param $rawOffset [optional]
 */
function intltz_create_time_zone_id_enumeration ($zoneType, $region = null, $rawOffset = null) {}

/**
 * @param $zoneId
 * @param $isSystemID [optional]
 */
function intltz_get_canonical_id ($zoneId, &$isSystemID = null) {}

/**
 * @param $zoneId
 */
function intltz_get_region ($zoneId) {}

function intltz_get_tz_data_version () {}

/**
 * @param $zoneId
 * @param $index
 */
function intltz_get_equivalent_id ($zoneId, $index) {}

/**
 * @param IntlTimeZone $timeZone
 */
function intltz_use_daylight_time (IntlTimeZone $timeZone) {}

/**
 * @param IntlTimeZone $timeZone
 * @param $date
 * @param $local
 * @param $rawOffset
 * @param $dstOffset
 */
function intltz_get_offset (IntlTimeZone $timeZone, $date, $local, &$rawOffset, &$dstOffset) {}

/**
 * @param IntlTimeZone $timeZone
 */
function intltz_get_raw_offset (IntlTimeZone $timeZone) {}

/**
 * @param IntlTimeZone $timeZone
 * @param IntlTimeZone $otherTimeZone [optional]
 */
function intltz_has_same_rules (IntlTimeZone $timeZoneIntlTimeZone , $otherTimeZone = null) {}

/**
 * @param IntlTimeZone $timeZone
 * @param $isDaylight [optional]
 * @param $style [optional]
 * @param $locale [optional]
 */
function intltz_get_display_name (IntlTimeZone $timeZone, $isDaylight = null, $style = null, $locale = null) {}

/**
 * @param IntlTimeZone $timeZone
 */
function intltz_get_dst_savings (IntlTimeZone $timeZone) {}

/**
 * @param IntlTimeZone $timeZone
 */
function intltz_to_date_time_zone (IntlTimeZone $timeZone) {}

/**
 * @param IntlTimeZone $timeZone
 */
function intltz_get_error_code (IntlTimeZone $timeZone) {}

/**
 * @param IntlTimeZone $timeZone
 */
function intltz_get_error_message (IntlTimeZone $timeZone) {}

/**
 * @param $timeZone [optional]
 * @param $locale [optional]
 */
function intlcal_create_instance ($timeZone = null, $locale = null) {}

/**
 * @param $key
 * @param $locale
 * @param $commonlyUsed
 */
function intlcal_get_keyword_values_for_locale ($key, $locale, $commonlyUsed) {}

function intlcal_get_now () {}

function intlcal_get_available_locales () {}

/**
 * @param IntlCalendar $calendar
 * @param $field
 */
function intlcal_get (IntlCalendar $calendar, $field) {}

/**
 * @param IntlCalendar $calendar
 */
function intlcal_get_time (IntlCalendar $calendar) {}

/**
 * @param IntlCalendar $calendar
 * @param $date
 */
function intlcal_set_time (IntlCalendar $calendar, $date) {}

/**
 * @param IntlCalendar $calendar
 * @param $field
 * @param $amount
 */
function intlcal_add (IntlCalendar $calendar, $field, $amount) {}

/**
 * @param IntlCalendar $calendar
 * @param $timeZone
 */
function intlcal_set_time_zone (IntlCalendar $calendar, $timeZone) {}

/**
 * @param IntlCalendar $calendar
 * @param IntlCalendar $otherCalendar
 */
function intlcal_after (IntlCalendar $calendarIntlCalendar , $otherCalendar) {}

/**
 * @param IntlCalendar $calendar
 * @param IntlCalendar $otherCalendar
 */
function intlcal_before (IntlCalendar $calendarIntlCalendar , $otherCalendar) {}

/**
 * @param IntlCalendar $calendar
 * @param $fieldOrYear
 * @param $valueOrMonth
 * @param $dayOfMonth [optional]
 * @param $hour [optional]
 * @param $minute [optional]
 * @param $second [optional]
 */
function intlcal_set (IntlCalendar $calendar, $fieldOrYear, $valueOrMonth, $dayOfMonth = null, $hour = null, $minute = null, $second = null) {}

/**
 * @param IntlCalendar $calendar
 * @param $field
 * @param $amountOrUpOrDown [optional]
 */
function intlcal_roll (IntlCalendar $calendar, $field, $amountOrUpOrDown = null) {}

/**
 * @param IntlCalendar $calendar
 * @param $field [optional]
 */
function intlcal_clear (IntlCalendar $calendar, $field = null) {}

/**
 * @param IntlCalendar $calendar
 * @param $when
 * @param $field
 */
function intlcal_field_difference (IntlCalendar $calendar, $when, $field) {}

/**
 * @param IntlCalendar $calendar
 * @param $field
 */
function intlcal_get_actual_maximum (IntlCalendar $calendar, $field) {}

/**
 * @param IntlCalendar $calendar
 * @param $field
 */
function intlcal_get_actual_minimum (IntlCalendar $calendar, $field) {}

/**
 * @param IntlCalendar $calendar
 * @param $dayOfWeek
 */
function intlcal_get_day_of_week_type (IntlCalendar $calendar, $dayOfWeek) {}

/**
 * @param IntlCalendar $calendar
 */
function intlcal_get_first_day_of_week (IntlCalendar $calendar) {}

/**
 * @param IntlCalendar $calendar
 * @param $field
 */
function intlcal_get_greatest_minimum (IntlCalendar $calendar, $field) {}

/**
 * @param IntlCalendar $calendar
 * @param $field
 */
function intlcal_get_least_maximum (IntlCalendar $calendar, $field) {}

/**
 * @param IntlCalendar $calendar
 * @param $localeType
 */
function intlcal_get_locale (IntlCalendar $calendar, $localeType) {}

/**
 * @param IntlCalendar $calendar
 * @param $field
 */
function intlcal_get_maximum (IntlCalendar $calendar, $field) {}

/**
 * @param IntlCalendar $calendar
 */
function intlcal_get_minimal_days_in_first_week (IntlCalendar $calendar) {}

/**
 * @param IntlCalendar $calendar
 * @param $field
 */
function intlcal_get_minimum (IntlCalendar $calendar, $field) {}

/**
 * @param IntlCalendar $calendar
 */
function intlcal_get_time_zone (IntlCalendar $calendar) {}

/**
 * @param IntlCalendar $calendar
 */
function intlcal_get_type (IntlCalendar $calendar) {}

/**
 * @param IntlCalendar $calendar
 * @param $dayOfWeek
 */
function intlcal_get_weekend_transition (IntlCalendar $calendar, $dayOfWeek) {}

/**
 * @param IntlCalendar $calendar
 */
function intlcal_in_daylight_time (IntlCalendar $calendar) {}

/**
 * @param IntlCalendar $calendar
 * @param IntlCalendar $otherCalendar
 */
function intlcal_is_equivalent_to (IntlCalendar $calendarIntlCalendar , $otherCalendar) {}

/**
 * @param IntlCalendar $calendar
 */
function intlcal_is_lenient (IntlCalendar $calendar) {}

/**
 * @param IntlCalendar $calendar
 * @param $field
 */
function intlcal_is_set (IntlCalendar $calendar, $field) {}

/**
 * @param IntlCalendar $calendar
 * @param $date [optional]
 */
function intlcal_is_weekend (IntlCalendar $calendar, $date = null) {}

/**
 * @param IntlCalendar $calendar
 * @param $dayOfWeek
 */
function intlcal_set_first_day_of_week (IntlCalendar $calendar, $dayOfWeek) {}

/**
 * @param IntlCalendar $calendar
 * @param $isLenient
 */
function intlcal_set_lenient (IntlCalendar $calendar, $isLenient) {}

/**
 * @param IntlCalendar $calendar
 * @param $numberOfDays
 */
function intlcal_set_minimal_days_in_first_week (IntlCalendar $calendar, $numberOfDays) {}

/**
 * @param IntlCalendar $calendar
 * @param IntlCalendar $otherCalendar
 */
function intlcal_equals (IntlCalendar $calendarIntlCalendar , $otherCalendar) {}

/**
 * @param $dateTime
 */
function intlcal_from_date_time ($dateTime) {}

/**
 * @param IntlCalendar $calendar
 */
function intlcal_to_date_time (IntlCalendar $calendar) {}

/**
 * @param IntlCalendar $calendar
 */
function intlcal_get_repeated_wall_time_option (IntlCalendar $calendar) {}

/**
 * @param IntlCalendar $calendar
 */
function intlcal_get_skipped_wall_time_option (IntlCalendar $calendar) {}

/**
 * @param IntlCalendar $calendar
 * @param $wallTimeOption
 */
function intlcal_set_repeated_wall_time_option (IntlCalendar $calendar, $wallTimeOption) {}

/**
 * @param IntlCalendar $calendar
 * @param $wallTimeOption
 */
function intlcal_set_skipped_wall_time_option (IntlCalendar $calendar, $wallTimeOption) {}

/**
 * @param IntlCalendar $calendar
 */
function intlcal_get_error_code (IntlCalendar $calendar) {}

/**
 * @param IntlCalendar $calendar
 */
function intlcal_get_error_message (IntlCalendar $calendar) {}

/**
 * @param $timeZoneOrYear [optional]
 * @param $localeOrMonth [optional]
 * @param $dayOfMonth [optional]
 * @param $hour [optional]
 * @param $minute [optional]
 * @param $second [optional]
 */
function intlgregcal_create_instance ($timeZoneOrYear = null, $localeOrMonth = null, $dayOfMonth = null, $hour = null, $minute = null, $second = null) {}

/**
 * @param IntlGregorianCalendar $calendar
 * @param $date
 */
function intlgregcal_set_gregorian_change (IntlGregorianCalendar $calendar, $date) {}

/**
 * @param IntlGregorianCalendar $calendar
 */
function intlgregcal_get_gregorian_change (IntlGregorianCalendar $calendar) {}

/**
 * @param IntlGregorianCalendar $calendar
 * @param $year
 */
function intlgregcal_is_leap_year (IntlGregorianCalendar $calendar, $year) {}

/**
 * Get the last error code
 * @link http://www.php.net/manual/en/function.intl-get-error-code.php
 * @return int Error code returned by the last API function call.
 */
function intl_get_error_code () {}

/**
 * Get description of the last error
 * @link http://www.php.net/manual/en/function.intl-get-error-message.php
 * @return string Description of an error occurred in the last API function call.
 */
function intl_get_error_message () {}

/**
 * Check whether the given error code indicates failure
 * @link http://www.php.net/manual/en/function.intl-is-failure.php
 * @param int $error_code <p>
 * is a value that returned by functions:
 * intl_get_error_code,
 * collator_get_error_code .
 * </p>
 * @return bool true if it the code indicates some failure, and false
 * in case of success or a warning.
 */
function intl_is_failure ($error_code) {}

/**
 * Get symbolic name for a given error code
 * @link http://www.php.net/manual/en/function.intl-error-name.php
 * @param int $error_code <p>
 * ICU error code.
 * </p>
 * @return string The returned string will be the same as the name of the error code
 * constant.
 */
function intl_error_name ($error_code) {}

define ('INTL_MAX_LOCALE_LEN', 80);
define ('INTL_ICU_VERSION', 52.1);
define ('INTL_ICU_DATA_VERSION', 52.1);
define ('ULOC_ACTUAL_LOCALE', 0);
define ('ULOC_VALID_LOCALE', 1);
define ('GRAPHEME_EXTR_COUNT', 0);
define ('GRAPHEME_EXTR_MAXBYTES', 1);
define ('GRAPHEME_EXTR_MAXCHARS', 2);
define ('U_USING_FALLBACK_WARNING', -128);
define ('U_ERROR_WARNING_START', -128);
define ('U_USING_DEFAULT_WARNING', -127);
define ('U_SAFECLONE_ALLOCATED_WARNING', -126);
define ('U_STATE_OLD_WARNING', -125);
define ('U_STRING_NOT_TERMINATED_WARNING', -124);
define ('U_SORT_KEY_TOO_SHORT_WARNING', -123);
define ('U_AMBIGUOUS_ALIAS_WARNING', -122);
define ('U_DIFFERENT_UCA_VERSION', -121);
define ('U_ERROR_WARNING_LIMIT', -119);
define ('U_ZERO_ERROR', 0);
define ('U_ILLEGAL_ARGUMENT_ERROR', 1);
define ('U_MISSING_RESOURCE_ERROR', 2);
define ('U_INVALID_FORMAT_ERROR', 3);
define ('U_FILE_ACCESS_ERROR', 4);
define ('U_INTERNAL_PROGRAM_ERROR', 5);
define ('U_MESSAGE_PARSE_ERROR', 6);
define ('U_MEMORY_ALLOCATION_ERROR', 7);
define ('U_INDEX_OUTOFBOUNDS_ERROR', 8);
define ('U_PARSE_ERROR', 9);
define ('U_INVALID_CHAR_FOUND', 10);
define ('U_TRUNCATED_CHAR_FOUND', 11);
define ('U_ILLEGAL_CHAR_FOUND', 12);
define ('U_INVALID_TABLE_FORMAT', 13);
define ('U_INVALID_TABLE_FILE', 14);
define ('U_BUFFER_OVERFLOW_ERROR', 15);
define ('U_UNSUPPORTED_ERROR', 16);
define ('U_RESOURCE_TYPE_MISMATCH', 17);
define ('U_ILLEGAL_ESCAPE_SEQUENCE', 18);
define ('U_UNSUPPORTED_ESCAPE_SEQUENCE', 19);
define ('U_NO_SPACE_AVAILABLE', 20);
define ('U_CE_NOT_FOUND_ERROR', 21);
define ('U_PRIMARY_TOO_LONG_ERROR', 22);
define ('U_STATE_TOO_OLD_ERROR', 23);
define ('U_TOO_MANY_ALIASES_ERROR', 24);
define ('U_ENUM_OUT_OF_SYNC_ERROR', 25);
define ('U_INVARIANT_CONVERSION_ERROR', 26);
define ('U_INVALID_STATE_ERROR', 27);
define ('U_COLLATOR_VERSION_MISMATCH', 28);
define ('U_USELESS_COLLATOR_ERROR', 29);
define ('U_NO_WRITE_PERMISSION', 30);
define ('U_STANDARD_ERROR_LIMIT', 31);
define ('U_BAD_VARIABLE_DEFINITION', 65536);
define ('U_PARSE_ERROR_START', 65536);
define ('U_MALFORMED_RULE', 65537);
define ('U_MALFORMED_SET', 65538);
define ('U_MALFORMED_SYMBOL_REFERENCE', 65539);
define ('U_MALFORMED_UNICODE_ESCAPE', 65540);
define ('U_MALFORMED_VARIABLE_DEFINITION', 65541);
define ('U_MALFORMED_VARIABLE_REFERENCE', 65542);
define ('U_MISMATCHED_SEGMENT_DELIMITERS', 65543);
define ('U_MISPLACED_ANCHOR_START', 65544);
define ('U_MISPLACED_CURSOR_OFFSET', 65545);
define ('U_MISPLACED_QUANTIFIER', 65546);
define ('U_MISSING_OPERATOR', 65547);
define ('U_MISSING_SEGMENT_CLOSE', 65548);
define ('U_MULTIPLE_ANTE_CONTEXTS', 65549);
define ('U_MULTIPLE_CURSORS', 65550);
define ('U_MULTIPLE_POST_CONTEXTS', 65551);
define ('U_TRAILING_BACKSLASH', 65552);
define ('U_UNDEFINED_SEGMENT_REFERENCE', 65553);
define ('U_UNDEFINED_VARIABLE', 65554);
define ('U_UNQUOTED_SPECIAL', 65555);
define ('U_UNTERMINATED_QUOTE', 65556);
define ('U_RULE_MASK_ERROR', 65557);
define ('U_MISPLACED_COMPOUND_FILTER', 65558);
define ('U_MULTIPLE_COMPOUND_FILTERS', 65559);
define ('U_INVALID_RBT_SYNTAX', 65560);
define ('U_INVALID_PROPERTY_PATTERN', 65561);
define ('U_MALFORMED_PRAGMA', 65562);
define ('U_UNCLOSED_SEGMENT', 65563);
define ('U_ILLEGAL_CHAR_IN_SEGMENT', 65564);
define ('U_VARIABLE_RANGE_EXHAUSTED', 65565);
define ('U_VARIABLE_RANGE_OVERLAP', 65566);
define ('U_ILLEGAL_CHARACTER', 65567);
define ('U_INTERNAL_TRANSLITERATOR_ERROR', 65568);
define ('U_INVALID_ID', 65569);
define ('U_INVALID_FUNCTION', 65570);
define ('U_PARSE_ERROR_LIMIT', 65571);
define ('U_UNEXPECTED_TOKEN', 65792);
define ('U_FMT_PARSE_ERROR_START', 65792);
define ('U_MULTIPLE_DECIMAL_SEPARATORS', 65793);
define ('U_MULTIPLE_DECIMAL_SEPERATORS', 65793);
define ('U_MULTIPLE_EXPONENTIAL_SYMBOLS', 65794);
define ('U_MALFORMED_EXPONENTIAL_PATTERN', 65795);
define ('U_MULTIPLE_PERCENT_SYMBOLS', 65796);
define ('U_MULTIPLE_PERMILL_SYMBOLS', 65797);
define ('U_MULTIPLE_PAD_SPECIFIERS', 65798);
define ('U_PATTERN_SYNTAX_ERROR', 65799);
define ('U_ILLEGAL_PAD_POSITION', 65800);
define ('U_UNMATCHED_BRACES', 65801);
define ('U_UNSUPPORTED_PROPERTY', 65802);
define ('U_UNSUPPORTED_ATTRIBUTE', 65803);
define ('U_FMT_PARSE_ERROR_LIMIT', 65810);
define ('U_BRK_INTERNAL_ERROR', 66048);
define ('U_BRK_ERROR_START', 66048);
define ('U_BRK_HEX_DIGITS_EXPECTED', 66049);
define ('U_BRK_SEMICOLON_EXPECTED', 66050);
define ('U_BRK_RULE_SYNTAX', 66051);
define ('U_BRK_UNCLOSED_SET', 66052);
define ('U_BRK_ASSIGN_ERROR', 66053);
define ('U_BRK_VARIABLE_REDFINITION', 66054);
define ('U_BRK_MISMATCHED_PAREN', 66055);
define ('U_BRK_NEW_LINE_IN_QUOTED_STRING', 66056);
define ('U_BRK_UNDEFINED_VARIABLE', 66057);
define ('U_BRK_INIT_ERROR', 66058);
define ('U_BRK_RULE_EMPTY_SET', 66059);
define ('U_BRK_UNRECOGNIZED_OPTION', 66060);
define ('U_BRK_MALFORMED_RULE_TAG', 66061);
define ('U_BRK_ERROR_LIMIT', 66062);
define ('U_REGEX_INTERNAL_ERROR', 66304);
define ('U_REGEX_ERROR_START', 66304);
define ('U_REGEX_RULE_SYNTAX', 66305);
define ('U_REGEX_INVALID_STATE', 66306);
define ('U_REGEX_BAD_ESCAPE_SEQUENCE', 66307);
define ('U_REGEX_PROPERTY_SYNTAX', 66308);
define ('U_REGEX_UNIMPLEMENTED', 66309);
define ('U_REGEX_MISMATCHED_PAREN', 66310);
define ('U_REGEX_NUMBER_TOO_BIG', 66311);
define ('U_REGEX_BAD_INTERVAL', 66312);
define ('U_REGEX_MAX_LT_MIN', 66313);
define ('U_REGEX_INVALID_BACK_REF', 66314);
define ('U_REGEX_INVALID_FLAG', 66315);
define ('U_REGEX_LOOK_BEHIND_LIMIT', 66316);
define ('U_REGEX_SET_CONTAINS_STRING', 66317);
define ('U_REGEX_ERROR_LIMIT', 66325);
define ('U_IDNA_PROHIBITED_ERROR', 66560);
define ('U_IDNA_ERROR_START', 66560);
define ('U_IDNA_UNASSIGNED_ERROR', 66561);
define ('U_IDNA_CHECK_BIDI_ERROR', 66562);
define ('U_IDNA_STD3_ASCII_RULES_ERROR', 66563);
define ('U_IDNA_ACE_PREFIX_ERROR', 66564);
define ('U_IDNA_VERIFICATION_ERROR', 66565);
define ('U_IDNA_LABEL_TOO_LONG_ERROR', 66566);
define ('U_IDNA_ZERO_LENGTH_LABEL_ERROR', 66567);
define ('U_IDNA_DOMAIN_NAME_TOO_LONG_ERROR', 66568);
define ('U_IDNA_ERROR_LIMIT', 66569);
define ('U_STRINGPREP_PROHIBITED_ERROR', 66560);
define ('U_STRINGPREP_UNASSIGNED_ERROR', 66561);
define ('U_STRINGPREP_CHECK_BIDI_ERROR', 66562);
define ('U_ERROR_LIMIT', 66818);
define ('IDNA_DEFAULT', 0);
define ('IDNA_ALLOW_UNASSIGNED', 1);
define ('IDNA_USE_STD3_RULES', 2);
define ('IDNA_CHECK_BIDI', 4);
define ('IDNA_CHECK_CONTEXTJ', 8);
define ('IDNA_NONTRANSITIONAL_TO_ASCII', 16);
define ('IDNA_NONTRANSITIONAL_TO_UNICODE', 32);
define ('INTL_IDNA_VARIANT_2003', 0);
define ('INTL_IDNA_VARIANT_UTS46', 1);
define ('IDNA_ERROR_EMPTY_LABEL', 1);
define ('IDNA_ERROR_LABEL_TOO_LONG', 2);
define ('IDNA_ERROR_DOMAIN_NAME_TOO_LONG', 4);
define ('IDNA_ERROR_LEADING_HYPHEN', 8);
define ('IDNA_ERROR_TRAILING_HYPHEN', 16);
define ('IDNA_ERROR_HYPHEN_3_4', 32);
define ('IDNA_ERROR_LEADING_COMBINING_MARK', 64);
define ('IDNA_ERROR_DISALLOWED', 128);
define ('IDNA_ERROR_PUNYCODE', 256);
define ('IDNA_ERROR_LABEL_HAS_DOT', 512);
define ('IDNA_ERROR_INVALID_ACE_LABEL', 1024);
define ('IDNA_ERROR_BIDI', 2048);
define ('IDNA_ERROR_CONTEXTJ', 4096);

// End of intl v.1.1.0
