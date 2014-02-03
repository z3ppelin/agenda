<?php
/**
 * Get contact by id function.
 * 
 * @author  Bogdan Constantinescu <bog_con@yahoo.com>
 * @license The BSD 3-Clause License. See LICENSE.txt
 */

/**
 * Retrieve contact from DB by id.
 * @param  int      $id     The id of the contact to retrieve.
 * @return array            An array with contacts; can be empty if no contact was found.
 */
function getAllContacts() {
    global $db;
    $returnValue = array();
    $result = $db->query("SELECT * FROM contacts");
    if (false !== $result) {
        $returnValue = $result->fetchAll();
    }
    return $returnValue;
}
