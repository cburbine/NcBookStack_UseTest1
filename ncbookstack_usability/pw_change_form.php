<!DOCTYPE html>
<html>
    <head>
        <?php
        include 'connect_test.php'; //connect the connection page

        if (empty($_SESSION)) { // if the session not yet started
            session_name('newLogin');
            session_set_cookie_params(2 * 7 * 24 * 60 * 60);
            session_start();
        }

        if (!isset($_SESSION['username'])) { //if not yet logged in
            header("Location: login.php"); // send to login page
            exit;
        }
        ?>
        <meta charset="UTF-8">
        <title>NC Bookstack - A used book store for UML students</title>

        <link rel="stylesheet" type="text/css" href="css/mainCSS.css">
    </head>
    <body>
        <form action="change_pswrd_v2.php" method="post">
            <table>
                <tr>
                    <td>
                        Enter old password:
                    </td>
                    <td>
                        <input type="password" name="old_password" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Enter new password:
                    </td>
                    <td>
                        <input type="password" name="new_password" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Re-enter new password:
                    </td>
                    <td>
                        <input type="password" name="re_new_password" />
                    </td>
                </tr>
            </table>
            <input type = "submit" name="submit" value="Change Password" />
            <a href="http://weblab.cs.uml.edu/~cburbine/session_test/ncbookstack_usability/home.php">
                <input type="button" value="Cancel" />
            </a>
        </form>
    </body>
</html>
