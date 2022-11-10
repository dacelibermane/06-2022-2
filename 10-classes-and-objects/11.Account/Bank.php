<?php

class Bank
{
    private Account $account1;
    private Account $account2;

    public function __construct(Account $account1, Account $account2)
    {
        $this->account1 = $account1;
        $this->account2 = $account2;
    }

    public function transfer(int $howMuch): float
    {
        $withdrawal = $this->account1->setWithdrawal($howMuch);
        return $this->account2->setDeposit($withdrawal);

    }


}
