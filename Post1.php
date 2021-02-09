<?php

    session_start();
    $username=$_POST['username'];
    $password=$_POST['password'];
    unset($_SESSION['invalid_phone']);
    unset($_SESSION['ticket_num']);
    unset($_SESSION["signu"]);
    $_SESSION['user_mobile']=$username;
    $_SESSION['passwd']=$password;
    $tname=5;
    $msg1="Invalid Username or Password";
    $msg5="User does not Exist";
    try
    {
        $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=urvish_php','root','');
        echo "Connection is established...<br/>";
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql1=$dbhandler->query('select Mobile,Password,Name from customer');
        while($r=$sql1->fetch())
        {
              $mob=$r['Mobile'];
              $pass=$r['Password'];
              $mailid=$r['Email'];
              echo $r['Mobile'], '<br/>';
              echo $r['Name'], '<br/>';
              if($mob===$username)
              {
                  $tname=2;
                  if($pass===$password)
                  {
                      $_SESSION['user_mailid']=$mailid;
                      $_SESSION['Fname']=$r['Name'];
                      header("Location:home.php");
                      exit();
                  }
                  else
                  {
                      $_SESSION['nouser']=$msg1;
                      header("Location:index.php");
                      exit();
                  }
                  break;
              }
            else 
            {
                  continue;
            }
           
        }
         
        
    } catch (Exception $ex) {
        echo $e->getMessage();
        
    }
    if($tname==5)
    {
        $_SESSION['nouser']=$msg5;
        header("Location:index.php");
        exit();
    }
    

 ?>

