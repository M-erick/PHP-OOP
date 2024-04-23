<?php
namespace  CyBank\User;

use CyBank\Account\Account;
use CyBank\AccountBalanceNotifier;

class User implements  Account {
    //Traits
    use AccountBalanceNotifier;

    private $name;
    private $accountNumber;
    protected $balance;

    public function __construct($name, $accountNumber, $balance = 0) {
        $this->name = $name;
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
    }

    // Getter and setter methods for name, account number, and balance

    public function deposit($amount) {
        $this->balance += $amount;
    }

    public function withdraw($amount) {
        if ($amount > $this->balance) {
             echo "Insufficient funds";
        }
        $this->balance -= $amount;
    }

    public function getBalance() {
        return $this->balance;
    }
}

