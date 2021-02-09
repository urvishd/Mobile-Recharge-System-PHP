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
        $_SESSION['flag']='0';
        $_SESSION['signu']="";
        $_SESSION['sign_success'];
        unset($_SESSION['nouser']);
        $msg3="Re-entered Password not matching";
        $msg4="User alreay exists!!";
        $name1=$_POST['first_name'];
        $pass1=$_POST['password1'];
        $pass2=$_POST['password2'];
        $mobile=$_POST['phone']; 
        $mail=$_POST['email'];
        $gen=$_POST['gender'];
        if($pass1 != $pass2)
        {
            $_SESSION['signu']=$msg3;
            header("Location:SignUp.php");
        }
        try{
        $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=urvish_php','root','');
        echo "Connection is established...<br/>";
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql2=$dbhandler->query('select Mobile from customer');
        while($r=$sql2->fetch())
        {
              $mob=$r['Mobile'];
              echo $r['Mobile'], '<br/>';
              if($mob===$mobile)
              {
                  $_SESSION['signu']=$msg4;
                  $_SESSION['flag']='1';
                  header("Location:SignUp.php");
          
              }
        }
        if($_SESSION['flag'] === '0')
        {
            	$sql4="insert into customer(Name,Mobile,Email,Password,Gender) values ('$name1','$mobile','$mail','$pass1','$gen')";
                $query=$dbhandler->query($sql4);
                $_SESSION['sign_success']="You have successfully signed up:)";
                header("Location:index.php");
        }
        }
 catch (Exception $ex) {
        echo $ex->getMessage();
 }
        ?>
    </body>
</html>
