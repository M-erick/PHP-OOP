<?php

namespace CyBank\SavingAccount;

use CyBank\User\User;

class SavingsAccount extends User {
    private $interestRate;

    public function __construct($name, $accountNumber, $balance = 0, $interestRate = 0.01) {
        parent::__construct($name, $accountNumber, $balance);
        $this->interestRate = $interestRate;
    }

    public function calculateInterest() {
        $interest = $this->balance * $this->interestRate;
        $this->deposit($interest);
    }
}
