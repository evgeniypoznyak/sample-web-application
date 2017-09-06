<?php
/**
 * Created by IntelliJ IDEA.
 * User: Evgeniy
 * Date: 9/5/2017
 * Time: 11:36 PM
 */


define('DB_NAME', 'sample_db');

define('DB_USER', 'homestead');

define('DB_PASSWORD', 'secret');

define('DB_HOST', 'localhost');

$stringPass = sha1( md5('test'));

define('TRUE_PASS', $stringPass);

