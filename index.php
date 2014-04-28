<?php
/**
 * Index page. Display links to contacts stored in different dbms.
 * 
 * @author  Bogdan Constantinescu <bog_con@yahoo.com>
 * @license The BSD 3-Clause License. See LICENSE.txt
 */
?>
<?php
require_once 'includes/config.global.inc.php';
require_once 'includes/config.local.inc.php';
require_once 'func/get_all_contacts.inc.php';
?>
<?php require_once 'pages/header.inc.php'; ?>
<ul class="dbms">
    <li><a href="mysql/">MySQL</a></li>
    <li><a href="oracle/">Oracle</a></li>
</ul>
<?php require_once 'pages/footer.inc.php'; ?>