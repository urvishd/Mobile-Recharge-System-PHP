<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Card Payment</title>
    </head>
    <body>
        <?php
        session_start();
        if(!isset($_SESSION['Fname']))
        {
             $_SESSION['nouser']="Access Denied!!";
             header("Location:index.php");
        }
        if(isset($_SESSION['transaction']))
        {
            header("Location:home1.php");
        }?>
        <form action="Post4.php" method="POST">
        <style>
            body { margin-top:200px; }
.panel-title {display: inline;font-weight: bold;}
.checkbox.pull-right { margin: 0; }
.pl-ziro { padding-center: 0px; }
        </style>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<br><br><br><br><br><br><br><br><br>

<div class="container" align="center">
    <div class="row" style="width: 32%; margin: 0px auto;>
        <div class="col-xs-12 col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Payment Details
                    </h3>
                </div>
                <div class="panel-body">
                    <form role="form">
                    <div class="form-group">
                        <label for="cardNumber">
                            CARD NUMBER</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="cardNumber" name="cardNumber" placeholder="Valid Card Number"
                                required autofocus />
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-7 col-md-7">
                            <div class="form-group">
                                <label for="expityMonth">
                                    EXPIRY DATE</label>
                                <div class="col-xs-6 col-lg-6 pl-ziro">
                                    <input type="text" class="form-control" id="expityMonth" name="expiryMonth" placeholder="MM" required />
                                </div>
                                <div class="col-xs-6 col-lg-6 pl-ziro">
                                    <input type="text" class="form-control" id="expityYear" name="expiryYear" placeholder="YY" required /></div>
                            </div>
                        </div>
                        <div class="col-xs-5 col-md-5 pull-right">
                            <div class="form-group">
                                <label for="cvCode">
                                    CVV</label>
                                <input type="password" class="form-control" id="cvCode" placeholder="CV" name="cvCode" minlength="3" maxlength="3" required />
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#"><span class="badge pull-right"><span class="glyphicon glyphicon-INR"></span>₹<?php
                echo $_SESSION['amount'];?></span> Final Payment</a>
                </li>
            </ul>
            <?php 
$_SESSION['dcard']="on";?>
            <br/>
            <input type="submit" class="btn btn-success btn-lg btn-block" role="button" value="Pay">
        </div>
    </div>

</div>
        </form>
    </body>
</html>
