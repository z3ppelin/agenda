<?php
/**
 * Connection to mysql db.
 * 
 * @author  Bogdan Constantinescu <bog_con@yahoo.com>
 * @license The BSD 3-Clause License. See LICENSE.txt
 */

if (defined('MYSQL_CONNECT_STRING')
    && defined('MYSQL_CONNECT_USERNAME')
    && defined('MYSQL_CONNECT_PASSWORD')) {
    $db = new PDO(
        MYSQL_CONNECT_STRING,
        MYSQL_CONNECT_USERNAME,
        MYSQL_CONNECT_PASSWORD,
        array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        )
    );
}
