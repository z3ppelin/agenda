<?php
/**
 * Displays contact 's details.
 * 
 * @author  Bogdan Constantinescu <bog_con@yahoo.com>
 * @license The BSD 3-Clause License. See LICENSE.txt
 */
?>
<?php
if (!isset($_REQUEST['phone'])) {
    header('HTTP/1.1 404 Not Found');
    echo '<h1>404 Not Found</h1>';
    exit();
}

require_once '../../includes/config.global.inc.php';
require_once '../../includes/config.local.inc.php';

$errOn = 1;
$pageStable = 1;
if (isset($_REQUEST['err']) && 'off' == $_REQUEST['err']) {
    $errOn = 0;
}
if (isset($_REQUEST['stable_page']) && 0 == $_REQUEST['stable_page']) {
    $pageStable = 0;
}

if ($errOn) {
    require_once 'display_errors_on.inc.php';
} else {
    require_once 'display_errors_off.inc.php';
}

require_once 'db/connect_oracle.inc.php';

require_once 'func/get_contact_by_phone_singlequote.inc.php';
$contact = getContactByPhone($_REQUEST['phone']);

if (!count($contact) && !headers_sent()) {
    header('Location: /');
    exit();
}

if ($pageStable) {
    require_once 'pages/single_contact_stable.inc.php';
} else {
    require_once 'pages/single_contact_not_stable.inc.php';
}
