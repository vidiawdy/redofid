<html>
<head>
        <title>Loginc</title>
        <style type="text/css">
        table{
        position: absolute;
        height: 100px;
        top: 50%;
        left: 50%;
        margin: -100px 0 0 -150px;
        }
        </style>
    </head>  
    <body>
        <form method="post" action="<?php echo base_url();?>index.php/welcome/readc">
        <table>
        <tr>
        <td>Username</td>
        <td><input type="text" name="username"></td>
        </tr>
        <tr>
        <td>Password</td>
        <td><input type="password" name="password"></td>
        </tr>
        <tr>
        <td></td>
        <td><input type="submit" value="LOGIN"></td>
        </tr>
         <tr>
        <td><a href='<?php echo base_url("welcome/add_Data");?>'>buat akun</a></td>
        </tr>
        </table>
        </form>
    </body>
    </html>