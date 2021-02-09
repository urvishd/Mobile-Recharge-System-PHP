<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Summary</title>
    </head>
    
        <style>
            .success-page{
            max-width:300px;
            display:block;
            margin: 0 auto;
            text-align: center;
                position: relative;
              top: 50%;
              transform: perspective(1px) translateY(50%)
          }
          .success-page img{
            max-width:62px;
            display: block;
            margin: 0 auto;
          }

          .btn-view-orders{
            display: block;
            border:1px solid #47c7c5;
            width:270px;
            margin: 0 auto;
            margin-top: 45px;
            padding: 10px;
            color:#fff;
            background-color:#47c7c5;
            text-decoration: none;
            margin-bottom: 20px;
          }
          h2{
            color:#47c7c5;
            margin-top: 25px;

            }
          a{
            text-decoration: none;
            
}

    
    
    .navbar {
          overflow: hidden;
          background-color: #0062cc;
        }

        .navbar a {
          float: left;
          font-size: 16px;
          color: white;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
        }
         .navbar a:hover, .dropdown:hover .dropbtn {
          background-color: cornflowerblue;
        }
        </style>
        <body>
             <div class="navbar">
            
            <a href="home.php">Home</a>
            <a href="logout.php" onclick="alert("You will be logged out!!")">Log Out</a>
        </div>
        <?php
            session_start();
            $username=$_SESSION['user_mobile'];
            $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=urvish_php','root','');
            $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $sql20=$dbhandler->query("select Email from customer where Mobile='$username' ");
            while($r=$sql20->fetch())
            {
                
                $email1=$r['Email'];
               
            }
            
            
            use PHPMailer\PHPMailer\PHPMailer;
            
            require 'PHPMailer-master/src/Exception.php';
            require 'PHPMailer-master/src/PHPMailer.php';
            require 'PHPMailer-master/src/SMTP.php';
            
            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->isHTML();
            $mail->SMTPDebug = 0;
            $mail->Mailer = 'smtp';
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'tls';
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = 587;
            $mail->Username = 'freerechargepaymentsltd@gmail.com';
            $mail->Password = 'urvishdevani';
            $mail->SetFrom('freerechargepaymentsltd@gmail.com','noreply@gmail.com');
            $subject = "Recharge successful!";
            
            
            if(!isset($_SESSION['Fname']))
            {
                 $_SESSION['nouser']="Access Denied!!";
                 header("Location:index.php");
            }
            if(isset($_SESSION['done_pay']))
            {
                header("Location:home1.php");
                exit();
            }
             
            unset($_SESSION['net']);
            unset($_SESSION['dcard']);
            $trns1_id=$_SESSION['t_id'];
            if($_SESSION['pay_status']==='Payment successfull!!')
            {
                $_SESSION['transaction']="done";
                $_SESSION['done_pay']='success';
                $sql10=$dbhandler->query("update transactions set Status='Successfull' where Transaction_ID=$trns1_id");
                
               $mail->Subject = $subject;
            $mail->Body ='Thanks for Transacting with us. Recharge successful for '.$_SESSION['operator'].' Mobile '.$_SESSION['Mobile_number'].' of ₹'.$_SESSION['cash'].'. You will receive benifits within 5 Minutes.';
            $mail->AddAddress($email1);
            $q = $mail->Send();
            
            
              
                echo '<div class="success-page">';
                echo '<img  src="images/green-check-mark-symbol_fa80759741.jpg" class="center" alt="" />';
                echo '<h2>Recharge Successful for Mobile ' .$_SESSION['Mobile_number'] ;
                echo ' of ₹'.$_SESSION['amount'];
                echo '</h2>';
                
                echo '<p>Your transaction id is '.$_SESSION['t_id'];
                echo '.You will receive benifits within 5 Minutes';
                echo '<a href="home1.php" class="btn-view-orders">Recharge another number</a>';
            }
            else 
            {
                $_SESSION['retry_pay']='yes';
                echo '<div class="success-page">';
                echo '<img  src="images/323e3b47f07fa1fb0a4b2ecb03b2c965.png" class="center" alt="" />';
                echo '<h2>Recharge Failed due to ' .$_SESSION['pay_status'] ;
                echo '</h2>';
                echo '<p>Your transaction id is '.$_SESSION['t_id'];
                echo '.Please try again:(</p>';
                echo '<a href="Payment.php" class="btn-view-orders">Retry payment</a>';
                echo '<a href="home1.php" class="btn-view-orders">Recharge another number</a>';
            }
            
        ?>
        
        </div>
</div>
    </body>
</html>
