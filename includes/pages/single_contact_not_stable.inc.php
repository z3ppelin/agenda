<?php
/**
 * Single contact detail unstable page.
 * 
 * @author  Bogdan Constantinescu <bog_con@yahoo.com>
 * @license The BSD 3-Clause License. See LICENSE.txt
 */
?>
<?php if (!defined('APP_INCLUDE_ME')) die; // this file cannot be accessed directly ?>
<?php
require_once 'header.inc.php';
if (isset($contact) && !empty($contact)):
    $image = strlen($contact['img_path']) ? $contact['img_path'] : 'uploads/photo_not_available.png';
?>
    <?php // added dynamic content  ?>
    <p style="text-align: center;">Today 's lucky number is <?php echo mt_rand(1, 100000); ?>. Current time is: <?php echo date('H:i:s'); ?>.</p>

    <h2><?php echo htmlspecialchars($contact['firstname']); ?> <?php echo htmlspecialchars($contact['lastname']); ?></h2>
    <br /><br />
    <div class="left"><img src="<?php echo $image; ?>" alt="" width="125" height="150"/></div>
    <div class="right">
        <table class="contact-details">
            <tbody>
                <tr>
                    <td><strong>Street: </strong></td>
                    <td>
                        <?php if (strlen($contact['street'])): ?>
                            <?php echo htmlspecialchars($contact['street']); ?>
                        <?php else: ?>
                            -
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <td><strong>Postal code: </strong></td>
                    <td>
                        <?php if (strlen($contact['postalcode'])): ?>
                            <?php echo htmlspecialchars($contact['postalcode']); ?>
                        <?php else: ?>
                            -
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <td><strong>City: </strong></td>
                    <td>
                        <?php if (strlen($contact['city'])): ?>
                            <?php echo htmlspecialchars($contact['city']); ?>
                        <?php else: ?>
                            -
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <td><strong>Region: </strong></td>
                    <td>
                        <?php if (strlen($contact['name'])): ?>
                            <?php echo htmlspecialchars($contact['name']); ?>
                            (<?php echo htmlspecialchars($contact['code']); ?>)
                        <?php else: ?>
                            -
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <td><strong>Phone: </strong></td>
                    <td>
                        <?php if (strlen($contact['phone'])): ?>
                            <?php echo htmlspecialchars($contact['phone']); ?>
                        <?php else: ?>
                            -
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <td><strong>E-mail: </strong></td>
                    <td>
                        <?php if (strlen($contact['email'])): ?>
                            <a href="mailto:<?php echo htmlspecialchars($contact['email']); ?>"><?php echo htmlspecialchars($contact['email']); ?></a>
                        <?php else: ?>
                            -
                        <?php endif; ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <br style="clear: both;" />
<?php else: ?>
    Contact not found.
<?php endif; ?>
<br /><br /><br />
<p class="back_link"><a href="">&lt;&lt; Go back</a></p>
<?php require_once 'footer.inc.php'; ?>
