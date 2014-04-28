<?php
/**
 * Index page. Displays all contacts.
 * 
 * @author  Bogdan Constantinescu <bog_con@yahoo.com>
 * @license The BSD 3-Clause License. See LICENSE.txt
 */
?>
<?php
require_once '../includes/config.global.inc.php';
require_once 'config.local.inc.php';
require_once 'db/connect_mysql.inc.php';
require_once 'func/get_all_contacts.inc.php';
$contacts = getAllContacts();
$contactsCount = count($contacts);
?>
<?php require_once 'pages/header.inc.php'; ?>
<p>Found <?php echo $contactsCount; ?> records.</p>
<br />
<?php if ($contactsCount): ?>
    <table class="contacts">
        <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contacts as $k => $contact): ?>
                <tr>
                    <td class="center"><?php echo $k + 1; ?></td>
                    <td><?php echo htmlspecialchars($contact['firstname']); ?></td>
                    <td><?php echo htmlspecialchars($contact['lastname']); ?></td>
                    <td><?php echo htmlspecialchars($contact['phone']); ?></td>
                    <td class="center"><a href="mysql/numeric/contact.php?id=<?php echo intval($contact['id']); ?>">View</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>
<?php require_once 'pages/footer.inc.php'; ?>