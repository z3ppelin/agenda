<?php
/**
 * Checks credentials in DB.
 * 
 * @author  Bogdan Constantinescu <bog_con@yahoo.com>
 * @license The BSD 3-Clause License. See LICENSE.txt
 */

/**
 * Checks if credentials exists in DB.
 * 
 * @param  string   $username      The admin 's username
 * @param  string   $pwd           The admin 's password.
 * @return boolean                 TRUE if login succeeded, FALSE otherwise
 */
function login($username, $pwd) {
    global $db;
    $result = $db->query(
            "SELECT 1
             FROM admin
             WHERE username='$username' AND password='$pwd'"
    );
    if (false !== $result) {
        $found = $result->fetch();
        if ($found) {
            return true;
        }
    }
    return false;
}
