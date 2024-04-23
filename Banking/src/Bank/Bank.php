<?php

namespace CyBank\Bank;

use CyBank\Data\Database;
use CyBank\User\User;

class Bank {
    private $users;

    public function __construct(Database $database) {
        // Fetch users from database
        $this->users = $database->getUsers();
    }

    public function createUser(User $user) {
        // Add user to database (implementation depends on your database)
    }

    public function getUser($accountNumber) {
        foreach ($this->users as $user) {
            if ($user->getAccountNumber() === $accountNumber) {
                return $user;
            }
        }
        return null;
    }

    public function deposit($accountNumber, $amount) {
        $user = $this->getUser($accountNumber);
        if ($user) {
            $user->deposit($amount);
            // Update user balance in database (implementation depends on your database)
        } else {
            echo "Invalid account number";
        }
    }

    public function withdraw($accountNumber, $amount) {
        $user = $this->getUser($accountNumber);
        if ($user) {
            $user->withdraw($amount);

        } else {
            echo "Invalid account number";
        }
    }
}
