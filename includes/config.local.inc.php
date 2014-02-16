<?php
/**
* Local configuration file; contains sensitive data, not versioned
*
* @author Bogdan Constantinescu <bog_con@yahoo.com>
* @license The BSD 3-Clause License. See LICENSE.txt
*/
if (!defined('APP_BASE_URL')) {
    if (array_key_exists('HTTPS', $_SERVER) && $_SERVER['HTTPS'] == 'on') {
        define('APP_BASE_URL', 'https://'); // put HTTPS url here, Ex: https://www.agenda.dev
    } else {
        define('APP_BASE_URL', 'http://'); // put HTTP url here, Ex: http://www.agenda.dev
    }
}
if (!defined('MYSQL_CONNECT_STRING')) {
    define('MYSQL_CONNECT_STRING', ''); // put mysql connect string here, Ex: mysql:host=localhost;dbname=agenda
}
if (!defined('MYSQL_CONNECT_USERNAME')) {
    define('MYSQL_CONNECT_USERNAME', ''); // put mysql user here, Ex: root
}
if (!defined('MYSQL_CONNECT_PASSWORD')) {
    define('MYSQL_CONNECT_PASSWORD', ''); // put mysql password here, Ex: pass
}
if (!defined('ORACLE_CONNECT_STRING')) {
    define('ORACLE_CONNECT_STRING', ''); // put oracle connect string here Ex: oci:dbname=(DESCRIPTION =
                                         // (ADDRESS_LIST =
                                         //         (ADDRESS = (PROTOCOL = TCP)(HOST = localhost)(PORT = 1521))
                                         // )
                                         // (CONNECT_DATA =
                                         //        (SERVICE_NAME = o11g)
                                         // )
                                         // )
}
if (!defined('ORACLE_CONNECT_USERNAME')) {
    define('ORACLE_CONNECT_USERNAME', ''); // put oracle user here, Ex: agenda
}
if (!defined('ORACLE_CONNECT_PASSWORD')) {
    define('ORACLE_CONNECT_PASSWORD', ''); // put oracle password here, Ex: pass
}
