<?php

namespace CyBank\Account;

interface Account {
    public function deposit($amount);
    public function withdraw($amount);
    public function getBalance();
}
