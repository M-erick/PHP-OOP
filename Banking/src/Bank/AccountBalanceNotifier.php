<?php
namespace  CyBank;
trait AccountBalanceNotifier
{

    public function sendBalanceNotification($message)
    {
        //  send the message
        echo "\n**Notification:** $message";
    }
}