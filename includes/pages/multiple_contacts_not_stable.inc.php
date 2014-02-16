<?php
/**
 * Multiple contacts list stable page.
 * 
 * @author  Bogdan Constantinescu <bog_con@yahoo.com>
 * @license The BSD 3-Clause License. See LICENSE.txt
 */
?>
<?php if (!defined('APP_INCLUDE_ME')) die; // this file cannot be accessed directly ?>
<?php
require_once 'header.inc.php';
if (isset($contacts) && count($contacts)): 
?>
<p>Found <?php echo count($contacts); ?> records.</p>
<br />
<?php // added dynamic content  ?>
<p style="text-align: center;">Today 's lucky number is <?php echo mt_rand(1, 100000); ?>. Current time is: <?php echo date('H:i:s'); ?>.</p>
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
<?php else: ?>
No contacts found.
<?php
endif; 
require_once 'footer.inc.php';
?>

