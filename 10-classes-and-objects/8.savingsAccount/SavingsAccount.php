<?php

class SavingsAccount
{

    private float $startingBalance;
    private float $annualInterestRate;
    private float $monthDeposit;
    public function __construct($startingBalance,$annualInterestRate, $monthDeposit)
    {
        $this->startingBalance = $startingBalance;
        $this->annualInterestRate = $annualInterestRate;
        $this->monthDeposit = $monthDeposit;
    }
}