<?php
/**
 * Get contact by phone function.
 * 
 * @author  Bogdan Constantinescu <bog_con@yahoo.com>
 * @license The BSD 3-Clause License. See LICENSE.txt
 */

/**
 * Retrieve contact from DB by phone.
 * 
 * @param  string   $phone      The phone of the contact to retrieve.
 * @return array                An array with contacts taken from DB; can be empty if no contact was found.
 */
function getContactByPhone($phone) {
    global $db;
    $returnValue = array();
    $result = $db->query(
            "SELECT contacts.*, regions.code, regions.name
             FROM contacts
             LEFT JOIN regions ON contacts.region_id = regions.id
             WHERE contacts.phone LIKE ('" . $phone . "%')"); // parameter was intentionally not sanitized
    if (false !== $result) {
        $returnValue = $result->fetchAll();
    }
    return $returnValue;
}