<?php

// Start of discount v.1.0.0

class MarkdownDocument  {
	const NOLINKS = 1;
	const NOIMAGE = 2;
	const NOPANTS = 4;
	const NOHTML = 8;
	const STRICT = 16;
	const TAGTEXT = 32;
	const NO_EXT = 64;
	const CDATA = 128;
	const NOSUPERSCRIPT = 256;
	const NORELAXED = 512;
	const NOTABLES = 1024;
	const NOSTRIKETHROUGH = 2048;
	const TOC = 4096;
	const ONE_COMPAT = 8192;
	const AUTOLINK = 16384;
	const SAFELINK = 32768;
	const NOHEADER = 65536;
	const TABSTOP = 131072;
	const NODIVQUOTE = 262144;
	const NOALPHALIST = 524288;
	const NODLIST = 1048576;
	const EMBED = 35;
	const EXTRA_FOOTNOTE = 2097152;


	protected function __construct () {}

	/**
	 * @param markdown_stream
	 * @param flags[optional]
	 */
	public static function createFromStream ($markdown_stream, $flags = null) {}

	/**
	 * @param markdown_doc
	 * @param flags[optional]
	 */
	public static function createFromString ($markdown_doc, $flags = null) {}

	/**
	 * @param markdown_stream
	 * @param flags[optional]
	 */
	final protected function initFromStream ($markdown_stream, $flags = null) {}

	/**
	 * @param markdown_doc
	 * @param flags[optional]
	 */
	final protected function initFromString ($markdown_doc, $flags = null) {}

	/**
	 * @param flags[optional]
	 */
	public function compile ($flags = null) {}

	public function isCompiled () {}

	/**
	 * @param out_stream
	 * @param title[optional]
	 */
	public function dumpTree ($out_stream, $title = null) {}

	/**
	 * @param markdown_fragment
	 * @param flags[optional]
	 */
	public static function transformFragment ($markdown_fragment, $flags = null) {}

	/**
	 * @param markdown_fragment
	 * @param out_stream
	 * @param flags[optional]
	 */
	public static function writeFragment ($markdown_fragment, $out_stream, $flags = null) {}

	/**
	 * @param prefix
	 */
	public function setReferencePrefix ($prefix) {}

	public function getTitle () {}

	public function getAuthor () {}

	public function getDate () {}

	public function getHtml () {}

	/**
	 * @param markdown_outstream
	 */
	public function writeHtml ($markdown_outstream) {}

	/**
	 * @param markdown_outstream
	 */
	public function writeXhtmlPage ($markdown_outstream) {}

	public function getToc () {}

	public function getCss () {}

	/**
	 * @param markdown_outstream
	 */
	public function writeToc ($markdown_outstream) {}

	/**
	 * @param markdown_outstream
	 */
	public function writeCss ($markdown_outstream) {}

	/**
	 * @param callback
	 */
	public function setUrlCallback ($callback) {}

	/**
	 * @param callback
	 */
	public function setAttributesCallback ($callback) {}

}
// End of discount v.1.0.0
