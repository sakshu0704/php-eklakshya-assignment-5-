<!DOCTYPE HTML>  
<html>
<head>
<style>
body{
    background-image:url("bank.jpg");

}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$name = $email = $gender = $password = $mobile = $accNo= $cardNo= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["password"]);
  $comment = test_input($_POST["mobile"]);
  $gender = test_input($_POST["gender"]);
  $accNo = test_input($_POST["accNo"]);
  $cardNo = test_input($_POST["cardNo"]);

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<center><marquee><h2>REGISTRATION FORM</h2></center></marquee>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <b>Name: <input type="text" name="name">
  <br><br></b>
  <b> E-mail: <input type="text" name="email">
  <br><br></b>
 <b> password: <input type="text" name="password">
  <br><br></b>
  <b>Mobile:<input type="text" name="mobile">
  <br><br></b>
  <b>AccountName:<input type="text" name="Accountname">
  <br><br></b>
  <b>cardNo:<input type="text" name="cardnumber">
  <br><br></b>
  <b>Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br></b>
  <input type="submit" name="submit" value="Submit">  
  
  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $password;
echo "<br>";
echo $mobile;
echo "<br>";
echo $gender;
?>

</body>
</html>
