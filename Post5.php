<?php
    session_start();
    if(!isset($_SESSION['Fname']))
    {
        $_SESSION['nouser']="Access Denied!!";
        header("Location:index.php");
    }
    if($_POST['otp_field']==$_SESSION['dotp'])
    {
        $dnum=$_SESSION['dnum'];
        $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=urvish_php','root','');
        $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $remaining= $_SESSION['dcard_balance']-$_SESSION['amount'];
        $sql6=$dbhandler->query("update debitcards set Balance='$remaining' where Number=$dnum");
        $_SESSION['pay_status']="Payment successfull!!";                                 
    }
 else {
     $_SESSION['pay_status']="Wrong OTP";
}
header("Location:FinalPage.php");
exit();
?>
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

