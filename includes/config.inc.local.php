<?php
/**
 * Local configuration file; contains sensitive data, not versioned
 * 
 * @author  Bogdan Constantinescu <bog_con@yahoo.com>
 * @license The BSD 3-Clause License. See LICENSE.txt
 */
if (!defined('APP_BASE_URL')) {
    if (array_key_exists('HTTPS', $_SERVER) && $_SERVER['HTTPS'] == 'on') {
        define('APP_BASE_URL', 'https://'); // define HTTPS host
    } else {
        define('APP_BASE_URL', 'http://'); // define HTTP host
    }
}
if (!defined('MYSQL_CONNECT_STRING')) {
    define('MYSQL_CONNECT_STRING', ''); // define mysql connect string
}
if (!defined('MYSQL_CONNECT_USERNAME')) {
    define('MYSQL_CONNECT_USERNAME', ''); // define mysql user
}
if (!defined('MYSQL_CONNECT_PASSWORD')) {
    define('MYSQL_CONNECT_PASSWORD', ''); // define mysql password
}
if (!defined('ORACLE_CONNECT_STRING')) {
    define('ORACLE_CONNECT_STRING', ''); // define oracle connect string
}
if (!defined('ORACLE_CONNECT_USERNAME')) {
    define('ORACLE_CONNECT_USERNAME', ''); // define oracle username
}
if (!defined('ORACLE_CONNECT_PASSWORD')) {
    define('ORACLE_CONNECT_PASSWORD', ''); // define oracle password
}
