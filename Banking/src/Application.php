<?php

require_vendor/autoload.php; // Composer is used for autoloading

use CyBank\Bank\Bank;
use CyBank\User\User;
use CyBank\Data\Database;

// Create a database instance (replace with your implementation)
$database = new Database();

$bank = new Bank($database);

$user1 = new User("John Doe", 123456);
//$bank->createUser($user1);

$bank->deposit(123456, 100);
$balance = $bank->getUser(123456)->getBalance();

echo "Balance: $" . $balance;

if($balance){
    $bank->withdraw(123456, 50);
    echo "\nWithdrawal successful!";
}else  {
    echo "\nError: ";
}
