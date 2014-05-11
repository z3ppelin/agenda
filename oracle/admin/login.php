<?php
/**
 * Login page. Displays login form/performs login. 
 * With this script Blind Sql Injection with OR clause can be tested.
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
require_once 'func/login.inc.php';
//require_once 'display_errors_off.inc.php';

$error = '';
if (isset($_REQUEST['username']) && isset($_REQUEST['password'])) { // check if data was sent in order to log in
    if (login($_REQUEST['username'], $_REQUEST['password'])) {
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $_REQUEST['username'];
        if (!headers_sent()) {
            header('Location: index.php');
            exit();
        }
    } else {
        $error = 'Bad username or password!';
    }
}
?>
<?php require_once 'pages/header.inc.php'; ?>
<h1>Login into administration area</h1> <br /><br />
<?php if (strlen($error)) : ?>
<p class="error"><?php echo $error; ?></p> <br /><br />
<?php endif; ?>
<form action="oracle/admin/login.php" method="GET" class="login">
    <table class="contacts">
        <tbody>
            <tr>
                <td>Username: </td>
                <td><input type="text" name="username" value="<?php echo isset($_REQUEST['username']) ? htmlspecialchars($_REQUEST['username']) : ''; ?>"/></td>
            </tr>
            <tr>
                <td>Password: </td>
                <?php /* made password text input so it can be visible what user enters */ ?>
                <td><input type="text" name="password" value="<?php echo isset($_REQUEST['password']) ? htmlspecialchars($_REQUEST['password']) : ''; ?>"/></td>
            </tr>
            <tr>
                <td colspan="2" align="right">
                    <input type="submit" value="Log In" />
                </td>
            </tr>
        </tbody>
    </table>
</form>
<?php require_once 'pages/footer.inc.php'; ?>