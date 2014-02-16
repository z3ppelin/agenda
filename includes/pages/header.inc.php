<?php
/**
 * Header part of all application 's pages.
 * 
 * @author  Bogdan Constantinescu <bog_con@yahoo.com>
 * @license The BSD 3-Clause License. See LICENSE.txt
 */
?>
<?php if (!defined('APP_INCLUDE_ME')) die; // this file cannot be accessed directly ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Agenda</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <?php if (defined('APP_BASE_URL')): ?>
        <base href="<?php echo rtrim(APP_BASE_URL, '/') . '/'; ?>" />
        <?php endif; ?>
        <link href="css/main.css" media="screen" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h1><a href=""><img src="images/contacts-logo.png" alt="" /></a> Contacts Agenda</h1>
            </div>
            <div class="content">