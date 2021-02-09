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
            $pay_method=$_POST['pay'];
            if($pay_method==='cards')
            {
                header("Location:DCard.php");
            }
            if($pay_method==='netbanking')
            {
                header("Location:NetBanking.php");
            }
        ?>
    </body>
</html>
