<!DOCTYPE html >
<html>
<head>
<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
<title>deposit</title>
<style>
    body{
        background-image:url("bank.jpg");

    }
    </style>

</head>
<body style="background-color: rgb(204, 242, 255);">
<h1 style="background-color: rgb(51, 204, 255); text-align: center; color: rgb(51, 51, 153);"><big>ATM</big></h1>
<div align="center">
<br clear="all"><br clear="all">
<h2 style="text-align: center; font-weight: bold;color:rgb(51,24,255);">


<?php
$servername = "localhost";
$username = "root";
$password = "";
if(isset($_POST['deposit'])){
    $txtAmount=$_POST['txtAmount'];
    $update="UPDATE account SET wallet='$balance'+'$txtAmount' where card=1";
      
      
       echo  "Money Deposited successfully";
      } else {
      echo  "Error Depositing Money: " . $con->error;
      }
      
    ?>
    </h2>
    </div>
    <center><img src="tenor.gif"></center>
    </body>
    </html>