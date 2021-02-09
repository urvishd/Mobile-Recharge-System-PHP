<html>
    <head>
        <title>OTP Verification</title>
    </head>
    <style>
        html, body { 
    margin: 0; 
    padding: 0; 
    width: 100%; 
    min-height: 100%;
		font-family: Open Sans;
    background-color: #00BCD4;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff; font-size:18px;
    }
.buttonInside{
  position:relative;
  margin-bottom:10px;
}
#container{
  width: 300px;
}
input{
  height:25px;
  width:100%;
  padding-left:10px;
  border-radius: 4px;
  border:none;outline:none;
}
button{
  position:absolute;
  right: 0px;
  top: 4px;
  border:none;
  height:20px;
  width:20px;
  border-radius:100%;
  outline:none;
  text-align:center;
  font-weight:bold;
  padding:2px;
}
button3{
 display:inline-block;
 padding:0.3em 1.2em;
 margin:0 0.3em 0.3em 0;
 border-radius:2em;
 box-sizing: border-box;
 text-decoration:none;
 font-family:'Roboto',sans-serif;
 font-weight:300;
 color:#FFFFFF;
 background-color:#4eb5f1;
 text-align:center;
 transition: all 0.2s;
}
button3:hover{
 background-color:#4095c6;
}
 
button:hover{
  cursor:pointer;
}
#help{
  display:none;
  font-style:italic;
  font-size:0.8em;
}
        
        </style>
        <?php
            session_start();
            if(!isset($_SESSION['Fname']))
            {
                 $_SESSION['nouser']="Access Denied!!";
                 header("Location:index.php");
            }
            ?>
        <body>
           
            <form action="Post5.php" method="post">
            <div id="container">
  <h3>Enter OTP</h3>
  <div class="buttonInside">
      <input type='text' placeholder="Enter OTP" minlength="6" maxlength="6" name="otp_field" >
    <button id="erase">X</button>
    <br>
    <br>
    
    <input type="submit"  class="button" value="Submit"/>
  </div>
            </form>
</html>

