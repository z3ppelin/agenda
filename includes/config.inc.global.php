<?php
/**
 * Global configuration file.
 * 
 * @author  Bogdan Constantinescu <bog_con@yahoo.com>
 * @license The BSD 3-Clause License. See LICENSE.txt
 */
if (!defined('APP_BASE_PATH')) {
    define('APP_BASE_PATH', realpath(dirname(__FILE__) . DIRECTORY_SEPARATOR)); // stage PHP is < 5.3 and __DIR__ does not exist, so do a little trick :)
}
set_include_path(get_include_path() . PATH_SEPARATOR . APP_BASE_PATH);

if (!defined('APP_INCLUDE_ME')) {
    define('APP_INCLUDE_ME', 1);
}
