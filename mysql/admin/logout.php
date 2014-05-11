<?php
/**
 * Logout page.
 * Distroy 's admin session.
 * 
 * @author  Bogdan Constantinescu <bog_con@yahoo.com>
 * @license The BSD 3-Clause License. See LICENSE.txt
 */
?>
<?php
session_start();
unset($_SESSION['logged_in']);
unset($_SESSION['username']);
header('Location: login.php');