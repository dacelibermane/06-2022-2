<?php

class SavingsAccount
{

    private float $balance;
    private float $annualInterestRate;
    private int $month;
    private float $totalDeposited = 0;
    private float $totalWithdrawn = 0;
    private float $interestEarned = 0;

    public function __construct(float $startingBalance, float $annualInterestRate, int $month)
    {
        $this->balance = $startingBalance;
        $this->annualInterestRate = $annualInterestRate;
        $this->month = $month;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function getMonth(): float
    {
        return $this->month;
    }

    public function amountOfWithdrawal($withdrawal): void
    {
        $this->balance -= $withdrawal;
        $this->totalWithdrawn += $withdrawal;
    }

    public function amountOfDeposit($deposit): void
    {
        $this->balance += $deposit;
        $this->totalDeposited += $deposit;
    }


    public function getTotalDeposited(): float
    {
        return $this->totalDeposited;
    }

    public function getTotalWithdrawn(): float
    {
        return $this->totalWithdrawn;
    }


    public function getInterestEarned(): float
    {
        return $this->interestEarned;
    }


    public function addMonthlyInterest(): void
    {
        $monthlyInterest = $this->annualInterestRate / 12 * $this->balance;
        $this->interestEarned += $monthlyInterest;
        $this->balance += $monthlyInterest;
    }


}