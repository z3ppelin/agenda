<?php
/**
 * Configuration file.
 * 
 * @author  Bogdan Constantinescu <bog_con@yahoo.com>
 * @license The BSD 3-Clause License. See LICENSE.txt
 */
if (!defined('APP_BASE_PATH')) {
    define('APP_BASE_PATH', realpath(dirname(__FILE__) . DIRECTORY_SEPARATOR)); // stage PHP is < 5.3 and __DIR__ does not exist, so do a little trick :)
}
set_include_path(get_include_path() . PATH_SEPARATOR . APP_BASE_PATH);

if (!defined('APP_BASE_URL')) {
    if (array_key_exists('HTTPS', $_SERVER) && $_SERVER['HTTPS'] == 'on') {
        define('APP_BASE_URL', 'https://www.agenda.dev/');
    } else {
        define('APP_BASE_URL', 'http://www.agenda.dev/');
    }
}
if (!defined('MYSQL_CONNECT_STRING')) {
    define('MYSQL_CONNECT_STRING', 'mysql:host=localhost;dbname=agenda');
}
if (!defined('MYSQL_CONNECT_USERNAME')) {
    define('MYSQL_CONNECT_USERNAME', 'root');
}
if (!defined('MYSQL_CONNECT_PASSWORD')) {
    define('MYSQL_CONNECT_PASSWORD', '');
}
if (!defined('ORACLE_CONNECT_STRING')) {
    define('ORACLE_CONNECT_STRING', 'oci:dbname=(DESCRIPTION =
    (ADDRESS_LIST =
      (ADDRESS = (PROTOCOL = TCP)(HOST = localhost)(PORT = 1521))
    )
    (CONNECT_DATA =
      (SERVICE_NAME = o11g)
    )
  )');
}
if (!defined('ORACLE_CONNECT_USERNAME')) {
    define('ORACLE_CONNECT_USERNAME', 'agenda');
}
if (!defined('ORACLE_CONNECT_PASSWORD')) {
    define('ORACLE_CONNECT_PASSWORD', 'faqfaq');
}

if (!defined('APP_INCLUDE_ME')) {
    define('APP_INCLUDE_ME', true);
}
