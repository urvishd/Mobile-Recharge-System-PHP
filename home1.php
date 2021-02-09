<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
 <?php 
    session_start();
    if(isset($_SESSION['transaction']))
    {
        unset($_SESSION['transaction']);
    }
    if(isset($_SESSION['retry_pay']))
    {
        unset($_SESSION['retry_pay']);
    }
    if(isset($_SESSION['done_pay']))
    {
        unset($_SESSION['done_pay']);
    }
    if(isset($_SESSION['Fname']))
    {
        unset($_SESSION['nouser']);
    }
    else
    {
        $_SESSION['nouser']="You have to Login to access Recharge page";
        header("Location:index.php");
        
    }
?>
<html>
    <head>
        <title>Mobile Recharge</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    </head>
    <body>
        <style>
         input::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
                color: #868e96;
                opacity: 10; /* Firefox */
            }

.ms-input-placeholder { /* Internet Explorer 10-11 */
  color: #fa4251;
}

.ms-input-placeholder { /* Microsoft Edge */
  color: #fa4251;
}
            
            
            
            
            
            
            @import url('https://fonts.googleapis.com/css?family=Amatic+SC');
            
            
            
      
            
.button_container {
	position: absolute;
  left: 0;
  right: 0;
}

.description, .link {
  font-family: 'Amatic SC', cursive;
  text-align: center;
}

.description {
	font-size: 35px;
}

.btn {
  border: none;
  display: block;
  text-align: center;
  cursor: pointer;
  text-transform: uppercase;
  outline: none;
  overflow: hidden;
  position: relative;
  color: #fff;
  font-weight: 700;
  font-size: 15px;
  background-color: #222;
  padding: 10px 60px;
  margin: 0 auto;
  box-shadow: 0 5px 15px rgba(0,0,0,0.20);
}

.btn span {
  position: relative; 
  z-index: 1;
}

.btn:after {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  height: 490%;
  width: 140%;
  background: #78c7d2;
  -webkit-transition: all .5s ease-in-out;
  transition: all .5s ease-in-out;
  -webkit-transform: translateX(-98%) translateY(-25%) rotate(45deg);
  transform: translateX(-98%) translateY(-25%) rotate(45deg);
}

.btn:hover:after {
  -webkit-transform: translateX(-9%) translateY(-25%) rotate(45deg);
  transform: translateX(-9%) translateY(-25%) rotate(45deg);
}

.link {
  font-size: 20px;
  margin-top: 30px;
}

.link a {
  color: #000;
  font-size: 25px; 
}   
            
            



.text-line {
    background-color: transparent;
    color: #000;
    outline: none;
    outline-style: none;
    border-top: none;
    border-left: none;
    border-right: none;
    border-bottom: solid #28a745 1px;
    padding: 3px 10px;
}
            
            
            
            
        body {
            background-color: #ddd;
          font-family: Arial, Helvetica, sans-serif;
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

        .dropdown {
          float: left;
          overflow: hidden;
        }

        .dropdown .dropbtn {
          font-size: 16px;  
          border: none;
          outline: none;
          color: white;
          padding: 14px 16px;
          background-color: inherit;
          font-family: inherit;
          margin: 0;
        }

        .navbar a:hover, .dropdown:hover .dropbtn {
          background-color: cornflowerblue;
        }

        .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f9f9f9;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
        }

        .dropdown-content a {
          float: none;
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
          text-align: left;
        }

        .dropdown-content a:hover {
          background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
          display: block;
        }
        form { 
            height: 100px;
        margin: 0 auto; 
        margin-left: 40%;
        margin-top: 12%;
        }
     body {
        background-image: url('home/6.jfif');      
    }
        </style>
       
        
   
       <div class="navbar">
            
            <a href="home.php">Home</a>
            <a href="logout.php" onclick="alert("You will be logged out!!")">Log Out</a>
        </div>
        <br/>
        <br/>
        <div>
            
        </div>
        <div>
                    </div>
        
        <form action="Payment.php" method="POST">
            <table>
                <tr>
                    <td style="color: #fa4251">
                        Mobile No. :
                    </td>
                    <td style="color: #fa4251">
                        <input class="text-line" class="input100" type="text" name="mobile" value="" required maxlength="10" minlength="10" placeholder="Mobile No."/>
                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        <br/>
                    </td>
                </tr>
               
                <tr>
                    <td style="color: #fa4251">
                        Operator : 
                    </td>
                    <td style="color: #fa4251">
                        <select name="Operator">
                            <option>Idea</option>
                            <option>Vodafone</option>
                            <option>Jio</option>
                            <option>Airtel</option>
                            <option>BSNL</option>
                        </select>
                    </td>
                    
                    <td>
                         
                        <button class="btn" onclick="window.location.href='plan.php'" value="planb" name="planb"><span>Plans</span></button>
                        </div>
                    </td>
                
                   
                </tr>
                 <tr>
                    <td>
                        <br/>
                    </td>
                </tr>
                <tr>
                    <td style="color: #fa4251">
                        Amount :
                    </td>
                    <td style="color: #fa4251">
                        <input class="text-line" class="input100" type="text" name="amount" value="" required maxlength="5"  placeholder="Plan Amount"/>
                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        <br/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <br/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="button_container">
                            <button class="btn" onclick="Payment.php" name="planb"><span>Pay</span></button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                </tr>
                
            </table>
            <br><br><br><br>
            <tr>
                <td>
                    <?php 
                    if(isset($_SESSION['invalid_phone']))
                    {
                        echo '<h5><font color="red">';
                    echo $_SESSION['invalid_phone'];
                    echo '</font></h5>';
                    }?>
                </td>
            </tr>
            <tr>
                <td>
                    <br>
                </td>
            </tr>
            <tr>
                    <td></td>
                    
                    <td><h4>NOTE:Please refer plan amount on Operator's end before doing recharge!!</h4></td>
                </tr>
        </form>
    </body>
</html>
