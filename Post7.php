<?php
session_start();
$pass1=$_POST['pass1'];
$pass2=$_POST['pass2'];
$pass3=$_POST['pass3'];
if($pass2==$pass3)
{
    if($pass1==$_SESSION['passwd'])
    {
        $username=$_SESSION['user_mobile'];
        $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=urvish_php','root','');
        $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql21=$dbhandler->query("update customer set Password='$pass2' where Mobile=$username");
        $_SESSION['pass_reset']='Password changed successfully:)';
        header("Location:profile.php");
        exit();
    }
 else {
    $_SESSION['pass_reset']='Please enter right Password';
    header("Location:profile.php");
    exit();
    }
}
 else {
    $_SESSION['pass_reset']='Re-entered password is not matching!!';
    header("Location:profile.php");
    exit();
}

?>

