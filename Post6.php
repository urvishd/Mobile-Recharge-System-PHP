<?php
    session_start();
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    $user_mobile=$_SESSION['user_mobile'];
    try {
         $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=urvish_php','root','');
        echo "Connection is established...<br/>";
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql4="insert into complaints(User_mobile,Name,Email,subject,Description) values ('$user_mobile','$name','$email','$subject','$message')";
        $query=$dbhandler->query($sql4);
        $_SESSION['ticket_num']='Your Response has been noted.You will receive mail shortly with ticket number and our representative will contact you within 48 hours.Thank you:)';
        
        $sql19=$dbhandler->query("select id from complaints where User_mobile='$user_mobile' and Description='$message'");
        $ticket_id1='1';
        while($r=$sql19->fetch())
             {
                 $ticket_id=$r['id'];
                 if($ticket_id>$ticket_id1)
                 {
                     $ticket_id1=$ticket_id;
                 }
             }
             
            
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
            $subject = "Ticket is generated for your account";
            
            $mail->Subject = $subject;
            $mail->Body ='Thanks for contacting us. Your Ticket number is '.$ticket_id1.'. Your query will be resolved in 48 hours.';
            $mail->AddAddress($email);
            $q = $mail->Send();
        
        header("Location:help.php");
        exit();
} catch (Exception $ex) {
         echo $ex->getMessage();
}
?>
