<?php
/**
 * Admin index page.
 * 
 * @author  Bogdan Constantinescu <bog_con@yahoo.com>
 * @license The BSD 3-Clause License. See LICENSE.txt
 */
?>
<?php
session_start();
require_once '../../includes/config.global.inc.php';
require_once '../../includes/config.local.inc.php';
require_once 'db/connect_oracle.inc.php';
if (!isset($_SESSION['logged_in']) || true != $_SESSION['logged_in'] || !isset($_SESSION['username'])) { // check if already logged in
    if (!headers_sent()) { // redirect to admin/index.php
        header('Location: login.php');
        exit();
    }
}
?>
<?php require_once 'pages/header.inc.php'; ?>
<a href="oracle/admin/logout.php" style="float: right">Log Out</a>
<br style="clear: right;" />
<h1>Admin Area</h1> <br /><br />
<p>You are now logged in as administrator. Too bad there not much you can do in here...</p>
<?php require_once 'pages/footer.inc.php'; ?>