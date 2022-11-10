<?php

class Account
{

    private string $name;
    private float $balance;


    public function __construct(string $name, float $balance)
    {
        $this->name = $name;
        $this->balance = $balance;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setWithdrawal($withdrawal): float
    {
        $this->balance -= $withdrawal;
        return $withdrawal;

    }

    public function setDeposit($deposit): float
    {
        $this->balance += $deposit;
        return $deposit;
    }
}

