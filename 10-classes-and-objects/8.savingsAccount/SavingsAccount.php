<?php

class SavingsAccount
{

    private float $startingBalance;
    private float $annualInterestRate;
    private float $monthDeposit;

    private float $deposit = 0;
    private float $withdrawal = 0;

    public function __construct($startingBalance,$annualInterestRate, $monthDeposit)
    {
        $this->startingBalance = $startingBalance;
        $this->annualInterestRate = $annualInterestRate;
        $this->monthDeposit = $monthDeposit;
    }

    public function getStartingBalance(): float
    {
        return $this->startingBalance;
    }

    public function amountOfWithdrawal($withdrawal):float
    {
       return $this->startingBalance -= $withdrawal;
    }

    public function amountOfDeposit($deposit):float
    {
       return $this->startingBalance -= $deposit;
    }


}