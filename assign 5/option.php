<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BANK</title>
    <style>
    body{
        background-image:url("bank.jpg");
        

    }
    
       
    
    </style>
    
</head>
<body>

<center><img src="A2.gif"></center>

    <form action="<?php $_SERVER['PHP_SELF']?>"method="get">
    
   Select Account<select name="choice">
    <option value="select">--Select--</option>
    <option value="Savings">Savings</option>
    <option value="Current">Current</option>
    </select>
     <input type="submit" value="suggest">
     
     </form>
     <?php
     $Account = $_GET['choice'];
     $username = $_GET['username'];
     echo"<h2>HAVE A GREAT DAY $username</h2>";
     include "virtual.php";
     
     
     

     ?>


</body>
</html>