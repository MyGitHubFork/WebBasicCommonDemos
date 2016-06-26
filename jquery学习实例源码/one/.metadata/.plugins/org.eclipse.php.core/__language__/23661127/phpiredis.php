<?php

// Start of phpiredis v.1.0

function phpiredis_connect () {}

function phpiredis_pconnect () {}

function phpiredis_disconnect () {}

function phpiredis_command () {}

function phpiredis_command_bs () {}

function phpiredis_multi_command () {}

function phpiredis_multi_command_bs () {}

function phpiredis_format_command () {}

function phpiredis_reader_create () {}

function phpiredis_reader_reset () {}

function phpiredis_reader_feed () {}

function phpiredis_reader_get_state () {}

function phpiredis_reader_get_error () {}

function phpiredis_reader_get_reply () {}

function phpiredis_reader_destroy () {}

function phpiredis_reader_set_error_handler () {}

function phpiredis_reader_set_status_handler () {}

define ('PHPIREDIS_READER_STATE_INCOMPLETE', 2);
define ('PHPIREDIS_READER_STATE_COMPLETE', 1);
define ('PHPIREDIS_READER_STATE_ERROR', 3);
define ('PHPIREDIS_REPLY_STRING', 1);
define ('PHPIREDIS_REPLY_ARRAY', 2);
define ('PHPIREDIS_REPLY_INTEGER', 3);
define ('PHPIREDIS_REPLY_NIL', 4);
define ('PHPIREDIS_REPLY_STATUS', 5);
define ('PHPIREDIS_REPLY_ERROR', 6);

// End of phpiredis v.1.0
