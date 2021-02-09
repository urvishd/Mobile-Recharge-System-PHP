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
            use PHPMailer\PHPMailer\PHPMailer;
            use PHPMailer\PHPMailer\Exception;
            require 'PHPMailer-master/src/Exception.php';
            require 'PHPMailer-master/src/PHPMailer.php';
            require 'PHPMailer-master/src/SMTP.php';
            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->isHTML();
            $mail->SMTPDebug = 1;
            $mail->Mailer = 'smtp';
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'tls';
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = 587;
            $mail->Username = 'freerechargepaymentsltd@gmail.com';
            $mail->Password = 'urvishdevani';
            $mail->SetFrom('freerechargepaymentsltd@gmail.com','noreply@gmail.com');
            $subject = "OTP for Debit card Payment";
            
            
            $_SESSION['pay_status']="invalid credentials";
            if(isset($_SESSION['dcard']))
            {
                $meth='Debit Card';
                $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=urvish_php','root','');
                $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $sql5=$dbhandler->query('select Number,MM,YY,CVV,Balance,email from debitcards');
                 while($r=$sql5->fetch())
                 {
                     $dnum=$r['Number'];
                     $mail_id=$r['email'];
                     echo $dnum;
                     $mm=$r['MM'];
                     $yy=$r['YY'];
                     $cvv=$r['CVV'];
                     $bal=$r['Balance'];
                     
                     $trns_id=$_SESSION['t_id'];
                     $sql10=$dbhandler->query("update transactions set Payment_Method='$meth' where Transaction_ID=$trns_id");
                     if($dnum===$_POST['cardNumber'])
                     {                         
                         if($mm===$_POST['expiryMonth'])
                         {
                             
                             if($yy===$_POST['expiryYear'])
                             {
                                 
                                 if($cvv===$_POST['cvCode'])
                                 {
                                     $_SESSION['dcard_balance']=$bal;
                                     $_SESSION['dnum']=$dnum;
                                     $_SESSION['email']=$mail_id;
                                     
                                     $email=$_SESSION['email'];
                                     
                                     
                                     if($_SESSION['amount']<=$bal)
                                     {
                                         $_SESSION['dotp']= rand(99999, 1000000);
                                         /*$mail->Subject = "OTP";
                                         $mail->Body = $_SESSION['dotp'];
    
                                        $email = $_SESSION['email'];
                                        $mail->AddAddress($email);
                                        $q = $mail->Send();
                                        header("location:Debit_OTP.php?che=email");*/
                                         
                                        /*$to_email = 'devaniurvish881@gmail.com';
                                        $subject = 'OTP for Debit Card Payment';
                                        $message = 'OTP for Payment is'.$_SESSION['dotp'];
                                        $headers = 'From: noreply@gmail.com';
                                        mail($to_email,$subject,$message,$headers);*/
                                          $mail->Subject = $subject;
                                          $mail->Body ='OTP for Payment is '.$_SESSION['dotp'];
                                            $mail->AddAddress($email);
                                            $q = $mail->Send(); 
                                        header("Location:Debit_OTP.php");
                                        exit();
                                        
                                         
                                         
                                     }
                                     else
                                     {
                                            $_SESSION['pay_status']="Insufficient Balance";
                                     }
                                 }
                         }}
                     }
                 }
                       
            }
            elseif (isset($_SESSION['net'])) 
            {
                $meth2='Net Banking';
                $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=urvish_php','root','');
                $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                
                $sql7=$dbhandler->query('select Username,Password,Balance,Bank from netbanking');
                while($r=$sql7->fetch())
                {
                 $uname=$r['Username'];
                 $pass=$r['Password'];
                 $bal1=$r['Balance'];
                 $bank=$r['Bank'];
                 $trns_id2=$_SESSION['t_id'];
                 $sql12=$dbhandler->query("update transactions set Payment_Method='$meth2' where Transaction_ID=$trns_id2");
                 if($uname===$_POST['username'])
                 {
                     if($pass===$_POST['pass'])
                     {
                        if($bank===$_POST['banks'])
                        {
                            if($_SESSION['amount']<=$bal1)
                            {
                               
                                $remaining1=$bal1-$_SESSION['amount'];
                                $sql8=$dbhandler->query("update netbanking set Balance='$remaining1' where Username='$uname'");       
                                $_SESSION['pay_status']="Payment successfull!!"; 
                                header("Location:FinalPage.php");
                            }
                            else 
                            {
                                $_SESSION['pay_status']="Insufficient Balance";
                            }
                        }
                     }
                 }
                     
                 }
            }
            
            header("Location:FinalPage.php");
        ?>
    </body>
</html>
