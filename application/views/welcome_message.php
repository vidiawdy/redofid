<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <body>
	<form action= ''; method="POST">
        <table>
            <tr>
                <td>
                    username:
                </td>
                <td>
                    <input type="text" name="username">
                </td>
            </tr>
            <tr>
                <td>password: </td>
                <td>
                    <input type="text" name="password">
                </td>
            </tr>
            <tr>
                <td><button type="submit">submit</button></td>
            </tr>
        </table>
    </form>
    
        /*if (isset($_POST['submit'])) {
            $this->load->controllers->('Welcome2');
        }*/
</body>
</html>