<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            session_start();
            if(isset($_SESSION['Fname']))
            {
                unset($_SESSION['nouser']);
                unset($_SESSION['Fname']);
                unset($_SESSION['pass_reset']);
                unset($_SESSION['retry_pay']);
                $_SESSION['sign_success']="You are successfully logged out!!";
                header("Location:index.php");
                exit();
            }
        ?>
    </body>
</html>
