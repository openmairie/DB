--TEST--
DB_driver::fetchmode object
--SKIPIF--
<?php chdir(dirname(__FILE__)); require_once 'skipif.inc'; ?>
--FILE--
<?php
require_once 'connect.inc';
require_once '../fetchmode_object.inc';
?>
--EXPECT--
--- fetch with param DB_FETCHMODE_OBJECT ---
stdClass -> a b c d
stdClass -> a b c d
--- fetch with default fetchmode DB_FETCHMODE_OBJECT ---
stdClass -> a b c d
stdClass -> a b c d
--- fetch with default fetchmode DB_FETCHMODE_OBJECT and class DB_Row ---
db_row -> a b c d
db_row -> a b c d
