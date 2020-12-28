<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Account{
        public $balance;
        function __construct($balance)
        {
            $this->balance=$balance;
        }
        function withdraw($amount){
            $this->balance= $this->balance-$amount;
        }
        function deposit($amount){
            $this->balance= $this->balance+$amount;
        }
        function getBalance(){
            return $this->balance;
        }
    }
    class Savings extends Account{
        function Withdraw($amount)
        {
            $this->balance= $this->balance+($amount-20);
            echo"<b>20 extra fees deducted</b>","<br>";
        }
    }
    class Current extends Account{
        function Withdraw($amount)
        {
            $this->balance= $this->balance-($amount+50);
            echo"<b>50 extra fees deducted</b>","<br>";
        }
        function deposit($amount){
            $this->balance= $this->balance+($amount-30);
            echo"<b>20 extra fees deducted</b>","<br>";
        }
    }
    switch($Account){
    case 'Savings':    
    $saving= new Savings(60000);
    echo"<b>current balance:</b>";
    echo $saving->getBalance(),"<br>";
    echo "<b>withdraw of rupees 1000</b>","<br>";
    $saving->Withdraw(1000);
    echo $saving->getBalance(),"<br>";
    echo "<b>deposit of rupees 8000</b>","<br>";
    $saving->deposit(8000);
    echo $saving->getBalance(),"<br>";
    break;
    case 'Current':
    $current= new Current(60000);
    echo"<b>current balance:<b>";
    echo $current->getBalance(),"<br>";
    echo"<b> withdraw of rupees 600</b>","<br>";
    $current->withdraw(600);
    echo $current->getBalance(),"<br>";
    echo "<b>deposit of rupees 800</b>","<br>";
    $current->deposit(750);
    echo $current->getBalance(),"<br>";
    }
    ?>

</body>
</html>