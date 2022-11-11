<?php

class SavingsAccount
{

    private int $startingBalance;

    public function __construct($startingBalance)
    {
        $this->startingBalance = $startingBalance;
    }
}