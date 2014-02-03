<?php
/**
 * Connection to oracle db.
 * 
 * @author  Bogdan Constantinescu <bog_con@yahoo.com>
 * @license The BSD 3-Clause License. See LICENSE.txt
 */

if (defined('ORACLE_CONNECT_STRING')
    && defined('ORACLE_CONNECT_USERNAME')
    && defined('ORACLE_CONNECT_PASSWORD')) {
    $db = new PDO(
        ORACLE_CONNECT_STRING,
        ORACLE_CONNECT_USERNAME,
        ORACLE_CONNECT_PASSWORD,
        array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_CASE => PDO::CASE_LOWER,
        )
    );
}
